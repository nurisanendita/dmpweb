@extends('admin.admin_template')

@section('content')

@if (count ($errors) > 0)
    <div class="alert alert-danger">
			@foreach($errors->all() as $error)
			<li>{{$error}}</li>
			@endforeach
		</div>
@endif

<h2>Edit Dokumentasi</h2>

<form action="{{ url('/') }}/dokumentasi_update/{{$dokumentasi->id}}" method="post" enctype="multipart/form-data">

	<b>Foto</b>
	<input style="margin-left:10px;" type="file" name="input_foto" value="{{$dokumentasi->foto}}"><br><br>

	<b>Judul Foto</b>
	<textarea class="form-control" style="height:50px; width:400px;" type="text" name="input_judulfoto">{{$dokumentasi->judul_foto}}</textarea><br><br><br>

	<b>Tanggal Foto Foto</b>
	<textarea class="form-control" style="height:50px; width:400px;" type="text" name="input_tanggalfoto">{{$dokumentasi->tanggal}}</textarea><br><br><br>

	<b>Keterangan Foto</b>
	<textarea class="form-control" style="height:200px; width:700px;" type="text" name="input_keteranganfoto">{{$dokumentasi->keterangan_foto}}</textarea><br><br><br>

	<input class="btn btn-info" type="submit" name="submit" value="SIMPAN">
	{{ csrf_field() }}
  <input type="hidden" name="_method" value="PUT">
</form>


@stop

@extends('admin.footapp')
