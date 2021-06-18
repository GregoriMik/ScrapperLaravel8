<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Goutte\Client;

class ScrapperController extends Controller
{
    private $result = array();

    public function scraper(){
        
        $client = new Client();
        $url='https://www.worldometers.info/coronavirus/';
        $page=$client->request('GET',$url);

        echo"<pre>";
        print_r($page);

        return view('scraper');
    }
}
