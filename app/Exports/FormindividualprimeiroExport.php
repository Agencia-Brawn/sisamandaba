<?php

namespace App\Exports;

use App\Models\FormIndividualPrimeiro;
use Maatwebsite\Excel\Concerns\FromCollection;

class FormindividualprimeiroExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return FormIndividualPrimeiro::all();
    }
}
