<div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
        <div class="container-fluid">
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Navbar links -->
            <ul class="navbar-nav align-items-center  ml-md-auto ">
              <li class="nav-item d-xl-none">
                <!-- Sidenav toggler -->
                <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                  <div class="sidenav-toggler-inner">
                    <i class="sidenav-toggler-line"></i>
                    <i class="sidenav-toggler-line"></i>
                    <i class="sidenav-toggler-line"></i>
                  </div>
                </div>
              </li>
            </ul>
            <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
              <li class="nav-item dropdown">
                <a class="nav-link pr-0" href="#" team="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <div class="media align-items-center">
                    <span class="avatar avatar-sm rounded-circle">
                      <img alt="Image placeholder" src="">
                    </span>
                    <div class="media-body  ml-2  d-none d-lg-block">
                      <span class="mb-0 text-sm  font-weight-bold">{{auth()->user()->name }}</span>
                    </div>
                  </div>
                </a>
                <div class="dropdown-menu  dropdown-menu-right ">
                  <div class="dropdown-header noti-title">
                    <h6 class="text-overflow m-0">Bienvenido!</h6>
                  </div>

                  <a href="#!" class="dropdown-item">
                    <i class="fa fa-headset"></i>
                    <span>Soporte Técnico</span>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"
                   {{ __('Logout') }} class="dropdown-item">
                    <i class="ni ni-user-run"></i>
                    <span>Cerrar Sesión</span>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
                  </a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    <!-- Header -->
    <!-- Header -->
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
              <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Usuarios Registrados</h6>

                  <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                    <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                      <li class="breadcrumb-item"><a href="{{route('admin-panel')}}"><i class="fas fa-home"></i></a></li>
                      <li class="breadcrumb-item active"><a href="#">Usuarios</a></li>
                    </ol>
                  </nav>
                </div>
                <div class="col-lg-6 col-5 text-right">
                  <a href="#"  data-toggle="modal" data-target="#registrar_team" class="prueba_boton_registrar btn btn-lg btn-neutral"> Registrar</a>
                </div>
              </div>
            </div>
          </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
        <div class="row">
            <div class="col">
              <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                  <h3 class="mb-0">Usuarios Registrados</h3>
                </div>
                <!-- Light table -->
                <div class="table-responsive">
                  <table id="users" class="table align-items-center table-flush">
                    <thead class="thead-light">
                      <tr>
                        <th scope="col" class="sort" data-sort="name">ID</th>
                        <th scope="col" class="sort" data-sort="budget">Nombre</th>
                        <th scope="col" class="sort" data-sort="budget">Status</th>
                        <th scope="col" class="sort" data-sort="budget">Email</th>
                        <th scope="col" class="sort" data-sort="status">Fecha</th>
                        <th scope="col" class="sort" data-sort="status">Acciones</th>
                      </tr>
                    </thead>
                  
                  </table>
                </div>
                <!-- Card footer -->

              </div>
            </div>
          </div>
      <!-- Footer -->
      <footer class="footer pt-0">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6">
            <div class="copyright text-center  text-lg-left  text-muted">
              &copy; 2020 <a href="#" class="font-weight-bold ml-1" target="_blank">Arturo Ruiz </a>
            </div>
          </div>
          <div class="col-lg-6">
            <ul class="nav nav-footer justify-content-center justify-content-lg-end">
              <li class="nav-item">
                <a href="#" class="nav-link" target="_blank">Arturo Ruiz</a>
              </li>
            </ul>
          </div>
        </div>
      </footer>
    </div>
  </div>

