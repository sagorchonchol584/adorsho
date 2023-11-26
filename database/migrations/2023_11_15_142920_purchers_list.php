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
           Schema::create('purches_list', function (Blueprint $table) {
            $table->string("customer_id",20);
            $table->string("customer_name",100);
            
            //pruduct info data 
            $table->date("purches_date");
            $table->string("product_id",20);
            $table->string("product_Name",100);
            $table->integer("product_Price");
            $table->string("product_Info",100);
            $table->integer("profit_to_Pruduct");
            $table->date("prodcut_Add_date");
            $table->date("prodcut_Exp_date");
            $table->string("prodcut_Provide_com",100);
            $table->integer("prodcut_Purcher_price");
           
            //Admin data table        
            $table->string("Admin_Id",50);
            $table->string("Starf_Id",50);
            $table->string("Starf_Name",50);
            $table->string('Outlet_Id',50);
            $table->string("Outlet_Name",50);
            $table->string('Device_Info',50);
            });
        
        
         Schema::create('product_Info', function (Blueprint $table) {
            
            //$table->string("customer_id",20);	
            
   
            $table->string("Product_name",100);
            $table->string("Product_cat",50);
            $table->date("Add_date");
            $table->date("Update_Date");
            $table->string("product_barcode",50);
            $table->string("product_compony",50);
            $table->string("product_compony_id",50);
           
            //Admin data table        
            $table->string("Admin_Id",50);
            $table->string("Starf_Id",50);
            $table->string("Starf_Name",50);
            $table->string("Outlet_Id",50);
            $table->string("Outlet_Name",50);
            $table->string("Device_Info",50);
            });
        
        
        
        
         Schema::create('Stock_Info', function (Blueprint $table) {
            
            //$table->string("customer_id",20);	
            
   
            $table->string("Product_barcode_id",50);
            $table->string("Product_Name",100);
            $table->string("Avilable_Product",50);
            $table->string("Facility_Product",50);
            $table->string("Total_product",50);
            $table->string("Purches_Price",50);
            $table->integer("Sales_Price");
            $table->date("Product_Expire_date");
           
            //Admin data table        
            $table->string("Admin_Id",50);
            $table->string("Starf_Id",50);
            $table->string("Starf_Name",50);
            $table->string("Outlet_Id",50);
            $table->string("Outlet_Name",50);
            $table->string('Device_Info',50);
            });
        
        
    

        
         Schema::create('customer_info', function (Blueprint $table) {
            
            //$table->string("customer_id");	
            
   
            $table->string("customer_name",100);
            $table->string("mobile",50);
            $table->string("address",100);
            $table->date("joind_date");
            $table->integer("balance");
            $table->date("last_purches_date");
            $table->integer("last_price_cost");
            $table->string("create_panel",50);       
            $table->string("createtor_id",50);
            $table->integer("total_purches_count");
            $table->string("customer_behebihar",50);
            $table->string("coustmore_sale_id",50);  
            $table->string("coustmore_retun_count",50);
                    
            //Admin data table        
            $table->string("Admin_Id",50);
            $table->string("Starf_Id",50);
            $table->string("Starf_Name",50);
            $table->string("Outlet_Id",50);
            $table->string("Outlet_Name",50);
            $table->string("Device_Info",50);
            });
        
        
    }









    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
         Schema::dropIfExists('purches_list');
         Schema::dropIfExists('product_Info'); 
         Schema::dropIfExists('Stock_Info');
         Schema::dropIfExists('customer_info');
    }
};
