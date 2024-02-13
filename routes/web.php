<?php

use App\Livewire\Master\Home;
use App\Livewire\Master\Profile;
use App\Livewire\LoginController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Livewire\RegistrasiController;
use App\Livewire\Master\StaffController;
use App\Livewire\Master\BarangController;
use App\Livewire\Master\JabatanController;
use App\Livewire\Master\ExpedisiController;
use App\Livewire\Master\SupplierController;
use App\Livewire\Sales\Dasboard;
use App\Livewire\Sales\Login;
use App\Livewire\Transaksi\BarangInController;
use App\Livewire\Transaksi\BarangOutController;
use App\Livewire\Transaksi\StokController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', Login::class)->name('login');

Route::get('/login', LoginController::class)->name('login.admin');
Route::get('/daftar', RegistrasiController::class)->name('registrasi')->middleware('auth', 'role:admin');
Route::get('/logout', function () {
    Auth::logout();
    return redirect()->to('/');
});
// middleware group

Route::middleware(['auth', 'role:admin'])->group(function () {
    // master
    Route::get('/home', Home::class)->name('home')->middleware('auth');
    Route::get('/my', Profile::class)->name('profile')->middleware('auth');
    Route::get('/barang', BarangController::class)->name('barang')->middleware('auth');
    Route::get('/expedisi', ExpedisiController::class)->name('expedisi')->middleware('auth');
    Route::get('/staff', StaffController::class)->name('staff')->middleware('auth');
    Route::get('/supplier', SupplierController::class)->name('supplier')->middleware('auth');
    Route::get('/jabatan', JabatanController::class)->name('jabatan')->middleware('auth');

    // Transaksi
    Route::get('/transaction/barang-in', BarangInController::class)->name('transaction.barangMasuk')->middleware('auth');
    Route::get('/transaction/barang-out', BarangOutController::class)->name('transaction.barangKeluar')->middleware('auth');
    Route::get('/transaction/stok', StokController::class)->name('transaction.stok')->middleware('auth');
});

Route::middleware(['auth', 'role:sales'])->group(function () {
    route::get('/dasboard', Dasboard::class)->name('sales.dasboard');
});
