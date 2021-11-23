@extends('layouts.app')

@section('content')

<div class="text-center mt-5" id="btn-impressao">
        <a href="{{route('form.laboratorio',['usuario'=>$usuario->id])}}"><button class="btn btn-secondary p-3" type="button">VOLTAR</button></a>
        <br>
        <button class="btn btn-primary p-3" name="b_print" type="button" class="ipt" onClick="printdiv('div_print');">APERTE PARA IMPRIMIR</button>
</div>

<div class="container" id="div_print">

    @if (session('status'))
         <div class="alert alert-success" role="alert">
                {{ session('status') }}
        </div>
    @endif


    <table class="table table-bordered ">
        <h2 class="text-center">EBSERH</h2>
        <p class="text-center">
            COMPLEXO HOSPITALAR UFPA-EBSERH <br>
            UNIDADE HOSPITALAR JOÃO BARROS BARRETO <br>
            DIVISÃO DE APOIO DIAGNÓSTICO E TERAPÊUTICO <br>
            UNIDAE LABORTÓRIO DE ANÁLISE CLÍNICAS 
        </p>
        <thead>
            <tr>
            <!-- <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th> -->
            </tr>
        </thead>

        <tbody>
            <tr>
                <td scope="row" colspan="4"><b>Nome Completo:</b> {{$usuario->name}}</td>
            </tr>
            <tr>
                <th scope="row" colspan="2"><b>DATA DE NASCIMENTO:</b>{{date('d/m/Y', strtotime($usuario->datanasc?$usuario->datanasc:''))}}</th>
                <td  colspan="1"><b>SEXO:</b> ( <b>{{$usuario->genero == '1' ? 'X':''}}</b> ) FEM ( <b>{{$usuario->genero == '2' ? 'X':''}}</b> ) MASC </td>
                <td colspan="1"><b>TELEFONE:</b> <span id="telefone">{{$usuario->telefone}}</span></td>
            </tr>
            <tr>
            <th scope="row" colspan="1"><b>CPF:</b> <span id="cpf">{{$usuario->cpf}}</span></th>
            <td colspan="2"><b>RG: </b>{{$usuario->rg}}</td>
            <td colspan="1"><b>SUS: </b>{{$usuario->sus}}</td>
            </tr>
            <tr>
            <th scope="row"><b>MÃE:</b>  {{$usuario->mae}}</th>
            <td colspan="3"><b>ENDEREÇO: </b>{{$usuario->rua}} - {{$usuario->numcasa}} - {{$usuario->bairro}}</td>
            </tr>
            <tr>
            <th scope="row" colspan="4"><b>PROCEDÊNCIA 29 - PESQUISA AMANDABA - CNPQ</b></th>
            </tr>
            <tr>
            <th scope="row" colspan="4"  style="height: 200px;"><b>MEDICAMENTOS EM USO:</b></th>
            </tr>
            <tr>
                <th scope="row" colspan="4">
                    <b>EXAMES SOLICITADOS:</b> colesterol total, colesterol-HDL e triglicerídeos séricos e  
                    glicemia em jejum, hemoglobina glicada (HbA1c), <br> microalbuminúria será realizada 
                    em amostra urinária com correção pela creatinina, creatinina sérica.
                </th>
            </tr>
            <tr>
                <td scope="row" colspan="2"> <b>DATA DE SOLICITAÇÃO:</b></td>
                <td colspan="2" ><b> MÉDICO:</b> Profa. Dra. Maria do Socorro Castelo Branco de Oliveira Bastos CRM-PA 3890)</td>
            </tr>
            <tr>
                <td scope="row" colspan="2"><b>DATA DA COLETA:</b> {{date('d/m/Y', strtotime($usuario->formlaboratorio()?$usuario->formlaboratorio()->respostalaboratorio1:''))}}</td>
                <td colspan="2"><b> NOME DO COLETADOR:</b> {{$usuario->formlaboratorio()?$usuario->formlaboratorio()->respostalaboratorio16:''}}</td>
            </tr>
            <tr>
                <td scope="row" colspan="4" style="height: 200px;"><b>OBS. DE COLETA:</b></td>
            </tr>
        </tbody>
    </table>

</div>


    <script language="javascript">
        function printdiv(printpage) {
            var headstr = "<html><head><title></title></head><body>";
            var footstr = "<table></table></body>";
            var newstr = document.all.item(printpage).innerHTML;
            var oldstr = document.body.innerHTML;
            document.body.innerHTML = headstr + newstr + footstr;
            window.print();
            document.body.innerHTML = oldstr;
            return false;
        }
    </script>

    <script>
        $(document).ready(function($){
            $('#cpf').mask('000.000.000-00', {reverse: true});
            $('#telefone').mask('(00) 00000-0000');
            $('#telefone2').mask('(00) 00000-0000');
            $('#cep').mask('00000-000');
        });
    </script>

@endsection