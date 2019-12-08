<?php

namespace App\Http\Controllers;
use App\Brand;
use App\Category;
use Illuminate\Http\Request;
use App\Product;
use App\Root;
use Image;
use DB;

class ProductController extends Controller
{
    public function index(){
       /*$roots = Root::where('publicationStatus',1)->get();*/
       $categories = Category::where('publicationStatus',1)->get();
       $brands = Brand::where('publicationstatus',1)->get();
       return view('admin-end.product.add-product',[
           'categories' =>$categories,
           'brands' =>$brands/*,
           'roots'  =>$roots*/
    ]);
    }

    protected function productInfoValidate($request){
         $this->validate($request, [
             'category_id' => 'required',
             'brand_id' => 'required',
             'product_name' => 'required',
             'product_price' => 'required',
             'product_quantity' => 'required',
             'short_description' => 'required',
             'long_description' => 'required',
             'product_image' => 'required',
             'publicationStatus' => 'required'
        ]);
    }

    protected function productImageUpload($request){
        $productImage = $request->file('product_image');
        $fileType = $productImage->getClientOriginalExtension();
        $imageName = $request->product_name.'.'.$fileType;
        //$imageName = $productImage->getClientOriginalName();
        $directory = 'product-images/';
        $imageUrl = $directory.$imageName;
        //$productImage->move($directory, $imageName);
        Image::make($productImage)->resize(300, 350)->save($imageUrl);
        return $imageUrl;
    }

    protected function saveProductBasicInfo($request, $imageUrl){
        $product = new Product();
        $product->category_id = $request->category_id;
        $product->brand_id = $request->brand_id;
        $product->product_name = $request->product_name;
        $product->product_price = $request->product_price;
        $product->product_quantity = $request->product_quantity;
        $product->short_description = $request->short_description;
        $product->long_description = $request->long_description;
        $product->product_image = $imageUrl;
        $product->publicationStatus = $request->publicationStatus;
        $product->save();
    }

    public function saveProduct(Request $request){
        $this->productInfoValidate($request);
        $imageUrl = $this->productImageUpload($request);
        $this->saveProductBasicInfo($request, $imageUrl);
       
        return redirect('/product/add')->with('message','Product Information Save Successfully');

    }
       public function manageProduct(){
        $categories = Category::where('publicationStatus',1)->get();
        $brands = Brand::where('publicationstatus',1)->get();
        $products = DB::table('products')
        ->join('categories', 'products.category_id', '=', 'categories.id')
        ->join('brands', 'products.brand_id', '=', 'brands.id')
        ->select('products.*', 'categories.categoryName', 'brands.brandName')
        ->get();
        return view('admin-end.product.product-manage',[
        'products' =>$products,
        'categories' =>$categories,
        'brands' =>$brands
    ]);
    }
    public function unpublishedProduct($id){
        $product = Product::find($id);
        $product->publicationStatus = 0;
        $product->save();
        
        return redirect('/product/manage')->with('message','Product Info Unpublished Successfully');
    }
    public function publishedProduct($id){
        $product = Product::find($id);
        $product->publicationStatus = 1;
        $product->save();
        
        return redirect('/product/manage')->with('message','Product Info Published Successfully');
    }
    public function editProduct($id){
        $productedit = Product::find($id);
        $categories = Category::where('publicationStatus',1)->get();
        $brands = Brand::where('publicationstatus',1)->get();
        return view('admin-end.product.edit-product',[
        'productedit' =>$productedit,
        'categories' =>$categories,
        'brands' =>$brands
    ]);
    }
    public function productBasicInfoUpdate($product, $request, $imageUrl=null){
        $product->category_id = $request->category_id;
        $product->brand_id = $request->brand_id;
        $product->product_name = $request->product_name;
        $product->product_price = $request->product_price;
        $product->product_quantity = $request->product_quantity;
        $product->short_description = $request->short_description;
        $product->long_description = $request->long_description;
        if ($imageUrl) {
            $product->product_image = $imageUrl;
        }
        
        $product->publicationStatus = $request->publicationStatus;
        $product->save();
    }
 
       public function updateProduct(Request $request){       
       $productImage = $request->file('product_image');
       $product = Product::find($request->product_id);
       if ($productImage) {
            unlink($product->product_image);
            $imageUrl = $this->productImageUpload($request);
            $this->productBasicInfoUpdate($product, $request, $imageUrl);

       }
       else{
             $this->productBasicInfoUpdate($product, $request); 
       }   
        return redirect('/product/manage')->with('message','Product Info Updated');   
}
    public function deleteProduct($id){
        $product = Product::find($id);
        $product->delete();
        
        return redirect('/product/manage')->with('message','Product Info Deleted Successfully');
    }

}