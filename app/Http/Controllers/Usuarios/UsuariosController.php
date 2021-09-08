<?php

namespace App\Http\Controllers\Usuarios;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class UsuariosController extends Controller
{
    public function novo(Request $request)
    {
        // dd($request);
        return view ('usuarios');
    }

    public function create(Request $request)
    {
        
        $messages = [
            'name.required' => 'Nome é obrigatório.',
            'email.unique' => "Email já registrado",
            'string' => "Formato invalido para o campo :attribute",
            'name.min' => "Nome deve tem no minimo 3 caracteres",
            'password.min' => "Senha deve tem no minimo 8 caracteres",
            'password.confirmed' => "Senha não corresponde",
            'password.required' => "Senha é necessária",
            'email.required' => 'Email é obrigatório.',
            'telefone.required'=> "Telefone Obrigatorio"
        ];

        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255', 'min:3'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            // 'password' => ['required', 'numeric', 'min:8', 'confirmed'],
            'telefone' => ['required', 'string'],
            'cpf' => ['required'],
            'altura'=> ['required'],
            'datanasc' => ['required']
        ], $messages)->validate();

        dd($request);

    }

    
}
