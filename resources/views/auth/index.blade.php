@extends('layout')
@section('content')

<h1>ログイン</h1>
<form method="post" action="/auth/login" enctype="multipart/form-data">
  <div class="form-group">
    <input type="text" class="form-control" id="user" name="user" placeholder="UserID">
  </div>
  <div class="form-group">
    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
  </div>
  {{ csrf_field() }}
  <div class="form-group">
    <button type="submit" class="btn btn-default">ログイン</button>
  </div>
</form>

@stop
