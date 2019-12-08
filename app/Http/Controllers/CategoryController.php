<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Category;
use App\Root;
use DB;

class CategoryController extends Controller
{
    public function createCategory(){
        $roots = Root::where('publicationStatus',1)->get();
    	return view('admin-end.category.addcategory',[
            'roots' =>$roots
        ]);
    }
    public function storeCategory(Request $request){
        $this->validate($request,[
          'categoryName' =>'required | regex:/^[\pL\s\&\-]+$/u | max:50 | min:4',
          'categoryDescription' =>'required',
          'rootCategoryId' =>'required',
          'publicationStatus' =>'required'
        ]);
    	$category = new Category();
        $category->rootCategoryId = $request->rootCategoryId;
    	$category->categoryName = $request->categoryName;
    	$category->categoryDescription = $request->categoryDescription;
    	$category->publicationStatus = $request->publicationStatus;
    	$category->save();
    	// return redirect()->back();
    	return redirect('/category/add')->with('message','Category Info Save Successfully');


    /*	Category::create($request->all());
    	return 'Category Info Save Successfully';*/


    	/*DB::table('categories')->insert([
    		'categoryName'=>$request->categoryName,
    		'categoryDescription'=>$request->categoryDescription,
    		'publicationStatus'=>$request->publicationStatus,
    	]);
    	return 'Category Info Save Successfully';*/
    }
    public function manageCategory(){
    	$categories = Category::all();
        // return $categories;
    	return view('admin-end.category.category-manage',['categories'=>$categories]);
    }
    public function unpublishedCategory($id){
        $category = Category::find($id);
        $category->publicationStatus = 0;
        $category->save();
        
        return redirect('/category/manage')->with('message','Category Info Unpublished Successfully');
    }
     public function publishedCategory($id){
        $category = Category::find($id);
        $category->publicationStatus = 1;
        $category->save();
        
        return redirect('/category/manage')->with('message','Category Info Published Successfully');
    }
     public function editCategory($id){
        $category = Category::find($id);
        return view('admin-end.category.edit-category',['category'=>$category]);
    }
    public function updateCategory(Request $request){
        $category = Category::find($request->id);
        $category->categoryName = $request->categoryName;
        $category->categoryDescription = $request->categoryDescription;
        $category->publicationStatus = $request->publicationStatus;
        $category->save();

        return redirect('/category/manage')->with('message','Category Info Updated');
    }
    public function deleteCategory($id){
        $category = Category::find($id);
        $category->delete();
        
        return redirect('/category/manage')->with('message','Category Info Deleted Successfully');
    }
}