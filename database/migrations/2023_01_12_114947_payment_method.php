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
        Schema::create('paymentMethods', function (Blueprint $table) {
            $table->increments('id');
            $table->string('CardColor');
            $table->string('TypeCard');
            $table->string('CardClass');
            $table->string('CardNumber');
            $table->string('CardHolderName');
            $table->string('ExpiredDate');
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
        Schema::dropIfExists('paymentMethods');
    }
};
