<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemLeilaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_leilao', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('leilao_id')->nullable();
            $table->integer('material_id')->nullable();
            $table->timestamps();
            $table->float('quantidade', 10, 0)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('item_leilao');
    }
}
