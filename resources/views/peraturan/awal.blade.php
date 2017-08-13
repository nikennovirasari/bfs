@extends('master')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong>
			Seluruh Data Peraturan
		</strong>
		<a href="{{url('peraturan/tambah')}}" class="btn btn-xs btn-primary pull-right">
			<i class="fa fa-plus"></i>
			Peraturan
		</a>
		<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th>No.</th>
				<th>Peraturan</th>
				<th>Jenis</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php $x=1;?>
			@foreach($semuaPeraturan as $peraturan)
				<tr>
					<td>{{$x++}}</td>
					<td>{{$peraturan->isi_aturan or 'isi peraturan kosong'}}</td>
					<td>{{$peraturan->jenis->nm_jenis or 'jenis kosong'}}</td>
					
					<td>
						<div class="btn-group" role="grup">
							<a href="{{url('peraturan/edit/'.$peraturan->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah">
								<i class="fa fa-pencil"></i>
							</a>							
							<a href="{{url('peraturan/'.$peraturan->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat">
								<i class="fa fa-eye"></i>
							</a>
							<a href="{{url('peraturan/hapus/'.$peraturan->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus">
								<i class="fa fa-remove"></i>
							</a>
						</div>
					</td>
				</tr>
				@endforeach
		</tbody>
	</table>
</div>
@stop