@extends('layout')
@section('content')
      <!-- Post Content Column -->
      <div class="col-lg-8 mb-3">

        <!-- Title -->
        <h1 class="mt-4">Contact</h1>

        {!! Form::open(['url' => 'contact/submit']) !!}
		<div class="form-group">
			{{Form::label('name', 'Name')}}
			{{ Form::text('name', '', [ 'class' => 'form-control', 'placeholder' => 'Enter Name' ]) }}
		</div>
		<div class="form-group">
			{{Form::label('email', 'E-Mail Address')}}
			{{ Form::text('email', '', [ 'class' => 'form-control', 'placeholder' => 'Enter Email' ]) }}
		</div>
		<div class="form-group">
			{{Form::label('message', 'Message')}}
			{{ Form::textarea('message', '', [ 'class' => 'form-control', 'placeholder' => 'Enter message' ]) }}
		</div>	
        <div>
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
        </div>	  

      </div>
@endsection      