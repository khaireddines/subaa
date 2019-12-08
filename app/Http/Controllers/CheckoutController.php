<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\shipping;
use App\Order;
use App\Payment;
use App\OrderDetail;
use Mail;
use Session;
use Hash;
use Cart;
class CheckoutController extends Controller
{
    public function index(){
    	return view('front-end.checkout.checkout-content');
    }
    public function customerSignUp(Request $request){
    	 $this->validate($request,[
          'first_name' =>'required | regex:/^[\pL\s\-]+$/u | max:15 | min:4',
          'last_name' =>'required | regex:/^[\pL\s\-]+$/u | max:15 | min:4',
          'mobile_number' =>'required|regex:/^([0-9\s\-\+\(\)]*)$/| min:11 | max:11',
          'mailing_address' =>'required | max:200 | min:20',
          'email_address' =>'required | email | unique:customers,email_address',
          'password' => ['required', 'string', 'min:8', 'confirmed']
        ]);
    	$customer = new Customer();
    	$customer->first_name = $request->first_name;
    	$customer->last_name = $request->last_name;
    	$customer->mobile_number = $request->mobile_number;
    	$customer->mailing_address = $request->mailing_address;
    	$customer->email_address = $request->email_address;
    	$customer->password = Hash::make($request->password);
    	$customer->save();

    	$customerId = $customer->id;
    	Session::put('customerId',$customerId);
    	Session::put('firstName',$customer->first_name);
    	Session::put('lastName',$customer->last_name);
    	Session::put('mobileNumber',$customer->mobile_number);
    	Session::put('mailingAddress',$customer->mailing_address);
    	Session::put('emailAddress',$customer->email_address);
    	Session::put('customerName',$customer->first_name.' '.$customer->last_name);

    	$data = $customer->toArray();
    	Mail::send('front-end.mails.confirmation-mail', $data, function($message) use($data){
    		$message->to($data['email_address']);
    		$message->subject('Confirmation mail');
    	});
    	//return 'Registration Successfully Completed';
    	
    	return redirect('/checkout/shipping');
    }

 public function ajaxEmailCheck($a){
        $customer = Customer::where('email_address', $a)->first();
        if ($customer) {
            echo 'Already Exist';
        }else {
            echo 'Available';
        }
    }

    public function customerLoginIndex(){
    	return view('front-end.checkout.customer-login');
    }

    public function customerLogin(Request $request){
    	$customer = Customer::where('email_address', $request->email_address)->first();
    	if (password_verify($request->password, $customer->password)) {
		    Session::put('customerId',$customer);
    		Session::put('firstName',$customer->first_name);
	    	Session::put('lastName',$customer->last_name);
	    	Session::put('mobileNumber',$customer->mobile_number);
	    	Session::put('mailingAddress',$customer->mailing_address);
	    	Session::put('emailAddress',$customer->email_address);
	    	Session::put('customerName',$customer->first_name.' '.$customer->last_name);
    		return redirect('/checkout/shipping');
		} else {
		    return redirect('/customer/login')->with('message','Please Enter Valid Password...');
		}
		    }
	public function customerLogout(){
		Session::forget('customerId');
		Session::forget('customerName');
		return redirect('/');
	}
	public function newCustomerLogin(){
		return view('front-end.customer.new-customer-login');
	}
	public function newCustomerLoginIndex(Request $request){
    	$customer = Customer::where('email_address', $request->email_address)->first();
    	if (password_verify($request->password, $customer->password)) {
		    Session::put('customerId',$customer);
    		Session::put('firstName',$customer->first_name);
	    	Session::put('lastName',$customer->last_name);
	    	Session::put('mobileNumber',$customer->mobile_number);
	    	Session::put('mailingAddress',$customer->mailing_address);
	    	Session::put('emailAddress',$customer->email_address);
	    	Session::put('customerName',$customer->first_name.' '.$customer->last_name);
    		return redirect('/');
		} else {
		    return redirect('/customer/login')->with('message','Please Enter Valid Password...');
		}
		    }
    public function shippingForm(){
    	$customer = Customer::find(Session::get('customerId'));
    	return view('front-end.checkout.shipping',[
    		'customer'=>$customer
    	]);
    }
    public function saveShippingInfo(Request $request){
    	$shipping = new shipping();
    	$shipping->full_name = $request->full_name;
    	$shipping->mobile_number = $request->mobile_number;
    	$shipping->shipping_address = $request->shipping_address;
    	$shipping->email_address = $request->email_address;
    	$shipping->save();

    	Session::put('shippingId', $shipping->id);
    	return redirect('/checkout/payment');
    }
    public function paymentForm(){
    	return view('front-end.checkout.payment');
    }
    public function newOrder(Request $request){
    	$paymentType = $request->payment_type;
    	if ($paymentType =='Cash') {
    		$order = new Order();
    		$order->customer_id = Session::get('customerId');
    		$order->shipping_id = Session::get('shippingId');
    		$order->total_order = Session::get('totalorder');
    		$order->save();

    		$payment = new Payment();
    		$payment->order_id = $order->id;
    		$payment->payment_type = $paymentType;
    		$payment->payment_type = $paymentType;
    		$payment->save();

    		$cartProducts = Cart::getContent();
    		foreach ($cartProducts as $cartProduct) {
    			$orderDetail = new OrderDetail();
    			$orderDetail->order_id = $order->id;
    			$orderDetail->product_id = $cartProduct->id;
    			$orderDetail->product_name = $cartProduct->name;
    			$orderDetail->product_price = $cartProduct->price;
    			$orderDetail->product_quantity = $cartProduct->quantity;
    			$orderDetail->save();
    		}

    		Cart::clear();

    		return redirect('/complete/order');

    	} else if ($paymentType =='Paypal') {
    		# code...
    	} else if ($paymentType =='BKash') {
    		# code...
    	}

    }
    public function completeOrder(){
    	return 'Successfully';
    }
}
