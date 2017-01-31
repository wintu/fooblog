@extends('layout')
@section('content')

<h1>投稿記事一覧</h1>
<div class="text-right">
  <button class="btn btn-danger" onclick="location='/auth/logout'">ログアウト</button>
  <button class="btn btn-primary" onclick="location='/admin/create_post'">新規記事作成</button>
</div>
<table class="table">
  <thead>
    <tr>
      <th>#</th>
      <th>記事タイトル</th>
      <th>更新日</th>
      <th>操作</th>
    </tr>
  </thead>
  <tbody>
    @foreach($posts as $post)
    <tr>
      <th>{{ $post->id }}</th>
      <th><a href="/post/{{ $post->id }}">{{ $post->title }}</a></th>
      <th>{{ $post->updated_at }}</th>
      <th>
        <a href="/admin/edit/{{ $post->id }}">編集</a>
        <a href="/admin/delete/{{ $post->id }}">削除</a>
      </th>
    @endforeach
  {!! $posts->render() !!}
@stop
