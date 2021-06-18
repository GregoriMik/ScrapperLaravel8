<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScrapperController extends Controller
{
    public function scraper(){
        return view('scraper');
    }
}
