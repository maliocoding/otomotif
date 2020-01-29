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
                  <form action="{{url('/proses_kategori')}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                   


                     <div class="form-group">
                      <label for="exampleInputEmail1">Nama Kategori</label>
                      <input type="text" class="form-control" name="kategori">
                    
                     
                    </div>

                 
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                </div>
                  

                  </div>
              </div>

          <script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>
          
        
@endsection