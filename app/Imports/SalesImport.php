<?php

namespace App\Imports;

use App\Models\Sales;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class SalesImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Sales([
            'nama'          => $row['nama'],
            'alamat'        => $row['alamat'],
            'email'         => $row['email'],
            'telepon'       => $row['telepon']
        ]);
    }
}
