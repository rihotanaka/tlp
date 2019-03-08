<!DOCTYPE HTML>
<html>
<head>
     <link href="{{asset('/assets/css/up.css')}}" rel="stylesheet">
    <title>投稿画面</title>
</head>
<body>

@if ($errors->any())
<ul>
  @foreach($errors->all() as $error)
  <li>{{ $error }}</li>
  @endforeach
</ul>
@endif

<button class="btn btn-success"> ホーム</button>
<button class="btn btn-success"> ログアウト</button>
<button class="btn btn-success"> 投稿 </button>
<br>
<hr>
<!-- フォームエリア -->
<form action="/up" method="POST" enctype="multipart/form-data">

  @isset ($file)
  <div>
    <img src="data:image/png;base64,<?=image?>">
  </div>
  @endisset
<br>
  <label for="photo">写真:</label>
    <input type="file" class="form-control" name="image">
    <br>

    {{ csrf_field() }}
   <br>
    コメント:<br>
    <textarea name="comment" rows="4" cols="50"></textarea>
    <br>
    {{ csrf_field() }}
    <button class="btn btn-success"> 投稿 </button>
</form>

</body>
</html>
