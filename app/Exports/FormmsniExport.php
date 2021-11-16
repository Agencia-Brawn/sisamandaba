<?php

namespace App\Exports;

use App\Models\FormMsni;
use Maatwebsite\Excel\Concerns\FromCollection;

class FormmsniExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return FormMsni::all();
    }
}
