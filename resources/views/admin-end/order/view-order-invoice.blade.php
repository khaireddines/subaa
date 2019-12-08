@extends('admin-end.master')
@section('title')
Invoice Details
@endsection
@section('content')
<div id="content" class="span10">
			
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="{{ url('\dashboard')}}">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Invioce</a></li>
			</ul>

<div class="row-fluid sortable">		
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon user"></i><span class="break"></span>View Invoice Details</h2>
			<div class="box-icon">
				<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
				<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
				<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
			</div>
		</div>
<div class="box-content">
		<!-- <h3 class="text-center text-success">Order Details Info For this Order</h3> -->
		<table class="table table-striped">
			<tr>
				<th><img src="{{ asset('/') }}/admin-end/logo/logo.jpg"/></th>
				<td><strong>OxyRed  Technologies  LLC.</strong>
              <br />
                  <i>Address :</i> 245/908 , New York Lane,
              <br />
                  Forth Street , Deumark,
              <br />
                  United States. </td>
			</tr>
		</table>            
</div>
<div class="box-content">
		<!-- <h3 class="text-center text-success">Order Details Info For this Order</h3> -->
		<table class="table table-striped">
			<tr>
				<th>
					<h4>  <strong>Client Information</strong></h4>
       				<strong> {{ $customer->first_name.' '.$customer->last_name}} </strong>
         			<br />
              		<b>Address : {{ $customer->mailing_address }}</b>
         			<br />
         			<b>Call : {{ $customer->mobile_number }}</b>
          			<br />
         			<b>E-mail : {{ $customer->email_address }}</b>
     			</th>
				<td>
					<h4>  <strong>Shipping Details </strong></h4>
				    <b> {{ $shipping->full_name}}</b>
				    <br />
				    <b>Address : {{ $shipping->shipping_address}}</b>
				    <br />
				    <b>Call : {{ $shipping->mobile_number}}</b>
				    <br />
				    <b>E-mail : {{ $shipping->email_address}}</b>
              </td>
			</tr>
		</table>            
</div>
<div class="box-content">
		<!-- <h3 class="text-center text-success">Order Details Info For this Order</h3> -->
		<table class="table-bordered pull-right">
			<tr>
				<th><span>Invoice # </span></th>
				<td><span>0000000{{ $order->id }}</span></td>
			</tr>
			<tr>
				<th><span>Date : </span></th>
				<td><span>{{ $order->created_at }}</span></td>	
			</tr>
			<tr>
				<th><span>Amount Due : </span></th>
				<td><span> Tk.{{ $order->total_order }}</span></td>
			</tr>
		</table>            
</div>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12" style="margin-left: 30px;">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Item</th>
                        <th>Description</th>
                        <th>Rates</th>
                        <th>Quantity</th>
                         <th>Total Price</th>
                    </tr>
                </thead>
                <tbody>
                	@php($sum=0)
                	@foreach($orderDetails as $orderDetail)
                    <tr>
                        <td>{{ $orderDetail->product_name}}</td>
                        <td>Website Design</td>
                        <td>Tk. {{ $orderDetail->product_price}}</td>
                        <td>{{ $orderDetail->product_quantity}}</td>
                        <td><span>Tk. </span>{{ $total = $orderDetail->product_price*$orderDetail->product_quantity}}</td>
                    </tr>
                    @php($totalsum =$sum + $total)
                    @endforeach     
                </tbody>
            </table>
        </div>
     	<hr />
     	<div class="box-content">
		<!-- <h3 class="text-center text-success">Order Details Info For this Order</h3> -->
		<table class="table-bordered pull-right">
			<tr>
				<th><span>Total Amount : </span></th>
				<td><span> Tk. </span><span>{{ $totalsum }}</span></td>
			</tr>
			<tr>
				<th><span>Tax : </span></th>
				<td><span>{{ $order->created_at }}</span></td>	
			</tr>
			<tr>
				<th><span>Bill Amount : </span></th>
				<td><span> Tk.{{ $order->total_order }}</span></td>
			</tr>
		</table>            
</div>

 </div>
</div>
<div class="row">
 	<div class="col-lg-12 col-md-12 col-sm-12" style="margin-left: 35px;">
    	<strong> Important: </strong>
    	 <ol>
          <li>
            This is an electronic generated invoice so doesn't require any signature.

         </li>
         <li>
             Please read all terms and polices on  www.yourdomaon.com for returns, replacement and other issues.

         </li>
     	</ol>
    </div>
</div>
</div><!--/span-->
			
</div><!--/row-->
</div>
@endsection