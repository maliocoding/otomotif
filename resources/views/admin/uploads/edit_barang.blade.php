@extends('admin.main')

@section('konten')
<div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah Barang</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Forms</li>
            </ol>
          </div>

          <div class="row">
            <div class="col-lg-12">
              <!-- Form Basic -->
              <div class="card mb-12">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <!--   <h6 class="m-0 font-weight-bold text-primary">Tambah</h6> -->
                </div>
                <div class="card-body">
                  @if(count($errors) > 0)
                    <div class="alert alert-danger">
                      @foreach ($errors->all() as $error)
                      {{ $error }} <br/>
                      @endforeach
                    </div>
                    @endif


                        @if(\Session::has('alert'))
                <div class="alert alert-danger">
                    <div>{{Session::get('alert')}}</div>
                    </div>
                @endif
                @if(\Session::has('alert-success'))
                    <div class="alert alert-success">
                        <div>{{Session::get('alert-success')}}</div>
                    </div>
                @endif 


               
                  <form action="{{url('/editkuy')}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                   
                  <input type="hidden" name="id" value="{{$barang->id}}">
                    <div class="form-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input"  name="file1" id="customFile">
                        <input type="hidden" name="foto1" value="{{$barang->foto1}}">
                        <label class="custom-file-label" for="customFile">Foto 1</label>
                      </div>
                        <img src="{{url('data_file/'.$barang->foto1)}}" class="img-thumbnail" width="25%">
                    </div>


                    <div class="form-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input"  name="file2" id="customFile">
                          <input type="hidden" name="foto2" value="{{$barang->foto2}}">
                        <label class="custom-file-label" for="customFile">Foto 2</label>
                      </div>
                        @if($barang->foto3)
                       <img src="{{url('data_file/'.$barang->foto2)}}" class="img-thumbnail" width="25%">
                       @endif
                    </div>


                    <div class="form-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input"  name="file3" id="customFile">
                          <input type="hidden" name="foto3" value="{{$barang->foto3}}">
                        <label class="custom-file-label" for="customFile">Foto 3</label>
                      </div>
                        @if($barang->foto3)
                       <img src="{{url('data_file/'.$barang->foto3)}}" class="img-thumbnail" width="25%">
                       @endif
                    </div>


                    <div class="form-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input"  name="file4" id="customFile">
                          <input type="hidden" name="foto4" value="{{$barang->foto4}}">
                        <label class="custom-file-label" for="customFile">Foto 4</label>
                      </div>
                      @if($barang->foto4)
                       <img src="{{url('data_file/'.$barang->foto4)}}" class="img-thumbnail" width="25%">
                       @endif
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Kategori Barang</label>
                     <select class="custom-select"name="kategori">
                      <option value="{{$barang->id_kategori}}" selected> {{$barang->nama_kategori}}</option>
                       @foreach ($kategori as $kat)
                       <option value="{{$kat->id_kategori}}">{{$kat->nama_kategori}}</option>
                       @endforeach
                  
                     </select>
                    
                     
                    </div>
                  

                     <div class="form-group">
                      <label for="exampleInputEmail1">Nama Barang</label>
                      <input type="text" class="form-control" name="nama_barang" value="{{$barang->nama_barang}}">
                    
                     
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Harga</label>
                      <input type="number" class="form-control" name="harga" value="{{$barang->harga}}">
                    
                     
                    </div>

                     <div class="form-group">
                      <label for="exampleInputEmail1">Keterangan</label>
                     <textarea class="form-control" name="keterangan"> {{$barang->keterangan}} </textarea>
                    
                     
                    </div>
                  
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
               
                </div>
                  

                  </div>
              </div>

<script>

     CKEDITOR.replace( 'keterangan' );

// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>
          
        
@endsection