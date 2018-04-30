@extends('include.index')

@section('content')
<br>
<div class="row col-md-10 col-md-offset-1">
	<div class="panel panel-default">
		<div class="panel-heading"><h4>Form Create</h4></div>
		<div class="panel-body">
			{!! Form::open(['method' => 'GET', 'route' => 'form.store', 'class' => 'form-horizontal']) !!}
			{!! csrf_field() !!}
			
			    <div class="form-group col-md-12{{ $errors->has('company_name') ? ' has-error' : '' }}">
			        {!! Form::label('company_name', 'Company Name') !!}
			        {!! Form::text('company_name', null, ['class' => 'form-control', 'required' => 'required']) !!}
			        <small class="text-danger">{{ $errors->first('company_name') }}</small>
			    </div>
			    <div class="form-group col-md-12{{ $errors->has('logo_company') ? ' has-error' : '' }}">
			        {!! Form::label('logo_company', 'Logo') !!}
			        {!! Form::text('logo_company', null, ['class' => 'form-control', 'required' => 'required']) !!}
			        <small class="text-danger">{{ $errors->first('logo_company') }}</small>
			    </div>
			    <div class="form-group col-md-12{{ $errors->has('description_company') ? ' has-error' : '' }}">
			        {!! Form::label('description_company', 'Desciption') !!}
			        {!! Form::text('description_company', null, ['class' => 'form-control', 'required' => 'required']) !!}
			        <small class="text-danger">{{ $errors->first('description_company') }}</small>
			    </div>
			    <div class="form-group col-md-12{{ $errors->has('url_website') ? ' has-error' : '' }}">
			        {!! Form::label('url_website', 'URL') !!}
			        {!! Form::text('url_website', null, ['class' => 'form-control', 'required' => 'required']) !!}
			        <small class="text-danger">{{ $errors->first('url_website') }}</small>
			    </div>
			
			    <div class="btn-group pull-right">
			        {!! Form::reset("Reset", ['class' => 'btn btn-warning']) !!}
			        {!! Form::submit("Add", ['class' => 'btn btn-success']) !!}
			    </div>
			
			{!! Form::close() !!}
		</div>
	</div>
</div>

@endsection