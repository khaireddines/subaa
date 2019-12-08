@extends('admin-end.master')
@section('title')
Manage Root Category
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
<table class="table table-striped table-bordered bootstrap-datatable datatable" style="width: 100%">
<thead>
  <tr>
	  <th style="width: 2%">SL/No</th>
	  <th style="width: 12%">Category Name</th>
	  <th style="width: 38%">Description</th>
	  <th style="width: 5%">Status</th>
	  <th style="width: 10%">Actions</th>
  </tr>
</thead>   
<tbody>
	@php($i=1)
	@foreach($roots as $root)
<tr>
	<td style="width: 2%">{{ $i++}}</td>
	<td class="left" style="width: 12%">{{ $root->rootCategoryName }}</td>
	<td class="left" style="width: 38%">{{ $root->rootCategoryDescription }}</td>
	<td class="center" style="width: 5%">
		<span class="label label-success">{{ $root->publicationStatus == 1 ? 'Published' : 'Unpublished'}}</span>
	</td>
	<td class="center" style="width: 10%">
		@if($root->publicationStatus == 1)
		<a class="btn btn-success" href="{{route('unpublished-root',['id'=>$root->id])}}">
			<i class="halflings-icon white arrow-up"></i>  
		</a>
		@else
		<a class="btn btn-warning" href="{{route('published-root',['id'=>$root->id])}}">
			<i class="halflings-icon white arrow-down"></i>  
		</a>
		@endif
		<a class="btn btn-info" href="{{route('edit-root',['id'=>$root->id])}}">
			<i class="halflings-icon white edit"></i>  
		</a>
		<a class="btn btn-danger" href="{{route('delete-root',['id'=>$root->id])}}">
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