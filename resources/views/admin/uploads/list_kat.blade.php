@extends('admin.main')

@section('konten')
<div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data Kategori</h1>
           
          </div>

          <!-- Row -->
          <div class="row">
            <!-- Datatables -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                 <a href="{{url('/tambah_kat')}}" class="btn btn-primary">+ Tambah Kategori</a>
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush table-stripped" id="pegawai-table">
                    <thead class="thead-light">
                      <tr>
                        <th>Kategori</th>
                        <th>Aksi</th>
                        
                     
                      </tr>
                    </thead>
                  
                    <tbody>
                    </tbody>
                  </table>
                     <script>
                          $(function() {
                              $('#pegawai-table').DataTable({
                                responsive: true,
                                  processing: true,
                                  serverSide: true,
                                  ajax: "{{url('/kat')}}",
                                  columns: [
                                      { data: 'nama_kategori', name: 'nama_kategori' },
                                      { data: 'action', name: 'action' },
                                      
                                  ]
                              });

                              
                          });


            </script>

                </div>
              </div>
            </div>
            <!-- DataTable with Hover -->
           
          </div>
          <!--Row-->

        

        </div>
@endsection