<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{

    protected $fillable = [
        'name',
        'Description',
        'price',
        'stock',
        'categorises_id',
        'image',
    ];
    


}
