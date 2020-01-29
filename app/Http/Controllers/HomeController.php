<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Barang;
use App\Kategori;
class HomeController extends Controller
{
    //


    public function index(){
    	
    	 $barang = DB::table('v_barang')->orderBy('id', 'desc')->paginate(8);
    	 $kategori= kategori::get();
    	return view('public.home',['barang'=>$barang, 'kategori'=>$kategori]);


    }

     public function barang(){
    	return view('public.product_detail');
    }

    public function detail($id){
    	$barang=  DB::table('barang')
                ->where('id', '=', $id)
                ->get();
    	// print_r($barang);
    	return view('public.product_detail',['barang'=> $barang]);
    }
}

