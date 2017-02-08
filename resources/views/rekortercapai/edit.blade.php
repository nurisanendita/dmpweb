@extends('admin.admin_template')

@section('content')

@if (count ($errors) > 0)
    <div class="alert alert-danger">
			@foreach($errors->all() as $error)
			<li>{{$error}}</li>
			@endforeach
		</div>
@endif

<h2>Edit Rekor Yang Pernah Dicapai</h2>

<form action="{{ url('/') }}/rekortercapai_update/{{$rekortercapai->id}}" method="post">
  <b>Masukkan Jumlah Hari</b>
		<textarea class="form-control" type="text" name="input_hari_rekortercapai">{{$rekortercapai->hari}}</textarea><br><br>

  <b>Masukkan Jumlah Jam</b>
		<textarea class="form-control" type="text" name="input_jam_rekortercapai">{{$rekortercapai->jam}}</textarea><br><br>

	<input class="btn btn-info" type="submit" name="submit" value="SIMPAN">
	{{ csrf_field() }}
  <input type="hidden" name="_method" value="PUT">
</form>

@stop

@extends('admin.footapp')
