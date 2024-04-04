<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function getWithId($id) {
        $images = Album::with('images')->find($id)->quotes;
        return "test";
    }
}
