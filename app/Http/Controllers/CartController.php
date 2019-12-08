<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Cart;
class CartController extends Controller
{
    public function addToCart(Request $request){
    	$product = Product::find($request->id);
    	Cart::add([
    		'id' => $request->id,
    		'name' => $product->product_name,
    		'price' => $product->product_price,
    		'quantity'  =>$request->quantity,
    		'attributes' => array('image' => $product->product_image)
    		
    	]);
    	return redirect('/cart/show');
    }
    public function showCart(){
    	$cartCollections = Cart::getContent();
    	return view('front-end.cart.show-cart',[
    		'cartCollections' =>$cartCollections
    	]);
    }
    public function deleteCart($id){
    	Cart::remove($id);
    	return redirect('/cart/show');
    }
    public function updateCart(Request $request){
        Cart::update($request->id, array(
        'quantity' => $request->quantity
         ));
        return redirect('/cart/show');
    }
}
