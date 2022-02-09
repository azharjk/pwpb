<?php

use App\Http\Controllers\PerjalananController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Models\Biodata;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

$bio = new Biodata();


Route::get('/', function () {
    return view('layouts.copy_master');
});

Route::get('/home', function () {
    return view('layouts.home');
});

Route::get('about', function () {
    return view('about');
});

Route::get('/Master', function () {
    return view('layouts.Master');
});

Route::get('/simpan', function () {
    return view('layouts.simpan');
});

Route::get('/shop', function () {
    return view('layouts.shop');
});

Route::get('/experiment', function () {
    return view('master');
});

/////////////////////////////////////////////////////////////////////////////////////////////

Route::get('/login', function() {
    return view('auth.login');
})->name('auth.login');

Route::get('/register', function() {
    return view('auth.register');
})->name('auth.register');

Route::post('/register', [AuthController::class, 'register'])->name('auth.register.user');

Route::get('/dashboard', [PerjalananController::class, 'index'])->name('perjalanan.dashboard');

Route::get('/users', [UserController::class, 'index'])->name('users.index');

Route::get('/input-peduli-diri', [PerjalananController::class, 'inputDataPerjalanan']);

Route::post('/simpan-perjalanan', [PerjalananController::class, 'simpanPerjalanan']);

Route::get('/dashboard/input-data', function () {
    return view('pages.dashboard-input');
})->name('perjalanan.input-data');

/////////////////////////////////////////////////////////////////////////////////////////////

Route::post('/dashboard/input-data/post', function (Request $request) use($bio) {
    $biodata_new = $request->all(['nama', 'nis', 'jurusan', 'kelas', 'wali-kelas']);
    $biodata_new['wali_kelas'] = $biodata_new['wali-kelas'];
    $bio->add_biodata($biodata_new);
    return view('pages.dashboard', ['biodata' => $bio->biodata]);
});

Route::get('/table', function () {
    return view('bootstrap-table');
});
