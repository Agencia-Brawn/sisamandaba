<?php

namespace App\Http\Controllers\Unidades;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Unidade;
use Illuminate\Support\Facades\Validator;


class UnidadesController extends Controller
{
    //  EXIBI UNIDADE
    public function unidades(Request $request)
    {
        // dd($unidade);
        $unidades = Unidade::all();
        return view ('unidades', ['unidades'=>$unidades]);
    }

    public function unidade(Request $request, Unidade $unidade)
    {
        dd($unidade);
    }

    public function postunidade(Request $request)
    {
        // dd($request);

        $mensagem = [
            'nome.required' => 'Campo precisa ser informado',
            'nome.min' => 'Campo nome precisa de 3 caracteres'

        ];

        $validador = Validator::make($request->all(), [
            'nome' => ['required', 'string', 'max: 250', 'min: 3']
        ], $mensagem)->validate();

        $unidade = new Unidade();
        $unidade ->nome=$request->nome;
        $unidade ->save();

        return redirect('unidades')->with('status', "Unidade $request->nome Cadastrada !");
    }
    

    
}
