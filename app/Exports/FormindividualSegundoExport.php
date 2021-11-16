<?php

namespace App\Exports;

use App\Models\FormIndividualSegundo;
use Maatwebsite\Excel\Concerns\FromCollection;

class FormindividualSegundoExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return FormIndividualSegundo::all();
    }
}
