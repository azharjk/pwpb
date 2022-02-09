<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


use App\Models\User;

class AuthController extends Controller
{
    public function register(Request $request) {
        $user = User::create([
            'email' => 'a@a',
            'name' => $request['name'],
            'password' => $request['nik']
        ]);

        Auth::login($user);

        return redirect()->route('perjalanan.dashboard');
    }
}
