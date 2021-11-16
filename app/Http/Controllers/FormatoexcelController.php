<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\FormantropometriaExport;
use App\Exports\FormfamiliarExport;
use App\Exports\FormiciqExport;
use App\Exports\FormindividualExport;
use App\Exports\FormindividualprimeiroExport;
use App\Exports\FormindividualsegundoExport;
use App\Exports\FormindividualterceiroExport;
use App\Exports\FormlaboratorioExport;
use App\Exports\FormmsniExport;
use App\Exports\FormpressaoExport;
use App\Exports\FormperfilExport;




class FormatoexcelController extends Controller
{

    public function formularioperfil() 
    {
        return Excel::download(new FormperfilExport, 'Ficha-Usuarios.xlsx');
    }

    public function formularioantropometria() 
    {
        return Excel::download(new FormantropometriaExport, 'Formulario-Antropometria.xlsx');
    }

    public function formulariofamiliar() 
    {
        return Excel::download(new FormfamiliarExport, 'Formulario-Familiar.xlsx');
    }

    public function formularioiciq() 
    {
        return Excel::download(new FormiciqExport, 'Formulario-ICIQ.xlsx');
    }

    public function formularioindividual() 
    {
        return Excel::download(new FormindividualExport, 'Formulario-Idividual-Parte-1.xlsx');
    }

    public function formularioindividualprimeiro() 
    {
        return Excel::download(new FormindividualprimeiroExport, 'Formulario-Idividual-Parte-2.xlsx');
    }

    public function formularioindividualsegundo() 
    {
        return Excel::download(new FormindividualsegundoExport, 'Formulario-Idividual-Parte-3.xlsx');
    }

    public function formularioindividualterceiro() 
    {
        return Excel::download(new FormindividualterceiroExport, 'Formulario-Idividual-Parte-4.xlsx');
    }

    public function formulariolaboratorio() 
    {
        return Excel::download(new FormlaboratorioExport, 'Formulario-Laboratorio.xlsx');
    }

    public function formulariomsni() 
    {
        return Excel::download(new FormmsniExport, 'Formulario-MSNI.xlsx');
    }

    public function formulariopressao() 
    {
        return Excel::download(new FormpressaoExport, 'Formulario-Pressao.xlsx');
    }
}
