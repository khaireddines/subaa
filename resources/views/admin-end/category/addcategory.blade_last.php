@extends('admin-end.master')
@section('body')
<hr/>
<div class="row">
  <div class="col-lg-12">
    
    <h3 style="padding-bottom: 5px;">Category Input Form </h3>
<div class="well">
  <h2 style="padding: 0px;" class="text-center text-success">{{Session::get('message')}}</h2>
  {!! Form::open(['url'=>'category/save','method'=>'POST','class'=>'form-horizontal'])!!}
  <div class="form-group">
    <label for="categoryName" class="col-sm-2 control-label">Category Name</label>
    <div class="col-sm-10">
      <input type="text" onkeyup="this.value = this.value.toUpperCase();" class="form-control" name="categoryName" placeholder="Category Name" required="">
    </div>
  </div>
   <div class="form-group">
    <label for="categoryDescription" class="col-sm-2 control-label">Category Description</label>
    <div class="col-sm-10">
      <textarea type="text" class="form-control" name="categoryDescription" placeholder="Category Description" rows="5" required=""></textarea>
    </div>
  </div>
  <div class="form-group">
    <label for="publicationStatus" class="col-sm-2 control-label">Publication Status</label>
    <div class="col-sm-10">
      <select style="margin-top: 15px; width: 100%; height: 30px" name="publicationStatus" required="">
        <option value="">Select Publication Status</option>
        <option value="1">Published</optio>
        <option value="0">Unpublished</option>
      </select>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button style="height: 40px;"  type="submit" name="btn" class="btn btn-success btn-block">Save Category Info</button>
    </div>
  </div>
{!! Form::close()!!} 
</div>
</div>
</div>                                            
@endsection