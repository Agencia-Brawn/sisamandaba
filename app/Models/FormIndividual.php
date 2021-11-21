<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FormIndividual extends Model
{
    public $qtdperguntas = 9;
    public function formulario1prenchido()
    {
        $contador = 0;
        $this->respostaindividual1 != null ? $contador++ : '';
        $this->respostaindividual2 != null ? $contador++ : '';
        $this->respostaindividual3 != null ? $contador++ : '';
        $this->respostaindividual4 != null ? $contador++ : '';
        $this->respostaindividual24 != null ? $contador++ : '';
        $this->respostaindividual25 != null ? $contador++ : '';
        $this->respostaindividual26 != null ? $contador++ : '';
        $this->respostaindividual27 != null ? $contador++ : '';
        $this->respostaindividual28 != null ? $contador++ : '';

        return $contador;
    }

}
