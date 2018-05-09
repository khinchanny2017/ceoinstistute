<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    //function About 
    public function index()
    {
    	return view('Frontend.aboutus.index');
    }
}
