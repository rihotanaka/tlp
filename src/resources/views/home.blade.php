@if ($error->any())

<ul>
  @foreach($errors->all() as $error)
  <li>{{ $error }}</li>
  @endforeach
</ul>
@endif

<form action="{{ $url('upload') }}" method="POST" enctype="multipart/form-data">

  @isset ($filename)
  <div>
    <img src="{{ asset('storage/' . $filename) }}">
  </div>
  @endisset

  <label for="photo">画像ファイル:</label>
  <input type="file" class="form-control" name="file">
  <br>
  <hr>
  {{ csrf_field() }}
  <button class="btn btn-success">Upload</button>
</form>
