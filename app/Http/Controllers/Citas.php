<?php

namespace App\Http\Controllers;

use App\Models\cita;
use App\Models\cuestionario;
use App\Models\documento;
use App\Models\respuestaXUsuario;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class Citas extends Controller
{
    public function citas()
    {
        if(Auth::check()) {
            $cita = cita::where('id_usuario', Auth::user()->id)->first();
        }else{
            $cita = null;
        }
        return view('citas')
            ->with('cita', $cita);
    }

    public function crearCita(Request $request)
    {
        /* solicitud de cita */
        $cita = new cita();
        $cita->fecha = $request->fecha;
        $cita->hora = $request->hora;
        $cita->motivo = $request->motivo;
        $cita->tipo_visa = $request->tipo_visa;
        $cita->id_usuario = $request->id_usuario;
        $cita->nombre_clte = $request->nombre_clte;

        /* guardado de documentos */
        $path = 'public/' . Auth::user()->id . '-' . Auth::user()->nombre . '-' . Auth::user()->apellido_paterno;
        $nombre = Auth::user()->id . '-' . Auth::user()->nombre . '-' . Auth::user()->apellido_paterno;

        Storage::putFileAs(
            $path, $request->file('solicitud'), 'solicitud_' . $nombre . '.pdf'
        );
        $solicitud = 'solicitud_' . $nombre . '.pdf';
        Storage::putFileAs(
            $path, $request->file('foto'), 'foto_' . $nombre . '.jpg'
        );
        $foto = 'foto_' . $nombre . '.jpg';
        Storage::putFileAs(
            $path, $request->file('pago'), 'pago_' . $nombre . '.pdf'
        );
        $pago = 'pago_' . $nombre . '.pdf';
        Storage::putFileAs(
            $path, $request->file('identificacion'), 'identificacion_' . $nombre . '.pdf'
        );
        $identificacion = 'identificacion_' . $nombre . '.pdf';
        Storage::putFileAs(
            $path, $request->file('p_economica'), 'p_economica_' . $nombre . '.pdf'
        );
        $p_economica = 'p_economica_' . $nombre . '.pdf';
        Storage::putFileAs(
            $path, $request->file('p_edu_empleo'), 'p_edu_empleo_' . $nombre . '.pdf'
        );
        $p_edu_empleo = 'p_edu_empleo_' . $nombre . '.pdf';

        $documento = new documento();
        $documento->solicitud = $solicitud;
        $documento->foto = $foto;
        $documento->comprobante_pago = $pago;
        $documento->identificacion = $identificacion;
        $documento->p_economica = $p_economica;
        $documento->p_edu_empleo = $p_edu_empleo;
        $documento->id_usuario = $request->id_usuario;

        $cita->save();
        $documento->save();

        return redirect('citas/cuestionario')
            ->with('cita', $cita);
    }

    public function comprobante(){
        $cita = cita::where('id_usuario', Auth::user()->id)->first();
        $user = User::where('id', Auth::user()->id)->first();
        $pdf = PDF::loadView('comprobante', compact('cita', 'user'));
        return $pdf->download('comprobante.pdf');

//        return view('comprobante')
//            ->with('cita', $cita)
//            ->with('user', $user);
    }

    public function cuestionario()
    {
        return view('cuestionario');
    }

    public function crearCuestionario(Request $request){
        $cuestionario = new cuestionario();
        $cuestionario->pregunta_1 = $request->pregunta_1;
        $cuestionario->pregunta_2 = $request->pregunta_2;
        $cuestionario->pregunta_3 = $request->pregunta_3;
        $cuestionario->pregunta_4 = $request->pregunta_4;
        $cuestionario->pregunta_5 = $request->pregunta_5;
        $cuestionario->save();

        $respuestaXUsuario = new respuestaXUsuario();
        $respuestaXUsuario->id_cuestionario = $cuestionario->id;
        $respuestaXUsuario->id_usuario = $request->id_usuario;
        $respuestaXUsuario->save();

        return redirect('citas');
    }

    public function terminarCita(Request $request){
        $cita = cita::where('id', $request->id)->first();
        $cita->status = 'terminado';
        $cita->save();

        return redirect('dashboard');
    }

    public function cancelarCita(Request $request){
        $cita = cita::where('id', $request->id)->first();
        $cita->status = 'cancelado';
        $cita->delete();

        return redirect('dashboard');
    }
}
