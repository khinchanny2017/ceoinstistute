<?php

namespace App\Http\Controllers;

use App\PartnerController;

use Illuminate\Http\Request;
use App\Partner;

class PartnerControllerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         return view ('backend.partnership.form');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('backend.partnership.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'company_name'  => 'required',
            'logo_company'  => 'required',
            'description_company' => 'required',
            'url_website'   => ' required'
        ]);
        Partner::create($request->all());
      
        return redirect()->route('backend.index')
                        ->with('success','Member created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PartnerController  $partnerController
     * @return \Illuminate\Http\Response
     */
    public function show(PartnerController $partnerController)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PartnerController  $partnerController
     * @return \Illuminate\Http\Response
     */
    public function edit(PartnerController $partnerController)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PartnerController  $partnerController
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PartnerController $partnerController)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PartnerController  $partnerController
     * @return \Illuminate\Http\Response
     */
    public function destroy(PartnerController $partnerController)
    {
        //
    }
}
