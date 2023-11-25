<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AlumniController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\PerusahaanController;
use App\Http\Controllers\Admin\LowonganController;
use App\Http\Controllers\Admin\LamaranController;
use App\Http\Controllers\Admin\TestimoniController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Alumni\AuthController;
use App\Http\Controllers\Alumni\UserController;
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
Route::middleware(['guest'])->group(function (){

    Route::get('login/alumni', [AuthController::class,'login']);
    Route::post('login/alumni',[AuthController::class,'auth']);
});

Route::get('/',[UserController::class,'landing_page']);

Route::middleware(['isAlumni'])->group(function (){

    Route::get('loker',[UserController::class,'loker']);
    Route::get('perusahaan/alumni',[UserController::class,'perusahaan']);
    Route::get('pengajuan/perusahaan',[UserController::class,'add_perusahaan']);
    Route::post('pengajuan/perusahaan',[UserController::class,'create_perusahaan']);
    Route::get('delete/perusahaan/{id}',[UserController::class,'delete_perusahaan']);
    Route::get('pengajuan/loker',[UserController::class,'add_loker']);
    Route::post('pengajuan/loker',[UserController::class,'create_loker']);
    Route::get('loker/delete/{id}',[UserController::class,'delete_loker']);
    Route::get('detail/{id}',[UserController::class,'detail']);
    Route::get('lamar/loker/{id}',[UserController::class,'add_lamaran']);
    Route::post('lamar/loker/{id}',[UserController::class,'create_lamaran']);
    Route::get('riwayat',[UserController::class,'riwayat']);
    Route::get('riwayat/lowongan/{siapa}',[UserController::class,'riwayat_alumni']);
    Route::get('profile/alumni',[UserController::class,'profile']);
    Route::post('profile/alumni/{id}',[UserController::class,'profile_update']);
    Route::get('testimoni/alumni',[UserController::class,'testimoni']);
    Route::get('testimoni/alumni/add/{id}',[UserController::class,'add_testimoni']);
    Route::post('testimoni/alumni/create/{id}',[UserController::class,'create_testimoni']);
    Route::get('logout/alumni', [AuthController::class,'logout_alumni']);

});

Route::middleware(['isGuest'])->group(function (){
    Route::get('login',[AdminController::class,'login']);
    Route::post('login',[AdminController::class,'auth']);
});

Route::middleware(['isAdmin'])->group(function (){

    Route::get('dashboard',[DashboardController::class,'index']);
    Route::get('profile',[DashboardController::class,'profile']);
    Route::post('update/{id}',[DashboardController::class,'profile_update']);

    Route::get('logout',[AdminController::class,'logout']);

    Route::get('admin',[AdminController::class,'index']);
    Route::get('admin/add',[AdminController::class,'add']);
    Route::post('admin/create',[AdminController::class,'create']);
    Route::get('admin/edit/{id}',[AdminController::class,'edit']);
    Route::post('admin/update/{id}',[AdminController::class,'update']);
    Route::get('admin/delete/{id}',[AdminController::class,'delete']);

    Route::get('alumni',[AlumniController::class,'index']);
    Route::get('alumni/add',[AlumniController::class,'add']);
    Route::post('alumni/create',[AlumniController::class,'create']);
    Route::get('alumni/edit/{id}',[AlumniController::class,'edit']);
    Route::post('alumni/update/{id}',[AlumniController::class,'update']);
    Route::get('alumni/delete/{id}',[AlumniController::class,'delete']);
    Route::get('alumni/detail/{id}',[AlumniController::class,'detail']);

    Route::get('perusahaan',[PerusahaanController::class,'index']);
    Route::get('perusahaan/add',[PerusahaanController::class,'add']);
    Route::post('perusahaan/create',[PerusahaanController::class,'create']);
    Route::get('perusahaan/edit/{id}',[PerusahaanController::class,'edit']);
    Route::post('perusahaan/update/{id}',[PerusahaanController::class,'update']);
    Route::get('perusahaan/delete/{id}',[PerusahaanController::class,'delete']);

    Route::get('lowongan',[LowonganController::class,'index']);
    Route::get('lowongan/add',[LowonganController::class,'add']);
    Route::post('lowongan/create',[LowonganController::class,'create']);
    Route::get('lowongan/edit/{id}',[LowonganController::class,'edit']);
    Route::post('lowongan/update/{id}',[LowonganController::class,'update']);
    Route::get('lowongan/delete/{id}',[LowonganController::class,'delete']);
    Route::get('lowongan/detail/{id}',[LowonganController::class,'detail']);

    Route::get('lamaran',[LamaranController::class,'index']);
    Route::get('lamaran/add',[LamaranController::class,'add']);
    Route::post('lamaran/create',[LamaranController::class,'create']);
    Route::get('lamaran/edit/{id}',[LamaranController::class,'edit']);
    Route::get('lamaran/delete/{id}',[LamaranController::class,'delete']);
    Route::get('lamaran/detail/{id}',[LamaranController::class,'detail']);
    Route::post('lamaran/update/{id}',[LamaranController::class,'update']);

    Route::get('gallery',[GalleryController::class,'index']);
    Route::get('gallery/add',[GalleryController::class,'add']);
    Route::post('gallery/create',[GalleryController::class,'create']);
    Route::get('gallery/edit/{id}',[GalleryController::class,'edit']);
    Route::post('gallery/update/{id}',[GalleryController::class,'update']);
    Route::get('gallery/delete/{id}',[GalleryController::class,'delete']);

    Route::get('contact',[UserController::class,'index']);
    Route::get('contact/add',[UserController::class,'add']);
    Route::post('contact/create',[UserController::class,'create']);
    Route::get('contact/delete/{id}',[UserController::class,'delete']);

    Route::get('testimoni',[TestimoniController::class,'index']);
    Route::get('testimoni/delete/{id}',[TestimoniController::class,'delete']);
});