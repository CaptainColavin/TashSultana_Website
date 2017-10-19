<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\goldenbook;
use Illuminate\Support\Facades\Auth;

class goldenbookController extends Controller {
	/**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
    	$goldenbook = goldenbook::all();
        return view('layouts.goldenbook', compact('goldenbook'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('layouts.goldenbook');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
    	$user = Auth::user();
    	$goldenbook = new goldenbook;
    	$goldenbook->text = $request->text;
    	$goldenbook->date = date("Y-m-d H:i:s");
    	$goldenbook->user_id = $user->id;
    	$goldenbook->save();
    	return redirect('goldenbook');
    }
}