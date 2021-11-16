<?php

namespace App\Exports;

use App\Models\FormIndividualTerceiro;
use Maatwebsite\Excel\Concerns\FromCollection;

class FormindividualTerceiroExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return FormIndividualTerceiro::all();
    }
}
