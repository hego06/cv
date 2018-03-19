<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $table = 'educations';
    public $timestamps = false;

    protected $dates = [
        'initialdate', 
        'finaldate'
    ];
}
