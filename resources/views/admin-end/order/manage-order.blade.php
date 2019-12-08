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
			<h2><i class="halflings-icon user"></i><span class="break"></span>Manage Order</h2>
			<div class="box-icon">
				<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
				<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
				<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
			</div>
		</div>
	<div class="box-content">
		<table class="table table-striped table-bordered bootstrap-datatable datatable">
		   <thead>
			  <tr>
				 <th><h6>S/N</h6></th>
				 <th><h6>Customer Name</h6></th>
				 <th><h6>Order Total</h6></th>
				 <th><h6>Order Date</h6></th>
				 <th><h6>Order Status</h6></th>
				 <th><h6>Payment type</h6></th>
				 <th><h6>Payment Status</h6></th>
				 <th><h6>Action</h6></th>
			  </tr>
		    </thead>   
		    <tbody>
		    	@php($i=1)
		@foreach($orders as $order)
		<tr>
		<td>{{ $i++}}</td>
		<td class="center"><h6>{{ $order->first_name.' '.$order->last_name}}</h6></td>
		<td class="center"><h6>{{ $order->total_order}}</h6></td>
		<td class="center"><h6>{{ $order->created_at}}</h6></td>
		<td class="center"><h6>{{ $order->order_status}}</h6></td>
		<td class="center"><h6>{{ $order->payment_type }}</h6></td>
		<td class="center"><h6>{{ $order->payment_status }}</h6></td>
		<td class="center">
		
		<a class="btn btn-success" title="View Order Details" href="{{route('view-order-details',['id'=>$order->id])}}">
		<i class="halflings-icon white zoom-in"></i>  
		</a>
	
		<a class="btn btn-warning" title="View Order Invoice" href="{{route('view-order-invoice',['id'=>$order->id])}}">
		<i class="halflings-icon white zoom-out"></i>  
		</a>
		
		<a class="btn btn-primary" title="Download Order Details" href="{{route('download-order-invoice',['id'=>$order->id])}}">
		<i class="halflings-icon white download"></i>  
		</a>
		<a class="btn btn-info" title="Edit Order" href="{{route('edit-product',['id'=>$order->id])}}">
		<i class="halflings-icon white edit"></i>  
		</a>
		<a class="btn btn-danger" title="Delete Order" href="{{route('delete-category',['id'=>$order->id])}}">
		<i class="halflings-icon white trash"></i>
		</a>
		</td>
		</tr>
		@endforeach
			</tbody>
	  </table>            
	</div>
</div><!--/span-->
			
</div><!--/row-->
</div>
@endsection