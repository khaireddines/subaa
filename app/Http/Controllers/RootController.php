<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Root;
use App\Category;
use App\Product;
use DB;

class RootController extends Controller
{
    public function index(){  
    	return view('admin-end.rootcategory.add-root-category');
    }
    public function saveRoot(Request $request){
		 $this->validate($request,[
	      'rootCategoryDescription' =>'required',
	      'publicationStatus' =>'required'
	    ]);
    	$root = new Root();
    	$root->rootCategoryName = $request->rootCategoryName;
    	$root->rootCategoryDescription = $request->rootCategoryDescription;
    	$root->publicationStatus = $request->publicationStatus;
    	$root->save();
    	// return redirect()->back();
    	return redirect('/root/add')->with('message','Root Category Info Save Successfully');
    }
     public function manageRootCategory(){
    	$roots = Root::all();
        // return $roots;
    	return view('admin-end.rootcategory.root-category-manage',['roots'=>$roots]);
    }


     public function unpublishedRoot($id){
        $root = Root::find($id);
        $root->publicationStatus = 0;
        $root->save();
        
        return redirect('/root/manage')->with('message','Root Category Info Unpublished Successfully');
    }
     public function publishedRoot($id){
        $root = Root::find($id);
        $root->publicationStatus = 1;
        $root->save();
        
        return redirect('/root/manage')->with('message','Root Category Info Published Successfully');
    }
     public function editRoot($id){
        $root = Root::find($id);
        return view('admin-end.rootcategory.edit-root-category-manage',['root'=>$root]);
    }
    public function updateRoot(Request $request){
        $root = Root::find($request->id);
        $root->rootCategoryName = $request->rootCategoryName;
        $root->rootCategoryDescription = $request->rootCategoryDescription;
        $root->publicationStatus = $request->publicationStatus;
        $root->save();

        return redirect('/root/manage')->with('message','Root Category Info Updated');
    }
    public function deleteRoot($id){
        $root = Root::find($id);
        $root->delete();
        
        return redirect('/root/manage')->with('message','Root Category Info Deleted Successfully');
    }
}
