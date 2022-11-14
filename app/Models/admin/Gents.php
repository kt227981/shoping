<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gents extends Model
{
    use HasFactory;

    public $table = 'gents';

    protected $fillable = [
        'product_name',
        'product_description',
        'product_price',
        'product_image',
        'product_size',
        'gender',
        'category',
        'shipping_charge',
        'color',

    ];

}
