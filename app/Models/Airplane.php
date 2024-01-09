<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Airplane extends Model
{
    use HasFactory;

    protected $fillable=['model','airline_id', 'number_of_seat'];

    public function airline() {
        return $this->belongsTo('App\Models\Airline', 'airline_id', 'id');
    }

    function airplaneSeats()  {
        return $this->hasMany('App\Models\AirplaneSeat');
    }
}
