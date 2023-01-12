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
        Schema::create('eat', function (Blueprint $table) {
            $table->id();
            $table->string('category');
            $table->string('picture');
            $table->integer('discount');
            $table->double('rate');
            $table->string('name');
            $table->double('pricebefore');
            $table->double('price');
            $table->string('location');
            $table->integer('numlocation');
            $table->integer('numbought');
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
        Schema::dropIfExists('eat');
    }
};
