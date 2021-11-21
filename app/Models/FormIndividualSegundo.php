<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FormIndividualSegundo extends Model
{
    public $qtdperguntas = 18;
    public function formulario3prenchido()
    {
        $contador = 0;
        $this->respostaindividual71 != null ? $contador++ : '';
        $this->respostaindividual74 != null ? $contador++ : '';
        $this->respostaindividual77 != null ? $contador++ : '';
        $this->respostaindividual78 != null ? $contador++ : '';
        $this->respostaindividual79 != null ? $contador++ : '';
        $this->respostaindividual80 != null ? $contador++ : '';
        $this->respostaindividual81 != null ? $contador++ : '';
        $this->respostaindividual82 != null ? $contador++ : '';
        $this->respostaindividual83 != null ? $contador++ : '';
        $this->respostaindividual84 != null ? $contador++ : '';
        $this->respostaindividual86 != null ? $contador++ : '';
        $this->respostaindividual100 != null ? $contador++ : '';
        $this->respostaindividual101 != null ? $contador++ : '';
        $this->respostaindividual103 != null ? $contador++ : '';
        $this->respostaindividual116 != null ? $contador++ : '';
        $this->respostaindividual117 != null ? $contador++ : '';
        $this->respostaindividual118 != null ? $contador++ : '';
        $this->respostaindividual119 != null ? $contador++ : '';

        return $contador;
    }
}
