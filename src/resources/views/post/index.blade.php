<!DOCTYPE HTML>
<html>
<head>
    <title>投稿画面</title>
</head>
<body>

 <button class="btn btn-success"> ホーム </button>
 <button class="btn btn-success"> ログアウト</button>
 <button class="btn btn-success"> 投稿</button>
 <hr>

 @isset($post)
 @foreach($post as $d)
 {{ $d->name }}さん：{{ $d->comment }} <br>
 {{ $d->image }}

<br><hr>
@endforeach
@endisset


  @if ($errors->any())
  <ul>
      @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
  </ul>
  @endif

<!-- フォームエリア -->
<form action="{{ url('upload') }}" method="POST" enctype="multipart/form-data">
    @isset ($image)
    <div>
      <img src="data:image/png;base64,<?= $image ?>">
    </div>
    @endisset
    <label for="photo">画像ファイル:</label>
    <input type="file" class="form-control" name="file">
    {{ csrf_field() }}
    <button class="btn btn-success"> Upload </button>
    <br>
    お名前:<input name="name" size="10" >
    <br>
    コメント:<br>
    <textarea name="comment" rows="4" cols="50"></textarea>
    <br>
    {{ csrf_field() }}
    <button class="btn btn-success"> 投稿</button>
</form>

</body>
</html>
