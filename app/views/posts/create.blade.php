@extends('layouts.master')

@section('content')

<div class="row">
	<div class="col-md-9 offset1">
	{{ Form::open(array('url' => url('post'), 'class'=>'form-horizontal', 'id'=>'contact-form')) }}
		<div class="well">
			<legend>Your Post</legend>
			@if($errors->any())
				<div class="row">
					<div class="alert alert-error">
						<a href="#" class="close" data-dismiss="alert">&times;</a>
						{{ implode('', $errors->all('<li class="error">:message</li>')) }}
					</div>
				</div>
			@endif
			<div class="row">
				<div class="col-md-6">
				
					{{ Form::text('name', '', array('placeholder' => 'Name', 'id' => 'name', 'class' => 'form-control')) }}
					
					{{ Form::text('email', '', array('placeholder' => 'Email', 'id' => 'email', 'class' => 'form-control')) }}
					{{ Form::select('browser', $browsers, '' ,array('placeholder' => 'Browser', 'id' => 'browser', 'multiple', 'class' => 'form-control')) }}
				</div>
				<div class="col-md-6">
					{{ Form::textarea('reason', '', array('placeholder' => 'Reason', 'id' => 'reason', 'class' => 'form-control', 'rows' => '7')) }}
				</div>
			</div>
			<div class="row">
				<div class=".col-md-8">
					<p class="text-center">
						{{ Form::submit('Add Post', array('class' => 'btn btn-success','id' => 'button_post')) }}
						{{ HTML::link('/', 'Cancel', array('class' => 'btn btn-danger')) }}
					</p>
					</div>
			</div>
			<div class="row">

			</div>
			{{ Form::close() }}
		</div>
	</div>
</div>


@stop
