<?php

namespace App\Http\Controllers\Usuarios;

use Illuminate\Http\Request;
use App\Models\Usuarios;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Models\Unidade;
use App\Models\Formulario;
use App\Models\FormLaboratorio;
use App\Models\FormPressao;
use App\Models\FormAntropometria;
use App\Models\FormFamiliar;
use App\Models\FormIciq;
use App\Models\FormIndividual;
use App\Models\FormIndividualPrimeiro;
use App\Models\FormIndividualSegundo;
use App\Models\FormIndividualTerceiro;
use App\Models\FormMsni;

class UsuariosController extends Controller
{
    public function novo(Request $request)
    {    
        return view ('usuarios'); 
    }

    public function create(Request $request)
    {
        
        $messages = [
            'string' => "Formato invalido para o campo :attribute",
            'name.min' => "Nome deve tem no minimo 3 caracteres",
            'name.required' => 'Nome é obrigatório',
            'email.unique' => "Email já registrado",
            'email.required' => 'Email é obrigatório',
            'cpf.required' => 'CPF é obrigatório',
            'rg.required' => 'RG é obrigatório',
            'datanasc.required' => 'A Data de Nascimeto é obrigatória',
            'mae.required' => 'Nome da Mãe é obrigatório',
            'mae.min' => 'Nome da Mãe deve ter pelo menos 5 caracteres',
            'genero.required' => 'O Gênero é obrigatório',
            'telefone.required'=> "Telefone é obrigatório",
            'telefonefixo.required' => 'Telefone Fixo é obrigatório',
            'telfamiliar.required' => 'Telefone Familiar é obrigatório',
            'perfilnomefamiliar.required' => 'Nome do Familiar é obrigatório',
            'perfilparentescofamiliar.required' => 'Grau de Parentesco é obrigatório',
            'estado.required' => 'O Estado é obrigatório',
            'cidade.required' => 'A Cidade é obrigatório',
            'bairro.required' => 'Bairro é obrigatório',
            'cep.required' => 'CEP é obrigatório',
            'rua.required' => 'Rua é obrigatório',
            'sus.required' => 'Número do SUS é obrigatório',
            'idnumero.required' => 'ID Número é obrigatório',
            'numcasa.required' => 'Número da Casa é obrigatório',
            'numequipe.required' => 'Número da Equipe é obrigatório',
            'microarea.required' => 'Microarea é obrigatório',
            'numfamilia.required' => 'Número da Familia é obrigatório',
            'perfildistrito.required' => 'O Distrito é obrigatório',
            'unidadeestrategia.required'=> 'A Unidade da Estratégia de Saúde da Família  é obrigatório',
            'password.min' => "Senha deve tem no minimo 8 caracteres",
            'password.confirmed' => "Senha não corresponde",
            'password.required' => "Senha é necessária",
        ];

        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255', 'min:3'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'cpf' => ['required'],
            'rg' => ['required'],
            'datanasc' => ['required'],
            'mae' => ['required', 'string', 'max:500', 'min:5'],
            'genero'=> ['required'],
            'telefone' => ['required', 'string'],
            'telefonefixo'=> ['required'],
            'telfamiliar'=> ['required'],
            'perfilnomefamiliar'=> ['required'],
            'perfilparentescofamiliar'=>['required'],
            'estado'=> ['required'],
            'cidade'=> ['required'],
            'bairro'=> ['required'],
            'cep'=> ['required'],
            'rua'=> ['required'],
            'sus'=> ['required'],
            'idnumero'=> ['required'],
            'numcasa'=> ['required'],
            'numequipe'=> ['required'],
            'microarea'=> ['required'],
            'numfamilia'=> ['required'],
            'perfildistrito'=> ['required'],
            'unidadeestrategia' => ['required'],
            'unidadeestrategia2' => ['required']
            // 'password' => ['required', 'numeric', 'min:8', 'confirmed'],
            
        ], $messages)->validate();

        $user = new Usuarios();
        $user->name = $request->name;
        $user->email = $request->email;  
        $user->cpf = $request->cpf;
        $user->rg = $request->rg;
        $user->datanasc = $request->datanasc;
        $user->mae = $request->mae;
        $user->genero = $request->genero;
        $user->telefone = $request->telefone;
        $user->telefonefixo = $request->telefonefixo;
        $user->telfamiliar = $request->telfamiliar;
        $user->perfilnomefamiliar = $request->perfilnomefamiliar;
        $user->perfilparentescofamiliar = $request->perfilparentescofamiliar;
        $user->estado = $request->estado;
        $user->cidade = $request->cidade;
        $user->bairro = $request->bairro;
        $user->cep = $request->cep;
        $user->rua = $request->rua;
        $user->numcasa = $request->numcasa;
        $user->sus = $request->sus;
        $user->idnumero = $request->idnumero;
        $user->numequipe = $request->numequipe;
        $user->microarea = $request->microarea;
        $user->numfamilia = $request->numfamilia;
        $user->perfildistrito = $request->perfildistrito;
        $user->unidadeestrategia = $request->unidadeestrategia;
        $user->unidadeestrategia2 = $request->unidadeestrategia2;

       
        $user->password = preg_replace('/[^0-9]/', '', $request->datanasc);

        $user->save();

        //dd($request);

        return redirect()->back()->with('status', "Usuário $request->name cadastrado com sucesso !");

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
    
    public function postformlaboratorio(Request $request, Usuarios $usuario)
    {
        // dd($request);
        $userform = FormLaboratorio::where('user_id', $usuario->id)->first();
        if ($userform){
            $userform->user_id = $usuario->id;
            
            $userform->perguntalaboratorio1 = $request->perguntalaboratorio1;
            $userform->respostalaboratorio1 = preg_replace('/[^0-9]/', '', $request->respostalaboratorio1);
            

            $userform->perguntalaboratorio2 = $request->perguntalaboratorio2;
            $userform->respostalaboratorio2 = $request->respostalaboratorio2;

            $userform->perguntalaboratorio3 = $request->perguntalaboratorio3;
            $userform->respostalaboratorio3 = $request->respostalaboratorio3;

            $userform->perguntalaboratorio4 = $request->perguntalaboratorio4;
            $userform->respostalaboratorio4 = $request->respostalaboratorio4;

            $userform->perguntalaboratorio5 = $request->perguntalaboratorio5;
            $userform->respostalaboratorio5 = $request->respostalaboratorio5;

            $userform->perguntalaboratorio6 = $request->perguntalaboratorio6;
            $userform->respostalaboratorio6 = $request->respostalaboratorio6;

            $userform->perguntalaboratorio7 = $request->perguntalaboratorio7;
            $userform->respostalaboratorio7 = $request->respostalaboratorio7;

            $userform->perguntalaboratorio8 = $request->perguntalaboratorio8;
            $userform->respostalaboratorio8 = $request->respostalaboratorio8;

            $userform->perguntalaboratorio9 = $request->perguntalaboratorio9;
            $userform->respostalaboratorio9 = $request->respostalaboratorio9;

            $userform->perguntalaboratorio10 = $request->perguntalaboratorio10;
            $userform->respostalaboratorio10 = $request->respostalaboratorio10;

            $userform->perguntalaboratorio11 = $request->perguntalaboratorio11;
            $userform->respostalaboratorio11 = $request->respostalaboratorio11;

            $userform->perguntalaboratorio12 = $request->perguntalaboratorio12;
            $userform->respostalaboratorio12 = $request->respostalaboratorio12;

            $userform->perguntalaboratorio13 = $request->perguntalaboratorio13;
            $userform->respostalaboratorio13 = $request->respostalaboratorio13;

            $userform->perguntalaboratorio14 = $request->perguntalaboratorio14;
            $userform->respostalaboratorio14 = $request->respostalaboratorio14;

            $userform->perguntalaboratorio15 = $request->perguntalaboratorio15;
            $userform->respostalaboratorio15 = $request->respostalaboratorio15;

            $userform->perguntalaboratorio16 = $request->perguntalaboratorio16;
            $userform->respostalaboratorio16 = $request->respostalaboratorio16;

            $userform->update();
        }
        
        else{
            $userform = new FormLaboratorio();
            $userform->user_id = $usuario->id;

            $userform->perguntalaboratorio1 = $request->perguntalaboratorio1;
            $userform->respostalaboratorio1 = $request->respostalaboratorio1; 

            $userform->perguntalaboratorio2 = $request->perguntalaboratorio2;
            $userform->respostalaboratorio2 = $request->respostalaboratorio2;

            $userform->perguntalaboratorio3 = $request->perguntalaboratorio3;
            $userform->respostalaboratorio3 = $request->respostalaboratorio3;

            $userform->perguntalaboratorio4 = $request->perguntalaboratorio4;
            $userform->respostalaboratorio4 = $request->respostalaboratorio4;

            $userform->perguntalaboratorio5 = $request->perguntalaboratorio5;
            $userform->respostalaboratorio5 = $request->respostalaboratorio5;

            $userform->perguntalaboratorio6 = $request->perguntalaboratorio6;
            $userform->respostalaboratorio6 = $request->respostalaboratorio6;

            $userform->perguntalaboratorio7 = $request->perguntalaboratorio7;
            $userform->respostalaboratorio7 = $request->respostalaboratorio7;

            $userform->perguntalaboratorio8 = $request->perguntalaboratorio8;
            $userform->respostalaboratorio8 = $request->respostalaboratorio8;

            $userform->perguntalaboratorio9 = $request->perguntalaboratorio9;
            $userform->respostalaboratorio9 = $request->respostalaboratorio9;

            $userform->perguntalaboratorio10 = $request->perguntalaboratorio10;
            $userform->respostalaboratorio10 = $request->respostalaboratorio10;

            $userform->perguntalaboratorio11 = $request->perguntalaboratorio11;
            $userform->respostalaboratorio11 = $request->respostalaboratorio11;

            $userform->perguntalaboratorio12 = $request->perguntalaboratorio12;
            $userform->respostalaboratorio12 = $request->respostalaboratorio12;

            $userform->perguntalaboratorio13 = $request->perguntalaboratorio13;
            $userform->respostalaboratorio13 = $request->respostalaboratorio13;

            $userform->perguntalaboratorio14 = $request->perguntalaboratorio14;
            $userform->respostalaboratorio14 = $request->respostalaboratorio14;

            $userform->perguntalaboratorio15 = $request->perguntalaboratorio15;
            $userform->respostalaboratorio15 = $request->respostalaboratorio15;

            $userform->perguntalaboratorio16 = $request->perguntalaboratorio16;
            $userform->respostalaboratorio16 = $request->respostalaboratorio16;


            $userform->save();
        }

        return redirect()->back();
        
    }

    public function laboratorioimpressao(Request $request,$usuario)
    {
        $user = Usuarios::find($usuario);
        return view('laboratorioimpressao', ['usuario'=>$user]);
    }


    // FORM ICIQ
    public function formiciq(Request $request,Usuarios $usuario)
    {
        // dd($usuario);
        return view ('forms.formiciq', ['usuario'=>$usuario]);
    }

    public function postformiciq(Request $request, Usuarios $usuario)   
    {
        
        //dd($request);
        $userform = FormIciq::where('user_id', $usuario->id)->first();
        if ($userform){
            $userform->user_id = $usuario->id;

            $userform->perguntaiciq1 = $request->perguntaiciq1;
            $userform->respostaiciq1 = $request->respostaiciq1;

            $userform->perguntaiciq2 = $request->perguntaiciq2;
            $userform->respostaiciq2 = $request->respostaiciq2;

            $userform->perguntaiciq3 = $request->perguntaiciq3;
            $userform->respostaiciq3 = $request->respostaiciq3;

            $userform->perguntaiciq4 = $request->perguntaiciq4;
            $userform->respostaiciq4 = $request->respostaiciq4;

            $userform->perguntaiciq5 = $request->perguntaiciq5;
            $userform->respostaiciq5 = $request->respostaiciq5;

            $userform->perguntaiciq6 = $request->perguntaiciq6;
            $userform->respostaiciq6 = $request->respostaiciq6;

            $userform->perguntaiciq7 = $request->perguntaiciq7;
            $userform->respostaiciq7 = $request->respostaiciq7;

            $userform->respostaiciq7a = $request->respostaiciq7a;

            $userform->respostaiciq7b = $request->respostaiciq7b;
            
            $userform->respostaiciq7c = $request->respostaiciq7c;
            
            $userform->respostaiciq7d = $request->respostaiciq7d;
            
            $userform->respostaiciq7e = $request->respostaiciq7e;
            
            $userform->respostaiciq7f = $request->respostaiciq7f;
            
            $userform->respostaiciq7g = $request->respostaiciq7g;         

            $userform->perguntaiciq8 = $request->perguntaiciq8;
            $userform->respostaiciq8 = $request->respostaiciq8;

            $userform->perguntaiciq9 = $request->perguntaiciq9;
            $userform->respostaiciq9 = $request->respostaiciq9;

            $userform->perguntaiciq10 = $request->perguntaiciq10;
            $userform->respostaiciq10 = $request->respostaiciq10;

            $userform->perguntaiciq11 = $request->perguntaiciq11;
            $userform->respostaiciq11 = $request->respostaiciq11;

            $userform->perguntaiciq12 = $request->perguntaiciq12;
            $userform->respostaiciq12 = $request->respostaiciq12;

            $userform->perguntaiciq13 = $request->perguntaiciq13;
            $userform->respostaiciq13 = $request->respostaiciq13;

            $userform->perguntaiciq14 = $request->perguntaiciq14;
            $userform->respostaiciq14 = $request->respostaiciq14;

            $userform->perguntaiciq15 = $request->perguntaiciq15;
            $userform->respostaiciq15 = $request->respostaiciq15;

            $userform->perguntaiciq16 = $request->perguntaiciq16;
            $userform->respostaiciq16 = $request->respostaiciq16;

            $userform->perguntaiciq17 = $request->perguntaiciq17;
            $userform->respostaiciq17 = $request->respostaiciq17;

            $userform->perguntaiciq18 = $request->perguntaiciq18;
            $userform->respostaiciq18 = $request->respostaiciq18;

            $userform->perguntaiciq19 = $request->perguntaiciq19;
            $userform->respostaiciq19 = $request->respostaiciq19;

            $userform->perguntaiciq20 = $request->perguntaiciq20;
            $userform->respostaiciq20 = $request->respostaiciq20;

            $userform->perguntaiciq21 = $request->perguntaiciq21;
            $userform->respostaiciq21 = $request->respostaiciq21;

            $userform->perguntaiciq22 = $request->perguntaiciq22;
            $userform->respostaiciq22 = $request->respostaiciq22;

            $userform->perguntaiciq23 = $request->perguntaiciq23;
            $userform->respostaiciq23 = $request->respostaiciq23;

            $userform->perguntaiciq24 = $request->perguntaiciq24;
            $userform->respostaiciq24 = $request->respostaiciq24;

            $userform->perguntaiciq25 = $request->perguntaiciq25;
            $userform->respostaiciq25 = $request->respostaiciq25;

            $userform->perguntaiciq26 = $request->perguntaiciq26;
            $userform->respostaiciq26 = $request->respostaiciq26;

            $userform->perguntaiciq27 = $request->perguntaiciq27;
            $userform->respostaiciq27 = $request->respostaiciq27;

            $userform->perguntaiciq28 = $request->perguntaiciq28;
            $userform->respostaiciq28 = $request->respostaiciq28;

            $userform->perguntaiciq29 = $request->perguntaiciq29;
            $userform->respostaiciq29 = $request->respostaiciq29;

            $userform->perguntaiciq30 = $request->perguntaiciq30;
            $userform->respostaiciq30 = $request->respostaiciq30;

            $userform->perguntaiciq31 = $request->perguntaiciq31;
            $userform->respostaiciq31 = $request->respostaiciq31;

            $userform->perguntaiciq32 = $request->perguntaiciq32;
            $userform->respostaiciq32 = $request->respostaiciq32;

            $userform->perguntaiciq33 = $request->perguntaiciq33;
            $userform->respostaiciq33 = $request->respostaiciq33;

            $userform->perguntaiciq34 = $request->perguntaiciq34;
            $userform->respostaiciq34 = $request->respostaiciq34;

            $userform->perguntaiciq35 = $request->perguntaiciq35;
            $userform->respostaiciq35 = $request->respostaiciq35;

            $userform->perguntaiciq36 = $request->perguntaiciq36;
            $userform->respostaiciq36 = $request->respostaiciq36;

            $userform->perguntaiciq37 = $request->perguntaiciq37;
            $userform->respostaiciq37 = $request->respostaiciq37;
           


            $userform->update();
        }
        
        else{

            $userform = new FormIciq();
            $userform->user_id = $usuario->id;

            $userform->perguntaiciq1 = $request->perguntaiciq1;
            $userform->respostaiciq1 = $request->respostaiciq1; 

            $userform->perguntaiciq2 = $request->perguntaiciq2;
            $userform->respostaiciq2 = $request->respostaiciq2;

            $userform->perguntaiciq3 = $request->perguntaiciq3;
            $userform->respostaiciq3 = $request->respostaiciq3;

            $userform->perguntaiciq4 = $request->perguntaiciq4;
            $userform->respostaiciq4 = $request->respostaiciq4;

            $userform->perguntaiciq5 = $request->perguntaiciq5;
            $userform->respostaiciq5 = $request->respostaiciq5;

            $userform->perguntaiciq6 = $request->perguntaiciq6;
            $userform->respostaiciq6 = $request->respostaiciq6;

            $userform->perguntaiciq7 = $request->perguntaiciq7;
            $userform->respostaiciq7 = $request->respostaiciq7;

            $userform->respostaiciq7a = $request->respostaiciq7a;

            $userform->respostaiciq7b = $request->respostaiciq7b;
            
            $userform->respostaiciq7c = $request->respostaiciq7c;
            
            $userform->respostaiciq7d = $request->respostaiciq7d;
            
            $userform->respostaiciq7e = $request->respostaiciq7e;
            
            $userform->respostaiciq7f = $request->respostaiciq7f;
            
            $userform->respostaiciq7g = $request->respostaiciq7g;         

            $userform->perguntaiciq8 = $request->perguntaiciq8;
            $userform->respostaiciq8 = $request->respostaiciq8;

            $userform->perguntaiciq9 = $request->perguntaiciq9;
            $userform->respostaiciq9 = $request->respostaiciq9;

            $userform->perguntaiciq10 = $request->perguntaiciq10;
            $userform->respostaiciq10 = $request->respostaiciq10;

            $userform->perguntaiciq10 = $request->perguntaiciq10;
            $userform->respostaiciq10 = $request->respostaiciq10;

            $userform->perguntaiciq11 = $request->perguntaiciq11;
            $userform->respostaiciq11 = $request->respostaiciq11;

            $userform->perguntaiciq12 = $request->perguntaiciq12;
            $userform->respostaiciq12 = $request->respostaiciq12;

            $userform->perguntaiciq13 = $request->perguntaiciq13;
            $userform->respostaiciq13 = $request->respostaiciq13;

            $userform->perguntaiciq14 = $request->perguntaiciq14;
            $userform->respostaiciq14 = $request->respostaiciq14;

            $userform->perguntaiciq15 = $request->perguntaiciq15;
            $userform->respostaiciq15 = $request->respostaiciq15;

            $userform->perguntaiciq16 = $request->perguntaiciq16;
            $userform->respostaiciq16 = $request->respostaiciq16;

            $userform->perguntaiciq17 = $request->perguntaiciq17;
            $userform->respostaiciq17 = $request->respostaiciq17;

            $userform->perguntaiciq18 = $request->perguntaiciq18;
            $userform->respostaiciq18 = $request->respostaiciq18;

            $userform->perguntaiciq19 = $request->perguntaiciq19;
            $userform->respostaiciq19 = $request->respostaiciq19;

            $userform->perguntaiciq20 = $request->perguntaiciq20;
            $userform->respostaiciq20 = $request->respostaiciq20;

            $userform->perguntaiciq21 = $request->perguntaiciq21;
            $userform->respostaiciq21 = $request->respostaiciq21;

            $userform->perguntaiciq22 = $request->perguntaiciq22;
            $userform->respostaiciq22 = $request->respostaiciq22;

            $userform->perguntaiciq23 = $request->perguntaiciq23;
            $userform->respostaiciq23 = $request->respostaiciq23;

            $userform->perguntaiciq24 = $request->perguntaiciq24;
            $userform->respostaiciq24 = $request->respostaiciq24;

            $userform->perguntaiciq25 = $request->perguntaiciq25;
            $userform->respostaiciq25 = $request->respostaiciq25;

            $userform->perguntaiciq26 = $request->perguntaiciq26;
            $userform->respostaiciq26 = $request->respostaiciq26;

            $userform->perguntaiciq27 = $request->perguntaiciq27;
            $userform->respostaiciq27 = $request->respostaiciq27;

            $userform->perguntaiciq28 = $request->perguntaiciq28;
            $userform->respostaiciq28 = $request->respostaiciq28;

            $userform->perguntaiciq29 = $request->perguntaiciq29;
            $userform->respostaiciq29 = $request->respostaiciq29;

            $userform->perguntaiciq30 = $request->perguntaiciq30;
            $userform->respostaiciq30 = $request->respostaiciq30;

            $userform->perguntaiciq31 = $request->perguntaiciq31;
            $userform->respostaiciq31 = $request->respostaiciq31;

            $userform->perguntaiciq32 = $request->perguntaiciq32;
            $userform->respostaiciq32 = $request->respostaiciq32;

            $userform->perguntaiciq33 = $request->perguntaiciq33;
            $userform->respostaiciq33 = $request->respostaiciq33;

            $userform->perguntaiciq34 = $request->perguntaiciq34;
            $userform->respostaiciq34 = $request->respostaiciq34;

            $userform->perguntaiciq35 = $request->perguntaiciq35;
            $userform->respostaiciq35 = $request->respostaiciq35;

            $userform->perguntaiciq36 = $request->perguntaiciq36;
            $userform->respostaiciq36 = $request->respostaiciq36;

            $userform->perguntaiciq37 = $request->perguntaiciq37;
            $userform->respostaiciq37 = $request->respostaiciq37;


            $userform->save();


        }

        return redirect()->back();
    }


    // FORM INDIVIDUAL
    public function formindividual(Request $request, Usuarios $usuario)
    {  
        //dd($usuario->formindividual()); 
        $contadorformulario1 = 0;
        $formindividual = $usuario->formindividual();
        if ($formindividual) {
            $contadorformulario1 = $formindividual->formulario1prenchido();
        }

       
        $contadorformulario2 = 0;
        $formindividual2 = $usuario->formindividualprimeiro();
        if ($formindividual2) {
            $contadorformulario2 = $formindividual2->formulario2prenchido();
        }

        $contadorformulario3 = 0;
        $formindividual3 = $usuario->formindividualsegundo();
        if ($formindividual3) {
            $contadorformulario3 = $formindividual3->formulario3prenchido();
        }

        $contadorformulario4 = 0;
        $formindividual4 = $usuario->formindividualterceiro();
        if ($formindividual4) {
            $contadorformulario4 = $formindividual4->formulario4prenchido();
        }

        $view = view ('forms.formindividual', 
                    [
                    'usuario'=>$usuario, 
                    'contadorformulario1'=>$contadorformulario1, 
                    'formindividual'=>$formindividual,
                    'contadorformulario2'=>$contadorformulario2, 
                    'formindividual2'=>$formindividual2,
                    'contadorformulario3'=>$contadorformulario3, 
                    'formindividual3'=>$formindividual3,
                    'contadorformulario4'=>$contadorformulario4, 
                    'formindividual4'=>$formindividual4
                    ]);

        return $view;
        
    }

    public function postformindividual(Request $request, Usuarios $usuario)
    {
        //dd($request);
        $userform = FormIndividual::where('user_id', $usuario->id)->first();
        if ($userform){
            $userform->user_id = $usuario->id;

            $userform->perguntaindividual1 = $request->perguntaindividual1;
            $userform->respostaindividual1 = $request->respostaindividual1;   

            $userform->perguntaindividual2 = $request->perguntaindividual2;
            $userform->respostaindividual2 = $request->respostaindividual2;  

            $userform->perguntaindividual3 = $request->perguntaindividual3;
            $userform->respostaindividual3 = $request->respostaindividual3;  

            $userform->perguntaindividual4 = $request->perguntaindividual4;
            $userform->respostaindividual4 = $request->respostaindividual4;  

            $userform->perguntaindividual5 = $request->perguntaindividual5;
            $userform->respostaindividual5 = $request->respostaindividual5;  

            $userform->perguntaindividual6 = $request->perguntaindividual6;
            $userform->respostaindividual6 = $request->respostaindividual6;  

            $userform->perguntaindividual7 = $request->perguntaindividual7;
            $userform->respostaindividual7 = $request->respostaindividual7;  

            $userform->perguntaindividual8 = $request->perguntaindividual8;
            $userform->respostaindividual8 = $request->respostaindividual8;  

            $userform->perguntaindividual9 = $request->perguntaindividual9;
            $userform->respostaindividual9 = $request->respostaindividual9;  

            $userform->perguntaindividual10 = $request->perguntaindividual10;
            $userform->respostaindividual10 = $request->respostaindividual10;  

            $userform->perguntaindividual11 = $request->perguntaindividual11;
            $userform->respostaindividual11 = $request->respostaindividual11;  

            $userform->perguntaindividual12 = $request->perguntaindividual12;
            $userform->respostaindividual12 = $request->respostaindividual12;  

            $userform->perguntaindividual13 = $request->perguntaindividual13;
            $userform->respostaindividual13 = $request->respostaindividual13;  

            $userform->perguntaindividual14 = $request->perguntaindividual14;
            $userform->respostaindividual14 = $request->respostaindividual14;  

            $userform->perguntaindividual15 = $request->perguntaindividual15;
            $userform->respostaindividual15 = $request->respostaindividual15;  

            $userform->perguntaindividual16 = $request->perguntaindividual16;
            $userform->respostaindividual16 = $request->respostaindividual16;  

            $userform->perguntaindividual17 = $request->perguntaindividual17;
            $userform->respostaindividual17 = $request->respostaindividual17;  

            $userform->perguntaindividual18 = $request->perguntaindividual18;
            $userform->respostaindividual18 = $request->respostaindividual18;  

            $userform->perguntaindividual19 = $request->perguntaindividual19;
            $userform->respostaindividual19 = $request->respostaindividual19;  

            $userform->perguntaindividual20 = $request->perguntaindividual20;
            $userform->respostaindividual20 = $request->respostaindividual20; 

            $userform->perguntaindividual21 = $request->perguntaindividual21;
            $userform->respostaindividual21 = $request->respostaindividual21;   

            $userform->perguntaindividual22 = $request->perguntaindividual22;
            $userform->respostaindividual22 = $request->respostaindividual22;  

            $userform->perguntaindividual23 = $request->perguntaindividual23;
            $userform->respostaindividual23 = $request->respostaindividual23;  

            $userform->perguntaindividual24 = $request->perguntaindividual24;
            $userform->respostaindividual24 = $request->respostaindividual24;  

            $userform->perguntaindividual25 = $request->perguntaindividual25;
            $userform->respostaindividual25 = $request->respostaindividual25;  

            $userform->perguntaindividual26 = $request->perguntaindividual26;
            $userform->respostaindividual26 = $request->respostaindividual26;  

            $userform->perguntaespecifique26 = $request->perguntaespecifique26;
            $userform->respostaespecifique26 = $request->respostaespecifique26;  

            $userform->perguntaindividual27 = $request->perguntaindividual27;
            $userform->respostaindividual27 = $request->respostaindividual27;  

            $userform->perguntaindividual28 = $request->perguntaindividual28;
            $userform->respostaindividual28 = $request->respostaindividual28;  

            $userform->update();
        }
        
        else{

            $userform = new FormIndividual();
            $userform->user_id = $usuario->id;

            $userform->perguntaindividual1 = $request->perguntaindividual1;
            $userform->respostaindividual1 = $request->respostaindividual1;   

            $userform->perguntaindividual2 = $request->perguntaindividual2;
            $userform->respostaindividual2 = $request->respostaindividual2;  

            $userform->perguntaindividual3 = $request->perguntaindividual3;
            $userform->respostaindividual3 = $request->respostaindividual3;  

            $userform->perguntaindividual4 = $request->perguntaindividual4;
            $userform->respostaindividual4 = $request->respostaindividual4;  

            $userform->perguntaindividual5 = $request->perguntaindividual5;
            $userform->respostaindividual5 = $request->respostaindividual5;  

            $userform->perguntaindividual6 = $request->perguntaindividual6;
            $userform->respostaindividual6 = $request->respostaindividual6;  

            $userform->perguntaindividual7 = $request->perguntaindividual7;
            $userform->respostaindividual7 = $request->respostaindividual7;  

            $userform->perguntaindividual8 = $request->perguntaindividual8;
            $userform->respostaindividual8 = $request->respostaindividual8;  

            $userform->perguntaindividual9 = $request->perguntaindividual9;
            $userform->respostaindividual9 = $request->respostaindividual9;  

            $userform->perguntaindividual10 = $request->perguntaindividual10;
            $userform->respostaindividual10 = $request->respostaindividual10;  

            $userform->perguntaindividual11 = $request->perguntaindividual11;
            $userform->respostaindividual11 = $request->respostaindividual11;  

            $userform->perguntaindividual12 = $request->perguntaindividual12;
            $userform->respostaindividual12 = $request->respostaindividual12;  

            $userform->perguntaindividual13 = $request->perguntaindividual13;
            $userform->respostaindividual13 = $request->respostaindividual13;  

            $userform->perguntaindividual14 = $request->perguntaindividual14;
            $userform->respostaindividual14 = $request->respostaindividual14;  

            $userform->perguntaindividual15 = $request->perguntaindividual15;
            $userform->respostaindividual15 = $request->respostaindividual15;  

            $userform->perguntaindividual16 = $request->perguntaindividual16;
            $userform->respostaindividual16 = $request->respostaindividual16;  

            $userform->perguntaindividual17 = $request->perguntaindividual17;
            $userform->respostaindividual17 = $request->respostaindividual17;  

            $userform->perguntaindividual18 = $request->perguntaindividual18;
            $userform->respostaindividual18 = $request->respostaindividual18;  

            $userform->perguntaindividual19 = $request->perguntaindividual19;
            $userform->respostaindividual19 = $request->respostaindividual19;  

            $userform->perguntaindividual20 = $request->perguntaindividual20;
            $userform->respostaindividual20 = $request->respostaindividual20; 

            $userform->perguntaindividual21 = $request->perguntaindividual21;
            $userform->respostaindividual21 = $request->respostaindividual21;   

            $userform->perguntaindividual22 = $request->perguntaindividual22;
            $userform->respostaindividual22 = $request->respostaindividual22;  

            $userform->perguntaindividual23 = $request->perguntaindividual23;
            $userform->respostaindividual23 = $request->respostaindividual23;  

            $userform->perguntaindividual24 = $request->perguntaindividual24;
            $userform->respostaindividual24 = $request->respostaindividual24;  

            $userform->perguntaindividual25 = $request->perguntaindividual25;
            $userform->respostaindividual25 = $request->respostaindividual25;  

            $userform->perguntaindividual26 = $request->perguntaindividual26;
            $userform->respostaindividual26 = $request->respostaindividual26;  

            $userform->perguntaespecifique26 = $request->perguntaespecifique26;
            $userform->respostaespecifique26 = $request->respostaespecifique26; 

            $userform->perguntaindividual27 = $request->perguntaindividual27;
            $userform->respostaindividual27 = $request->respostaindividual27;  

            $userform->perguntaindividual28 = $request->perguntaindividual28;
            $userform->respostaindividual28 = $request->respostaindividual28;  

            $userform->save();

        }

        return redirect()->back();
    }

    // FORM INDIVIDUAL PRIMEIRO
    public function postformindividualprimeiro(Request $request, Usuarios $usuario)
    {
        //dd($request);
        $userform = FormIndividualPrimeiro::where('user_id', $usuario->id)->first();
        if ($userform){
            $userform->user_id = $usuario->id;

            $userform->perguntaindividual29 = $request->perguntaindividual29;
            $userform->respostaindividual29 = $request->respostaindividual29;  

            $userform->perguntaindividual30 = $request->perguntaindividual30;
            $userform->respostaindividual30 = $request->respostaindividual30;  

            $userform->perguntaindividual31 = $request->perguntaindividual31;
            $userform->respostaindividual31 = $request->respostaindividual31;  

            $userform->perguntaindividual32 = $request->perguntaindividual32;
            $userform->respostaindividual32 = $request->respostaindividual32;  

            $userform->perguntaindividual33 = $request->perguntaindividual33;
            $userform->respostaindividual33 = $request->respostaindividual33;  

            $userform->perguntaindividual34 = $request->perguntaindividual34;
            $userform->respostaindividual34 = $request->respostaindividual34;  

            $userform->perguntaindividual35 = $request->perguntaindividual35;
            $userform->respostaindividual35 = $request->respostaindividual35;  

            $userform->perguntaindividual36 = $request->perguntaindividual36;
            $userform->respostaindividual36 = $request->respostaindividual36;  

            $userform->perguntaindividual37 = $request->perguntaindividual37;
            $userform->respostaindividual37 = $request->respostaindividual37;  

            $userform->perguntaindividual38 = $request->perguntaindividual38;
            $userform->respostaindividual38 = $request->respostaindividual38;  

            $userform->perguntaindividual39 = $request->perguntaindividual39;
            $userform->respostaindividual39 = $request->respostaindividual39;  

            $userform->perguntaindividual40 = $request->perguntaindividual40;
            $userform->respostaindividual40 = $request->respostaindividual40;

            $userform->perguntaindividual41 = $request->perguntaindividual41;
            $userform->respostaindividual41 = $request->respostaindividual41;

            $userform->perguntaindividual42 = $request->perguntaindividual42;
            $userform->respostaindividual42 = $request->respostaindividual42;

            $userform->perguntaindividual43 = $request->perguntaindividual43;
            $userform->respostaindividual43 = $request->respostaindividual43;

            $userform->perguntaindividual44 = $request->perguntaindividual44;
            $userform->respostaindividual44 = $request->respostaindividual44;

            $userform->perguntaindividual45 = $request->perguntaindividual45;
            $userform->respostaindividual45 = $request->respostaindividual45;

            $userform->perguntaindividual46 = $request->perguntaindividual46;
            $userform->respostaindividual46 = $request->respostaindividual46;

            $userform->perguntaindividual47 = $request->perguntaindividual47;
            $userform->respostaindividual47 = $request->respostaindividual47;

            $userform->perguntaindividual48 = $request->perguntaindividual48;
            $userform->respostaindividual48 = $request->respostaindividual48;

            $userform->perguntaindividual49 = $request->perguntaindividual49;
            $userform->respostaindividual49 = $request->respostaindividual49;

            $userform->perguntaindividual50 = $request->perguntaindividual50;
            $userform->respostaindividual50 = $request->respostaindividual50;

            $userform->perguntaindividual51 = $request->perguntaindividual51;
            $userform->respostaindividual51 = $request->respostaindividual51;

            $userform->perguntaindividual52 = $request->perguntaindividual52;
            $userform->respostaindividual52 = $request->respostaindividual52;

            $userform->perguntaindividual53 = $request->perguntaindividual53;
            $userform->respostaindividual53 = $request->respostaindividual53;

            $userform->perguntaindividual54 = $request->perguntaindividual54;
            $userform->respostaindividual54 = $request->respostaindividual54;

            $userform->perguntaindividual55 = $request->perguntaindividual55;
            $userform->respostaindividual55 = $request->respostaindividual55;

            $userform->perguntaindividual56 = $request->perguntaindividual56;
            $userform->respostaindividual56 = $request->respostaindividual56;

            $userform->perguntaindividual57 = $request->perguntaindividual57;
            $userform->respostaindividual57 = $request->respostaindividual57;

            $userform->perguntaindividual58 = $request->perguntaindividual58;
            $userform->respostaindividual58 = $request->respostaindividual58;

            $userform->perguntaindividual59 = $request->perguntaindividual59;
            $userform->respostaindividual59 = $request->respostaindividual59;

            $userform->perguntaindividual60 = $request->perguntaindividual60;
            $userform->respostaindividual60 = $request->respostaindividual60;

            $userform->perguntaindividual61 = $request->perguntaindividual61;
            $userform->respostaindividual61 = $request->respostaindividual61;

            $userform->perguntaindividual62 = $request->perguntaindividual62;
            $userform->respostaindividual62 = $request->respostaindividual62;

            $userform->perguntaindividual63 = $request->perguntaindividual63;
            $userform->respostaindividual63 = $request->respostaindividual63;

            $userform->perguntaindividual64 = $request->perguntaindividual64;
            $userform->respostaindividual64 = $request->respostaindividual64;

            $userform->perguntaindividual65 = $request->perguntaindividual65;
            $userform->respostaindividual65 = $request->respostaindividual65;

            $userform->perguntaindividual66 = $request->perguntaindividual66;
            $userform->respostaindividual66 = $request->respostaindividual66;

            $userform->perguntaindividual67 = $request->perguntaindividual67;
            $userform->respostaindividual67 = $request->respostaindividual67;

            $userform->perguntaindividual68 = $request->perguntaindividual68;
            $userform->respostaindividual68 = $request->respostaindividual68;

            $userform->perguntaindividual69 = $request->perguntaindividual69;
            $userform->respostaindividual69 = $request->respostaindividual69;

            $userform->perguntaindividual70 = $request->perguntaindividual70;
            $userform->respostaindividual70 = $request->respostaindividual70;
            
            $userform->update();
        }
        
        else{
            $userform = new FormIndividualPrimeiro();
            $userform->user_id = $usuario->id;

            $userform->perguntaindividual29 = $request->perguntaindividual29;
            $userform->respostaindividual29 = $request->respostaindividual29;  

            $userform->perguntaindividual30 = $request->perguntaindividual30;
            $userform->respostaindividual30 = $request->respostaindividual30;  

            $userform->perguntaindividual31 = $request->perguntaindividual31;
            $userform->respostaindividual31 = $request->respostaindividual31;  

            $userform->perguntaindividual32 = $request->perguntaindividual32;
            $userform->respostaindividual32 = $request->respostaindividual32;  

            $userform->perguntaindividual33 = $request->perguntaindividual33;
            $userform->respostaindividual33 = $request->respostaindividual33;  

            $userform->perguntaindividual34 = $request->perguntaindividual34;
            $userform->respostaindividual34 = $request->respostaindividual34;  

            $userform->perguntaindividual35 = $request->perguntaindividual35;
            $userform->respostaindividual35 = $request->respostaindividual35;  

            $userform->perguntaindividual36 = $request->perguntaindividual36;
            $userform->respostaindividual36 = $request->respostaindividual36;  

            $userform->perguntaindividual37 = $request->perguntaindividual37;
            $userform->respostaindividual37 = $request->respostaindividual37;  

            $userform->perguntaindividual38 = $request->perguntaindividual38;
            $userform->respostaindividual38 = $request->respostaindividual38;  

            $userform->perguntaindividual39 = $request->perguntaindividual39;
            $userform->respostaindividual39 = $request->respostaindividual39;  

            $userform->perguntaindividual40 = $request->perguntaindividual40;
            $userform->respostaindividual40 = $request->respostaindividual40;

            $userform->perguntaindividual41 = $request->perguntaindividual41;
            $userform->respostaindividual41 = $request->respostaindividual41;

            $userform->perguntaindividual42 = $request->perguntaindividual42;
            $userform->respostaindividual42 = $request->respostaindividual42;

            $userform->perguntaindividual43 = $request->perguntaindividual43;
            $userform->respostaindividual43 = $request->respostaindividual43;

            $userform->perguntaindividual44 = $request->perguntaindividual44;
            $userform->respostaindividual44 = $request->respostaindividual44;

            $userform->perguntaindividual45 = $request->perguntaindividual45;
            $userform->respostaindividual45 = $request->respostaindividual45;

            $userform->perguntaindividual46 = $request->perguntaindividual46;
            $userform->respostaindividual46 = $request->respostaindividual46;

            $userform->perguntaindividual47 = $request->perguntaindividual47;
            $userform->respostaindividual47 = $request->respostaindividual47;

            $userform->perguntaindividual48 = $request->perguntaindividual48;
            $userform->respostaindividual48 = $request->respostaindividual48;

            $userform->perguntaindividual49 = $request->perguntaindividual49;
            $userform->respostaindividual49 = $request->respostaindividual49;

            $userform->perguntaindividual50 = $request->perguntaindividual50;
            $userform->respostaindividual50 = $request->respostaindividual50;

            $userform->perguntaindividual51 = $request->perguntaindividual51;
            $userform->respostaindividual51 = $request->respostaindividual51;

            $userform->perguntaindividual52 = $request->perguntaindividual52;
            $userform->respostaindividual52 = $request->respostaindividual52;

            $userform->perguntaindividual53 = $request->perguntaindividual53;
            $userform->respostaindividual53 = $request->respostaindividual53;

            $userform->perguntaindividual54 = $request->perguntaindividual54;
            $userform->respostaindividual54 = $request->respostaindividual54;

            $userform->perguntaindividual55 = $request->perguntaindividual55;
            $userform->respostaindividual55 = $request->respostaindividual55;

            $userform->perguntaindividual56 = $request->perguntaindividual56;
            $userform->respostaindividual56 = $request->respostaindividual56;

            $userform->perguntaindividual57 = $request->perguntaindividual57;
            $userform->respostaindividual57 = $request->respostaindividual57;

            $userform->perguntaindividual58 = $request->perguntaindividual58;
            $userform->respostaindividual58 = $request->respostaindividual58;

            $userform->perguntaindividual59 = $request->perguntaindividual59;
            $userform->respostaindividual59 = $request->respostaindividual59;

            $userform->perguntaindividual60 = $request->perguntaindividual60;
            $userform->respostaindividual60 = $request->respostaindividual60;

            $userform->perguntaindividual61 = $request->perguntaindividual61;
            $userform->respostaindividual61 = $request->respostaindividual61;

            $userform->perguntaindividual62 = $request->perguntaindividual62;
            $userform->respostaindividual62 = $request->respostaindividual62;

            $userform->perguntaindividual63 = $request->perguntaindividual63;
            $userform->respostaindividual63 = $request->respostaindividual63;

            $userform->perguntaindividual64 = $request->perguntaindividual64;
            $userform->respostaindividual64 = $request->respostaindividual64;

            $userform->perguntaindividual65 = $request->perguntaindividual65;
            $userform->respostaindividual65 = $request->respostaindividual65;

            $userform->perguntaindividual66 = $request->perguntaindividual66;
            $userform->respostaindividual66 = $request->respostaindividual66;

            $userform->perguntaindividual67 = $request->perguntaindividual67;
            $userform->respostaindividual67 = $request->respostaindividual67;

            $userform->perguntaindividual68 = $request->perguntaindividual68;
            $userform->respostaindividual68 = $request->respostaindividual68;

            $userform->perguntaindividual69 = $request->perguntaindividual69;
            $userform->respostaindividual69 = $request->respostaindividual69;

            $userform->perguntaindividual70 = $request->perguntaindividual70;
            $userform->respostaindividual70 = $request->respostaindividual70;

            $userform->save();

        }

        return redirect()->back();
    }

    // FORM INDIVIDUAL SEGUNDO
    public function postformindividualsegundo(Request $request, Usuarios $usuario)
    {
        //dd($request);
        $userform = FormIndividualSegundo::where('user_id', $usuario->id)->first();
        if ($userform){
            $userform->user_id = $usuario->id;

            $userform->perguntaindividual71 = $request->perguntaindividual71;
            $userform->respostaindividual71 = $request->respostaindividual71; 

            $userform->perguntaindividual72 = $request->perguntaindividual72;
            $userform->respostaindividual72 = $request->respostaindividual72;  

            $userform->perguntaindividual73 = $request->perguntaindividual73;
            $userform->respostaindividual73 = $request->respostaindividual73;  

            $userform->perguntaindividual74 = $request->perguntaindividual74;
            $userform->respostaindividual74 = $request->respostaindividual74;  

            $userform->perguntaindividual75 = $request->perguntaindividual75;
            $userform->respostaindividual75 = $request->respostaindividual75;  

            $userform->perguntaindividual76 = $request->perguntaindividual76;
            $userform->respostaindividual76 = $request->respostaindividual76;  

            $userform->perguntaindividual77 = $request->perguntaindividual77;
            $userform->respostaindividual77 = $request->respostaindividual77; 

            $userform->perguntaindividual78 = $request->perguntaindividual78;
            $userform->respostaindividual78 = $request->respostaindividual78;  

            $userform->perguntaindividual79 = $request->perguntaindividual79;
            $userform->respostaindividual79 = $request->respostaindividual79;  

            $userform->perguntaindividual80 = $request->perguntaindividual80;
            $userform->respostaindividual80 = $request->respostaindividual80;  

            $userform->perguntaindividual81 = $request->perguntaindividual81;
            $userform->respostaindividual81 = $request->respostaindividual81;  

            $userform->perguntaindividual82 = $request->perguntaindividual82;
            $userform->respostaindividual82 = $request->respostaindividual82;

            $userform->perguntaindividual83 = $request->perguntaindividual83;
            $userform->respostaindividual83 = $request->respostaindividual83; 

            $userform->perguntaindividual84 = $request->perguntaindividual84;
            $userform->respostaindividual84 = $request->respostaindividual84;  

            $userform->perguntaindividual85 = $request->perguntaindividual85;
            $userform->respostaindividual85 = $request->respostaindividual85;  

            $userform->perguntaindividual86 = $request->perguntaindividual86;
            $userform->respostaindividual86 = $request->respostaindividual86;  

            $userform->perguntaindividual87 = $request->perguntaindividual87;
            $userform->respostaindividual87 = $request->respostaindividual87;  

            $userform->perguntaindividual88 = $request->perguntaindividual88;
            $userform->respostaindividual88 = $request->respostaindividual88;

            $userform->perguntaindividual89 = $request->perguntaindividual89;
            $userform->respostaindividual89 = $request->respostaindividual89; 

            $userform->perguntaindividual90 = $request->perguntaindividual90;
            $userform->respostaindividual90 = $request->respostaindividual90;  

            $userform->perguntaindividual91 = $request->perguntaindividual91;
            $userform->respostaindividual91 = $request->respostaindividual91;  

            $userform->perguntaindividual92 = $request->perguntaindividual92;
            $userform->respostaindividual92 = $request->respostaindividual92;  

            $userform->perguntaindividual93 = $request->perguntaindividual93;
            $userform->respostaindividual93 = $request->respostaindividual93;  

            $userform->perguntaindividual94 = $request->perguntaindividual94;
            $userform->respostaindividual94 = $request->respostaindividual94;

            $userform->perguntaindividual95 = $request->perguntaindividual95;
            $userform->respostaindividual95 = $request->respostaindividual95; 

            $userform->perguntaindividual96 = $request->perguntaindividual96;
            $userform->respostaindividual96 = $request->respostaindividual96;  

            $userform->perguntaindividual97 = $request->perguntaindividual97;
            $userform->respostaindividual97 = $request->respostaindividual97;  

            $userform->perguntaindividual98 = $request->perguntaindividual98;
            $userform->respostaindividual98 = $request->respostaindividual98;  

            $userform->perguntaindividual99 = $request->perguntaindividual99;
            $userform->respostaindividual99 = $request->respostaindividual99;  

            $userform->perguntaindividual100 = $request->perguntaindividual100;
            $userform->respostaindividual100 = $request->respostaindividual100;

            $userform->perguntaindividual101 = $request->perguntaindividual101;
            $userform->respostaindividual101 = $request->respostaindividual101; 

            $userform->perguntaindividual102 = $request->perguntaindividual102;
            $userform->respostaindividual102 = $request->respostaindividual102;  

            $userform->perguntaindividual103 = $request->perguntaindividual103;
            $userform->respostaindividual103 = $request->respostaindividual103;  

            $userform->perguntaindividual104 = $request->perguntaindividual104;
            $userform->respostaindividual104 = $request->respostaindividual104;  

            $userform->perguntaindividual105 = $request->perguntaindividual105;
            $userform->respostaindividual105 = $request->respostaindividual105;  

            $userform->perguntaindividual106 = $request->perguntaindividual106;
            $userform->respostaindividual106 = $request->respostaindividual106;

            $userform->perguntaindividual107 = $request->perguntaindividual107;
            $userform->respostaindividual107 = $request->respostaindividual107;

            $userform->perguntaindividual108 = $request->perguntaindividual108;
            $userform->respostaindividual108 = $request->respostaindividual108;

            $userform->perguntaindividual109 = $request->perguntaindividual109;
            $userform->respostaindividual109 = $request->respostaindividual109;

            $userform->perguntaindividual110 = $request->perguntaindividual110;
            $userform->respostaindividual110 = $request->respostaindividual110;

            $userform->perguntaindividual111 = $request->perguntaindividual111;
            $userform->respostaindividual111 = $request->respostaindividual111;

            $userform->perguntaindividual112 = $request->perguntaindividual112;
            $userform->respostaindividual112 = $request->respostaindividual112;

            $userform->perguntaindividual113 = $request->perguntaindividual113;
            $userform->respostaindividual113 = $request->respostaindividual113;

            $userform->perguntaindividual114 = $request->perguntaindividual114;
            $userform->respostaindividual114 = $request->respostaindividual114;

            $userform->perguntaindividual115 = $request->perguntaindividual115;
            $userform->respostaindividual115 = $request->respostaindividual115;

            $userform->perguntaindividual116 = $request->perguntaindividual116;
            $userform->respostaindividual116 = $request->respostaindividual116;

            $userform->perguntaindividual117 = $request->perguntaindividual117;
            $userform->respostaindividual117 = $request->respostaindividual117;

            $userform->perguntaindividual118 = $request->perguntaindividual118;
            $userform->respostaindividual118 = $request->respostaindividual118;

            $userform->perguntaindividual119 = $request->perguntaindividual119;
            $userform->respostaindividual119 = $request->respostaindividual119;

            $userform->update();


        }

        else{
            $userform = new FormIndividualSegundo();
            $userform->user_id = $usuario->id;

            $userform->perguntaindividual71 = $request->perguntaindividual71;
            $userform->respostaindividual71 = $request->respostaindividual71; 

            $userform->perguntaindividual72 = $request->perguntaindividual72;
            $userform->respostaindividual72 = $request->respostaindividual72;  

            $userform->perguntaindividual73 = $request->perguntaindividual73;
            $userform->respostaindividual73 = $request->respostaindividual73;  

            $userform->perguntaindividual74 = $request->perguntaindividual74;
            $userform->respostaindividual74 = $request->respostaindividual74;  

            $userform->perguntaindividual75 = $request->perguntaindividual75;
            $userform->respostaindividual75 = $request->respostaindividual75;  

            $userform->perguntaindividual76 = $request->perguntaindividual76;
            $userform->respostaindividual76 = $request->respostaindividual76;  

            $userform->perguntaindividual77 = $request->perguntaindividual77;
            $userform->respostaindividual77 = $request->respostaindividual77; 

            $userform->perguntaindividual78 = $request->perguntaindividual78;
            $userform->respostaindividual78 = $request->respostaindividual78;  

            $userform->perguntaindividual79 = $request->perguntaindividual79;
            $userform->respostaindividual79 = $request->respostaindividual79;  

            $userform->perguntaindividual80 = $request->perguntaindividual80;
            $userform->respostaindividual80 = $request->respostaindividual80;  

            $userform->perguntaindividual81 = $request->perguntaindividual81;
            $userform->respostaindividual81 = $request->respostaindividual81;  

            $userform->perguntaindividual82 = $request->perguntaindividual82;
            $userform->respostaindividual82 = $request->respostaindividual82;

            $userform->perguntaindividual83 = $request->perguntaindividual83;
            $userform->respostaindividual83 = $request->respostaindividual83; 

            $userform->perguntaindividual84 = $request->perguntaindividual84;
            $userform->respostaindividual84 = $request->respostaindividual84;  

            $userform->perguntaindividual85 = $request->perguntaindividual85;
            $userform->respostaindividual85 = $request->respostaindividual85;  

            $userform->perguntaindividual86 = $request->perguntaindividual86;
            $userform->respostaindividual86 = $request->respostaindividual86;  

            $userform->perguntaindividual87 = $request->perguntaindividual87;
            $userform->respostaindividual87 = $request->respostaindividual87;  

            $userform->perguntaindividual88 = $request->perguntaindividual88;
            $userform->respostaindividual88 = $request->respostaindividual88;

            $userform->perguntaindividual89 = $request->perguntaindividual89;
            $userform->respostaindividual89 = $request->respostaindividual89; 

            $userform->perguntaindividual90 = $request->perguntaindividual90;
            $userform->respostaindividual90 = $request->respostaindividual90;  

            $userform->perguntaindividual91 = $request->perguntaindividual91;
            $userform->respostaindividual91 = $request->respostaindividual91;  

            $userform->perguntaindividual92 = $request->perguntaindividual92;
            $userform->respostaindividual92 = $request->respostaindividual92;  

            $userform->perguntaindividual93 = $request->perguntaindividual93;
            $userform->respostaindividual93 = $request->respostaindividual93;  

            $userform->perguntaindividual94 = $request->perguntaindividual94;
            $userform->respostaindividual94 = $request->respostaindividual94;

            $userform->perguntaindividual95 = $request->perguntaindividual95;
            $userform->respostaindividual95 = $request->respostaindividual95; 

            $userform->perguntaindividual96 = $request->perguntaindividual96;
            $userform->respostaindividual96 = $request->respostaindividual96;  

            $userform->perguntaindividual97 = $request->perguntaindividual97;
            $userform->respostaindividual97 = $request->respostaindividual97;  

            $userform->perguntaindividual98 = $request->perguntaindividual98;
            $userform->respostaindividual98 = $request->respostaindividual98;  

            $userform->perguntaindividual99 = $request->perguntaindividual99;
            $userform->respostaindividual99 = $request->respostaindividual99;  

            $userform->perguntaindividual100 = $request->perguntaindividual100;
            $userform->respostaindividual100 = $request->respostaindividual100;

            $userform->perguntaindividual101 = $request->perguntaindividual101;
            $userform->respostaindividual101 = $request->respostaindividual101; 

            $userform->perguntaindividual102 = $request->perguntaindividual102;
            $userform->respostaindividual102 = $request->respostaindividual102;  

            $userform->perguntaindividual103 = $request->perguntaindividual103;
            $userform->respostaindividual103 = $request->respostaindividual103;  

            $userform->perguntaindividual104 = $request->perguntaindividual104;
            $userform->respostaindividual104 = $request->respostaindividual104;  

            $userform->perguntaindividual105 = $request->perguntaindividual105;
            $userform->respostaindividual105 = $request->respostaindividual105;  

            $userform->perguntaindividual106 = $request->perguntaindividual106;
            $userform->respostaindividual106 = $request->respostaindividual106;

            $userform->perguntaindividual107 = $request->perguntaindividual107;
            $userform->respostaindividual107 = $request->respostaindividual107;

            $userform->perguntaindividual108 = $request->perguntaindividual108;
            $userform->respostaindividual108 = $request->respostaindividual108;

            $userform->perguntaindividual109 = $request->perguntaindividual109;
            $userform->respostaindividual109 = $request->respostaindividual109;

            $userform->perguntaindividual110 = $request->perguntaindividual110;
            $userform->respostaindividual110 = $request->respostaindividual110;

            $userform->perguntaindividual111 = $request->perguntaindividual111;
            $userform->respostaindividual111 = $request->respostaindividual111;

            $userform->perguntaindividual112 = $request->perguntaindividual112;
            $userform->respostaindividual112 = $request->respostaindividual112;

            $userform->perguntaindividual113 = $request->perguntaindividual113;
            $userform->respostaindividual113 = $request->respostaindividual113;

            $userform->perguntaindividual114 = $request->perguntaindividual114;
            $userform->respostaindividual114 = $request->respostaindividual114;

            $userform->perguntaindividual115 = $request->perguntaindividual115;
            $userform->respostaindividual115 = $request->respostaindividual115;

            $userform->perguntaindividual116 = $request->perguntaindividual116;
            $userform->respostaindividual116 = $request->respostaindividual116;

            $userform->perguntaindividual117 = $request->perguntaindividual117;
            $userform->respostaindividual117 = $request->respostaindividual117;

            $userform->perguntaindividual118 = $request->perguntaindividual118;
            $userform->respostaindividual118 = $request->respostaindividual118;

            $userform->perguntaindividual119 = $request->perguntaindividual119;
            $userform->respostaindividual119 = $request->respostaindividual119;

            $userform->save();

        }

        return redirect()->back();

    }

    // FORM INDIVIDUAL TERCEIRO
    public function postformindividualterceiro(Request $request, Usuarios $usuario)
    {
        //dd($request);
        $userform = FormIndividualTerceiro::where('user_id', $usuario->id)->first();
        if ($userform){
            $userform->user_id = $usuario->id;

            $userform->perguntaindividual116 = $request->perguntaindividual116;
            $userform->respostaindividual116 = $request->respostaindividual116; 

            $userform->perguntaindividual117 = $request->perguntaindividual117;
            $userform->respostaindividual117 = $request->respostaindividual117; 

            $userform->perguntaindividual118 = $request->perguntaindividual118;
            $userform->respostaindividual118 = $request->respostaindividual118; 

            $userform->perguntaindividual119 = $request->perguntaindividual119;
            $userform->respostaindividual119 = $request->respostaindividual119; 

            // $userform->perguntaindividual120 = $request->perguntaindividual120;
            // $userform->respostaindividual120 = $request->respostaindividual120; 

            $userform->perguntaindividual121 = $request->perguntaindividual121;
            $userform->respostaindividual121 = $request->respostaindividual121;

            $userform->perguntaindividual122 = $request->perguntaindividual122;
            $userform->respostaindividual122 = $request->respostaindividual122; 

            $userform->perguntaindividual123 = $request->perguntaindividual123;
            $userform->respostaindividual123 = $request->respostaindividual123; 

            $userform->perguntaindividual124 = $request->perguntaindividual124;
            $userform->respostaindividual124 = $request->respostaindividual124; 

            $userform->perguntaindividual125 = $request->perguntaindividual125;
            $userform->respostaindividual125 = $request->respostaindividual125; 

            $userform->perguntaindividual126 = $request->perguntaindividual126;
            $userform->respostaindividual126 = $request->respostaindividual126;

            $userform->perguntaindividual127 = $request->perguntaindividual127;
            $userform->respostaindividual127 = $request->respostaindividual127; 

            $userform->perguntaindividual128 = $request->perguntaindividual128;
            $userform->respostaindividual128 = $request->respostaindividual128; 

            $userform->perguntaindividual129 = $request->perguntaindividual129;
            $userform->respostaindividual129 = $request->respostaindividual129; 

            $userform->perguntaindividual130 = $request->perguntaindividual130;
            $userform->respostaindividual130 = $request->respostaindividual130; 

            $userform->perguntaindividual131 = $request->perguntaindividual131;
            $userform->respostaindividual131 = $request->respostaindividual131;

            $userform->perguntaindividual132 = $request->perguntaindividual132;
            $userform->respostaindividual132 = $request->respostaindividual132; 

            $userform->perguntaindividual133 = $request->perguntaindividual133;
            $userform->respostaindividual133 = $request->respostaindividual133;

            $userform->perguntaindividual134 = $request->perguntaindividual134;
            $userform->respostaindividual134 = $request->respostaindividual134; 

            $userform->perguntaindividual135 = $request->perguntaindividual135;
            $userform->respostaindividual135 = $request->respostaindividual135; 

            $userform->perguntaindividual136 = $request->perguntaindividual136;
            $userform->respostaindividual136 = $request->respostaindividual136; 

            $userform->perguntaindividual137 = $request->perguntaindividual137;
            $userform->respostaindividual137 = $request->respostaindividual137;

            $userform->respostaindividual137a = $request->respostaindividual137a; 

            $userform->respostaindividual137b = $request->respostaindividual137b; 

            $userform->respostaindividual137c = $request->respostaindividual137c; 

            $userform->respostaindividual137d = $request->respostaindividual137d; 

            $userform->respostaindividual137e = $request->respostaindividual137e; 

            $userform->respostaindividual137f = $request->respostaindividual137f; 

            $userform->respostaindividual137g = $request->respostaindividual137g;

            $userform->respostaindividual137h = $request->respostaindividual137h;

            $userform->respostaindividual137i = $request->respostaindividual137i; 


            $userform->perguntaindividual138 = $request->perguntaindividual138;
            $userform->respostaindividual138 = $request->respostaindividual138;

            $userform->perguntaindividual139 = $request->perguntaindividual139;
            $userform->respostaindividual139 = $request->respostaindividual139;

            $userform->perguntaindividual140 = $request->perguntaindividual140;
            $userform->respostaindividual140 = $request->respostaindividual140;

            $userform->update();

        }

        else{
            $userform = new FormIndividualTerceiro();
            $userform->user_id = $usuario->id;

            $userform->perguntaindividual116 = $request->perguntaindividual116;
            $userform->respostaindividual116 = $request->respostaindividual116; 

            $userform->perguntaindividual117 = $request->perguntaindividual117;
            $userform->respostaindividual117 = $request->respostaindividual117; 

            $userform->perguntaindividual118 = $request->perguntaindividual118;
            $userform->respostaindividual118 = $request->respostaindividual118; 

            $userform->perguntaindividual119 = $request->perguntaindividual119;
            $userform->respostaindividual119 = $request->respostaindividual119; 

            // $userform->perguntaindividual120 = $request->perguntaindividual120;
            // $userform->respostaindividual120 = $request->respostaindividual120; 

            $userform->perguntaindividual121 = $request->perguntaindividual121;
            $userform->respostaindividual121 = $request->respostaindividual121;

            $userform->perguntaindividual122 = $request->perguntaindividual122;
            $userform->respostaindividual122 = $request->respostaindividual122; 

            $userform->perguntaindividual123 = $request->perguntaindividual123;
            $userform->respostaindividual123 = $request->respostaindividual123; 

            $userform->perguntaindividual124 = $request->perguntaindividual124;
            $userform->respostaindividual124 = $request->respostaindividual124; 

            $userform->perguntaindividual125 = $request->perguntaindividual125;
            $userform->respostaindividual125 = $request->respostaindividual125; 

            $userform->perguntaindividual126 = $request->perguntaindividual126;
            $userform->respostaindividual126 = $request->respostaindividual126;

            $userform->perguntaindividual127 = $request->perguntaindividual127;
            $userform->respostaindividual127 = $request->respostaindividual127; 

            $userform->perguntaindividual128 = $request->perguntaindividual128;
            $userform->respostaindividual128 = $request->respostaindividual128; 

            $userform->perguntaindividual129 = $request->perguntaindividual129;
            $userform->respostaindividual129 = $request->respostaindividual129; 

            $userform->perguntaindividual130 = $request->perguntaindividual130;
            $userform->respostaindividual130 = $request->respostaindividual130; 

            $userform->perguntaindividual131 = $request->perguntaindividual131;
            $userform->respostaindividual131 = $request->respostaindividual131;

            $userform->perguntaindividual132 = $request->perguntaindividual132;
            $userform->respostaindividual132 = $request->respostaindividual132; 

            $userform->perguntaindividual133 = $request->perguntaindividual133;
            $userform->respostaindividual133 = $request->respostaindividual133;

            $userform->perguntaindividual134 = $request->perguntaindividual134;
            $userform->respostaindividual134 = $request->respostaindividual134; 

            $userform->perguntaindividual135 = $request->perguntaindividual135;
            $userform->respostaindividual135 = $request->respostaindividual135; 

            $userform->perguntaindividual136 = $request->perguntaindividual136;
            $userform->respostaindividual136 = $request->respostaindividual136; 

            $userform->perguntaindividual137 = $request->perguntaindividual137;
            $userform->respostaindividual137 = $request->respostaindividual137;

            $userform->respostaindividual137a = $request->respostaindividual137a; 

            $userform->respostaindividual137b = $request->respostaindividual137b; 

            $userform->respostaindividual137c = $request->respostaindividual137c; 

            $userform->respostaindividual137d = $request->respostaindividual137d; 

            $userform->respostaindividual137e = $request->respostaindividual137e; 

            $userform->respostaindividual137f = $request->respostaindividual137f; 

            $userform->respostaindividual137g = $request->respostaindividual137g;

            $userform->respostaindividual137h = $request->respostaindividual137h;

            $userform->respostaindividual137i = $request->respostaindividual137i; 

            $userform->perguntaindividual138 = $request->perguntaindividual138;
            $userform->respostaindividual138 = $request->respostaindividual138;

            $userform->perguntaindividual139 = $request->perguntaindividual139;
            $userform->respostaindividual139 = $request->respostaindividual139;

            $userform->perguntaindividual140 = $request->perguntaindividual140;
            $userform->respostaindividual140 = $request->respostaindividual140;
    
            $userform->save();

        }

        return redirect()->back();        
    
    }    
       
    
    // FORM FAMILIAR
    public function formfamiliar(Request $request, Usuarios $usuario)
    {
        // dd($usuario);
        return view ('forms.formfamiliar', ['usuario'=>$usuario]);
    }

    public function postformfamiliar(Request $request, Usuarios $usuario)
    {
        //dd($request);
        $userform = FormFamiliar::where('user_id', $usuario->id)->first();
        if ($userform){
            
            $userform->user_id = $usuario->id;

            $userform->perguntafamiliar1 = $request->perguntafamiliar1;
            $userform->respostafamiliar1 = $request->respostafamiliar1;

            $userform->perguntafamiliar2 = $request->perguntafamiliar2;
            $userform->respostafamiliar2 = preg_replace('/[^0-9]/', '', $request->respostafamiliar2);

            $userform->perguntafamiliar3 = $request->perguntafamiliar3;
            $userform->respostafamiliar3 = $request->respostafamiliar3;

            $userform->perguntafamiliar4 = $request->perguntafamiliar4;
            $userform->respostafamiliar4 = $request->respostafamiliar4;

            $userform->perguntafamiliar5 = $request->perguntafamiliar5;
            $userform->respostafamiliar5 = $request->respostafamiliar5;

            $userform->perguntafamiliar6 = $request->perguntafamiliar6;
            $userform->respostafamiliar6 = $request->respostafamiliar6;

            $userform->perguntafamiliar7 = $request->perguntafamiliar7;
            $userform->respostafamiliar7 = $request->respostafamiliar7;

            $userform->perguntafamiliar8 = $request->perguntafamiliar8;
            $userform->respostafamiliar8 = $request->respostafamiliar8;

            $userform->perguntafamiliar9 = $request->perguntafamiliar9;
            $userform->respostafamiliar9 = $request->respostafamiliar9;

            $userform->perguntafamiliar10 = $request->perguntafamiliar10;
            $userform->respostafamiliar10 = $request->respostafamiliar10;

            $userform->perguntafamiliar11 = $request->perguntafamiliar11;
            $userform->respostafamiliar11 = $request->respostafamiliar11;

            $userform->perguntafamiliar12 = $request->perguntafamiliar12;
            $userform->respostafamiliar12 = $request->respostafamiliar12;

            $userform->perguntafamiliar13 = $request->perguntafamiliar13;
            $userform->respostafamiliar13 = $request->respostafamiliar13;

            $userform->perguntafamiliar14 = $request->perguntafamiliar14;
            $userform->respostafamiliar14 = $request->respostafamiliar14;

            $userform->perguntafamiliar15 = $request->perguntafamiliar15;
            $userform->respostafamiliar15 = $request->respostafamiliar15;

            $userform->perguntafamiliar16 = $request->perguntafamiliar16;
            $userform->respostafamiliar16 = $request->respostafamiliar16;

            $userform->perguntafamiliar17 = $request->perguntafamiliar17;
            $userform->respostafamiliar17 = $request->respostafamiliar17;

            $userform->perguntafamiliar18 = $request->perguntafamiliar18;
            $userform->respostafamiliar18 = $request->respostafamiliar18;

            $userform->perguntafamiliar19 = $request->perguntafamiliar19;
            $userform->respostafamiliar19 = $request->respostafamiliar19;

            $userform->perguntafamiliar20 = $request->perguntafamiliar20;
            $userform->respostafamiliar20 = $request->respostafamiliar20;

            $userform->perguntafamiliar21 = $request->perguntafamiliar21;
            $userform->respostafamiliar21 = $request->respostafamiliar21;

            $userform->perguntafamiliar22 = $request->perguntafamiliar22;
            $userform->respostafamiliar22 = $request->respostafamiliar22;

            $userform->perguntafamiliar23 = $request->perguntafamiliar23;
            $userform->respostafamiliar23 = $request->respostafamiliar23;

            $userform->perguntafamiliar24 = $request->perguntafamiliar24;
            $userform->respostafamiliar24 = $request->respostafamiliar24;

            $userform->perguntafamiliar25 = $request->perguntafamiliar25;
            $userform->respostafamiliar25 = $request->respostafamiliar25;

            $userform->perguntafamiliar26 = $request->perguntafamiliar26;
            $userform->respostafamiliar26 = $request->respostafamiliar26;

            $userform->perguntafamiliar27 = $request->perguntafamiliar27;
            $userform->respostafamiliar27 = $request->respostafamiliar27;

            $userform->perguntafamiliar28 = $request->perguntafamiliar28;
            $userform->respostafamiliar28 = $request->respostafamiliar28;

            $userform->perguntafamiliar29 = $request->perguntafamiliar29;
            $userform->respostafamiliar29 = $request->respostafamiliar29;

            $userform->perguntafamiliar30 = $request->perguntafamiliar30;
            $userform->respostafamiliar30 = $request->respostafamiliar30;

            $userform->perguntafamiliar31 = $request->perguntafamiliar31;
            $userform->respostafamiliar31 = $request->respostafamiliar31;

            $userform->perguntafamiliar32 = $request->perguntafamiliar32;
            $userform->respostafamiliar32 = $request->respostafamiliar32;

            $userform->perguntafamiliar33 = $request->perguntafamiliar33;
            $userform->respostafamiliar33 = $request->respostafamiliar33;

            $userform->perguntafamiliar34 = $request->perguntafamiliar34;
            $userform->respostafamiliar34 = $request->respostafamiliar34;

            $userform->perguntafamiliar35 = $request->perguntafamiliar35;
            $userform->respostafamiliar35 = $request->respostafamiliar35;

            $userform->perguntafamiliar36 = $request->perguntafamiliar36;
            $userform->respostafamiliar36 = $request->respostafamiliar36;
            
            $userform->perguntafamiliar37 = $request->perguntafamiliar37;
            $userform->respostafamiliar37 = $request->respostafamiliar37;

            $userform->perguntafamiliar38 = $request->perguntafamiliar38;
            $userform->respostafamiliar38 = $request->respostafamiliar38;

            $userform->perguntafamiliar39 = $request->perguntafamiliar39;
            $userform->respostafamiliar39 = $request->respostafamiliar39;

            $userform->perguntafamiliar40 = $request->perguntafamiliar40;
            $userform->respostafamiliar40 = $request->respostafamiliar40;

            $userform->perguntafamiliar41 = $request->perguntafamiliar41;
            $userform->respostafamiliar41 = $request->respostafamiliar41;

            $userform->perguntafamiliar42 = $request->perguntafamiliar42;
            $userform->respostafamiliar42 = $request->respostafamiliar42;

            
            $userform->update();
        }

        else{
            $userform = new FormFamiliar();
            $userform->user_id = $usuario->id;
            
            $userform->perguntafamiliar1 = $request->perguntafamiliar1;
            $userform->respostafamiliar1 = $request->respostafamiliar1;

            $userform->perguntafamiliar2 = $request->perguntafamiliar2;
            $userform->respostafamiliar2 = $request->respostafamiliar2;

            $userform->perguntafamiliar3 = $request->perguntafamiliar3;
            $userform->respostafamiliar3 = $request->respostafamiliar3;

            $userform->perguntafamiliar4 = $request->perguntafamiliar4;
            $userform->respostafamiliar4 = $request->respostafamiliar4;

            $userform->perguntafamiliar5 = $request->perguntafamiliar5;
            $userform->respostafamiliar5 = $request->respostafamiliar5;

            $userform->perguntafamiliar6 = $request->perguntafamiliar6;
            $userform->respostafamiliar6 = $request->respostafamiliar6;

            $userform->perguntafamiliar7 = $request->perguntafamiliar7;
            $userform->respostafamiliar7 = $request->respostafamiliar7;

            $userform->perguntafamiliar8 = $request->perguntafamiliar8;
            $userform->respostafamiliar8 = $request->respostafamiliar8;

            $userform->perguntafamiliar9 = $request->perguntafamiliar9;
            $userform->respostafamiliar9 = $request->respostafamiliar9;

            $userform->perguntafamiliar10 = $request->perguntafamiliar10;
            $userform->respostafamiliar10 = $request->respostafamiliar10;

            $userform->perguntafamiliar11 = $request->perguntafamiliar11;
            $userform->respostafamiliar11 = $request->respostafamiliar11;

            $userform->perguntafamiliar12 = $request->perguntafamiliar12;
            $userform->respostafamiliar12 = $request->respostafamiliar12;

            $userform->perguntafamiliar13 = $request->perguntafamiliar13;
            $userform->respostafamiliar13 = $request->respostafamiliar13;

            $userform->perguntafamiliar14 = $request->perguntafamiliar14;
            $userform->respostafamiliar14 = $request->respostafamiliar14;

            $userform->perguntafamiliar15 = $request->perguntafamiliar15;
            $userform->respostafamiliar15 = $request->respostafamiliar15;

            $userform->perguntafamiliar16 = $request->perguntafamiliar16;
            $userform->respostafamiliar16 = $request->respostafamiliar16;

            $userform->perguntafamiliar17 = $request->perguntafamiliar17;
            $userform->respostafamiliar17 = $request->respostafamiliar17;

            $userform->perguntafamiliar18 = $request->perguntafamiliar18;
            $userform->respostafamiliar18 = $request->respostafamiliar18;

            $userform->perguntafamiliar19 = $request->perguntafamiliar19;
            $userform->respostafamiliar19 = $request->respostafamiliar19;

            $userform->perguntafamiliar20 = $request->perguntafamiliar20;
            $userform->respostafamiliar20 = $request->respostafamiliar20;

            $userform->perguntafamiliar21 = $request->perguntafamiliar21;
            $userform->respostafamiliar21 = $request->respostafamiliar21;

            $userform->perguntafamiliar22 = $request->perguntafamiliar22;
            $userform->respostafamiliar22 = $request->respostafamiliar22;

            $userform->perguntafamiliar23 = $request->perguntafamiliar23;
            $userform->respostafamiliar23 = $request->respostafamiliar23;

            $userform->perguntafamiliar24 = $request->perguntafamiliar24;
            $userform->respostafamiliar24 = $request->respostafamiliar24;

            $userform->perguntafamiliar25 = $request->perguntafamiliar25;
            $userform->respostafamiliar25 = $request->respostafamiliar25;

            $userform->perguntafamiliar26 = $request->perguntafamiliar26;
            $userform->respostafamiliar26 = $request->respostafamiliar26;

            $userform->perguntafamiliar27 = $request->perguntafamiliar27;
            $userform->respostafamiliar27 = $request->respostafamiliar27;

            $userform->perguntafamiliar28 = $request->perguntafamiliar28;
            $userform->respostafamiliar28 = $request->respostafamiliar28;

            $userform->perguntafamiliar29 = $request->perguntafamiliar29;
            $userform->respostafamiliar29 = $request->respostafamiliar29;

            $userform->perguntafamiliar30 = $request->perguntafamiliar30;
            $userform->respostafamiliar30 = $request->respostafamiliar30;

            $userform->perguntafamiliar31 = $request->perguntafamiliar31;
            $userform->respostafamiliar31 = $request->respostafamiliar31;

            $userform->perguntafamiliar32 = $request->perguntafamiliar32;
            $userform->respostafamiliar32 = $request->respostafamiliar32;

            $userform->perguntafamiliar33 = $request->perguntafamiliar33;
            $userform->respostafamiliar33 = $request->respostafamiliar33;

            $userform->perguntafamiliar34 = $request->perguntafamiliar34;
            $userform->respostafamiliar34 = $request->respostafamiliar34;

            $userform->perguntafamiliar35 = $request->perguntafamiliar35;
            $userform->respostafamiliar35 = $request->respostafamiliar35;

            $userform->perguntafamiliar36 = $request->perguntafamiliar36;
            $userform->respostafamiliar36 = $request->respostafamiliar36;
            
            $userform->perguntafamiliar37 = $request->perguntafamiliar37;
            $userform->respostafamiliar37 = $request->respostafamiliar37;

            $userform->perguntafamiliar38 = $request->perguntafamiliar38;
            $userform->respostafamiliar38 = $request->respostafamiliar38;

            $userform->perguntafamiliar39 = $request->perguntafamiliar39;
            $userform->respostafamiliar39 = $request->respostafamiliar39;

            $userform->perguntafamiliar40 = $request->perguntafamiliar40;
            $userform->respostafamiliar40 = $request->respostafamiliar40;

            $userform->perguntafamiliar41 = $request->perguntafamiliar41;
            $userform->respostafamiliar41 = $request->respostafamiliar41;

            $userform->perguntafamiliar42 = $request->perguntafamiliar42;
            $userform->respostafamiliar42 = $request->respostafamiliar42;


            $userform->save();

        }

        return redirect()->back();
    }

    
    // FORM ANTROPROMETRIA
    public function formantropometria(Request $request, Usuarios $usuario)
    {
        // dd($usuario);
        return view ('forms.formantropometria', ['usuario'=>$usuario]);
    }

    public function postformantropometria(Request $request, Usuarios $usuario)
    {
        //dd($request);
        $userform = FormAntropometria::where('user_id', $usuario->id)->first();
        if ($userform){
            
            $userform->user_id = $usuario->id;

            $userform->perguntaantropometria1 = $request->perguntaantropometria1;
            $userform->respostaantropometria1 = $request->respostaantropometria1;

            $userform->perguntaantropometria2 = $request->perguntaantropometria2;
            $userform->respostaantropometria2 = $request->respostaantropometria2;

            $userform->perguntaantropometria3 = $request->perguntaantropometria3;
            $userform->respostaantropometria3 = $request->respostaantropometria3;

            $userform->perguntaantropometria4 = $request->perguntaantropometria4;
            $userform->respostaantropometria4 = preg_replace('/[^0-9]/', '', $request->respostaantropometria4);

            $userform->perguntaantropometria5 = $request->perguntaantropometria5;
            $userform->respostaantropometria5 = preg_replace('/[^0-9]/', '', $request->respostaantropometria5);

            $userform->perguntaantropometria6 = $request->perguntaantropometria6;
            $userform->respostaantropometria6 = $request->respostaantropometria6;

            $userform->perguntaantropometria7 = $request->perguntaantropometria7;
            $userform->respostaantropometria7 = $request->respostaantropometria7;

            $userform->perguntaantropometria8 = $request->perguntaantropometria8;
            $userform->respostaantropometria8 = $request->respostaantropometria8;
            
            $userform->update();
        }

        else{
            $userform = new FormAntropometria();
            $userform->user_id = $usuario->id;
            
            $userform->perguntaantropometria1 = $request->perguntaantropometria1;
            $userform->respostaantropometria1 = $request->respostaantropometria1;

            $userform->perguntaantropometria2 = $request->perguntaantropometria2;
            $userform->respostaantropometria2 = $request->respostaantropometria2;

            $userform->perguntaantropometria3 = $request->perguntaantropometria3;
            $userform->respostaantropometria3 = $request->respostaantropometria3;

            $userform->perguntaantropometria4 = $request->perguntaantropometria4;
            $userform->respostaantropometria4 = $request->respostaantropometria4;

            $userform->perguntaantropometria5 = $request->perguntaantropometria5;
            $userform->respostaantropometria5 = $request->respostaantropometria5;

            $userform->perguntaantropometria6 = $request->perguntaantropometria6;
            $userform->respostaantropometria6 = $request->respostaantropometria6;

            $userform->perguntaantropometria7 = $request->perguntaantropometria7;
            $userform->respostaantropometria7 = $request->respostaantropometria7;

            $userform->perguntaantropometria8 = $request->perguntaantropometria8;
            $userform->respostaantropometria8 = $request->respostaantropometria8;

            $userform->save();

        }

        return redirect()->back();
    }


    // FORM MSNI
    public function formmsni(Request $request, Usuarios $usuario)
    {
        // dd($usuario);
        return view ('forms.formmsni', ['usuario'=>$usuario]);
    }

    public function postformmsni(Request $request, Usuarios $usuario)
    {
        // dd($request);

        $userform = FormMsni::where('user_id', $usuario->id)->first();
        if ($userform){
            
            $userform->user_id = $usuario->id;

            $userform->perguntamsni1 = $request->perguntamsni1;
            $userform->respostamsni1 = $request->respostamsni1;

            $userform->perguntamsni2 = $request->perguntamsni2;
            $userform->respostamsni2 = $request->respostamsni2;

            $userform->perguntamsni3 = $request->perguntamsni3;
            $userform->respostamsni3 = $request->respostamsni3;

            $userform->perguntamsni4 = $request->perguntamsni4;
            $userform->respostamsni4 = $request->respostamsni4;

            $userform->perguntamsni5 = $request->perguntamsni5;
            $userform->respostamsni5 = $request->respostamsni5;

            $userform->perguntamsni6 = $request->perguntamsni6;
            $userform->respostamsni6 = $request->respostamsni6;

            $userform->perguntamsni7 = $request->perguntamsni7;
            $userform->respostamsni7 = $request->respostamsni7;

            $userform->perguntamsni8 = $request->perguntamsni8;
            $userform->respostamsni8 = $request->respostamsni8;

            $userform->perguntamsni9 = $request->perguntamsni9;
            $userform->respostamsni9 = $request->respostamsni9;

            $userform->perguntamsni10 = $request->perguntamsni10;
            $userform->respostamsni10 = $request->respostamsni10;

            $userform->perguntamsni11 = $request->perguntamsni11;
            $userform->respostamsni11 = $request->respostamsni11;

            $userform->perguntamsni12 = $request->perguntamsni12;
            $userform->respostamsni12 = $request->respostamsni12;

            $userform->perguntamsni13 = $request->perguntamsni13;
            $userform->respostamsni13 = $request->respostamsni13;

            $userform->perguntamsni14 = $request->perguntamsni14;
            $userform->respostamsni14 = $request->respostamsni14;

            $userform->perguntamsni15 = $request->perguntamsni15;
            $userform->respostamsni15 = $request->respostamsni15;

            $userform->perguntamsni16 = $request->perguntamsni16;
            $userform->respostamsni16 = $request->respostamsni16;

            $userform->perguntamsni17 = $request->perguntamsni17;
            $userform->respostamsni17 = $request->respostamsni17;

            $userform->perguntamsni18 = $request->perguntamsni18;
            $userform->respostamsni18 = $request->respostamsni18;

            $userform->perguntamsni19 = $request->perguntamsni19;
            $userform->respostamsni19 = $request->respostamsni19;

            $userform->respostamsni19a = $request->respostamsni19a;

            $userform->respostamsni19b = $request->respostamsni19b;

            $userform->respostamsni19c = $request->respostamsni19c;

            $userform->respostamsni19d = $request->respostamsni19d;

            $userform->perguntamsni20 = $request->perguntamsni20;
            $userform->respostamsni20 = $request->respostamsni20;

            $userform->perguntamsni21 = $request->perguntamsni21;
            $userform->respostamsni21 = $request->respostamsni21;

            $userform->respostamsni21a = $request->respostamsni21a;

            $userform->respostamsni21b = $request->respostamsni21b;

            $userform->respostamsni21c = $request->respostamsni21c;

            $userform->respostamsni21d = $request->respostamsni21d;

            $userform->perguntamsni22 = $request->perguntamsni22;
            $userform->respostamsni22 = $request->respostamsni22;

            $userform->perguntamsni23 = $request->perguntamsni23;
            $userform->respostamsni23 = $request->respostamsni23;
            
            $userform->perguntamsni24 = $request->perguntamsni24;
            $userform->respostamsni24 = $request->respostamsni24;

            $userform->perguntamsni25 = $request->perguntamsni25;
            $userform->respostamsni25 = $request->respostamsni25;

            $userform->perguntamsni26 = $request->perguntamsni26;
            $userform->respostamsni26 = $request->respostamsni26;

            $userform->perguntamsni27 = $request->perguntamsni27;
            $userform->respostamsni27 = $request->respostamsni27;

            $userform->perguntamsni28 = $request->perguntamsni28;
            $userform->respostamsni28 = $request->respostamsni28;

            $userform->perguntamsni29 = $request->perguntamsni29;
            $userform->respostamsni29 = $request->respostamsni29;

            $userform->perguntamsni30 = $request->perguntamsni30;
            $userform->respostamsni30 = $request->respostamsni30;

            $userform->perguntamsni31 = $request->perguntamsni31;
            $userform->respostamsni31 = $request->respostamsni31;

            
            $userform->update();
        }

        else{
            $userform = new FormMsni();
            $userform->user_id = $usuario->id;
            
            $userform->perguntamsni1 = $request->perguntamsni1;
            $userform->respostamsni1 = $request->respostamsni1;

            $userform->perguntamsni2 = $request->perguntamsni2;
            $userform->respostamsni2 = $request->respostamsni2;

            $userform->perguntamsni3 = $request->perguntamsni3;
            $userform->respostamsni3 = $request->respostamsni3;

            $userform->perguntamsni4 = $request->perguntamsni4;
            $userform->respostamsni4 = $request->respostamsni4;

            $userform->perguntamsni5 = $request->perguntamsni5;
            $userform->respostamsni5 = $request->respostamsni5;

            $userform->perguntamsni6 = $request->perguntamsni6;
            $userform->respostamsni6 = $request->respostamsni6;

            $userform->perguntamsni7 = $request->perguntamsni7;
            $userform->respostamsni7 = $request->respostamsni7;

            $userform->perguntamsni8 = $request->perguntamsni8;
            $userform->respostamsni8 = $request->respostamsni8;

            $userform->perguntamsni9 = $request->perguntamsni9;
            $userform->respostamsni9 = $request->respostamsni9;

            $userform->perguntamsni10 = $request->perguntamsni10;
            $userform->respostamsni10 = $request->respostamsni10;

            $userform->perguntamsni11 = $request->perguntamsni11;
            $userform->respostamsni11 = $request->respostamsni11;

            $userform->perguntamsni12 = $request->perguntamsni12;
            $userform->respostamsni12 = $request->respostamsni12;

            $userform->perguntamsni13 = $request->perguntamsni13;
            $userform->respostamsni13 = $request->respostamsni13;

            $userform->perguntamsni14 = $request->perguntamsni14;
            $userform->respostamsni14 = $request->respostamsni14;

            $userform->perguntamsni15 = $request->perguntamsni15;
            $userform->respostamsni15 = $request->respostamsni15;

            $userform->perguntamsni16 = $request->perguntamsni16;
            $userform->respostamsni16 = $request->respostamsni16;

            $userform->perguntamsni17 = $request->perguntamsni17;
            $userform->respostamsni17 = $request->respostamsni17;

            $userform->perguntamsni18 = $request->perguntamsni18;
            $userform->respostamsni18 = $request->respostamsni18;

            $userform->perguntamsni19 = $request->perguntamsni19;
            $userform->respostamsni19 = $request->respostamsni19;

            $userform->respostamsni19a = $request->respostamsni19a;

            $userform->respostamsni19b = $request->respostamsni19b;

            $userform->respostamsni19c = $request->respostamsni19c;

            $userform->respostamsni19d = $request->respostamsni19d;

            $userform->perguntamsni20 = $request->perguntamsni20;
            $userform->respostamsni20 = $request->respostamsni20;

            $userform->perguntamsni21 = $request->perguntamsni21;
            $userform->respostamsni21 = $request->respostamsni21;

            $userform->respostamsni21a = $request->respostamsni21a;

            $userform->respostamsni21b = $request->respostamsni21b;

            $userform->respostamsni21c = $request->respostamsni21c;

            $userform->respostamsni21d = $request->respostamsni21d;

            $userform->perguntamsni22 = $request->perguntamsni22;
            $userform->respostamsni22 = $request->respostamsni22;

            $userform->perguntamsni23 = $request->perguntamsni23;
            $userform->respostamsni23 = $request->respostamsni23;
            
            $userform->perguntamsni24 = $request->perguntamsni24;
            $userform->respostamsni24 = $request->respostamsni24;

            $userform->perguntamsni25 = $request->perguntamsni25;
            $userform->respostamsni25 = $request->respostamsni25;

            $userform->perguntamsni26 = $request->perguntamsni26;
            $userform->respostamsni26 = $request->respostamsni26;

            $userform->perguntamsni27 = $request->perguntamsni27;
            $userform->respostamsni27 = $request->respostamsni27;

            $userform->perguntamsni28 = $request->perguntamsni28;
            $userform->respostamsni28 = $request->respostamsni28;

            $userform->perguntamsni29 = $request->perguntamsni29;
            $userform->respostamsni29 = $request->respostamsni29;

            $userform->perguntamsni30 = $request->perguntamsni30;
            $userform->respostamsni30 = $request->respostamsni30;

            $userform->perguntamsni31 = $request->perguntamsni31;
            $userform->respostamsni31 = $request->respostamsni31;


            $userform->save();

        }

        return redirect()->back();
    }
    

    // FORM PRESSÃO
    public function formpressao(Request $request, Usuarios $usuario)
    {
        // dd($usuario);
        return view ('forms.formpressao', ['usuario'=>$usuario]);
    }

    public function postformpressao(Request $request, Usuarios $usuario)
    {
        
        //dd($request);
        $userform = FormPressao::where('user_id', $usuario->id)->first();
        if ($userform){
            
            $userform->user_id = $usuario->id;

            // $userform->perguntapressao1 = $request->perguntapressao1;
            // $userform->respostapressao1 = $request->respostapressao1;
            

            $userform->perguntapressao2 = $request->perguntapressao2;
            $userform->respostapressao2 = preg_replace('/[^0-9]/', '', $request->respostapressao2);

            $userform->perguntapressao3 = $request->perguntapressao3;
            $userform->respostapressao3 = $request->respostapressao3;

            $userform->perguntapressao4 = $request->perguntapressao4;
            $userform->respostapressao4 = $request->respostapressao4;

            $userform->perguntapressao5 = $request->perguntapressao5;
            $userform->respostapressao5 = $request->respostapressao5;

            $userform->perguntapressao6 = $request->perguntapressao6;
            $userform->respostapressao6 = $request->respostapressao6;

            $userform->perguntapressao7 = $request->perguntapressao7;
            $userform->respostapressao7 = $request->respostapressao7;

            $userform->perguntapressao8 = $request->perguntapressao8;
            $userform->respostapressao8 = $request->respostapressao8;

            $userform->perguntapressao9 = $request->perguntapressao9;
            $userform->respostapressao9 = $request->respostapressao9;

            $userform->perguntapressao10 = $request->perguntapressao10;
            $userform->respostapressao10 = $request->respostapressao10;

            $userform->perguntapressao11 = $request->perguntapressao11;
            $userform->respostapressao11 = $request->respostapressao11;

            $userform->perguntapressao12 = $request->perguntapressao12;
            $userform->respostapressao12 = $request->respostapressao12;

            $userform->perguntapressao13 = $request->perguntapressao13;
            $userform->respostapressao13 = $request->respostapressao13;

            $userform->update();
        }

        else{
            $userform = new FormPressao();
            $userform->user_id = $usuario->id;
            
            // $userform->perguntapressao1 = $request->perguntapressao1;
            // $userform->respostapressao1 = $request->respostapressao1;

            $userform->perguntapressao2 = $request->perguntapressao2;
            $userform->respostapressao2 = $request->respostapressao2;

            $userform->perguntapressao3 = $request->perguntapressao3;
            $userform->respostapressao3 = $request->respostapressao3;

            $userform->perguntapressao4 = $request->perguntapressao4;
            $userform->respostapressao4 = $request->respostapressao4;

            $userform->respostapressao5 = $request->respostapressao5;
            $userform->respostapressao5 = $request->respostapressao5;

            $userform->perguntapressao6 = $request->perguntapressao6;
            $userform->respostapressao6 = $request->respostapressao6;

            $userform->perguntapressao7 = $request->perguntapressao7;
            $userform->respostapressao7 = $request->respostapressao7;

            $userform->perguntapressao8 = $request->perguntapressao8;
            $userform->respostapressao8 = $request->respostapressao8;

            $userform->perguntapressao9 = $request->perguntapressao9;
            $userform->respostapressao9 = $request->respostapressao9;

            $userform->perguntapressao10 = $request->perguntapressao10;
            $userform->respostapressao10 = $request->respostapressao10;

            $userform->perguntapressao11 = $request->perguntapressao11;
            $userform->respostapressao11 = $request->respostapressao11;

            $userform->perguntapressao12 = $request->perguntapressao12;
            $userform->respostapressao12 = $request->respostapressao12;

            $userform->perguntapressao13 = $request->perguntapressao13;
            $userform->respostapressao13 = $request->respostapressao13;


            $userform->save();

        }

        return redirect()->back();

    }


    // EDITAR PERFIL
    public function editarperfil(Request $request, Usuarios $usuario)
    {
        // dd($usuario);
        $unidades=Unidade::all();

        return view ('forms.editarperfil',['usuario'=>$usuario, 'unidades'=>$unidades]);
        
    } 

    public function posteditarperfil(Request $request, Usuarios $usuario)
    {
        //dd($request->perfilnasc);
        $usuario->name=$request->perfilnome;
        $usuario->cpf==preg_replace('/[^0-9]/', '',$request->cpf);
        $usuario->rg=$request->rg;
        $usuario->datanasc=preg_replace('/[^0-9]/', '', $request->perfilnasc);
        $usuario->genero=$request->perfilgenero;
        $usuario->mae=$request->perfilmae;


        $usuario->email=$request->perfilemail;
        $usuario->telefone=preg_replace('/[^0-9]/', '', $request->perfiltelefone);
        $usuario->telefonefixo=preg_replace('/[^0-9]/', '', $request->perfiltelefonefixo);
        $usuario->telfamiliar=preg_replace('/[^0-9]/', '', $request->perfiltelefonefamiliar);
        $usuario->perfilnomefamiliar=$request->perfilnomefamiliar;
        $usuario->perfilparentescofamiliar=$request->perfilparentescofamiliar;
        // $usuario->altura=preg_replace('/[^0-9]/', '', $request->perfilaltura);

        $usuario->estado=$request->perfilestado;
        $usuario->cidade=$request->perfilcidade;
        $usuario->bairro=$request->perfilbairro;
        $usuario->cep=preg_replace('/[^0-9]/', '', $request->perfilcep);        
        $usuario->rua=$request->perfilrua;
        $usuario->numcasa=$request->perfilcasa;

        $usuario->diareuniao=$request->diareuniao;
        $usuario->horareuniao=$request->horareuniao;
        

        $usuario->sus=$request->perfilsus;
        $usuario->idnumero=$request->perfilid;
        $usuario->numequipe=$request->perfilequipe;
        $usuario->microarea=$request->perfilmircoarea;
        $usuario->numfamilia=$request->perfilfamilia;
        $usuario->unidade=$request->perfilunidade;
        $usuario->perfildistrito=$request->perfildistrito;
        
        $usuario->update();

        return redirect()->back()->with('status', "Usuário $request->perfilnome teve sua ficha atualizada !");

    }




}
