@extends('admin.admin_template')

@section('content')

<section class="content-header">
	<h1>AGENDA</h1>
	<ol class="breadcrumb">
		<li><a href="{{ url('/') }}"><i class="fa fa-home"></i> Beranda</a></li>
		<li class="active">Agenda</li>
	</ol>
</section>

<div class="box">
	<div class"box-header" style="margin-top:10px;">
		<div class="col-sm-2">
			<a class="btn btn-success" href="{{ url('/') }}/agenda_create">Tambah Agenda</a>
		</div>
	</div>
	<div class="box-body">
		<table class="table table-bordered table-hover dataTable">
				<thead>
						<tr>
						<th>Tanggal</th>
						<th>Kode Ruang</th>
						<th>Ruang</th>
						<th>Lantai</th>
						<th>Nama Kegiatan</th>
						<th>Keterangan</th>
						<th>Tampilkan</th>
						<th>Aksi</th>
						</tr>
				</thead>

				<tbody>
	            @foreach ($agenda as $agenda_list)
	                <tr>
				          <td>{{ $agenda_list->tanggal_acara }}</td>
				          <td>{{ $agenda_list->kode_ruang }}</td>
				          <td>{{ $agenda_list->nama_ruang }}</td>
				          <td>{{ $agenda_list->lantai }}</td>
				          <td>{{ $agenda_list->nama_acara }}</td>
				          <td>{{ $agenda_list->keterangan_acara }}</td>
				          <td>@if ($agenda_list->ditampilkan == 1) Ya @else Tidak @endif</td>
		                  <td>
												<a class="btn btn-warning" href="{{ url('/') }}/agenda_edit/{{ $agenda_list -> id }}">EDIT</a>
												<a class="btn btn-danger" href="{{ url('/') }}/agenda_delete/{{ $agenda_list -> id }}">HAPUS</a>
		                  </td>
	                </tr>
	            @endforeach
	        </tbody>
				</table>
		</div>
</div>

@stop

@extends('admin.footapp')
