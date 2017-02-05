@extends('admin.admin_template')

@section('content')

@if (Session::has('message'))
    <div class="alert alert-danger">{{ Session::get('message') }}</div>
@endif

<section class="content-header">
	<h1>DOKUMENTASI</h1>
	<ol class="breadcrumb">
		<li><a href="{{ url('/') }}"><i class="fa fa-home"></i> Beranda</a></li>
		<li class="active">Dokumentasi</li>
	</ol>
</section>

<div class="box">
	<div class"box-header" style="margin-top:10px;">
		<div class="col-sm-12">
			<a class="btn btn-success" href="{{ url('/') }}/dokumentasi_create" style="float: right;">TAMBAH</a>
		</div>
	</div>
	<div class="box-body">
		<table class="table table-bordered table-hover dataTable">
				<thead>
						<tr>
						<th>No.</th>
						<th>Foto</th>
						<th>Keterangan Foto</th>
						<th>Aksi</th>
						</tr>
				</thead>

				<tbody>
	            @foreach ($dokumentasi as $dokumentasi_list)
	                <tr>
				          <td>{{ $dokumentasi_list->id }}</td>
				          <td>{{ $dokumentasi_list->foto }}</td>
				          <td style="text-overflow: ellipsis; white-space:nowrap; overflow:hidden;">{{ $dokumentasi_list->keterangan_foto }}</td>
                  <td><a class="btn btn-warning btn-xs" href="{{ url('/') }}/dokumentasi_edit/{{ $dokumentasi_list -> id }}">EDIT</a>
	                </tr>
	            @endforeach
	        </tbody>
				</table>
		</div>
</div>
@stop

@extends('admin.footapp')
