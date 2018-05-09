<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CollegesController extends Controller
{
    //
    public function index()
    {
    	return view('frontend.Colleges.accounting-finance.index');
    }

    //Function marketing and seles 
    //Date: 09 May 2018
    public function marketingSales()
    {
    	return view('frontend.Colleges.marketing-sale.index');
    }

    //Function Information System
    //date: 09 May 2018
    public function inforSystem()
    {
    	// return view('frontend.Colleges.information-systems.index.');
    	return view('frontend.Colleges.information-systems.index');
    }

    //Faculty of Hospitality and Tourism Management
    // date: 09 may 2018
    public function hospiTourism()
    {
    	return view('frontend.Colleges.hospitality-tourism.index');
    }

    // Faculty of Design and Film Production 
    // date : 09 may 2018
    public function designFile()
    {
    	return view('frontend.Colleges.design-film-production.index');
    }

    // Faculty of Foreign Languages 
    // date : 09 May 2018
    public function ForeignLaguage()
    {
    	return view('frontend.Colleges.foreign-languages.index');
    }
}
