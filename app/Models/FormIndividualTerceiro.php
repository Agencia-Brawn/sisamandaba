<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FormIndividualTerceiro extends Model
{
    public $qtdperguntas = 9;
    public function formulario4prenchido()
    {
        $contador = 0;
        $this->respostaindividual120 != null ? $contador++ : '';
        $this->respostaindividual121 != null ? $contador++ : '';
        $this->respostaindividual124 != null ? $contador++ : '';
        $this->respostaindividual131 != null ? $contador++ : '';
        $this->respostaindividual132 != null ? $contador++ : '';
        $this->respostaindividual133 != null ? $contador++ : '';
        $this->respostaindividual134 != null ? $contador++ : '';
        $this->respostaindividual135 != null ? $contador++ : '';
        $this->respostaindividual137 != null ? $contador++ : '';

        return $contador;
    }
}
