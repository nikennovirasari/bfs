<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class SesiController extends Controller
{
    public function index()
    {
    	return view('master');
    }
    public function form()
    {
    	if(Auth::check()){
    		return redirect('/');
    	}
    	return view('login');
    }
    public function validasi(Request $input)
    {
    	$this->validate($input,[
    		'email'=>'required',
    		'password'=>'required',
    		]);
    	$user= User::where($input->only('email','password'))->first();
    	if(! is_null($user)){
    		Auth::login($user);
    		if(Auth::check())
    			return redirect('/user')->with('informasi'."Selamat datang".Auth::user()->username);
    	}
    	return redirect('/login')->withErrors(['Pengguna tidak ditemukan']);
    }
public function logout()
{
	if(Auth::check()){
		Auth::logout();
		return redirect('/login')->withErrors(['Silahkan login untuk masuk ke sistem']);
	} else{
		return redirect('/login')->withErrors(['Silahkan login terlebih dahulu']);
	}
}
}
