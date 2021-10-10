<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Unidade;
use App\Models\Formulario;
use App\Models\FormLaboratorio;
use App\Models\FormIciq;
use App\Models\FormAntropometria;
use App\Models\FormPressao;
use App\Models\FormFamiliar;
use App\Models\FormMsni;
use App\Models\FormIndividualPrimeiro;
use App\Models\FormIndividualSegundo;
use App\Models\FormIndividualTerceiro;

class Usuarios extends Model
{

    protected $fillable = ['unidade'];
    protected $connection = 'app';
    protected $table = 'users';

    public function unidade()
    {
        $unidade = $this->belongsTo(Unidade::class, 'unidade')->first();
        if($unidade){
            return $unidade;
        }
        return false; 


    }

    public function formulario()
    {
        $form = Formulario::where('user_id',$this->id)->first();
        return $form;
    }

    // FUNÇÃO FORM LABORATORIO RETORNO NO INPUT
    public function formlaboratorio()
    {
        $form = FormLaboratorio::where('user_id',$this->id)->first();
        if ($form){
            return $form;
        }

        return false;
    }
    
    // FUNÇÃO FORM ICIQ RETORNO NO INPUT
    public function formiciq()
    {
        $form = FormIciq::where('user_id',$this->id)->first();
        if ($form){
            return $form;
        }
        return false;
    }

    // FUNÇÃO FORM ANTROPOMETRIA RETORNO NO INPUT
    public function formantropometria()
    {
        $form = FormAntropometria::where('user_id',$this->id)->first();
        if ($form){
            return $form;
        }
        return false;
    }

    // FUNÇÃO FORM PRESSÃO RETORNO NO INPUT
    public function formpressao()
    {
        $form = FormPressao::where('user_id',$this->id)->first();
        if($form){
            return $form;
        }
        return false; 
    }

    // FUNÇÃO FORM FAMILIAR RETORNO NO INPUT
    public function formfamiliar()
    {
        $form = FormFamiliar::where('user_id',$this->id)->first();
        if ($form){
            return $form;
        }
        return false;
    }

    // FUNÇÃO FORM MSNI RETORNO NO INPUT
    public function formmsni()
    {
        $form = FormMsni::where('user_id',$this->id)->first();
        if($form){
            return $form;
        }
        return false; 
    }

    // FUNÇÃO FORM INDIVIDUAL RETORNO NO INPUT
    public function formindividual()
    {
        $form = FormIndividual::where('user_id',$this->id)->first();
        if($form){
            return $form;
        }
        return false;
    }

    // FUNÇÃO FORM INDIVIDUAL PRIMEIRO
    public function formindividualprimeiro()
    {
        $form = FormIndividualPrimeiro::where('user_id',$this->id)->first();
        if($form){
            return $form;
        }
        return false;
    }

    // FUNÇÃO FORM INDIVIDUAL SEGUNDO
    public function formindividualsegundo()
    {
        $form = FormIndividualSegundo::where('user_id',$this->id)->first();
        if($form){
            return $form;
        }
        return false;
    }

    // FUNÇÃO FORM INDIVIDUAL TERCEIRO
    public function formindividualterceiro()
    {
        $form = FormIndividualTerceiro::where('user_id',$this->id)->first();
        if($form){
            return $form;
        }
        return false;
    }
}