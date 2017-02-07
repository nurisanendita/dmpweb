@extends('admin.admin_template')

@section('content')

@if (count ($errors) > 0)
    <div class="alert alert-danger">
			@foreach($errors->all() as $error)
			<li>{{$error}}</li>
		</div>
@endif

<h2>Tambah Agenda</h2>

<form action="{{ url('/') }}/agenda_store" method="post">
	<b>Tanggal Mulai</b>
		<input style="margin-left:10px;" type="date" name="input_tanggalmulai">

	<span style="margin-left:110px;"><b>Tanggal Selesai</b>
		<input style="margin-left:10px;" type="date" name="input_tanggalselesai">
	</span> <br><br>

	<b>Kode Ruang</b>
	<select type="text" style="margin-left:40px;" name="input_koderuang">
		@foreach($kodeRuang as $kRuang)
				<option value="{{ $kRuang->kode }}">{{ $kRuang->kode }}</option>
		@endforeach
	</select>

	<span style="margin-left:110px;"><b>Nama Ruang</b>
		<select type="text" style="margin-left:10px;" name="input_namaruang">
			@foreach($namaRuang as $nRuang)
					<option value="{{ $nRuang->nama }}">{{ $nRuang->nama }}</option>
			@endforeach
		</select>
	</span>

	<span style="margin-left:110px;"><b>Lantai</b>
		<select type="text" style="margin-left:10px;" name="input_lantairuang">
			@foreach($lantaiRuang as $lRuang)
					<option value="{{ $lRuang->lantai }}">{{ $lRuang->lantai }}</option>
			@endforeach
		</select>
	</span><br><br>

	<!-- <b>Tampilkan</b>
	<input style="margin-left:50px;" type="radio" name="input_ditampilkan" value="1">Ya
	<input style="margin-left:30px;" type="radio" name="input_ditampilkan" value="0">Tidak<br><br> -->

	<b>Nama Kegiatan</b>
	<textarea class="form-control" style="height:100px; width:500px;" type="text" name="input_namakegiatan"></textarea><br><br>

	<b>Keterangan</b>
	<textarea class="form-control" style="height:200px; width:700px;" type="text" name="input_keterangan"></textarea><br><br><br>

	<input class="btn btn-info" type="submit" name="submit" value="SIMPAN">
	{{ csrf_field() }}
</form>

@stop

@extends('admin.footapp')
