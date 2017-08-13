@extends('master')
@section('container')

<div class="panel panel-warning">
	<div class="panel panel-heading">
		<strong>
			<a href="{{url('user')}}">
				<i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i>
			</a> Detail Data Admin
		</strong>
	</div>
	<table class="table">
		<tr>
			<td>Username</td>
			<td>:</td>
			<td>{{$user->email}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Dibuat Tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$user->created_at}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Diperbarui Tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$user->updated_at}}</td>
		</tr>
	</table>
</div>
@stop