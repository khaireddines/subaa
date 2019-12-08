<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Brand;
use DB;

class BrandController extends Controller
{
    public function index(){  
    	return view('admin-end.brand.add-brand');
    }
    public function saveBrand(Request $request){
		 $this->validate($request,[
	      'brandName' =>'required | regex:/^[\pL\s\-]+$/u | max:15 | min:5',
	      'brandDescription' =>'required',
	      'publicationStatus' =>'required'
	    ]);
    	$brand = new Brand();
    	$brand->brandName = $request->brandName;
    	$brand->brandDescription = $request->brandDescription;
    	$brand->publicationStatus = $request->publicationStatus;
    	$brand->save();
    	// return redirect()->back();
    	return redirect('/brand/add')->with('message','Brand Info Save Successfully');
    }

}
