@extends('master')
@section('container')

<div class="panel-heading">
		<strong>
			Cari Data Peraturan
		</strong>
		
		<div class="clearfix"></div>
	</div>

	
<div class="panel panel-default">
{!! Form::open(['method'=>'GET','url'=>'searchresult','class'=>'navbar-form navbar-left','role'=>'search'])  !!}
	<div class="input-group custom-search-form">
		<input type="text" class="form-control" name="search" placeholder="Search...">
		<span class="input-group-btn">
			<button class="btn btn-default-sm" type="submit">
				<i class="fa fa-search"></i>
			</button>
		</span>
	</div>
	{!! Form::close() !!}	
	
	<table class="table">
		<thead>
			<tr>
				<th>No.</th>
				<th>Peraturan</th>
				<th>Jenis</th>
				
			</tr>
		</thead>
		<tbody>
			<?php $x=1;?>
			@foreach($semuaPeraturan as $peraturan)
			<tr>
				<td>{{$x++}}</td>
				<td>{{$peraturan->isi_aturan or 'isi peraturan kosong'}}</td>
				<td>{{$peraturan->jenis->nm_jenis or 'jenis kosong'}}</td>

				
			</tr>
			@endforeach
		</tbody>
	</table>

</div>


@stop

