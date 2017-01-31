@extends('layout')
@section('content')

<h1>新規記事作成</h1>

<form method="post" action="/admin/create" enctype="multipart/form-data">
  <div class="form-group">
    <input type="text" class="form-control" id="title" name="title" placeholder="記事のタイトル">
  </div>
  <div class="form-group">
    <textarea class="form-control" name="body" rows="10" placeholder="ここに記事の文章を書いてください。"></textarea>
  </div>
  <div class="form-group">
    <label for="upload">サムネイル画像</label>
    <input type="file" id="upload" name="upload">
  </div>
  {{ csrf_field() }}
  <div class="form-group">
    <button type="submit" class="btn btn-default">記事を投稿</button>
  </div>
</form>


@stop
