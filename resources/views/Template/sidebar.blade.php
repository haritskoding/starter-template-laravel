<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center"
     href="{{route('beranda')}}">
      <div class="sidebar-brand-icon">
        <img src="{{asset('img/logo.png')}}" width="50px"/>
      </div>
      <div class="sidebar-brand-text mx-3">Chublife</div>
    </a>


@if(auth()->user()->level=="1")
    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
      <a class="nav-link"  href="{{route('beranda')}}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
      Interface
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-cog"></i>
        <span>Pegawai</span>
      </a>
      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-blue py-2 collapse-inner rounded">     
            <a 
          class="collapse-item text-white " 
          href="{{route('data-pegawai')}}"> <i class="fas fa-fw fa-table"></i><span>&nbsp;Data Pegawai</span></a>
          <a class="collapse-item text-white "
           href="{{route('create-pegawai')}}">
           <i class="fas fa-fw fa-file-alt"></i>&nbsp;Form Pegawai
            </a>
        </div>
      </div>
    </li>

    <!-- Nav Item - jabatan Collapse Menu -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-fw fa-wrench"></i> 
        <span>Customers</span>
      </a>
      <div id="collapseUtilities" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-blue py-2 collapse-inner rounded">     
            <a 
          class="collapse-item text-white " 
          href="{{route('data-customers')}}"> <i class="fas fa-fw fa-table"></i><span>&nbsp;Data Customers</span></a>
          <a class="collapse-item text-white "
           href="{{route('create-customers')}}">
           <i class="fas fa-fw fa-file-alt"></i>&nbsp;Form Customers
            </a>
        </div>
      </div>
    </li>
  
    <!-- Nav Item - Utilities Collapse Menu -->
       <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#jbtn" aria-expanded="true" aria-controls="jbtn">
          <i class="fas fa-fw fa-calendar-check"></i> 
          <span>Position</span>
        </a>
        <div id="jbtn" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-blue py-2 collapse-inner rounded">     
              <a 
            class="collapse-item text-white " 
            href="{{route('data-position')}}"> <i class="fas fa-fw fa-table"></i><span>&nbsp;Data Position</span></a>
            <a class="collapse-item text-white "
             href="{{route('create-position')}}">
             <i class="fas fa-fw fa-file-alt"></i>&nbsp;Add Position
              </a>
          </div>
        </div>
      </li>
@endif

@if(auth()->user()->level=="2")
    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
      <a class="nav-link"  href="{{route('beranda')}}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
      Interface
    </div>
<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
    <i class="fas fa-fw fa-wrench"></i> 
    <span>Customers</span>
  </a>
  <div id="collapseUtilities" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
    <div class="bg-blue py-2 collapse-inner rounded">     
        <a 
      class="collapse-item text-white " 
      href="{{route('data-customers')}}"> <i class="fas fa-fw fa-table"></i><span>&nbsp;Data Customers</span></a>
      <a class="collapse-item text-white "
       href="{{route('create-customers')}}">
       <i class="fas fa-fw fa-file-alt"></i>&nbsp;Form Customers
        </a>
    </div>
  </div>
</li>
@endif
      <li class="nav-item">
        <a class="nav-link" href="{{route('profile')}}"  aria-expanded="false" >
          <i class="fas fa-fw fa-user"></i> 
          <span>Profile</span>
        </a>
      </li>
  

    <!-- Divider -->
    {{-- <hr class="sidebar-divider"> --}}

    <!-- Heading Matikan -->
    {{-- <div class="sidebar-heading">
      Addons
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
        <i class="fas fa-fw fa-folder"></i>
        <span>Pages</span>
      </a>
      <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white   py-2 collapse-inner rounded">
          <h6 class="collapse-header">Login Screens:</h6>
          <a class="collapse-item text-white" href="login.html">Login</a>
          <a class="collapse-item text-white" href="register.html">Register</a>
          <a class="collapse-item text-white" href="forgot-password.html">Forgot Password</a>
          <div class="collapse-divider"></div>
          <h6 class="collapse-header">Other Pages:</h6>
          <a class="collapse-item text-white" href="404.html">404 Page</a>
          <a class="collapse-item text-white" href="blank.html">Blank Page</a>
        </div>
      </div>
    </li>

    <!-- Nav Item - Charts -->
    <li class="nav-item">
      <a class="nav-link" href="charts.html">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Charts</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
      <a class="nav-link" href="tables.html">
        <i class="fas fa-fw fa-table"></i>
        <span>Tables</span></a>
    </li> --}}

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline" style="bottom:0;position: fixed; z-index:10;margin: 20px 30px; ">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

  </ul>