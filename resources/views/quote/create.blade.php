@extends('admin.admin_template')

@section('content')

@if (count ($errors) > 0)
    <div class="alert alert-danger">
			@foreach($errors->all() as $error)
			<li>{{$error}}</li>
			@endforeach
		</div>
@endif

<h2>Tambah Quote</h2>

<form action="{{ url('/') }}/quote_store" method="post">
	<b>Masukkan Quote</b>
		<textarea class="form-control" type="text" name="input_quote"></textarea><br><br>

	<input class="btn btn-info" type="submit" name="submit" value="SIMPAN">
	{{ csrf_field() }}
</form>

@stop

@extends('admin.footapp')
