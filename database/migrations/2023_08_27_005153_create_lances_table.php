<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lances', function (Blueprint $table) {
            $table->increments('id');
            $table->float('valor', 10, 0);
            $table->text('descricao')->nullable();
            $table->timestamps();
            $table->integer('fornecedor_id')->nullable();
            $table->date('prazo_entrega')->nullable();
            $table->text('item_leilao_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lances');
    }
}
