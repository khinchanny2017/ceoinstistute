<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;
use App\Models\Partner;

class PartnerShipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $partners = DB::table('company_partner')->limit(3)->get();

            return view('backend.partnership.show', ['partners' => $partners]);
        
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
            'company_name' => 'required',
            'logo_company' => 'required',
            'description_company' => 'required',
            'url_website' => 'required',
        ]);
        if($request->hasfile('logo_company'))
         {
            foreach($request->file('logo_company') as $image)
            {
                $name=$image->getClientOriginalName();
                $image->move(public_path().'/img/backend/image', $name);  
                $data[] = $name;  
            }
         }
        Partner::create($request->all());
        return redirect('backend/partner/form')->with('success', 'Information has been added');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        return view('backend.partnership.update');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $partners= Partner::find($id);
        $partners->company_name=$request->get('company_name');
        $partners->logo_company=$request->get('logo_company');
        $partners->description_company=$request->get('description_company');
        $partners->url_website=$request->get('url_website');
        $partners->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $partners = Partner::find($id);
        $partners->delete();
    }
}
