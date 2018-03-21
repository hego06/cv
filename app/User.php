<?php

namespace App;

use App\Education;
use App\Experience;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    public $timestamps = false;
        
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','phone','address','email','objetive','birthdate', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $dates = [
        'birthdate'
    ];

    function skills()
    {
        return $this->belongsToMany(Skill::class)->withPivot('level');
    }

    function educations()
    {
        return $this->hasMany(Education::class)->orderBy('id','desc');
    }

    function experiences()
    {
         return $this->hasMany(Experience::class)->orderBy('id','desc');
    }
}
