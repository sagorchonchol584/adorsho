<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
            Schema::create('catagory_adi', function (Blueprint $table) {
            $table->string("cat_Id",50);
            $table->string("cat_Name",50);
            $table->date("date",50);
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
         Schema::dropIfExists('catagory_adi');
    }
};
