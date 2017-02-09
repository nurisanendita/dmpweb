@extends('admin.admin_template')

@section('content')

@if (Session::has('message'))
    <div class="alert alert-danger">{{ Session::get('message') }}</div>
@endif

<section class="content-header">
	<h1>BANNERS</h1>
	<ol class="breadcrumb">
		<li><a href="{{ url('/') }}"><i class="fa fa-home"></i> Beranda</a></li>
		<li class="active">Banners Index</li>
	</ol>
</section>

<div class="box">
	<div class"box-header" style="margin-top:10px;">
		<div class="col-sm-12">
			<a class="btn btn-success" href="{{ url('/') }}/banners_create" style="float: right;">TAMBAH</a>
		</div>
	</div>
	<div class="box-body">
		<table class="table table-bordered table-hover dataTable">
				<thead>
						<tr>
						<th>No.</th>
            <th>Banners</th>
						<th>Aksi</th>
						</tr>
				</thead>

				<tbody>
	            @foreach ($banners as $banner)
	                <tr>
				          <td>{{ $banner->id }}</td>
                  <td>{{ $banner->gambar }}</td>
                  <td>
                    <a class="btn btn-warning btn-xs" href="{{ url('/') }}/banners_edit/{{ $banner->id }}">EDIT</a>
                    <a class="btn btn-danger btn-xs" href="{{ url('/') }}/banners_delete/{{ $banner->id }}">HAPUS</a>
                  </td>
	                </tr>
	            @endforeach
	        </tbody>
				</table>
		</div>
</div>
@stop

@extends('admin.footapp')
