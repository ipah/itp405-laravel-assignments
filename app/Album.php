<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $primaryKey = 'AlbumId';
    public $timestamps = false;

    public function Artist(){
    	return $this->belongsTo('App\Artist','ArtistId');
    }

    public function Review(){
    	return $this->hasMany('App\Review','id');
    }
}
