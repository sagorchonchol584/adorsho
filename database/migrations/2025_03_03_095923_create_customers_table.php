<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id(); // Auto-increment primary key
            $table->string('customer_name');
            $table->string('mobile')->unique();
            $table->text('address')->nullable();
            $table->date('joind_date')->nullable();
            $table->decimal('balance', 10, 2)->default(0.00);
            $table->date('last_purches_date')->nullable();
            $table->decimal('last_price_cost', 10, 2)->nullable();
            $table->string('create_panel')->nullable();
            $table->unsignedBigInteger('createtor_id')->nullable();
            $table->integer('total_purches_count')->default(0);
            $table->text('customer_behebihar')->nullable();
            $table->unsignedBigInteger('coustmore_sale_id')->nullable();
            $table->integer('coustmore_retun_count')->default(0);
            $table->date('coustmore_retun_date')->nullable();
            $table->unsignedBigInteger('Admin_Id')->nullable();
            $table->unsignedBigInteger('Starf_Id')->nullable();
            $table->string('Starf_Name')->nullable();
            $table->unsignedBigInteger('Outlet_Id')->nullable();
            $table->string('Outlet_Name')->nullable();
            $table->text('Device_Info')->nullable();
            $table->timestamps(); // Created_at & Updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('customers');
    }
};