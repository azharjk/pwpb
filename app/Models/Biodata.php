<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
    use HasFactory;
    public $biodata = [
        [
            'id' => 1,
            'nama' => 'Muhammad Azhari',
            'nis' => '1809599001',
            'jurusan' => 'RPL',
            'kelas' => 12,
            'wali_kelas' => 'Bu Pratiwi'
        ],
        [
            'id' => 2,
            'nama' => 'Muhammad Azhari',
            'nis' => '1809599001',
            'jurusan' => 'RPL',
            'kelas' => 12,
            'wali_kelas' => 'Bu Pratiwi'
        ],
        [
            'id' => 3,
            'nama' => 'Muhammad Azhari',
            'nis' => '1809599001',
            'jurusan' => 'RPL',
            'kelas' => 12,
            'wali_kelas' => 'Bu Pratiwi'
        ]
    ];

    public $last_id = 3;

    public function add_biodata($biodata)
    {
        $this->last_id++;
        $biodata['id'] = $this->last_id;
        array_push($this->biodata, $biodata);
    }
}
