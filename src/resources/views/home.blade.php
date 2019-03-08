@if ($errors->any())
<ul>
  @foreach($errors->all() as $error)
  <li>{{ $error }}</li>
  @endforeach
</ul>
@endif

<form action="{{ url('upload') }}" method="POST" enctype="multipart/form-data">
  @isset($image)
   <div>
     <img src="data:image/png;base64,<?= $image ?>">
</div>
@endisset
<div class="form_parts">
<input type="file" name="image">
  <br>
  <hr>
  {{ csrf_field() }}
  <button class="btn btn-success">Upload</button>
</div>
</form>
