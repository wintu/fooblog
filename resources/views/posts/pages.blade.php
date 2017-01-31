@extends('layout')
@section('content')

  <h1>{{ $post->title }}</h1>
  <img class="thumbnail img-responsive" src="/media/{{ $post->img_name }}" onerror="this.src='/no_image.png'"></img>
  <p class="post-body">{{ $post->body }}</p>
@stop
