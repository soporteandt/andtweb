<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
            'message' => 'required|string',
        ]);

        // Crear un nuevo contacto usando los datos validados
        $contact = Contact::create([
            'name' => $request->name,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
        ]);

        $response = [
            'title' => 'Éxito',
            'message' => 'Usted ha registrado su solicitud con éxito.',
            'type' => 'bg-success'
        ];

        return response()->json($response);

    }
}
