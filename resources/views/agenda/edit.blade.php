@extends('admin.admin_template')

@section('content')

@if (count ($errors) > 0)
    <div class="alert alert-danger">
			@foreach($errors->all() as $error)
			<li>{{$error}}</li>
			@endforeach
		</div>
@endif

<h2>Edit Agenda</h2>

<form action="{{ url('/') }}/agenda_update/{{$agenda->id}}" method="post">

	<b>Tanggal Mulai</b>
	<input style="margin-left:10px;" type="date" name="input_tanggalmulai" value="{{$agenda->tanggal_mulai}}">

	<span style="margin-left:110px;"><b>Tanggal Selesai</b>
		<input style="margin-left:10px;" type="date" name="input_tanggalselesai" value="{{$agenda->tanggal_mulai}}">
	</span> <br><br>

	<b>Kode Ruang</b>
	<select type="text" style="margin-left:40px;" name="input_koderuang">
		@foreach($ruangan as $ruang)
		@if($ruang->kode_ruang == $agenda->kode_ruang)
			<option value="{{ $ruang->id }}" selected="selected">{{ $ruang->kode_ruang }}</option>
		@else
			<option value="{{ $ruang->id }}">{{ $ruang->kode_ruang }}</option>
		@endif
		@endforeach
	</select><br><br>

	<b>Nama Kegiatan</b>
	<textarea class="form-control" style="height:100px; width:500px;" type="text" name="input_namakegiatan">{{$agenda->nama_acara}}</textarea><br><br>

	<b>Keterangan</b>
	<textarea class="form-control" style="height:200px; width:700px;" type="text" name="input_keterangan">{{$agenda->keterangan_acara}}</textarea><br><br><br>

	<input class="btn btn-info" type="submit" name="submit" value="SIMPAN">
	{{ csrf_field() }}
  <input type="hidden" name="_method" value="PUT">
</form>


@stop

@extends('admin.footapp')
