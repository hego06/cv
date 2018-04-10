<?php

namespace App;

use App\Experience;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    public $timestamps = false;

    protected $fillable =[
        'name','place','description','initialdate','finaldate','user_id'
    ];

    protected $dates = [
        'initialdate',
        'finaldate'
    ];
}
