<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Jenis;

class JenisController extends Controller
{
    public function awal(){

        $semuaJenis = Jenis::all();
        return view('jenis.awal', compact('semuaJenis'));
    }
     public function tambah(){
        return view('jenis.tambah');
    }

    public function simpan(Request $input){
        $user = new User($input->only('email','password'));
        if ($user->save()) {
            $jenis = new Jenis();
            $jenis->nm_jenis = $input->nm_jenis;
            
            
            if($user->jenis()->save($jenis)) $this->informasi = 'Berhasil Simpan Data';
        }
        return redirect('jenis')->with(['informasi'=>$this->informasi]);
    }

    public function edit($id){
        $jenis = Jenis::find($id);
        return view('jenis.edit')->with(array('jenis'=>$jenis));
    }

    public function lihat($id){
        $jenis = Jenis::find($id);
        return view('jenis.lihat')->with(array('jenis'=>$jenis));
    }

    public function update($id, Request $input){
        $jenis = Jenis::find($id);
        $user = $jenis->user;
        $jenis->nm_jenis = $input->nm_jenis;
        $jenis->save();
        if (!is_null($input->email)) {
            $user->fill($input->only('email'));
            if (!empty($input->password)) {
                $user->password = $input->password;
            }
            if ($user->save()) {
                $this->informasi = 'Berhasil Simpan Data';
            }else{
                $this->informasi = 'Gagal Simpan Data';
            }
        }        
        return redirect('jenis')->with(['informasi'=>$this->informasi]);
    }

    public function hapus($id){
        $jenis = Jenis::find($id);
        if ($jenis->user()->delete()) {
            if ($jenis->delete()) {
                $this->informasi = 'Berhasil Hapus Data';
            }
        }
        return redirect('jenis')->with(['informasi'=>$this->informasi]);
    }
}
