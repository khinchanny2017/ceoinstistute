@extends('include.index')

@section('content')
<br>
<div class="row col-md-6 col-md-offset-3">
	<div class="panel panel-default">
		<div class="panel-heading"><h4>Form Create</h4></div>
		<div class="panel-body">
			{!! Form::open(['method' => 'PUT', 'URL' => 'backend/partner/form/', 'class' => 'form-horizontal']) !!}
			{!! csrf_field() !!}
			    <div class="form-group col-md-12{{ $errors->has('company_name') ? ' has-error' : '' }}">
			       {!! Form::label('company_name', 'Company Name') !!}
			       {!! Form::text('company_name',null, ['class' => 'form-control','required' => 'required']) !!}
			       <small class="text-danger">{{ $errors->first('company_name') }}</small>
			   </div>			  
			   <div class="form-group col-md-12{{ $errors->has('description_company') ? ' has-error' : '' }}">
			       {!! Form::label('description_company', 'Description') !!}
			       {!! Form::textarea('description_company', null, ['class' => 'form-control', 'required' => 'required']) !!}
			       <small class="text-danger">{{ $errors->first('description_company') }}</small>
			   </div>
			   <div class="form-group col-md-12{{ $errors->has('logo_company') ? ' has-error' : '' }}">
			       {!! Form::label('logo_company', 'Company Logo') !!}
			       {!! Form::file('logo_company', ['required' => 'required']) !!}
			       <small class="text-danger">{{ $errors->first('logo_company') }}</small>
			   </div>
			   <div class="form-group col-md-12{{ $errors->has('url_website') ? ' has-error' : '' }}">
			       {!! Form::label('url_website', 'URL Website') !!}
			       {!! Form::text('url_website', null, ['class' => 'form-control', 'required' => 'required']) !!}
			       <small class="text-danger">{{ $errors->first('url_website') }}</small>
			   </div>
			   <div class="btn-group col-md-12">
		        {!! Form::reset("Reset", ['class' => 'btn btn-warning']) !!}
		        {!! Form::submit("Update", ['class' => 'btn btn-success']) !!}
		    </div>	
			{!! Form::close() !!}
		</div>
	</div>
</div>
@endsection


