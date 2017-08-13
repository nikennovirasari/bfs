@extends('master')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong>
			Seluruh Data Jenis
		</strong>
		<a href="{{url('jenis/tambah')}}" class="btn btn-xs btn-primary pull-right">
			<i class="fa fa-plus"></i>
			Jenis
		</a>
		<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th>No.</th>
				<th>Jenis</th>
				<th>Username</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php $x=1;?>
			@foreach($semuaJenis as $jenis)
				<tr>
					<td>{{$x++}}</td>
					<td>{{$jenis->nm_jenis or 'jenis kosong'}}</td>
					<td>{{$jenis->user->email or 'username kosong'}}</td>
					
					<td>
						<div class="btn-group" role="grup">
							<a href="{{url('jenis/edit/'.$jenis->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah">
								<i class="fa fa-pencil"></i>
							</a>							
							<a href="{{url('jenis/'.$jenis->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat">
								<i class="fa fa-eye"></i>
							</a>
							<a href="{{url('jenis/hapus/'.$jenis->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus">
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