<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/leiloes', function () {
    $leiloes = App\Models\Leilao::all();
    return view('leiloes.index', compact('leiloes'));
})->name('leiloes.index');

Route::get('/leiloes/{id}', function ($id) {
    $leilao = App\Models\Leilao::find($id);
    return view('leiloes.show', compact('leilao'));
})->name('leiloes.show');

Route::get('/empresas', function () {
    $empresas = App\Models\Empresa::all();
    return view('empresas.index', compact('empresas'));
})->name('empresas.index');

Route::get('/empresas/{id}', function ($id) {
    $empresa = App\Models\Empresa::find($id);
    return view('empresas.show', compact('empresa'));
})->name('empresas.show');

Route::get('/materiais', function () {
    $materiais = App\Models\Material::all();
    return view('materiais.index', compact('materiais'));
})->name('materiais.index');

Route::get('/materiais/{id}', function ($id) {
    $material = App\Models\Material::find($id);
    return view('materiais.show', compact('material'));
})->name('materiais.show');

Route::get('/lances', function () {
    $lances = App\Models\Lance::all();
    return view('lances.index', compact('lances'));
})->name('lances.index');

Route::get('/lances/{id}', function ($id) {
    $lance = App\Models\Lance::find($id);
    return view('lances.show', compact('lance'));
})->name('lances.show');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
