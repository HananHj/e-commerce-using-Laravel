<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $fillable = [
        'productid',
        'qty',
        'price',
        'tax',
        'productName',
        'total',
        'discount',
        'net',
        'userid',
        'userName',

    ];
 
    
}
