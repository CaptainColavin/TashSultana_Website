<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DateTime;

class HomeController extends Controller
{

    public $tours;

    private static function TimeFormat($date) 
    {
    date_default_timezone_set("Europe/Paris");
    $time = DateTime::createFromFormat('Y-m-d\TH:i:sP', $date);
    $raw = $time->format(DateTime::RFC850);

    return $raw;
    }   

    private function getTourFromApi() {
        $json = file_get_contents('http://api.songkick.com/api/3.0/artists/5112228/calendar.json?apikey=5OnUMhFOovUJseOG');

        $array = json_decode($json);

        $tmp=array();
        foreach ($array->resultsPage->results->event as $key => $value) {
            $tmp[$key]=$value;
        }
        
        $this->tours = $tmp;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->getTourFromApi();
        $nextTour = $this->TimeFormat($this->tours[0]->start->datetime);

        return view("home")->with(array('tours'=>$this->tours, 'nextTour'=>$nextTour));
    }

    public function tour() {
         $this->getTourFromApi();

         return view("layouts.tour")->with(array('tours'=>$this->tours));
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
