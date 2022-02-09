<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use App\Models\Perjalanan;
use Illuminate\Http\Request;

class PerjalananController extends Controller
{
    public function index() {
        // $perjalanan = Auth::user()->hasMany(Perjalanan::class, 'id_user', 'id')->get();
        $perjalanan = Perjalanan::all();
        return view('pages.dashboard', ['perjalanan' => $perjalanan]);
    }

    public function inputDataPerjalanan() {
        return view('pages.input');
    }

    public function simpanPerjalanan(Request $request) {
        $data = [
            'id_user' => Auth::user()->id,
            'tanggal' => $request['tanggal'],
            'lokasi_yang_dikunjungi' => $request['lokasi-yang-dikunjungi'],
            'suhu' => $request['suhu']
        ];

        Perjalanan::create($data);
        return redirect()->route('perjalanan.input-data');
    }
}
