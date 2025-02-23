<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->text('details');
            $table->integer('amount_catagorise');
            $table->integer('amount_trans'); // Stores money with 2 decimal places
            $table->unsignedBigInteger('shop_id');  // Stores Shop ID
            $table->unsignedBigInteger('shatf_id'); // Stores Staff ID
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('transactions');
    }
};