<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peraturan extends Model
{
    protected $table = 'peraturan';
    protected $guarded = ['id'];
    public function jenis(){
			return $this->belongsTo(Jenis::class);
		}
}
