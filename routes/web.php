<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::post('/lances', function (Request $request) {
   // $lance = App\Models\Lance::find($id);
   $lance = new App\Models\Lance();
   $lance->valor = $request->valor;
   $lance->prazo_entrega = $request->prazo_de_entrega;
   $lance->observacao = $request->observacao;
   $lance->item_leilao_id = $request->item_id;
   $lance->fornecedor_id = Auth::user()->id;
   $lance->save();
   return redirect()->route('lances.index');
})->name('lances');

Route::get('/vendas', function () {
    $vendas = App\Models\Venda::all();
    return view('vendas.index', compact('vendas'));
})->name('vendas.index');

Route::get('/vendas/{id}', function ($id) {
    $venda = App\Models\Venda::find($id);
    return view('vendas.show', compact('venda'));
})->name('vendas.show');

Route::get('/compras', function () {
    $compras = App\Models\Compra::all();
    return view('compras.index', compact('compras'));
})->name('compras.index');

Route::get('/compras/{id}', function ($id) {
    $compra = App\Models\Compra::find($id);
    return view('compras.show', compact('compra'));
})->name('compras.show');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
