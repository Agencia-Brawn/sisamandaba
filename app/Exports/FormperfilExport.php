<?php

namespace App\Exports;

use App\Models\Usuarios;
use Maatwebsite\Excel\Concerns\FromCollection;

class FormperfilExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public function collection()
    {
        return Usuarios::all();
        
    }
}
