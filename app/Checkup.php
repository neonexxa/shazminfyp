<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Checkup extends Model
{
    protected $fillable =['id', 'cek_date', 'cek_id', 'cek_name', 'cek_address', 'cek_age', 'cek_phone',
    'cek_hospital', 'cek_weight', 'cek_height', 'cek_bmi', 'cek_bp', 'cek_bone', 'cek_blood'];
}
