<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StatusProduct extends Model
{
    protected $fillable = [
        'name',
    ];

    public function product(){
        return $this->hasMany(Product::class);
    }
}
