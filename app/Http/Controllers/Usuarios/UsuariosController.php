<?php

namespace App\Http\Controllers\Usuarios;

use Illuminate\Http\Request;
use App\Models\Usuarios;
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

    public function usuario(Request $request,$usuario)
    {
        
        $user = Usuarios::find($usuario);
        return view ('usuario', ['usuario'=>$user]);
        // dd($user);
        
    }

    // FORM LABORATORIO
    public function formlaboratorio(Request $request,$usuario)
    {
        $user = Usuarios::find($usuario);
        return view ('forms.formlaboratorio', ['usuario'=>$user]);
    }
    
    public function postformlaboratorio(Request $request,$usuario)
    {
        dd($request);
    }


    // FORM ICIQ
    public function formiciq(Request $request,Usuarios $usuario)
    {
        // dd($usuario);
        return view ('forms.formiciq', ['usuario'=>$usuario]);
    }

    public function postformiciq(Request $request, Usuarios $usuario)   
    {
        
        dd($request);
    }


    // FORM INDIVIDUAL
    public function formindividual(Request $request, Usuarios $usuario)
    {   
        // dd($usuario);
        return view ('forms.formindividual', ['usuario'=>$usuario]);
        
    }

    public function postformindividual(Request $request, Usuarios $usuario)
    {
        dd($request);
    }


    // FORM FAMILIAR
    public function formfamiliar(Request $request, Usuarios $usuario)
    {
        // dd($usuario);
        return view ('forms.formfamiliar', ['usuario'=>$usuario]);
    }

    public function postformfamiliar(Request $request, Usuarios $usuario)
    {
        dd($request);
    }

    

    // FORM ANTROPROMETRIA
    public function formantropometria(Request $request, Usuarios $usuario)
    {
        // dd($usuario);
        return view ('forms.formantropometria', ['usuario'=>$usuario]);
    }

    public function postformantropometria(Request $request, Usuarios $usuario)
    {
        dd($request);
    }


    // FORM MSNI
    public function formmsni(Request $request, Usuarios $usuario)
    {
        // dd($usuario);
        return view ('forms.formmsni', ['usuario'=>$usuario]);
    }

    public function postformmsni(Request $request, Usuarios $usuario)
    {
        dd($request);
    }

    // FORM PRESSÃO
    public function formpressao(Request $request, Usuarios $usuario)
    {
        // dd($usuario);
        return view ('forms.formpressao', ['usuario'=>$usuario]);
    }

    public function postformpressao(Request $request, Usuarios $usuario)
    {
        dd($request);
    }

    // EDITAR PERFIL
    public function editarperfil(Request $request, Usuarios $usuario)
    {
        // dd($usuario);
        return view ('forms.editarperfil',['usuario'=>$usuario]);
    }


    // REGISTRO DE UNIDADE CIRCULO DE CULTURA
    public function unidades(Request $request, Usuarios $usuario)
    {
        dd($usuario);
        // return view ('unidades',['usuario'=>$usuario]);
    }


}
