@extends('admin.admin_template')

@section('content')

@if (count ($errors) > 0)
    <div class="alert alert-danger">
			@foreach($errors->all() as $error)
			<li>{{$error}}</li>
			@endforeach
		</div>
@endif

<h2>Edit Banner</h2>

<form action="{{ url('/') }}/banners_update/{{$banners->id}}" method="post" enctype="multipart/form-data">

	<b>Upload Banner</b>
	<input style="margin-left:10px;" type="file" name="input_banner" value="{{$banners->banner}}"><br><br>

	<input class="btn btn-info" type="submit" name="submit" value="SIMPAN">
	{{ csrf_field() }}
  <input type="hidden" name="_method" value="PUT">
</form>


@stop

@extends('admin.footapp')
