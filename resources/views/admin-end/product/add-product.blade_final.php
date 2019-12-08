@extends('admin-end.master')
@section('title')
Add Product
@endsection
@section('content')
<div id="content" class="span10">


<ul class="breadcrumb">
	<li>
		<i class="icon-home"></i>
		<a href="{{ url('\dashboard')}}">Home</a>
		<i class="icon-angle-right"></i> 
	</li>
	<li>
		<i class="icon-edit"></i>
		<a href="#">Forms</a>
	</li>
</ul>
<h4 style="text-align: center;" class="alert-success">{{Session::get('message')}}</h4>
<div class="row-fluid sortable">
<div class="box span12">
<div class="box-header" data-original-title>
<h2><i class="halflings-icon edit"></i><span class="break"></span>Brand Input Form UI</h2>
<div class="box-icon">
	<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
	<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
	<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
</div>
</div>
<div class="box-content">
{!! Form::open(['route'=>'new-product','method'=>'POST','class'=>'form-horizontal'])!!}
  <fieldset>
	<div class="control-group hidden-phone">
	  <label class="control-label">Category Name</label>
	  <div class="controls">
		<select class="span6 typeahead" name="category_id">
			<option value="">---- Select Category Name ----</option>
			<option value="">Category One</option>
			<option value="">Category Two</option>
		</select>
		<b><span class="alert-danger">{{ $errors->has('category_id') ? $errors->first('category_id') : ''}}</span></b>
	  </div>
	</div>
	<div class="control-group">
	  <label class="control-label" for="typeahead">Brand Name</label>
	  <div class="controls">
		<select class="span6 typeahead" name="brand_id">
			<option value="">---- Select Brand Name ----</option>
			<option value="">Brand One</option>
			<option value="">Brand Two</option>
		</select>
		<b><span class="alert-danger">{{ $errors->has('brand_id') ? $errors->first('brand_id') : ''}}</span></b>
	  </div>
	</div>
	<div class="control-group">
	  <label class="control-label" for="date01">Product Name</label>
	  <div class="controls">
		<input type="text" class="span6 typeahead" name="product_name">
		<b><span class="alert-danger">{{ $errors->has('product_name') ? $errors->first('product_name') : ''}}</span></b>
	  </div>
	</div>
	<div class="control-group">
	  <label class="control-label" for="date01">Product Price</label>
	  <div class="controls">
		<input type="number" class="span6 typeahead" name="product_price">
		<b><span class="alert-danger">{{ $errors->has('product_price') ? $errors->first('product_price') : ''}}</span></b>
	  </div>
	</div>
	<div class="control-group">
	  <label class="control-label" for="date01">Product Quantity</label>
	  <div class="controls">
		<input type="number" class="span6 typeahead" name="product_quantity">
		<b><span class="alert-danger">{{ $errors->has('product_quantity') ? $errors->first('product_quantity') : ''}}</span></b>
	  </div>
	</div>
	<div class="control-group">
	  <label class="control-label" for="textarea2">Short Description</label>
	  <div class="controls">
		<textarea class="span6 typeahead" rows="3" name="short_description"></textarea>
		<b><span class="alert-danger">{{ $errors->has('short_description') ? $errors->first('short_description') : ''}}</span></b>
	  </div>
	</div>
		<div class="control-group">
	  <label class="control-label" for="textarea2">Long Description</label>
	  <div class="controls">
		<textarea class="span6 typeahead" rows="3" name="long_description"></textarea>
		<b><span class="alert-danger">{{ $errors->has('long_description') ? $errors->first('long_description') : ''}}</span></b>
	  </div>
	</div>
	<div class="control-group">
	  <label class="control-label" for="fileInput">Product Image</label>
	  <div class="controls">
		<input class="span6 typeahead" id="fileInput" type="file" name="product_image" accept="image/*">
	  </div>
	</div>          
	<div class="control-group hidden-phone">
	  <label class="control-label" for="textarea2">Publication Status</label>
	  <div class="controls">
		<select class="span6 typeahead" name="publicationStatus">
			<option value="">Select Publication Status</option>
			<option value="1">Published</option>
			<option value="0">Unpublished</option>
		</select>
		<b><span class="alert-danger">{{ $errors->has('publicationStatus') ? $errors->first('publicationStatus') : ''}}</span></b>
	  </div>
	</div>
	<div class="form-actions">
	  <button type="submit" class="btn btn-primary">Save Product Info</button>
	  <button type="reset" class="btn">Cancel</button>
	</div>
  </fieldset>
{!! Form::close()!!}   

</div>
</div><!--/span-->
</div><!--/row-->
</div>
@endsection