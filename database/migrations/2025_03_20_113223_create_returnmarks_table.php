<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('returnmarks', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            $table->text('details')->nullable(); // Details field (nullable)
            $table->string('received_number')->nullable(); // Received number (unique)
            $table->unsignedBigInteger('Starf_Id'); // Starf_Id field
            $table->unsignedBigInteger('Outlet_Id'); // Outlet_Id field
            $table->unsignedBigInteger('Product_id'); // Product_id field
            $table->date('date'); // Date field
            $table->timestamps(); // Created_at and updated_at timestamps
        });
    }


    
    public function down(): void
    {
        Schema::dropIfExists('returnmarks');
    }
};
