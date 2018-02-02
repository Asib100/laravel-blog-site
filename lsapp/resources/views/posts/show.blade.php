@extends('layout/app')
@section('content')
<a href="http://localhost/lsapp/public//posts" class="btn btn-default">Go back</a>
<h1>{{$post->title}}</h1>
<div>
{{$post->body}}
</div>
<hr>
<small>Written on {{$post->created_at}}</small>
@endsection