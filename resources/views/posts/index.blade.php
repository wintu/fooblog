@extends('layout')
@section('content')

  @foreach($posts as $post)
    <div class="row">
      <div class="col-sm-4">
        <img class="thumbnail img-responsive" width="300" height="200" src="/media/{{ $post->img_name }}" onerror="this.src='/no_image.png'"></img>
      </div>
      <div class="col-sm-8">
        <h1><a href="/post/{{ $post->id }}">{{ $post->title }}</a></h1>
        <p class="post-body">{{ mb_strimwidth($post->body, 0, 200, '...') }}</p>
      </div>
    </div>
    <hr>
  @endforeach
  {!! $posts->render() !!}
@stop
