<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    use HasFactory;
    protected $table='products';

    public function type_products() {
        return $this->belongsTo('Product','id','id_type_products');
    }

    // public function comments() {
    //     return $this->hasMany('comments');
    // }

}
