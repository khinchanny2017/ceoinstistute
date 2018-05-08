@extends('include.index')

@section('content')
<br>
<div class="row col-md-12 col-md-offset-0">
	<div class="panel panel-default">
		<div class="panel-heading"><h4><a href="{{ route('form.create') }}">Form Create Partner</a></h4></div>
		<div class="panel-body">          
		  <table class="table  table-responsive table-striped">
		    <thead>
		      <tr>
		        <th>ID</th>
		        <th>Name</th>
		        <th>Logo</th>
		        <th>Description</th>
		        <th>URL</th>
		        <th>Action</th>
		    	</tr>
		    </thead>

		   	@foreach($partners as $show)
		   	<tbody>
		      <tr>
		       <td>{{$show->id}}</td>
		       <td>{{$show->company_name}}</td>
		       <td width="10%">{{$show->logo_company}}</td>
		       <td width="40%">{{$show->description_company}}</td>
		       <td width="5%">{{$show->url_website}}</td>
		       <td>
		       	<td>
		       	<a href="{{ route('form.edit',$show->id) }}" class="btn btn-sm btn-warning">Update</a>
		       	<a href="#" class="btn btn-sm btn-danger">Deleted</a>
		       </td>
		      </tr>
		    </tbody>
		   	@endforeach
		    
		  </table>
		</div>
	</div>
</div>
@endsection