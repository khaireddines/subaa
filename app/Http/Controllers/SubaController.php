<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\Slider;
use App\Root;
//importing DB was wrong
use Illuminate\Support\Facades\DB;



class SubaController extends Controller
{

    public function index(){
        $newSliders = Slider::where('publicationStatus',1)
        ->orderby('id', 'ASC')
        ->get();

        $newProducts = Product::where('publicationStatus',1)
        ->orderby('id', 'DESC')
        ->take(8)
        ->get();

        $categories = DB::table('categories')
        ->join('roots', 'categories.rootCategoryId', '=', 'roots.id')
        ->select('categories.*', 'categories.categoryName')
        ->orderby('categories.id', 'ASC')
        ->get();
		
        $roots = Root::where('publicationStatus',1)->get();
        if(count($roots)==0)
        {
            $roots=NULL;
        }
        return view('front-end.home.home',[
            'newSliders'   =>$newSliders,
            'newProducts'  =>$newProducts,
            'roots'        =>$roots,
            'categories'   =>$categories
        ]);
        //what's that bro !!
        /* If ($count=count ($roots))
        {
        $roots=NULL;
        }
        else {
        //what's this ?
        //$roots=roots;

        }
        return $roots;   
        	return view('front-end.home.home',[
            'newSliders'   =>$newSliders,
            'newProducts'  =>$newProducts,
            'roots'        =>$roots,
            'categories'   =>$categories
            
        ]); */
    }
    public function categoryProduct($id){
        $categoryProducts = Product::where('category_id', $id)
        ->where('publicationStatus', 1)
        ->get();
        return view('front-end.category.category-content',[
            'categoryProducts' =>$categoryProducts
        ]);
    }
  
    public function contactUs(){
    	return view('front-end.contactus.contactus');
    }
    public function aboutUs(){
    	return view('front-end.contactus.aboutus');
    }
    public function frequentlyQuestion(){
    	return view('front-end.contactus.frequentlyQuestion');
    }
    public function productDetails($id){
        $productid = Product::find($id);
        //return $productid;
        return view('front-end.product.product-details',['productid' =>$productid]);
    }
}
