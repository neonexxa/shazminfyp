<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Daftar extends Model
{
    protected $fillable =[ 'id', 'reg_date', 'reg_id', 'reg_name', 'reg_address', 'reg_age', 'reg_race', 'reg_religion', 'reg_phone'];
}
