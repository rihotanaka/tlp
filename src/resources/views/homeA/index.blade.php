<!DOCTYPE HTML>
<html>
<head>
    <title>ホーム画面</title>
</head>
<body>
  <button class="btn btn-success"> ホーム</button>
  <button class="btn btn-success"> ログアウト</button>
  <button class="btn btn-success"> 投稿 </button>
<br>
<hr>
  @isset($up)
  @foreach($up as $d)
  {{ $d->image }}
  <br>
  {{ $d->comment }}
  <br><hr>
  @endforeach
  @endisset
</body>
</html>
