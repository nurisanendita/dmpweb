@extends('admin.admin_template')

@section('content')

@if (count ($errors) > 0)
    <div class="alert alert-danger">
			@foreach($errors->all() as $error)
			<li>{{$error}}</li>
			@endforeach
		</div>
@endif

<h2>Tambah Banner</h2>

<form class="{{ $errors->has('img') ? 'has-error' : '' }}" action="{{ url('/') }}/banners_store" method="post" enctype="multipart/form-data">

	<b for="img">Upload Banner</b>
	<input style="margin-left:10px;" type="file" name="input_banner" id="img" multiple="multilple"><br><br>

	<input class="btn btn-info" type="submit" name="submit" value="SIMPAN">
	{{ csrf_field() }}

</form>

@stop

@extends('admin.footapp')
