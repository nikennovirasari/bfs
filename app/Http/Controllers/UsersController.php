<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{

    public function awal(){
        
    	return view('user.awal',['data'=>User::all()]);
    }

    public function tambah(){    	
        return view('user.tambah');
    }

    public function simpan(Request $input){
        $this->validate($input,[
            'email'=> 'required',
            'password'=> 'required'
            ]);
        $user = new User();
        $user->email = $input->email;
        $user->password = $input->password;
        $informasi = $user->save() ? 'Berhasil Simpan data' : 'Gagal Simpan Data';
        return redirect('user')->with(['informasi'=>$informasi]);
    }

    public function edit($id){
        $user = User::find($id);
        return view('user.edit')->with(array('user'=>$user));
    }

    public function lihat($id){
        $user = User::find($id);
        return view('user.lihat')->with(array('user'=>$user));
    }

    public function update($id, Request $input){
        $user = User::find($id);
        $user->email = $input->email;
        $user->password = $input->password;
        $informasi = $user->save() ? 'Berhasil Update data' : 'Gagal Update Data';
        return redirect('user')->with(['informasi'=>$informasi]);
    }

    public function hapus($id){
        $user = User::find($id);
        $informasi = $user->delete() ? 'Berhasil Hapus data' : 'Gagal Hapus Data';
        return redirect('user')->with(['informasi'=>$informasi]);
    }
}
