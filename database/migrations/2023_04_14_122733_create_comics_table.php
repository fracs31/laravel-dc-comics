<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comics', function (Blueprint $table) {
            $table->id(); //id
            $table->string("title"); //titolo
            $table->text("description"); //descrizione
            $table->text("thumb"); //copertina
            $table->double("price", 6, 2); //prezzo
            $table->string("series"); //serie
            $table->date("sale_date"); //data di uscita
            $table->string("type"); //tipo
            $table->timestamps(); //data di creazione e modifica
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comics');
    }
};
