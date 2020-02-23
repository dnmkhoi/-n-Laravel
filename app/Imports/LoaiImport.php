<?php

namespace App\Imports;

use App\Loai;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\ToModel;

class LoaiImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Loai([
            'l_ten'     => $row[0],
            'l_trangThai' => 1,
            'l_taoMoi'    => Carbon::now(), 
            'l_capNhat'    => Carbon::now(), 
        ]);
    }
}
