<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = 'tags';

    protected $fillable = [
    	'name'
    ];

    /*
     * Relation Many to Many
     */
    public function articles()
    {
    	return $this->belongsToMany('App\Article')->withTimestamps();
    }
}
