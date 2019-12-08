@extends('admin-end.master')
@section('title')
Manage Category
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
	  <th>Username</th>
	  <th>Date registered</th>
	  <th>Role</th>
	  <th>Status</th>
	  <th>Actions</th>
  </tr>
</thead>   
<tbody>
	@php($i=1)
	@foreach($categories as $category)
<tr>
	<td>{{ $i++}}</td>
	<td class="center">{{ $category->categoryName }}</td>
	<td class="center">{{ $category->categoryDescription }}</td>
	<td class="center">
		<span class="label label-success">{{ $category->publicationStatus == 1 ? 'Published' : 'Unpublished'}}</span>
	</td>
	<td class="center">
		@if($category->publicationStatus == 1)
		<a class="btn btn-success" href="{{route('unpublished-category',['id'=>$category->id])}}">
			<i class="halflings-icon white arrow-up"></i>  
		</a>
		@else
		<a class="btn btn-warning" href="{{route('published-category',['id'=>$category->id])}}">
			<i class="halflings-icon white arrow-down"></i>  
		</a>
		@endif
		<a class="btn btn-info" href="{{route('edit-category',['id'=>$category->id])}}">
			<i class="halflings-icon white edit"></i>  
		</a>
		<a class="btn btn-danger" href="{{route('delete-category',['id'=>$category->id])}}">
			<i class="halflings-icon white trash"></i> 
		</a>
	</td>
</tr>
@endforeach
</tbody>
</table>            
</div>
</div>	
@endsection