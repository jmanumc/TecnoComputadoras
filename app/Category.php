<?php

namespace TecnoComputadoras;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = [
    	'name'
    ];

    /*
     * Relation One to Many
     */
    public function articles()
    {
    	return $this->hasMany('TecnoComputadoras\Article');
    }
}
