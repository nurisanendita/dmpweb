@extends('admin.admin_template')

@section('content')

<h2>Edit Dokumentasi</h2>

<form action="{{ url('/') }}/dokumentasi_update/{{$dokumentasi->id}}" method="post" enctype="multipart/form-data">

	<b>Foto</b>
	<input style="margin-left:10px;" type="file" name="input_foto" value="{{$dokumentasi->foto}}"><br><br>

  <b>Keterangan Foto</b>
	<textarea class="form-control" style="height:200px; width:700px;" type="text" name="input_keteranganfoto">{{$dokumentasi->keteranganfoto}}</textarea><br><br><br>

	<input class="btn btn-info" type="submit" name="submit" value="SIMPAN">
	{{ csrf_field() }}
  <input type="hidden" name="_method" value="PUT">
</form>


@stop

@extends('admin.footapp')
