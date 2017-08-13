@extends('master')
@section('container')

<div class="panel panel-warning">
	<div class="panel panel-heading">
		<strong>
			<a href="{{url('jenis')}}">
				<i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i>
			</a> Detail Data Jenis
		</strong>
	</div>
	<table class="table">
		<tr>
			<td>Jenis</td>
			<td>:</td>
			<td>{{$jenis->nm_jenis}}</td>
		</tr>
		<tr>
			<td>Username</td>
			<td>:</td>
			<td>{{$jenis->user->email}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Dibuat Tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$jenis->created_at}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Diperbarui Tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$jenis->updated_at}}</td>
		</tr>
	</table>
</div>
@stop