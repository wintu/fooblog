<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>FooBlog</title>
    <link rel="stylesheet" href="css/post.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>
@if (Session::has('flash_message'))
  <div class="alert alert-success">{{ Session::get('flash_message') }}</div>
@endif
<nav class="navbar navbar-default">
<div class="container-fluid">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="/">FooBlog</a>
    <p class="navbar-text">課題のためだけに作られたブログ</p>
  </div>

  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav navbar-right">
      <li><a href="/admin">管理画面</a></li>
    </ul>
  </div>
</div>
</nav>
    <div class="container">
        @yield('content')
    </div>

<!-- js -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script>
    @yield('script')
</script>
</body>
</html>
