<?php

namespace App\Http\Controllers;

use App\Hero;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function init()
    {
        $hero = Hero::first();
        return response()->json(
            $hero
        );
    }
}
