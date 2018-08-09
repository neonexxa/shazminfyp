<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $fillable =[ 'date', 'p_id', 'name', 'assign_doctor', 'doctor_specialty'];
}
