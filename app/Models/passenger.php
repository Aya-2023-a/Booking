<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class passenger extends Model
{
    use HasFactory;
    protected $fillable=['first_name', 'last_name', 'phone', 'birthday', 'gender', 'passport', 'country_code', 'user_id'];

}
