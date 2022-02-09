<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use App\Models\Perjalanan;
use Illuminate\Http\Request;

class PerjalananController extends Controller
{
    public function index() {
        $bio = new Biodata();
        return view('pages.dashboard', ['biodata' => $bio->biodata]);
    }

    public function inputDataPerjalanan() {
        return view('pages.input');
    }

    public function simpanPerjalanan(Request $request) {
        $data = [
            'id_user' => $request['id-user'],
            'tanggal' => $request['tanggal'],
            'lokasi_yang_dikunjungi' => $request['lokasi-yang-dikunjungi'],
            'suhu' => $request['suhu-tubuh']
        ];

        Perjalanan::create($data);
    }
}
