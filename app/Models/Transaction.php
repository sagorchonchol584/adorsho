<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Transaction extends Model {
    use HasFactory;
    use HasFactory;

    protected $fillable = ['details', 'amount_trans', 'amount_catagorise', 'shop_id', 'shatf_id'];
}