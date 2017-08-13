@extends('master')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong>
			Seluruh Data Admin
		</strong>
		<a href="{{url('user/tambah')}}" class="btn btn-xs btn-primary pull-right">
			<i class="fa fa-plus"></i>
			Admin
		</a>
		<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th>No.</th>
				<th>Username</th>
								
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php $x=1;?>
			@foreach($data as $admin)
				<tr>
					<td>{{$x++}}</td>
					<td>{{$admin->email or 'username kosong'}}</td>
					
					<td>
						<div class="btn-group" role="grup">
							<a href="{{url('user/edit/'.$admin->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah">
								<i class="fa fa-pencil"></i>
							</a>							
							<a href="{{url('user/'.$admin->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat">
								<i class="fa fa-eye"></i>
							</a>
							<a href="{{url('user/hapus/'.$admin->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus">
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