<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skilluser extends Model
{
    protected $table = 'skill_user';

    protected $fillable = [
        'level'
    ];

    public $timestamps = false;
}
