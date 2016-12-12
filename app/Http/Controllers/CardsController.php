<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CardsController extends Controller
{
    public function index()
    {
    	$cards = \DB::table('cards')->get();

    	return view('cards.index', conpact('cards'));
    }
}
