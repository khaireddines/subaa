@extends('admin-end.master')
@section('title')
Add Category
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
<h2><i class="halflings-icon edit"></i><span class="break"></span>Category Input Form UI</h2>
<div class="box-icon">
	<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
	<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
	<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
</div>
</div>
<div class="box-content">
{!! Form::open(['url'=>'category/save','method'=>'POST','class'=>'form-horizontal'])!!}
  <fieldset>
  	<div class="control-group">
	    <label class="control-label" for="typeahead">Root Category Name</label>
	    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
				<select class="span6 typeahead" name="rootCategoryId">
				<option value="">---- Select Root Category Name ----</option>
				@foreach($roots as $root)
				<option value="{{ $root->id }}">{{ $root->rootCategoryName }}</option>
				@endforeach
				</select>
			<b><span class="alert-danger">{{ $errors->has('rootCategoryId') ? $errors->first('rootCategoryId') : ''}}</span></b>
			 </div>
	</div>
	<div class="control-group">
	  <label class="control-label" for="typeahead">Category Name</label>
	  <div class="controls">
		<input placeholder="Please Enter Category" type="text" name="categoryName" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Baby","Men","Women","Men Watch","Women Watch","Mobile","Computer","Electronic Accessory","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
		<b><span class="alert-danger">{{ $errors->has('categoryName') ? $errors->first('categoryName') : ''}}</span></b>
	  </div>
	</div>   
	<div class="control-group hidden-phone">
	  <label class="control-label" for="textarea2">Category Description</label>
	  <div class="controls">
		<textarea class="cleditor" id="textarea2" rows="3" name="categoryDescription"></textarea>
		<b><span class="alert-danger">{{ $errors->has('categoryDescription') ? $errors->first('categoryDescription') : ''}}</span></b>
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