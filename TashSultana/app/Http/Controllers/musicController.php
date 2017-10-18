<?php
namespace App\Http\Controllers;

class musicController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('layouts.music');
    }

}

