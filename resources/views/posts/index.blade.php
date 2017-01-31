@extends('layout')
@section('content')

  @foreach($posts as $post)
    <h1><a href="/post/{{ $post->id }}">{{ $post->title }}</a></h1>
    <img class="thumbnail img-responsive" src="/media/{{ $post->img_name }}" onerror="this.src='/no_image.png'"></img>
    <hr>
  @endforeach
  {!! $posts->render() !!}
@stop
