<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Returnmark extends Model
{
    use HasFactory;
    protected $fillable = [
        'details',
        'received_number',
        'Starf_Id',
        'Outlet_Id',
        'Product_id',
        'date',
    ];
}
