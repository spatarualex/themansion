<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMeniusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meniu', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nume', 200);
            $table->string('pret', 55);
            $table->string('imagine');
            $table->integer('category_id');
            $table->string('descriere');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('meniu');
    }
}
