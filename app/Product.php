<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'price', 'stock', 'description', 'id_category','image','id_status',
    ];

    public function status(){
        return $this->belongsTo('App\StatusProduct','id_status');
    }
}
