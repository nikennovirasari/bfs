@extends('master')
@section('container')

<div class="panel panel-warning">
	<div class="panel panel-heading">
		<strong>
			<a href="{{url('peraturan')}}">
				<i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i>
			</a> Detail Data Peraturan
		</strong>
	</div>
	<table class="table">
		<tr>
			<td>Isi Peraturan</td>
			<td>:</td>
			<td>{{$peraturan->isi_aturan}}</td>
		</tr>
		<tr>
			<td>Jenis</td>
			<td>:</td>
			<td>{{$peraturan->jenis->nm_jenis}}</td>
		</tr>

		<tr>
			<td class="col-xs-4">Dibuat Tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$peraturan->created_at}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Diperbarui Tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$peraturan->updated_at}}</td>
		</tr>
	</table>
</div>
@stop