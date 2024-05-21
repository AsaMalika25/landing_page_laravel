<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\Cms\BannerController;
use App\Http\Controllers\Cms\AboutController;
use App\Http\Controllers\cms\contactController;
use App\Http\Controllers\Cms\KompetensiController;
use App\Http\Controllers\Cms\LogoController;
use App\Http\Controllers\Cms\PrestasiController;
use App\Http\Controllers\Cms\ekstraController;
use App\Http\Controllers\Cms\SessionController;
use App\Http\Controllers\Cms\VisiController;
use App\Http\Controllers\Cms\riwayatController;
use App\Http\Controllers\PrestasidashController;
use App\Http\Controllers\keahlianController;
use App\Http\Controllers\ekstradashController;
use App\Http\Controllers\updateprofileController;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Str;
use App\Helpers\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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


Route::get('login', [SessionController::class, 'index']);
Route::get('sesi', [SessionController::class, 'index']);
Route::post('sesi/login', [SessionController::class, 'login']);
Route::post('login/sesi', [SessionController::class, 'loginpage']);
Route::get('logout', [SessionController::class, 'logout']);
Route::get('sesi/register', [SessionController::class, 'register']);
Route::post('sesi/register', [SessionController::class, 'create']);
Route::get('sesi/forget-password', [SessionController::class, 'getForgetPassword']);
Route::post('sesi/forget-password', [SessionController::class, 'postForgetPassword']);
// Route::post('/', [landingController::class, 'sendMail'])->name('store-landing');
Route::get('/', [LandingController::class, 'index']);
Route::get('create', [LandingController::class, 'create']);
Route::post('create', [LandingController::class, 'store']);
Route::get('edit/{id}', [LandingController::class, 'edit']);
Route::get('detail/{id}', [LandingController::class, 'show']);
Route::put('edit/{id}', [LandingController::class, 'update'])->name('edit');
Route::post('edit/{id}', [LandingController::class, 'update'])->name('edit');
Route::delete('delete/{id}', [LandingController::class, 'destroy']);

Route::get('list-cms', [BannerController::class, 'index']);
Route::get('create-cms', [BannerController::class, 'create']);
Route::post('create-cms', [BannerController::class, 'store']);
Route::get('edit-cms/{id}', [BannerController::class, 'edit']);
Route::get('detail-cms/{id}', [BannerController::class, 'show']);
Route::put('edit-cms/{id}', [BannerController::class, 'update']);
// Route::post('edit/{id}', [BannerController::class, 'update'])->name('edit');
Route::delete('delete-cms/{id}', [BannerController::class, 'destroy']);

Route::get('About-Cms', [AboutController::class, 'index']);
// Route::get('create-About', [AboutController::class, 'create']);
Route::post('create-About', [AboutController::class, 'store']);
Route::get('edit-About/{id}', [AboutController::class, 'edit']);
Route::get('detail-About/{id}', [AboutController::class, 'show']);
Route::put('edit-About/{id}', [AboutController::class, 'update']);
// Route::post('edit/{id}', [BannerController::class, 'update'])->name('edit');
Route::delete('delete-About/{id}', [AboutController::class, 'destroy']);

Route::get('kompetensi-Cms', [KompetensiController::class, 'index']);
Route::get('create-kompetensi', [KompetensiController::class, 'create']);
Route::post('create-kompetensi', [KompetensiController::class, 'store']);
Route::get('edit-kompetensi/{id}', [kompetensiController::class, 'edit']);
Route::get('detail-kompetensi/{id}', [kompetensiController::class, 'show']);
Route::put('edit-kompetensi/{id}', [kompetensiController::class, 'update'])->name('edit');
Route::post('edit-kompetensi/{id}', [kompetensiController::class, 'update'])->name('edit');
Route::delete('delete-kompetensi/{id}', [kompetensiController::class, 'destroy']);

Route::get('logo-Cms', [LogoController::class, 'index']);
Route::get('create-logo', [LogoController::class, 'create']);
Route::post('create-logo', [LogoController::class, 'store']);
Route::get('edit-logo/{id}', [LogoController::class, 'edit']);
Route::get('detail-logo/{id}', [LogoController::class, 'show']);
Route::post('edit-logo/{id}', [LogoController::class, 'update']);
Route::delete('delete-logo/{id}', [LogoController::class, 'destroy']);

