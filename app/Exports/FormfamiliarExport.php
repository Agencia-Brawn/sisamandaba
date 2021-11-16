<?php

namespace App\Exports;

use App\Models\FormFamiliar;
use Maatwebsite\Excel\Concerns\FromCollection;

class FormfamiliarExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return FormFamiliar::all();
    }
}
