@extends('master')
@section('container')

<div class="panel panel-info">
	<div class="panel panel-heading">
		<strong>
			<a href="{{url('peraturan')}}">
				<i class="fa text-default fa-chevron-left"></i>
			</a> Perbarui Data Peraturan
		</strong>
	</div>
	{!! Form::model($peraturan,['url'=>'peraturan/edit/'.$peraturan->id,'class'=>'form-horizontal']) !!}
		@include('peraturan.form')
	<div style="width:100%;text-align:right;">
		<button class="btn btn-info">
			<i class="fa fa-save"></i>
			Perbarui
		</button>
		<button type="reset" class="btn btn-danger">
			<i class="fa fa-undo"></i>
			Ulangi
		</button>
	</div>
	{!! Form::close() !!}
</div>
@stop