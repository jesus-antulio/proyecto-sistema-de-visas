<?php

namespace App\Http\Controllers;

use App\Mail\ContactoMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Maatwebsite\Excel\Facades\Excel;

/* modelos */
use App\Models\cita;
use App\Models\documento;
use App\Models\User;
use App\Models\cuestionario;
use App\Models\respuestaXUsuario;
use Illuminate\Support\Facades\Storage;
use App\Exports\UsersExport;
use App\Exports\CitasExport;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function dashboard(){
        if(Auth::user()->tipo_usuario == 1){
            return view('dashboard')
                ->with('citas', cita::all())
                ->with('user', User::all());
        }else{
            return redirect('/');
        }
    }

    public function verPerfil(Request $request){
        $user = User::find($request->id);
        return view('perfilUsuario')
            ->with('user', $user);
    }

    public function documentos($id){
        $documento = documento::where('id_usuario', $id)->first();
        $user = User::where('id', $id)->first();

        $path = 'public/'.$user->id.'-'.$user->nombre.'-'.$user->apellido_paterno.'/foto_'.$user->id.'-'.$user->nombre.'-'.$user->apellido_paterno.'.jpg';
        $img_file = Storage::url($path);

        return view('documentos')
            ->with('documento', $documento)
            ->with('user', $user)
            ->with('file', null)
            ->with('img', $img_file);

    }

    public function respuestas($id){
        $respuestas = respuestaXUsuario::all();
        $user = User::where('id', $id)->first();
        foreach ($respuestas as $respuesta){
            if($respuesta->id_usuario == $id){
                $cuestionario = cuestionario::where('id', $respuesta->id_cuestionario)->first();
            }
        }

        return view('respuestas')
            ->with('respuesta', $cuestionario)
            ->with('user', $user);
    }

    public function ver(Request $request){
        $path = 'public/'.$request->id.'-'.$request->nombre.'-'.$request->apellido_paterno;
        $archivo = $path.'/'.$request->file;
        $documento = documento::where('id_usuario', $request->id)->first();
        $user = User::where('id', $request->id)->first();
        $file = Storage::url($archivo);
        $img_file = Storage::url($path.'/foto_'.$user->id.'-'.$user->nombre.'-'.$user->apellido_paterno.'.jpg');

        return view('documentos')
            ->with('documento', $documento)
            ->with('user', $user)
            ->with('file', $file)
            ->with('img', $img_file);
    }

    public function descargar(Request $request){
        $path = 'public/'.$request->id.'-'.$request->nombre.'-'.$request->apellido_paterno.'/'.$request->file;

        if(Storage::disk('local')->exists($path)) {
            return Storage::download($path);
        }else{
            return response('',404);
        }
    }

    public function contacto()
    {
        return view('contacto')
            ;
    }
    public function enviarCorreo(Request $request)
    {
        $correo = new ContactoMailable($request->all());
        Mail::to($request->email)->bcc('app.moviles.01.uaslp@gmail.com')->send($correo);
        return redirect()->route('contacto')->with('info', 'Mensaje enviado');
    }

    public function exportUsers()
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }
    public function exportCitas()
    {
        return Excel::download(new CitasExport(), 'Citas.xlsx');
    }
}
