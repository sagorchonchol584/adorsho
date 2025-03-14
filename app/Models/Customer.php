<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $fillable = [
        'customer_name',
        'mobile',
        'address',
        'joind_date',
        'balance',
        'last_purches_date',
        'last_price_cost',
        'create_panel',
        'createtor_id',
        'total_purches_count',
        'customer_behebihar',
        'coustmore_sale_id',
        'coustmore_retun_count',
        'Admin_Id',
        'Starf_Id',
        'Starf_Name',
        'Outlet_Id',
        'Outlet_Name',
        'Device_Info'
    ];
}
