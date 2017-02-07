@extends('admin.admin_template')

@section('content')

@if (Session::has('message'))
    <div class="alert alert-danger">{{ Session::get('message') }}</div>
@endif

<h2>Perbarui Quote</h2>

<form action="{{ url('/') }}/dokumentasi" method="post">
	<br><b>Masukkan Quote</b><br><br>
	<input class="form-control" style="margin-left:10px;" type="text" name="input_quote"><br><br>
	<input class="btn btn-info" type="submit" name="submit" value="SIMPAN">
	{{ csrf_field() }}
</form>

@stop

@extends('admin.footapp')
