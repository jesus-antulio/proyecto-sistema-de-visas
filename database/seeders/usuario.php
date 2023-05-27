<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class usuario extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'nombre' => 'Jesús Antulio',
            'apellido_paterno' => 'Jiménez',
            'apellido_materno' => 'Delgado',
            'fecha_nacimiento' => date('Y-m-d', strtotime('2001-06-21')),
            'sexo' => 'Masculino',
            'curp' => 'JIDJ010621HDFRRL09',
            'calle' => 'General I. Martinez',
            'num_ext' => '560',
            'num_int' => '',
            'colonia' => 'Hidalgo',
            'codigo_postal' => '78040',
            'municipio' => 'SLP',
            'estado' => 'SLP',
            'email' => 'correo@correo.com',
            'telefono' => '4448288334',
            'password' => Hash::make('12345678'),
            'tipo_usuario' => 1,
        ]);

        DB::table('users')->insert([
            'nombre' => 'Dannia Itzel',
            'apellido_paterno' => 'Briones',
            'apellido_materno' => 'Medina',
            'fecha_nacimiento' => date('Y-m-d', strtotime('2001-04-10')),
            'sexo' => 'Masculino',
            'curp' => 'BIMD010410HDFRRL09',
            'calle' => 'Calle 14',
            'num_ext' => '100',
            'num_int' => '1',
            'colonia' => 'Hidalgo',
            'codigo_postal' => '78100',
            'municipio' => 'SLP',
            'estado' => 'SLP',
            'email' => 'dannia@briones.com',
            'telefono' => '4441234567',
            'password' => Hash::make('12345678'),
            'tipo_usuario' => 0,
        ]);
    }
}
