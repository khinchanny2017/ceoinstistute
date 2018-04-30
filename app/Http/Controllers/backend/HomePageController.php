<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Images;


class HomePageController extends Controller
{
  public function index()
  {
    $users = DB::table('main_images')->get();
  	return view('backend.main-img.form',['users' => $users]);
  }
//
public function create(){

	return view('backend.main-img.form');
}
 //
 public function store(Request $request){
 	        request()->validate([
            'main_title' => 'required',
            'sub_title' => 'required',
            'main_img' => 'required',
            'contents' => 'required'
          
          ]);	

            $file = $request->file('filename');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/img/backend/images', $name);

        Images::create($request->all());
        return redirect()->route('backend.dashboard')
                        ->with('success','created successfully.');
 }


}
