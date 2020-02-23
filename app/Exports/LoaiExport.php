<?php

namespace App\Exports;

use App\Loai;
use Maatwebsite\Excel\Concerns\FromCollection;

class LoaiExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Loai::all();
    }
}
