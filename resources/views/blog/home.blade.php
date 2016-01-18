@extends('layouts.blog')

@section('main-class', 'posts col-md-8')

@section('content')
	<div class="posts">
		@for($i = 1; $i <= 3; $i++)
		    @include('blog.partials.post')
		@endfor
	</div>
@endsection