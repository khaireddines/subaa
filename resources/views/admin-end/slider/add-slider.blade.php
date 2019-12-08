@extends('admin-end.master')
@section('title')
Add Slider Image
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
	<h2><i class="halflings-icon edit"></i><span class="break"></span>Slider Input Form UI</h2>
			<div class="box-icon">
				<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
				<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
				<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
			</div>
	</div>
<div class="box-content">
{!! Form::open(['route'=>'new-slider', 'method'=>'POST','class'=>'form-horizontal', 'enctype'=>'multipart/form-data'])!!}


<div class="row" style="margin-top: 15px;">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
		<div class="control-group hidden-phone">
		 <label class="control-label">Slider Name : </label>
			 <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
				<input type="text" class="span6 typeahead" name="image_name" onKeyUP="this.value = this.value.toUpperCase();" autocomplete="off">
			<b><span class="alert-danger">{{ $errors->has('image_name') ? $errors->first('image_name') : ''}}</span></b>
			 </div>
		</div>
	</div>
</div>
<div class="row" style="margin-top: -15px;">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
		<div class="control-group hidden-phone">
		 <label class="control-label">Slider Image : </label>
			 <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
				<input class="span6 typeahead" id="fileInput" type="file" name="slider_image" accept="image/*">
			<b><span class="alert-danger">{{ $errors->has('slider_image') ? $errors->first('slider_image') : ''}}</span></b>
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
<div class="form-actions">
	  <button type="submit" class="btn btn-success">Save Slider Info</button>
	  <button type="reset" class="btn">Cancel</button>
</div>

        {!! Form::close()!!}

</div>
</div><!--/span-->
</div><!--/row-->
</div>
@endsection