<?php

namespace App\Exports;

use App\Models\FormIndividual;
use Maatwebsite\Excel\Concerns\FromCollection;

class FormindividualExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return FormIndividual::all();
    }
}
