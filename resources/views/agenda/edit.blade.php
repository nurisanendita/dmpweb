@extends('admin.admin_template')

@section('content')

<h2>Edit Agenda</h2>

<form action="{{ url('/') }}/agenda_update/{{$agenda->id}}" method="post">

	<b>Tanggal Kegiatan</b>
	<input style="margin-left:10px;" type="date" name="input_tanggal" value="{{$agenda->tanggal_acara}}"><br><br>

	<b>Kode Ruang</b>
	<select type="text" style="margin-left:40px;" name="input_koderuang">
		@foreach($kodeRuang as $kRuang)
		@if($kRuang->kode == $agenda->kode_ruang)
			<option value="{{ $kRuang->kode }}" selected="selected">{{ $kRuang->kode }}</option>
		@else
			<option value="{{ $kRuang->kode }}">{{ $kRuang->kode }}</option>
		@endif
		@endforeach
	</select>

	<span style="margin-left:110px;"><b>Nama Ruang</b>
		<select type="text" style="margin-left:10px;" name="input_namaruang">
			@foreach($namaRuang as $nRuang)
			@if($nRuang->nama == $agenda->nama_ruang)
				<option value="{{ $nRuang->nama }}" selected="selected">{{ $nRuang->nama }}</option>
			@else
			<option value="{{ $nRuang->nama }}">{{ $nRuang->nama }}</option>
			@endif
			@endforeach
		</select>
	</span>

	<span style="margin-left:110px;"><b>Lantai</b>
		<select type="text" style="margin-left:10px;" name="input_lantairuang">
			@foreach($lantaiRuang as $lRuang)
			@if($lRuang->lantai == $agenda->lantai)
				<option value="{{ $lRuang->lantai }}" selected="selected">{{ $lRuang->lantai }}</option>
			@else
					<option value="{{ $lRuang->lantai }}">{{ $lRuang->lantai }}</option>
			@endif
			@endforeach
		</select>
	</span><br><br>

	<!-- <b>Tampilkan</b>
	@if ($agenda->ditampilkan==1)
	<input style="margin-left:50px;" type="radio" name="input_ditampilkan" value="1" checked="true">Ya
	<input style="margin-left:30px;" type="radio" name="input_ditampilkan" value="0">Tidak<br><br>
	@else
	<input style="margin-left:50px;" type="radio" name="input_ditampilkan" value="1">Ya
	<input style="margin-left:30px;" type="radio" name="input_ditampilkan" value="0" checked="true">Tidak<br><br>
	@endif -->

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
