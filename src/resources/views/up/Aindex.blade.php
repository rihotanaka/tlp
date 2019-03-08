<!DOCTYPE HTML>
<html>
<head>
    <title>ホーム画面</title>
</head>
<body>

  @isset($file,$comment)
  {{ $file }}
  <br>
  {{ $comment }}
  <br><hr>
  @endisset
</body>
</html>
