<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\Barang;
use App\Kategori;
use File;

use DataTables;

class AdminController extends Controller
{
    //

      public function index(){

          if(!Session::get('sudahlogin')){
            return redirect('/adm')->with('alert','Kamu harus login dulu');
        }
        else{

            return view('admin.uploads.list');
                // $barang = Barang::get();
                //     return view('admin.uploads.form_upload',['barang' => $barang]);
            
            }

    }

    public function kategori(){

          if(!Session::get('sudahlogin')){
            return redirect('/adm')->with('alert','Kamu harus login dulu');
        }
        else{

            return view('admin.uploads.list_kat');
                // $barang = Barang::get();
                //     return view('admin.uploads.form_upload',['barang' => $barang]);
            
            }

    }


    public function json_barang(){
     
       if(Session::get('sudahlogin')){

        

          $barang = DB::table('v_barang')->get();
        return Datatables::of($barang)
       ->addColumn('action', function ($barang) {
                                return '<a href="/edit/' .$barang->id . '" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                                    <a href="/hapus/' .$barang->id . '" class="btn btn-xs btn-primary" 
                                        onclick="return confirm(\'Anda yakin mau menghapus item ini ?\', function(result) { if(result) {       
                                         this.form.submit(); }})">
                                         <i class="glyphicon glyphicon-delete"></i> Hapus</a>';
                            })
                            ->make(true);
        }
    }

    

    public function json_kategori(){
     
       if(Session::get('sudahlogin')){

         $kategori = Kategori::get();
        return Datatables::of($kategori)
       ->addColumn('action', function ($kategori) {
                                return '<a href="/edit/' .$kategori->id_kategori . '" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                                <a href="/hapus/' .$kategori->id_kategori . '" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-delete"></i> Hapus</a>';
                            })
                            ->make(true);
        }


    }

    public function tambah(){


          if(!Session::get('sudahlogin')){
            return redirect('/adm')->with('alert','Kamu harus login dulu');
        }
        else{

            $kategori = Kategori::get();
            return view('admin.uploads.form_upload',['kategori'=>$kategori]);
                        
            }

    }

    public function edit_barang($id){


          if(!Session::get('sudahlogin')){
            return redirect('/adm')->with('alert','Kamu harus login dulu');
        }
        else{

            $kategori = Kategori::get();
            $barang = DB::table('v_barang')->where('id', $id)->first();
            return view('admin.uploads.edit_barang',['barang'=>$barang,'kategori'=>$kategori]);
                        
            }

    }


    public function tambah_kategori(){


          if(!Session::get('sudahlogin')){
            return redirect('/adm')->with('alert','Kamu harus login dulu');
        }
        else{

          
            return view('admin.uploads.tambah_kategori');
                    
            }

    }

    
   public function proses_kat(Request $req){
        $this->validate($req, [
        'kategori' => 'required',
        ]);
               

        Kategori::create([
                'nama_kategori' => $req->kategori,             
            ]);
        return redirect('/tambah_kat')->with('alert-success','Berhasil ditambah');
    }



    public function proses(Request $req){
         $messages = [
            'required' => ':attribute wajib diisi ',
            'min' => ':attribute harus diisi minimal :min karakter ',
            'max' => ':attribute harus diisi maksimal :max karakter ',
        ];

    	$this->validate($req, [
		'file1' => 'required|file|image',
        'file2' => 'file|image',
        'file3' => 'file|image',
        'file4' => 'file|image',
        'nama_barang'=> 'required',
        'harga'=> 'required',
        'keterangan'=> 'required',
		
		],$messages);

        $nama_file=array();
       
		  // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'data_file';
 
        for($i=1;$i<=4;$i++){

                $nama_file[$i]='';
                if ($req->has('file'.$i)) {
                        $file[$i] = $req->file("file".$i);
                         // nama file
                        $nama_file[$i]= time()."_".$file[$i]->getClientOriginalName();
                         // upload file
                        $file[$i]->move($tujuan_upload,$nama_file[$i]);
                    }

          
        }
      	       

		Barang::create([
				'id_kategori' => $req->kategori,
                'nama_barang' => $req->nama_barang,
                'harga' => $req->harga,
                'foto1' => $nama_file[1],
                'foto2' => $nama_file[2],
                'foto3' => $nama_file[3],
                'foto4' => $nama_file[4],
                'keterangan'=> $req->keterangan,
			
			]);
		return redirect('/tambah')->with('alert-success','Berhasil ditambah');
    }


    public function proses_edit(Request $req){
         $messages = [
            'required' => ':attribute wajib diisi ',
            'min' => ':attribute harus diisi minimal :min karakter ',
            'max' => ':attribute harus diisi maksimal :max karakter ',
        ];

        $this->validate($req, [
        'file1' => 'file|image',
        'file2' => 'file|image',
        'file3' => 'file|image',
        'file4' => 'file|image',
        'nama_barang'=> 'required',
        'harga'=> 'required',
        'keterangan'=> 'required',
        
        ],$messages);


        $nama_file[1]=$req->foto1;
        $nama_file[2]=$req->foto2;
        $nama_file[3]=$req->foto3;
        $nama_file[4]=$req->foto4;
       
          // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'data_file';
 
        for($i=1;$i<=4;$i++){

               
                if ($req->has('file'.$i)) {
                        File::delete('data_file/'.$nama_file[$i]);
                        $file[$i] = $req->file("file".$i);
                         // nama file
                        $nama_file[$i]= time()."_".$file[$i]->getClientOriginalName();
                         // upload file
                        $file[$i]->move($tujuan_upload,$nama_file[$i]);
                    }

          
        }
               
        DB::table('barang')
            ->where('id', $req->id)
            ->update([
                    'id_kategori' => $req->kategori,
                    'nama_barang' => $req->nama_barang,
                    'harga' => $req->harga,
                    'foto1' => $nama_file[1],
                    'foto2' => $nama_file[2],
                    'foto3' => $nama_file[3],
                    'foto4' => $nama_file[4],
                    'keterangan'=> $req->keterangan
                    ]);
        // Barang::create([
        //         'id_kategori' => $req->kategori,
        //         'nama_barang' => $req->nama_barang,
        //         'harga' => $req->harga,
        //         'foto1' => $nama_file[1],
        //         'foto2' => $nama_file[2],
        //         'foto3' => $nama_file[3],
        //         'foto4' => $nama_file[4],
        //         'keterangan'=> $req->keterangan,
            
        //     ]);
        return redirect('/barang')->with('alert-success','Berhasil diubah');
    }

    public function hapus_barang($id){


    	
    	$barang= Barang::where('id',$id)->first(); //first ambil 1 data pertama
    	
        //hapus file
       
            File::delete('data_file/'.$barang->foto1);
            if($barang->foto2!=''){File::delete('data_file/'.$barang->foto2);}
            if($barang->foto3!=''){File::delete('data_file/'.$barang->foto3);}
            if($barang->foto4!=''){File::delete('data_file/'.$barang->foto4);}

         	//hapus data
    	Barang::where('id',$id)->delete();

        return redirect('/barang')->with('alert-success','Berhasil dihapus');

    }
}
