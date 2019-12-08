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
<div class="box-header" data-original-title style="height: 28px;">
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#addProduct">Add New Product</button>
<div class="box-icon">
<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
</div>
</div>
<div class="box-content">
<div class="table-responsive">
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
<a class="btn btn-success" href="{{route('unpublished-category',['id'=>$product->id])}}">
<i class="halflings-icon white arrow-up"></i>  
</a>
@else
<a class="btn btn-warning" href="{{route('published-category',['id'=>$product->id])}}">
<i class="halflings-icon white arrow-down"></i>  
</a>
@endif
<a class="btn btn-info" href="{{route('edit-product',['id'=>$product->id])}}">
<i class="halflings-icon white edit"></i>  
</a>
<a class="btn btn-danger" href="{{route('delete-category',['id'=>$product->id])}}">
<i class="halflings-icon white trash"></i>
</a>
</td>
</tr>
@endforeach
</tbody>
</table>
</div>        
</div>
</div><!--/span-->

</div><!--/row-->

<!-- Modal -->
<div id="addProduct" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
      {!! Form::open(['route'=>'new-product','method'=>'POST','class'=>'form-horizontal', 'enctype'=>'multipart/form-data'])!!}
   <div class="row">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
<div class="control-group hidden-phone">
 <label class="control-label">Category Name : </label>
 <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
<select class="span6 typeahead" name="category_id">
<option value="">---- Select Category Name ----</option>
@foreach($categories as $category)
<option value="{{ $category->id }}">{{ $category->categoryName }}</option>
@endforeach
</select>
<b><span class="alert-danger">{{ $errors->has('category_id') ? $errors->first('category_id') : ''}}</span></b>
 </div>
</div>
</div>
</div>
<div class="row" style="margin-top: -15px;">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
<div class="control-group hidden-phone">
 <label class="control-label">Brand Name : </label>
 <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
<select class="span6 typeahead" name="brand_id">
<option value="">---- Select Brand Name ----</option>
@foreach($brands as $brand)
<option value="{{ $brand->id }}">{{ $brand->brandName }}</option>
@endforeach
</select>
<b><span class="alert-danger">{{ $errors->has('brand_id') ? $errors->first('brand_id') : ''}}</span></b>
 </div>
</div>
</div>
</div>
<div class="row" style="margin-top: -15px;">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
<div class="control-group hidden-phone">
 <label class="control-label">Product Name : </label>
 <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
<input type="text" class="span6 typeahead" name="product_name">
<b><span class="alert-danger">{{ $errors->has('product_name') ? $errors->first('product_name') : ''}}</span></b>
 </div>
</div>
</div>
</div>
<div class="row" style="margin-top: -15px;">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
<div class="control-group hidden-phone">
 <label class="control-label">Product Price : </label>
 <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
<input type="text" class="span6 typeahead" name="product_price">
<b><span class="alert-danger">{{ $errors->has('product_price') ? $errors->first('product_price') : ''}}</span></b>
 </div>
</div>
</div>
</div>
<div class="row" style="margin-top: -15px;">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
<div class="control-group hidden-phone">
 <label class="control-label">Product Quantity : </label>
 <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
<input type="number" class="span6 typeahead" name="product_quantity">
<b><span class="alert-danger">{{ $errors->has('product_quantity') ? $errors->first('product_quantity') : ''}}</span></b>
 </div>
</div>
</div>
</div>
<div class="row" style="margin-top: -15px;">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
<div class="control-group hidden-phone">
 <label class="control-label">Short Description : </label>
 <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
<textarea class="span6 typeahead" rows="3" name="short_description"></textarea>
<b><span class="alert-danger">{{ $errors->has('short_description') ? $errors->first('short_description') : ''}}</span></b>
 </div>
</div>
</div>
</div>
<div class="row" style="margin-top: -15px;">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
<div class="control-group hidden-phone">
 <label class="control-label col-md-3">Long Description : </label>
 <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
<textarea class="form-control" id="editor" name="long_description"></textarea>
<b><span class="alert-danger">{{ $errors->has('long_description') ? $errors->first('long_description') : ''}}</span></b>
 </div>
</div>
</div>
</div>

<div class="row" style="margin-top: -15px;">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
<div class="control-group hidden-phone">
 <label class="control-label">Product Image : </label>
 <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
<input class="span6 typeahead" id="fileInput" type="file" name="product_image" accept="image/*">
<b><span class="alert-danger">{{ $errors->has('product_image') ? $errors->first('product_image') : ''}}</span></b>
 </div>
</div>
</div>
</div>
<div class="row" style="margin-top: -15px;">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
<div class="control-group hidden-phone">
 <label class="control-label">Publication Status : </label>
 <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
<select class="span6 typeahead" name="publicationStatus">
<option value="">Select Publication Status</option>
<option value="1">Published</option>
<option value="0">Unpublished</option>
</select>
<b><span class="alert-danger">{{ $errors->has('publicationStatus') ? $errors->first('publicationStatus') : ''}}</span></b>
 </div>
</div>
</div>
</div>
<div class="modal-footer">
      <button type="button" class="btn btn-secondary pull-left" data-dismiss="modal">Cancel</button>
      <input type="submit" name="btn" class="btn btn-success" value="Save product Info">
     </div>
        {!! Form::close()!!}
      </div>
     
    </div>

  </div>
</div>
</div>

@endsection
