<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function Album(){
    	return $this->belongsTo('App\Album','AlbumId');
    }
}
