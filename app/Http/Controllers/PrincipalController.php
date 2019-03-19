<?php

namespace App\Http\Controllers;
// necesitamos usar esta clase para poder enviar correos.
use Mail;
// y tambien la que hemos creado para enviarle los datos
use App\Mail\Contacto;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function index(){
        return view('index');
    }

    public function contact(Request $request){
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'mensaje'=>'required|string|min:50'
        ]);

        $forminput = [
            'nombre' => $request->input('nombre'),
            'email' => $request->input('email'),
            'mensaje' => $request->input('mensaje')
        ];

        /**
         * No olvides cambiar el correo aquí.
         * Este es el correo donde vas a recibir
         * los mensajes.
         **/
        Mail::to('amadeusdigital@gmail.com')->send(new Contacto($forminput));
        return redirect('/')->with('estado', '¡Mensaje enviado! Gracias por contactarnos.');
    }
}
