<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medical extends Model
{
    protected $fillable =[ 'id', 'date', 'p_id', 'med_name', 'hosp', 'doctor', 'doc_spec',
                        'disease', 'desc', 'f_allergy', 'm_allergy', 'pres'];
}
