<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable =  ['entitlement', 'info', 'quantity', 'price', 'cat_id'];
}

