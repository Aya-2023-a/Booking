<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class airline extends Model
{
    use HasFactory;
    protected $fillable=['name','address', 'website', 'phone'];

    function airplanes(){
        return $this->hasMany('App\Models\Airplane');
    }
}
