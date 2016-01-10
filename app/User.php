<?php

namespace TecnoComputadoras;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'type', 'avatar'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /*
     * Relation One to Many
     */
    public function articles()
    {
        return $this->hasMany('TecnoComputadoras\Article');
    }

    public function setNameAttribute ($value)
    {
        $this->attributes['name'] = ucwords($value);
    }

    public function setEmailAttribute ($value)
    {
        $this->attributes['email'] = strtolower($value);
    }

    public function setPasswordAttribute ($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }
}
