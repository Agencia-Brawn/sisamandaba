<?php

namespace App\Exports;

use App\Models\FormPressao;
use Maatwebsite\Excel\Concerns\FromCollection;

class FormpressaoExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return FormPressao::all();
    }
}
