<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use Illuminate\Validation\Validator;
use App\Models\Professor;

class ProfessorController extends Controller
{
    //function index 
    //date: 10 May 2018
    Public function index()
    {
    	$users = DB::table('professor')->limit(10)
    					->orderBy('id', 'desc')->get();

        return view('backend.professor.index', ['users' => $users]);
    }

    // function create 
    // date: 10 May 2018 
    public function create()
    {
    	return view ('backend.professor.create');
    }

    //  function store
    //  date: 10 May 2018 
    //  
   public function store(Request $request)
   {
   	   $this->validate($request, [
	    	'name' => 'required',
            'image' => 'required',
        ]);


        $image = $request->file('image');
        dd($image);
        $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
     
   
        $destinationPath = public_path('/thumbnail');
        $img = Professor::make($image->getRealPath());
        $img->resize(100, 100, function ($constraint) {
		    $constraint->aspectRatio();
		})->save($destinationPath.'/'.$input['imagename']);


        $destinationPath = public_path('/images');
        $image->move($destinationPath, $input['imagename']);


        $this->postImage->add($input);


        return back()
        	->with('success','Image Upload successful')
        	->with('imageName',$input['imagename']);
    }


 
}
        
