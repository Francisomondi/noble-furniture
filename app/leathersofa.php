<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class leathersofa extends Model
{
    protected $fillable = [
        'name', 
        'decription',
        'price',
        'details',
        'dimentions',
        'condition',
        'category',
        'image',
        'user_id',
    ];
    public function users(){
        return $this->belongsTo('App\User');
    }
}
