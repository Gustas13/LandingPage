<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaginaController extends Controller
{
    public function landingpage()
    {
        return view('landingpage');
        
    }
    public function contacto($contacto_id = null)
    {
        if($contacto_id =='1234'){
            $nombre ="Gustavo";
            $correo ="gus@mail.com";
        }
        else{
            $nombre = null;
            $correo = null;
        }
        return view('contacto',compact('nombre','correo'));
    }

    public function guarda(Request $request)
    {
        $request->validate([
            'nombre' => ['required', 'min:5'],
            'correo' => 'required|mail',
            'mensaje' => 'required|min:5',
        ]);

        DB::table('contactos')->insert([
            'nombre' => $request->nombre,
            'correo' => $request->correo,
            'mensaje' => $request->mensaje,

        ]);

        return redirect('/contacto');

    }
}
