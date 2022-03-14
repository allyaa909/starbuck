<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTampilanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tampilan', function (Blueprint $table) {
            $table->id();
            $table->string('logo');
            $table->string('title');
            $table->string('brand');
            $table->string('desc');
            $table->string('img1');
            $table->string('img2');
            $table->string('img3');
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
        Schema::dropIfExists('tampilan');
    }
}
