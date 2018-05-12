@extends('include.index')

@section('content')
<br>
<div class="container">
	<div class="row col-md-6 col-md-offset-3">
		<div class="panel panel-default">
		<div class="panel-heading"><h4><a href="{{ route('index') }}">Professor Form</a></h4></div>
			<div class="panel-body">
				{!! Form::open(['method' => 'POST', 'route' => 'store', 'class' => 'form-horizontal']) !!}
				
				    <div class="form-group col-md-12{{ $errors->has('name') ? ' has-error' : '' }}">
				        {!! Form::label('name', 'Name') !!}
				        {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required']) !!}
				        <small class="text-danger">{{ $errors->first('name') }}</small>
				    </div>

				    <div class="form-group col-md-12{{ $errors->has('image') ? ' has-error' : '' }}">
				        {!! Form::label('image', 'Photo') !!}
				        {!! Form::file('image', ['required' => 'required']) !!}
				        <small class="text-danger">{{ $errors->first('image') }}</small>
				    </div>
				
				    <div class="form-group col-md-12">				        
				        {!! Form::submit("Add Data", ['class' => 'btn btn-success']) !!}
				    </div>
				
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>
@endsection()