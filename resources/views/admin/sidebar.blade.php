  <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
          <img src="{{asset('RuangAdmin/img/logo/logo2.png')}}">
        </div>
        <div class="sidebar-brand-text mx-3">RuangAdmin</div>
      </a>
      <hr class="sidebar-divider my-0">
    
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Navigasi
      </div>
      
      <li class="nav-item active">
        <a class="nav-link" href="{{url('/kategori')}}">
          <i class="fab fa-fw fa-wpforms"></i>
          <span>Kategori</span>
        </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{url('/barang')}}">
          <i class="fab fa-fw fa-wpforms"></i>
          <span>Barang</span>
        </a>
      </li>
<!--   {{-- kalau rolesnya admin muncul --}}
    @if(Session::get('roles')=='admin')
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable" aria-expanded="true"
          aria-controls="collapseTable">
          <i class="fas fa-fw fa-table"></i>
          <span>Tables</span>
        </a>
        <div id="collapseTable" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Tables</h6>
            <a class="collapse-item" href="simple-tables.html">Simple Tables</a>
            <a class="collapse-item" href="datatables.html">DataTables</a>
          </div>
        </div>
      </li>
    @endif -->
      
      <hr class="sidebar-divider">
   
    </ul>