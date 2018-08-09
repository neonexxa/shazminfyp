<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $fillable =['id', 'experience', 'f_id', 'f_name', 'f_phone', 'f_email', 'f_date', 'f_comment', 'f_record'];
}
