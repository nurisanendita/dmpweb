@extends('admin.admin_template')

@section('content')

@if (count ($errors) > 0)
    <div class="alert alert-danger">
			@foreach($errors->all() as $error)
			<li>{{$error}}</li>
			@endforeach
		</div>
@endif

<h2>Tambah Rekor Yang Pernah Dicapai</h2>

<form action="{{ url('/') }}/rekortercapai_store" method="post">
	<b>Masukkan Jumlah Hari</b>
		<textarea class="form-control" type="text" name="input_hari_rekortercapai" value="{{old('input_hari_rekortercapai')}}"></textarea><br><br>

  <b>Masukkan Jumlah Jam</b>
		<textarea class="form-control" type="text" name="input_jam_rekortercapai" value="{{old('input_jam_rekortercapai')}}"></textarea><br><br>

	<input class="btn btn-info" type="submit" name="submit" value="SIMPAN">
	{{ csrf_field() }}
</form>

@stop

@extends('admin.footapp')
