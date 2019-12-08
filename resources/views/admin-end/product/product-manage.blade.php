@extends('admin-end.master')
@section('title')
Manage Product
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
			<h2 style="text-align: center;" class="alert-success">{{ Session::get('message')}}</h2>
			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Members</h2>
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
								 <th><h6>Category Name</h6></th>
								 <th><h6>Brand Name</h6></th>
								 <th><h6>Product Name</h6></th>
								 <th><h6>Product Image</h6></th>
								 <th><h6>Product Price</h6></th>
								 <th><h6>Product Quantity</h6></th>
								 <th><h6>Publication Status</h6></th>
								 <th><h6>Action</h6></th>
							  </tr>
						  </thead>   
						  <tbody>
@php($i=1)
@foreach($products as $product)
<tr>
<td>{{ $i++}}</td>
<td class="center"><h6>{{ $product->categoryName }}</h6></td>
<td class="center"><h6>{{ $product->brandName }}</h6></td>
<td class="center"><h6>{{ $product->product_name }}</h6></td>
<td class="center">
<img src="{{ asset($product->product_image)}}" alt="" height="60" width="60">
</td>
<td class="center"><h6>{{ $product->product_price }}</h6></td>
<td class="center"><h6>{{ $product->product_quantity }}</h6></td>
<td class="center"><h6>
<span class="label label-success">{{ $product->publicationStatus == 1 ? 'Published' : 'Unpublished'}}</span></h6>
</td>
<td class="center">

@if($product->publicationStatus == 1)
<a class="btn btn-success" href="{{route('unpublished-product',['id'=>$product->id])}}">
<i class="halflings-icon white arrow-up"></i>  
</a>
@else
<a class="btn btn-warning" href="{{route('published-product',['id'=>$product->id])}}">
<i class="halflings-icon white arrow-down"></i>  
</a>
@endif
<a class="btn btn-info" href="{{route('edit-product',['id'=>$product->id])}}">
<i class="halflings-icon white edit"></i>  
</a>
<a class="btn btn-danger" href="{{route('delete-product',['id'=>$product->id])}}">
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