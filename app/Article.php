<?php

namespace TecnoComputadoras;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';

    protected $fillable = [
    	'title', 'description', 'content', 'user_id', 'category_id'
    ];

    /*
     * Relation Many to One
     */
    public function user()
    {
    	return $this->belongsTo('TecnoComputadoras\User');
    }

    /*
     * Relation Many to One
     */
    public function category()
    {
    	return $this->belongsTo('TecnoComputadoras\Category');
    }

    /*
     * Relation Many to Many
     */
    public function tags()
    {
    	return $this->belongsToMany('TecnoComputadoras\Tag')->withTimestamps();
    }

    /*
     * Relation One to Many
     */
    public function images()
    {
        return $this->hasMany('TecnoComputadoras\Image');
    }
}
