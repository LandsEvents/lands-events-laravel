<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $guarded = [];

    public $timestamps = true; // Add this line
    use HasFactory;

    protected $table = 'images';

    protected $primaryKey = 'idimage';

    function album() {
        return $this->belongsTo('Images', 'idAlbum');
    }
}
