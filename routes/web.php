<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('beranda', [
        "title" => "Kelurahan Mangkubumi | Beranda"
    ]);
});
Route::get('/profil', function () {
    return view('profil', [
        "title" => "Kelurahan Mangkubumi | Profil"
    ]);
});
Route::get('/berita', function () {
    return view('berita', [
        "title" => "Kelurahan Mangkubumi | Berita"
    ]);
});
Route::get('/peta', function () {
    return view('peta', [
        "title" => "Kelurahan Mangkubumi | Peta"
    ]);
});
Route::get('/lembaga', function () {
    return view('lembaga', [
        "title" => "Kelurahan Mangkubumi | Lembaga"
    ]);
});
Route::get('/statistik', function () {
    return view('statistik', [
        "title" => "Kelurahan Mangkubumi | Statistik"
    ]);
});
Route::get('/galeri', function () {
    return view('galeri', [
        "title" => "Kelurahan Mangkubumi | Galeri"
    ]);
});
