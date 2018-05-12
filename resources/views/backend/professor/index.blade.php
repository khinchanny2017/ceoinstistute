@extends('include.index')

@section('content')
<br>
<div class="container">
	<div class="row">
		<div class="panel panel-default">
		<div class="panel-heading"><h4><a href="{{ route('create') }}">Professor Form</a></h4></div>
			<div class="panel-body">
				<table class="table table-striped table-responsive">
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Photo</th>
					</tr>
					@foreach($users as $user)
					<tr>
						<td>{{$user->id}}</td>
						<td>{{$user->name}}</td>
						<td>{{$user->image}}</td>
					</tr>
					@endforeach
				</table>
			</div>
		</div>
	</div>
</div>
@endsection()