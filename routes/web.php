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


Route::get('/empresas', function () {
    $empresas = App\Models\Empresa::all();
    return view('empresas.index', compact('empresas'));
})->name('empresas.index');

Route::get('/empresas/{id}', function ($id) {
    $empresa = App\Models\Empresa::find($id);
    return view('empresas.show', compact('empresa'));
})->name('empresas.show');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// rotas dentro desse grupo, requerem autenticação do usuário para acessarem as páginas
Route::middleware(['auth'])->group(function () {
    //suas rotas
    Route::get('/leiloes', function () {
        $leiloes = App\Models\Leilao::all();
        return view('leiloes.index', compact('leiloes'));
    })->name('leiloes.index');

    Route::get('/leiloes/{id}', function ($id) {
        $leilao = App\Models\Leilao::find($id);
        return view('leiloes.show', compact('leilao'));
    })->name('leiloes.show');

    Route::get('/leiloes/efetuar_lance/{id}', function ($id) {
        $itemLeilao = App\Models\ItemLeilao::find($id);
        $leilao = App\Models\Leilao::find($itemLeilao->leilao_id);
        if ($itemLeilao->lance_arrematante_id == null and $leilao->comprador_id != Auth::user()->id){
            return view('leiloes.efetuar_lance', compact('itemLeilao'));
        }
        return redirect()->route('leiloes.show', ['id' => $itemLeilao->leilao_id]);
    })->name('leiloes.efetuar_lance');
    Route::get('/materiais', function () {
        $materiais = App\Models\Material::all();
        return view('materiais.index', compact('materiais'));
    })->name('materiais.index');

    Route::get('/materiais/{id}', function ($id) {
        $material = App\Models\Material::find($id);
        return view('materiais.show', compact('material'));
    })->name('materiais.show');

    Route::get('/lances/itemLeilao/{id}', function ($id) {
        $itemLeilao = App\Models\ItemLeilao::find($id);
        $leilao = App\Models\Leilao::find($itemLeilao->leilao_id);
        if ($leilao->comprador_id == Auth::user()->id){
            return view('lances.itemLeilao', compact('itemLeilao'));
        }
        return redirect()->route('leiloes.show', ['id' => $itemLeilao->leilao_id]);
    })->name('lances.itemLeilao');

    Route::get('/lances/itemLeilao/aceitar/{id}', function ($id) {
        $lance = App\Models\Lance::find($id);
        $itemLeilao= App\Models\ItemLeilao::find($lance->item_leilao_id);
        if($itemLeilao->lance_arrematante_id == null) {
            $lance->arrematante = true;
            $lance->save();
            $itemLeilao->lance_arrematante_id = $lance->id;
            $itemLeilao->save();
        }
        return redirect()->route('leiloes.show', ['id' => $lance->itemLeilao->leilao_id]);
    })->name('lances.aceitar');

    Route::post('/lances', function (Request $request) {
       $lance = new App\Models\Lance();
       $lance->valor = $request->valor;
       $lance->prazo_entrega = $request->prazo_de_entrega;
       $lance->observacao = $request->observacao;
       $lance->item_leilao_id = $request->item_id;
       $lance->fornecedor_id = Auth::user()->id;
       $lance->save();
       $itemLeilao= App\Models\ItemLeilao::find($request->item_id);
       return redirect()->route('leiloes.show', ['id' => $itemLeilao->leilao_id]);
    })->name('lances');

    Route::get('/vendas', function () {
        $vendas = App\Models\Lance::where('arrematante', 1)->where('fornecedor_id', Auth::user()->id)->get();
        return view('lances.vendas', compact('vendas'));
    })->name('lances.vendas');

    Route::get('/compras', function () {
        $userId = Auth::id();
        $compras = App\Models\Lance::where('arrematante', 1)
        ->whereHas('itemLeilao.leilao', function ($query) use ($userId) {
            $query->where('comprador_id', $userId);
        })
        ->get();

        return view('lances.compras', compact('compras'));
    })->name('lances.compras');

});
