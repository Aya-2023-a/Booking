<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Direction extends Model
{
    use HasFactory;
    protected $fillable = ['origin_airport_code', 'destination_airport_code'];

    public function originAirport() {
        return $this->belongsTo('App\Models\Airport','origin_airport_code', 'airport_code');
    }
    public function destinationAirport() {
        return $this->belongsTo('App\Models\Airport','destination_airport_code', 'airport_code');
    }

    
}
