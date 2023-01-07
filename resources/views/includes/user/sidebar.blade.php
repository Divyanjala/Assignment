 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">User </div>
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
           <i class="fas fa-fw fa-truck"></i>
           <span>Products</span>
       </a>
   </li>
   <li class="nav-item {{ in_array($curr_url, ['user.order']) ? 'active' : '' }}">
       <a class="nav-link collapsed"  href="{{ route('user.order') }}" >
           <i class="fas fa-fw fa-calendar"></i>
           <span>Orders</span>
       </a>
   </li>
   <li class="nav-item {{ in_array($curr_url, ['user.task']) ? 'active' : '' }}">
       <a class="nav-link collapsed"  href="{{ route('user.task') }}" >
           <i class="fas fa-fw fa-address-card"></i>
           <span>Task</span>
       </a>
   </li>
    <!-- Heading -->
    <div class="sidebar-heading">
       Store
   </div>
   <li class="nav-item {{ in_array($curr_url, ['user.product-store']) ? 'active' : '' }}">
       <a class="nav-link collapsed"  href="{{ route('user.product-store') }}" >
           <i class="fas fa-fw fa-shopping-bag"></i>
           <span>Inventory</span>
       </a>
   </li>
   <li class="nav-item {{ in_array($curr_url, ['user.material-store']) ? 'active' : '' }}">
       <a class="nav-link collapsed"  href="{{ route('user.material-store') }}" >
           <i class="fas fa-fw fa-product-hunt"></i>
           <span>Material Store</span>
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
