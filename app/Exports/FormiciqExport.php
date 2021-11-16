<?php

namespace App\Exports;

use App\Models\FormIciq;
use Maatwebsite\Excel\Concerns\FromCollection;

class FormiciqExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return FormIciq::all();
    }
}
