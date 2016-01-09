@extends('layouts.app')

@section('content')
    @for($i = 1; $i <= 5; $i++)
        @include('blog.partials.post')
    @endfor
@endsection
