<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DateTime;

class HomeController extends Controller
{


    public static function TimeFormat($date) 
    {
    date_default_timezone_set("Europe/Paris");
    $time = DateTime::createFromFormat('Y-m-d\TH:i:sP', $date);
    $raw = $time->format(DateTime::RFC850);

    return $raw;
    }   

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $json = file_get_contents('http://api.songkick.com/api/3.0/artists/5112228/calendar.json?apikey=5OnUMhFOovUJseOG');

      $array = json_decode($json);

      $tours=array();
      foreach ($array->resultsPage->results->event as $key => $value) {
          $tours[$key]=$value;
      }

      $nextTour = $this->TimeFormat($tours[0]->start->datetime);
        
       return view("home")->with(array('tours'=>$tours, 'nextTour'=>$nextTour));
    }

    /*return the MUSIC template*/
    public function music()
    {
        return view('layouts.music');
    }

    /*return the ABOUT template*/
    public function contact()
    {
        return view('layouts.contact');
    }

    /*return the ABOUT template*/
    public function about()
    {
        return view('layouts.about');
    }
}
