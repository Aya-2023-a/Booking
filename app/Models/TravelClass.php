<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TravelClass extends Model
{
    use HasFactory;
    protected $fillable=['name','description'];

    function airplaneSeat()  {
        return $this->hasMany('App\Models\AirplaneSeat');
    }
}
