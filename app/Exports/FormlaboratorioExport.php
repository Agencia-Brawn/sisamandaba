<?php

namespace App\Exports;

use App\Models\FormLaboratorio;
use Maatwebsite\Excel\Concerns\FromCollection;

class FormlaboratorioExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return FormLaboratorio::all();
    }
}
