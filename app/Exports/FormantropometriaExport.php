<?php

namespace App\Exports;

use App\Models\FormAntropometria;
use Maatwebsite\Excel\Concerns\FromCollection;

class FormantropometriaExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public function collection()
    {
        return FormAntropometria::all();
    }
}
