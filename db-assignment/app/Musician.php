<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Musician extends Model
{
    protected $fillable = ["first_name", "last_name", "instrument", "website"];
}