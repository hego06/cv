<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    public $timestamps = false;

    function users()
    {
        return $this->belogsToMany(User::class)->withPivot('level');;
    }
}
