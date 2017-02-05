@extends('admin.admin_template')

@section('content')

<h2>Tambah Dokumentasi</h2>

<form action="{{ url('/') }}/dokumentasi_store" method="post" enctype="multipart/form-data">

	<b>Foto</b>
	<input style="margin-left:10px;" type="file" name="input_foto"><br><br>

	<b>Keterangan Foto</b>
	<textarea class="form-control" style="height:200px; width:700px;" type="text" name="input_keteranganfoto"></textarea><br><br><br>

	<input class="btn btn-info" type="submit" name="submit" value="SIMPAN">
	{{ csrf_field() }}

</form>

@stop

@extends('admin.footapp')
