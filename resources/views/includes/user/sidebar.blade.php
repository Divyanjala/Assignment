 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
            <img src="{{ asset('img/aquascape-logo.avif')}}" alt="" width="30" height="30">
        </div>
        <div class="sidebar-brand-text mx-3">E-Aquascape </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ in_array($curr_url, ['user.dashboard']) ? 'active' : '' }}">
       <a class="nav-link collapsed"  href="{{ route('user.dashboard') }}" >
           <i class="fas fa-fw fa-file"></i>
           <span>Dashboard</span>
       </a>
   </li>
    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>


   <li class="nav-item {{ in_array($curr_url, ['user.product']) ? 'active' : '' }}">
       <a class="nav-link collapsed"  href="{{ route('user.product') }}" >
           <i class="fa fa-line-chart"></i>
           <span>Growth Rate</span>
       </a>
   </li>
   <li class="nav-item {{ in_array($curr_url, ['user.order']) ? 'active' : '' }}">
       <a class="nav-link collapsed"  href="{{ route('user.order') }}" >
           <i class="fa fa-heartbeat"></i>
           <span>Health Plan</span>
       </a>
   </li>
   <li class="nav-item {{ in_array($curr_url, ['user.task']) ? 'active' : '' }}">
       <a class="nav-link collapsed"  href="{{ route('user.task') }}" >
           <i class="fa fa-dashcube"></i>
           <span>Diseases</span>
       </a>
   </li>
    <!-- Heading -->
    <div class="sidebar-heading">
       Other
   </div>
   <li class="nav-item {{ in_array($curr_url, ['user.product-store']) ? 'active' : '' }}">
       <a class="nav-link collapsed"  href="{{ route('user.product-store') }}" >
           <i class="fas fa fa-plus-square"></i>
           <span>Treatment</span>
       </a>
   </li>
   <li class="nav-item {{ in_array($curr_url, ['user.material-store']) ? 'active' : '' }}">
       <a class="nav-link collapsed"  href="{{ route('user.material-store') }}" >
           <i class="fas fa fa-certificate"></i>
           <span>Aquascape Tips</span>
       </a>
   </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>



</ul>
<!-- End of Sidebar -->
