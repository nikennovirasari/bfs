<div class="form-group">
	<label class="col-sm-2 control-label">Isi Peraturan</label>
	<div class="col-sm-10">
		{!! Form::text('isi_aturan',null,['class'=>'form-control','placeholder'=>"Isi Peraturan"]) !!}
	</div>


<div class="form-group">
		<label class="col-sm-2 control-label" id="ruangan_id" >Ruangan</label>
		<div class="col-sm-10">
			
			{!! Form::select('jenis_id',$jenis->pluck('nm_jenis','id'),null,['class'=>'form-control','id'=>'jenis_id','placeholder'=>"Jenis"]) !!}
		</div>
	</div>