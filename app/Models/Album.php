<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $guarded = [];

    public $timestamps = true; // Add this line
    use HasFactory;

//    protected $table = 'album';
//
//    protected $primaryKey = 'idAlbum';

    function images() {
        return $this->hasMany('Image', 'image_id');
    }
}
