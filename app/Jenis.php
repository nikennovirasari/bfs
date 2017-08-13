<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jenis extends Model
{
    protected $table = 'jenis';
    protected $guarded = ['id'];
    public function user(){
			return $this->belongsTo(User::class);
		}

		public function peraturan(){
			return $this->hasMany(Peraturan::class);
		}

}
