<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jenis;
use App\Peraturan;
use App\User;

class PeraturanController extends Controller
{
   public function awal(){

    $semuaPeraturan = Peraturan::all();
    return view('peraturan.awal', compact('semuaPeraturan'));
}
public function tambah(){
    $jenis = new Jenis;
    
    return view('peraturan.tambah', compact('jenis'));
}

public function simpan(Request $input){
    $peraturan = new Peraturan($input->only('isi_aturan','jenis_id'));
    if($peraturan->save()) $this->informasi = "Data berhasil disimpan";
    return redirect('peraturan')->with(['informasi' => $this->informasi]);
}

public function edit($id){
    $peraturan = Peraturan::find($id);
    $jenis = new Jenis;
    return view('peraturan.edit', compact('jenis','peraturan'));
}

public function lihat($id){
    $peraturan = Peraturan::find($id);
    return view('peraturan.lihat')->with(array('peraturan'=>$peraturan));
}

public function update($id, Request $input){
    $peraturan = Peraturan::find($id);
    $peraturan->fill($input->only('isi_aturan','jenis_id'));
    if($peraturan->save()) $this->informasi = "Data berhasil diupdate";
    return redirect('peraturan')->with(['informasi' => $this->informasi]);
}

public function hapus($id){
    $peraturan = Peraturan::find($id);
    if ($peraturan->user()->delete()) {
        if ($peraturan->delete()) {
            $this->informasi = 'Berhasil Hapus Data';
        }
    }
    return redirect('peraturan')->with(['informasi'=>$this->informasi]);
}
}
