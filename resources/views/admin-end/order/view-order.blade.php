@extends('admin-end.master')
@section('title')
Manage Order
@endsection
@section('content')
			<div id="content" class="span10">
			
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="{{ url('\dashboard')}}">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Tables</a></li>
			</ul>

<div class="row-fluid sortable">		
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon user"></i><span class="break"></span>View Order Details</h2>
			<div class="box-icon">
				<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
				<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
				<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
			</div>
		</div>
		<div class="box-content">
		<h3 class="text-center text-success">Order Details Info For this Order</h3>
		<table class="table table-striped table-bordered">
			<tr>
				<th>Order No</th>
				<td>{{ $order->id}}</td>
			</tr>
			<tr>
				<th>Order Total</th>
				<td>{{ $order->total_order }}</td>
			</tr>
			<tr>
				<th>Order Status</th>
				<td>{{ $order->order_status }}</td>
			</tr>
			<tr>
				<th>Order Date</th>
				<td>{{ $order->created_at }}</td>
			</tr>
		</table>            
	</div>
	<div class="box-content">
		<h3 class="text-center text-success">Customer Info For this Order</h3>
		<table class="table table-striped table-bordered">
			<tr>
				<th>Customer Name</th>
				<td>{{ $customer->first_name.' '.$customer->last_name}}</td>
			</tr>
			<tr>
				<th>Phone Number</th>
				<td>{{ $customer->mobile_number }}</td>
			</tr>
			<tr>
				<th>Email Address</th>
				<td>{{ $customer->email_address }}</td>
			</tr>
			<tr>
				<th>Mailing Address</th>
				<td>{{ $customer->mailing_address }}</td>
			</tr>
		</table>            
	</div>
	<div class="box-content">
		<h3 class="text-center text-success">Shipping Info For this Order</h3>
		<table class="table table-striped table-bordered">
			<tr>
				<th>Full Name</th>
				<td>{{ $shipping->full_name }}</td>
			</tr>
			<tr>
				<th>Phone Number</th>
				<td>{{ $shipping->mobile_number }}</td>
			</tr>
			<tr>
				<th>Email Address</th>
				<td>{{ $shipping->email_address }}</td>
			</tr>
			<tr>
				<th>Mailing Address</th>
				<td>{{ $shipping->shipping_address }}</td>
			</tr>
		</table>            
	</div>
	<div class="box-content">
		<h3 class="text-center text-success">Payment Info For this Order</h3>
		<table class="table table-striped table-bordered">
			<tr>
				<th>Payment Type</th>
				<td>{{ $payment->payment_type }}</td>
			</tr>
			<tr>
				<th>Payment Status</th>
				<td>{{ $payment->payment_status }}</td>
			</tr>
		</table>            
	</div>
	<div class="box-content">
		<h3 class="text-center text-success">Order Info For this Order</h3>
		<table class="table table-striped table-bordered">
		   <thead>
			  <tr>
				 <th><h6>S/N</h6></th>
				 <th><h6>Product Id</h6></th>
				 <th><h6>Product Name</h6></th>
				 <th><h6>Product Price</h6></th>
				 <th><h6>Product Quantity</h6></th>
				 <th><h6>Total Price</h6></th>
			 </tr>
		    </thead>   
		    <tbody>
		    	@php($i=1)
		    	@foreach($orderDetails as $orderDetail)
		<tr>
		<td>{{ $i++}}</td>
		<td class="center"><h6>{{ $orderDetail->product_id}}</h6></td>
		<td class="center"><h6>{{ $orderDetail->product_name}}</h6></td>
		<td class="center"><h6>Tk. {{ $orderDetail->product_price}}</h6></td>
		<td class="center"><h6>{{ $orderDetail->product_quantity}}</h6></td>
		<td class="center"><h6>Tk. {{ $orderDetail->product_price*$orderDetail->product_quantity}}</h6></td>
		</tr>
		@endforeach
			</tbody>
	  </table>            
	</div>
</div><!--/span-->
			
</div><!--/row-->
</div>
@endsection