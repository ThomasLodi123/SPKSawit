<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
<a href="{{url('/')}}" class="brand-link">
      <img src="{{asset('assets/img/Lsawit.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">SPKS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('assets/img/profil.png')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
          <a href="{{url('home')}}" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('criteriaweights')}}" class="nav-link">
              <i class="nav-icon fas fa-cube"></i>
              <p>
                Kriteria & Bobot
              </p>
            </a>
          </li>
          <li class="nav-item">
          <a href="{{url('criteriaratings')}}" class="nav-link">
              <i class="nav-icon fas fa-cubes"></i>
              <p>
                Peringkat Kriteria
              </p>
            </a>
          </li>
          <li class="nav-item">
          <a href="{{url('alternatives')}}" class="nav-link">
              <i class="nav-icon fas fa-database"></i>
              <p>
                Alternatif & Nilai
              </p>
            </a>
          </li>
          <li class="nav-header">Hasil</li>
          <li class="nav-item">
          <a href="{{url('decision')}}" class="nav-link">
                <i class="nav-icon fas fa-table"></i>
              <p>
                Matrik Keputusan
            </p>
            </a>
          </li>
          <li class="nav-item">
          <a href="{{url('normalization')}}" class="nav-link">
              <i class="nav-icon far fa-chart-bar"></i>
              <p>
                Normalisasi
              </p>
            </a>
          </li>
          <li class="nav-item">
          <a href="{{url('rank')}}" class="nav-link">
              <i class="nav-icon fas fa-chart-line"></i>
              <p>
                Peringkat
              </p>
            </a>
          </li>
          <li class="nav-item">
          <a href="{{url('rank')}}" class="nav-link">
          <i class="nav-icon fa fa-arrow-circle-left"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
