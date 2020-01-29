<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengguna;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    //

    public function index(){
          if(Session::get('sudahlogin')){
            redirect('/barang');
    	
         } else {
            return view('admin.login.login');
         }

    }

    public function regis(){

    	return view('admin.login.register');
    }

    public function logout(){
        Session::flush();
        return redirect('/adm')->with('alert','Kamu sudah logout');
    }

    public function login(Request $req){
        $messages = [
            'required' => ':attribute wajib diisi ',
            'min' => ':attribute harus diisi minimal :min karakter ',
            'max' => ':attribute harus diisi maksimal :max karakter ',
        ];

        $validate= $this->validate($req, [
           
            'username' => 'required|min:3|max:50',
            'password' => 'required|min:6',
        ],$messages);

        $username=$req->username;
        $password=$req->password;


        $data = Pengguna::where('username',$username)->first();
        if($data){ //apakah user tersebut ada atau tidak
            if(Hash::check($password,$data->password)){
                Session::put('nama',$data->username);
                Session::put('roles','admin');
                Session::put('sudahlogin',TRUE);
                return redirect('/barang');
            }
            else{
                return redirect('/adm')->with('alert','Password atau Email, Salah !');
            }
        }
        else{
            return redirect('/adm')->with('alert','Password atau Email, Salah!');
        }


    }

    public function register(Request $req){
    	$messages = [
		    'required' => ':attribute wajib diisi cuy!!!',
		    'min' => ':attribute harus diisi minimal :min karakter ya cuy!!!',
		    'max' => ':attribute harus diisi maksimal :max karakter ya cuy!!!',
		];

        $validate= $this->validate($req, [
		    // 'nama' => 'required|min:3|max:50',
		    // 'telp' => 'required|numeric',
		    'username' => 'required|min:3|max:50',
		    'password' => 'required|confirmed|min:6',
		],$messages);


        $data =  new Pengguna();
        // $data->nama = $req->nama;
        // $data->alamat = $req->alamat;
        // $data->telp = $req->telp;
        $data->username = $req->username;
        $data->password = bcrypt($req->password);
        $data->save();

        return redirect('/adm')->with('alert-success','Kamu berhasil Register');

    }
}
