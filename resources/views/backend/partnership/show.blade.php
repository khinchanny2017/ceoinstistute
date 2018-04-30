@extends('include.index')

@section('content')
<br>
<div class="row col-md-12 col-md-offset-0">
	<div class="panel panel-default">
		<div class="panel-heading"><h4><a href="{{ route('form.create') }}">Form Create Partner</a></h4></div>
		<div class="panel-body">          
		  <table class="table table-striped table-responsive">
		    <thead>
		      <tr>
		        <th>ID</th>
		        <th>Company Name</th>
		        <th>logo_company</th>
		        <th>description_company</th>
		        <th>URL Website</th>
		        <th>Action</th>
		    	</tr>
		    </thead>

		   	@foreach($partners as $show)
		   	<tbody>
		      <tr>
		       <td>{{$show->id}}</td>
		       <td>{{$show->company_name}}</td>
		       <td>{{$show->logo_company}}</td>
		       <td width="40%">{{$show->description_company}}</td>
		       <td>{{$show->url_website}}</td>
		       <td>
		       	<td>
		       	<a href="" class="btn btn-warning">Update</a>
       			</td>
       			<td>
		       	<a href="" class="btn btn-danger">Deleted</a>
		       </td>
		      </tr>
		    </tbody>
		   	@endforeach
		    
		  </table>
		</div>
	</div>
</div>
@endsection