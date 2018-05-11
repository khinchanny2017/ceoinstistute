<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SpeedFeatureController extends Controller
{
    //function index
    //date: 10 may 2018
    public function index()
    {
    	return view('Frontend.speed-feature.index');
    }
}
