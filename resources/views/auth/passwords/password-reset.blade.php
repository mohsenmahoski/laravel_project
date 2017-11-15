@extends('main')

@section('title' , '| Reset Password')
@section('stylesheet')
  {!! Html::style('css/parsley.css') !!}
@endsection
@section('content')
<div class="row">
 <div class="col-md-8 col-md-offset-2">
  <div class="well">
    
    	<h1>User Profile:</h1>
     <hr>
	 {!! Form::model($user, ['route' => ['password.update',$user->id] ,'data-parsley-validate' => '']) !!}
         {!! Form::label('email' , 'Email Address :') !!}
         {!! Form::email('email' , null ,['class' => 'form-control']) !!}

	     {!! Form::label('old-password' , 'Old Password : ') !!}
	     {!! Form::Password('old-password',['class' => 'form-control','required' => '']) !!}

	    {!! Form::label('password' , 'Password : ') !!}
	    {!! Form::Password('password' ,['class' => 'form-control' ,'required' => '' , 'id' => 'conf-pass' , 'data-parsley-pattern' => '[\w\d\_\-]+']) !!}
	    
	    {!! Form::label('password-confirm' , 'Password Confirm : ') !!}
	    {!! Form::Password('password-confirm' , ['class' => 'form-control' , 'required' => '' , 'data-parsley-equalto' => '#conf-pass']) !!}
	    
	    {!! Form::submit('Change Password' , ['class' => 'btn btn-success bottom-btn']) !!}
	 {!! Form::close() !!}
	 </div>
  </div>
 </div>   
@endsection

@section('scripts')
 {!! Html::script('js/parsley.min.js') !!}
@endsection