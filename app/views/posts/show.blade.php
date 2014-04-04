@extends('layouts.master')

@section('content')

<h1>Statistics</h1>

<div class="col-md-12">
	@foreach ($browsers->array as $key => $value)
		<div class="col-md-2">
			<p class="text-center">{{ HTML::image('img/'.$key.'.jpg', '$value') }} </p>
			<p class="text-center"> {{ $value[0].'('.$value[1].') '.$value[2].'%'}} </p>
		</div>
	@endforeach
</div>

@if ($posts->count())
<div class="col-md-12">
   <table class="table table-hover">
      <thead>
         <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Browser</th>
            <th>Reason</th>
            <th>Time Submitted</th>
         </tr>
      </thead>

      <tbody>
         @foreach($posts as $post)
            <tr>
               <td>{{{ $post->name }}}</td>
               <td>{{{ $post->email }}}</td>
               <td>{{{ $post->browser }}}</td>
               <td>{{{ $post->reason }}}</td>
               <td>{{{ $post->updated_at }}}</td>
            </tr>
         @endforeach
      </tbody>
   </table>
</div>
@else
   There are no posts
@endif

@stop