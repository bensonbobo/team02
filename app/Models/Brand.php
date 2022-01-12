<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    protected $fillable=[
        'brand',
        'founder',
        'country'
    ];
    public function drink()
    {
        return $this->hasMany('App\Models\Drink','bid');
    }
    public function scopeUScountry($query,$country)
    {
        $query->where('country','=',$country);
    }
    public function scopeUKcountry($query,$country)
    {
        $query->where('country','=',$country);
    }
    public function scopeTWcountry($query,$country)
    {
        $query->where('country','=',$country);
    }
}
