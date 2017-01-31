@extends('layout')
@section('content')

<h1>記事編集</h1>

<form method="post" action="/admin/edit" enctype="multipart/form-data">
  <div class="form-group">
    <input type="text" class="form-control" id="title" name="title" placeholder="記事のタイトル" value="{{ $post->title }}">
  </div>
  <div class="form-group">
    <textarea class="form-control" name="body" rows="10" placeholder="ここに記事の文章を書いてください。">{{ $post->body }}</textarea>
  </div>
  <div class="form-group">
    <label for="upload">サムネイル画像</label>
    <input type="file" id="upload" name="upload">
  </div>
  {{ csrf_field() }}
  <input type="hidden" name="id" value="{{ $post->id }}">
  <div class="form-group">
    <button type="submit" class="btn btn-default">記事を投稿</button>
  </div>
</form>


@stop
