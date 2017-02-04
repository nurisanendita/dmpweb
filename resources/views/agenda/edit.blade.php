@extends('admin.admin_template')

@section('content')

<h2>Edit Agenda</h2>

<form action="{{ url('/') }}/agenda_edit/{{$agenda->id}}" method="post">

	<b>Tanggal Kegiatan</b>
	<input style="margin-left:10px;" type="date" name="input_tanggal" value="{{$agenda->tanggal_acara}}"><br><br>

	<b>Kode Ruang</b>
	<select type="text" style="margin-left:40px;" name="input_koderuang">
		@foreach($kodeRuang as $kRuang)
				<option value="{{ $agenda->kode_ruang }}">{{ $kRuang->kode }}</option>
		@endforeach
	</select>

	<span style="margin-left:110px;"><b>Nama Ruang</b>
		<select type="text" style="margin-left:10px;" name="input_namaruang">
			@foreach($namaRuang as $nRuang)
					<option value="{{ $agenda->nama_ruang }}">{{ $nRuang->nama }}</option>
			@endforeach
		</select>
	</span>

	<span style="margin-left:110px;"><b>Lantai</b>
		<select type="text" style="margin-left:10px;" name="input_lantairuang">
			@foreach($lantaiRuang as $lRuang)
					<option value="{{ $agenda->lantai }}">{{ $lRuang->lantai }}</option>
			@endforeach
		</select>
	</span><br><br>

	<b>Tampilkan</b>
	<input style="margin-left:50px;" type="radio" name="input_ditampilkan" value="$agenda->ditampilkan==1">Ya
	<input style="margin-left:30px;" type="radio" name="input_ditampilkan" value="$agenda->ditampilkan==0">Tidak<br><br>

	<b>Nama Kegiatan</b>
	<textarea class="form-control" style="height:100px; width:500px;" type="text" name="input_namakegiatan" value="{{$agenda->nama_acara}}"></textarea><br><br>

	<b>Keterangan</b>
	<textarea class="form-control" style="height:200px; width:700px;" type="text" name="input_keterangan" value="{{$agenda->keterangan_acara}}"></textarea><br><br><br>

	<input class="btn btn-info" type="submit" name="submit" value="SIMPAN">
	{{ csrf_field() }}
  <input type="hidden" name="_method" value="PUT">
</form>


@stop

@extends('admin.footapp')
