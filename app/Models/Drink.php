<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drink extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'bid',
        'milliliters',
        'price',
        'calories',
    ];
    public function brand()
    {
        return $this->belongsTo('App\Models\Brand','bid','id');
    }
}
