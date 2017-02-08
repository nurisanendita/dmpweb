@extends('admin.admin_template')

@section('content')

<section class="content-header">
	<h1>REKOR CAPAIAN JAM KESELAMATAN KERJA</h1>
	<ol class="breadcrumb">
		<li><a href="{{ url('/') }}"><i class="fa fa-home"></i> Beranda</a></li>
    <li>Jam Keselamatan Kerja</li>
		<li class="active">Rekor Yang Pernah Dicapai Index</li>
	</ol>
</section>

<div class="box">
	<div class"box-header" style="margin-top:10px;">
		<div class="col-sm-12">
			<a class="btn btn-success" href="{{ url('/') }}/rekortercapai_create" style="float: right;">TAMBAH</a>
		</div>
	</div>
	<div class="box-body">
		<table class="table table-bordered table-hover dataTable">
				<thead>
						<tr>
            <th>No.</th>
						<th>Hari</th>
            <th>Jam</th>
						<th>Aksi</th>
						</tr>
				</thead>

				<tbody>
	            @foreach ($rekortercapai as $rekortercapai_list)
	                <tr>
                  <td>{{ $rekortercapai_list->id }}</td>
				          <td>{{ $rekortercapai_list->hari }}</td>
                  <td>{{ $rekortercapai_list->jam }}</td>
                  <td>
										<a class="btn btn-warning btn-xs" href="{{ url('/') }}/rekortercapai_edit/{{ $rekortercapai_list -> id }}">EDIT</a>
										<a class="btn btn-danger btn-xs" href="{{ url('/') }}/rekortercapai_delete/{{ $rekortercapai_list -> id }}">HAPUS</a>
                  </td>
	                </tr>
	            @endforeach
	        </tbody>
				</table>
		</div>
</div>
@stop

@extends('admin.footapp')
