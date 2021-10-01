<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = [
        'category_id','codigo_producto','color','nombre_producto','peso','precio','stock','tamano'
    ];
}