Route::get('prestasi-Cms', [PrestasiController::class, 'index']);
Route::get('users-export', [PrestasiController::class, 'export'])->name('users.export');
Route::post('users-import', [PrestasiController::class, 'import'])->name('users.import');
Route::get('create-prestasi', [PrestasiController::class, 'create']);
Route::post('create-prestasi', [PrestasiController::class, 'store']);
Route::get('edit-prestasi/{id}', [PrestasiController::class, 'edit']);
Route::get('detail-prestasi/{id}', [PrestasiController::class, 'show']);
Route::put('edit-prestasi/{id}', [PrestasiController::class, 'update'])->name('edit');
Route::post('edit-prestasi/{id}', [PrestasiController::class, 'update'])->name('edit');
Route::delete('delete-prestasi/{id}', [PrestasiController::class, 'destroy']);

Route::get('ekstrakulikuler-Cms', [ekstraController::class, 'index']);
Route::get('create-ekstrakulikuler', [ekstraController::class, 'create']);
Route::post('create-ekstrakulikuler', [ekstraController::class, 'store']);
Route::get('edit-ekstrakulikuler/{id}', [ekstraController::class, 'edit']);
Route::get('detail-ekstrakulikuler/{id}', [ekstraController::class, 'show']);
Route::post('edit-ekstrakulikuler/{id}', [ekstraController::class, 'update']);
Route::delete('delete-ekstrakulikuler/{id}', [ekstraController::class, 'destroy']);

Route::post('kirim-pesan', [contactController::class, 'store'])->name('simpan-pesan');

Route::get('contact-Cms', [contactController::class, 'index']);
Route::get('sendfeedback/{email}', [contactController::class, 'message']);
Route::post('sendfeedback/{email}', [contactController::class, 'sendfeedback']);
Route::delete('delete-contact/{id}', [contactController::class, 'destroy']);

Route::get('visi-misi', [VisiController::class, 'index']);
Route::get('create-visi', [VisiController::class, 'create']);
Route::post('create-visi', [VisiController::class, 'store']);
Route::get('edit-visi/{id}', [VisiController::class, 'edit']);
Route::post('edit-visi/{id}', [VisiController::class, 'update']);
Route::delete('delete-visi/{id}', [VisiController::class, 'destroy']);

Route::get('riwayat', [riwayatController::class, 'index']);
Route::get('create-riwayat', [riwayatController::class, 'create']);
Route::post('create-riwayat', [riwayatController::class, 'store']);
Route::get('edit-riwayat/{id}', [riwayatController::class, 'edit']);
Route::post('edit-riwayat/{id}', [riwayatController::class, 'update']);
Route::delete('delete-riwayat/{id}', [riwayatController::class, 'destroy']);

Route::group(['middleware' => ['isLogin']], function () {

    Route::get('dashboard-cms', [dashboardController::class, 'index']);
    Route::get('prestasi-dash', [PrestasidashController::class, 'index']);
    Route::get('mesin-dash', [keahlianController::class, 'index']);
    Route::get('las-dash', [keahlianController::class, 'las']);
    Route::get('tkr-dash', [keahlianController::class, 'tkr']);
    Route::get('rpl-dash', [keahlianController::class, 'rpl']);
    Route::get('multi-dash', [keahlianController::class, 'multi']);
    Route::get('tkj-dash', [keahlianController::class, 'tkj']);
    Route::get('akuntan-dash', [keahlianController::class, 'akuntan']);
    Route::get('busana-dash', [keahlianController::class, 'busana']);
    Route::get('ekstra-dash', [ekstradashController::class, 'index']);

    Route::get('profile', [updateprofileController::class, 'index']);
    Route::post('update-profile/{id}', [updateprofileController::class, 'update'])->name('profile.update');

});


Route::get('forgot-passsword', [SessionController::class, 'index']);
Route::get('lupa-password', [SessionController::class, 'forgetpassword']);
Route::post('lupa-password', [SessionController::class, 'sendemail']);
// Route::post('send/{email}', [SessionController::class, 'sendfeedback']);
Route::get('reset-password/{email}/{token}', [SessionController::class, 'resetpassword']);
Route::post('reset-password/{email}/{token}', [SessionController::class, 'updatepassword']);

// Route::get('users', 'index');



Route::get('/clear-cache', function () {



    $exitCode = Artisan::call('cache:clear');



    $exitCode = Artisan::call('config:cache');



    \Artisan::call('route:clear');



    return 'DONE'; //Return anything



});
