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

        // echo"<pre>";
        // print_r($page);

        // echo $page->filter('.maincounter-number')->text();
        $page->filter('#maincounter-wrap')->each(function($item){
            $this->results[$item->filter('h1')->text()]=$item->filter('.maincounter-number')->text();
        });
        // return view('scraper');
        $data = $this->results;
        return view('scraper',compact('data'));
    }
}
