@extends('admin-end.master')
@section('title')
Add Brand
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
{!! Form::open(['route'=>'new-brand','method'=>'POST','class'=>'form-horizontal'])!!}
  <fieldset>
	<div class="control-group">
	  <label class="control-label" for="typeahead">Brand Name</label>
	  <div class="controls">
		<input placeholder="Please Enter Category" type="text" name="brandName" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4">
		<b><span class="alert-danger">{{ $errors->has('brandName') ? $errors->first('brandName') : ''}}</span></b>
	  </div>
	</div>
	<div class="control-group">
	  <label class="control-label" for="date01">Date input</label>
	  <div class="controls">
		<input type="text" class="input-xlarge datepicker" id="date01" value="02/16/12">
	  </div>
	</div>

	<div class="control-group">
	  <label class="control-label" for="fileInput">File input</label>
	  <div class="controls">
		<input class="input-file uniform_on" id="fileInput" type="file">
	  </div>
	</div>          
	<div class="control-group hidden-phone">
	  <label class="control-label" for="textarea2">Brand Description</label>
	  <div class="controls">
		<textarea class="cleditor" id="textarea2" rows="3" name="brandDescription"></textarea>
		<b><span class="alert-danger">{{ $errors->has('brandDescription') ? $errors->first('brandDescription') : ''}}</span></b>
	  </div>
	</div>
	<div class="control-group hidden-phone">
	  <label class="control-label" for="textarea2">Publication Status</label>
	  <div class="controls">
		<select style="width: 57%;" name="publicationStatus">
			<option value="">Select Publication Status</option>
			<option value="1">Published</option>
			<option value="0">Unpublished</option>
		</select>
		<b><span class="alert-danger">{{ $errors->has('publicationStatus') ? $errors->first('publicationStatus') : ''}}</span></b>
	  </div>
	</div>
	<div class="form-actions">
	  <button type="submit" class="btn btn-primary">Save Category Info</button>
	  <button type="reset" class="btn">Cancel</button>
	</div>
  </fieldset>
{!! Form::close()!!}   

</div>
</div><!--/span-->
</div><!--/row-->
</div>
@endsection