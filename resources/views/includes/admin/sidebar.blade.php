 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

     <!-- Sidebar - Brand -->
     <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
         <div class="sidebar-brand-icon rotate-n-15">
             <i class="fas fa-laugh-wink"></i>
         </div>
         <div class="sidebar-brand-text mx-3">Support Admin </div>
     </a>

     <!-- Divider -->
     <hr class="sidebar-divider my-0">

     <!-- Nav Item - Dashboard -->
     <li class="nav-item {{ in_array($curr_url, ['admin.dashboard']) ? 'active' : '' }}">
        <a class="nav-link collapsed"  href="{{ route('admin.dashboard') }}" >
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

     <!-- Nav Item - Pages Collapse Menu -->
     <li class="nav-item {{ in_array($curr_url, ['admin.employee']) ? 'active' : '' }}">
         <a class="nav-link collapsed"  href="{{ route('admin.employee') }}" >
             <i class="fas fa-fw fa-user-plus"></i>
             <span>Employees</span>
         </a>
     </li>
     <li class="nav-item {{ in_array($curr_url, ['admin.user']) ? 'active' : '' }}">
        <a class="nav-link collapsed"  href="{{ route('admin.user') }}" >
            <i class="fas fa-fw fa-user-plus"></i>
            <span>Users</span>
        </a>
    </li>
     <li class="nav-item {{ in_array($curr_url, ['admin.customer']) ? 'active' : '' }}">
        <a class="nav-link collapsed"  href="{{ route('admin.customer') }}" >
            <i class="fas fa-fw fa-users"></i>
            <span>Customers</span>
        </a>
    </li>
    <li class="nav-item {{ in_array($curr_url, ['admin.product']) ? 'active' : '' }}">
        <a class="nav-link collapsed"  href="{{ route('admin.product') }}" >
            <i class="fas fa-fw fa-truck"></i>
            <span>Products</span>
        </a>
    </li>
    <li class="nav-item {{ in_array($curr_url, ['admin.order']) ? 'active' : '' }}">
        <a class="nav-link collapsed"  href="{{ route('admin.order') }}" >
            <i class="fas fa-fw fa-calendar"></i>
            <span>Orders</span>
        </a>
    </li>
    <li class="nav-item {{ in_array($curr_url, ['admin.task']) ? 'active' : '' }}">
        <a class="nav-link collapsed"  href="{{ route('admin.task') }}" >
            <i class="fas fa-fw fa-address-card"></i>
            <span>Task</span>
        </a>
    </li>
     <!-- Heading -->
     <div class="sidebar-heading">
        Store
    </div>
    <li class="nav-item {{ in_array($curr_url, ['admin.product-store']) ? 'active' : '' }}">
        <a class="nav-link collapsed"  href="{{ route('admin.product-store') }}" >
            <i class="fas fa-fw fa-shopping-bag"></i>
            <span>Products Store</span>
        </a>
    </li>
    <li class="nav-item {{ in_array($curr_url, ['admin.material-store']) ? 'active' : '' }}">
        <a class="nav-link collapsed"  href="{{ route('admin.material-store') }}" >
            <i class="fas fa-fw fa-product-hunt"></i>
            <span>Material Store</span>
        </a>
    </li>
     <!-- Nav Item - Pages Collapse Menu -->
     {{-- <li class="nav-item {{ in_array($curr_url, ['admin.fine.all']) ? 'active' : '' }}">
         <a class="nav-link collapsed" href="{{ route('admin.fine.all') }}">
             <i class="fas fa-fw fa-file-lines"></i>
             <span>Fine</span>
         </a>

     </li> --}}
     <div class="sidebar-heading">
        Settings
    </div>
    <li class="nav-item {{ in_array($curr_url, ['admin.inventory-item']) ? 'active' : '' }}">
        <a class="nav-link collapsed"  href="{{ route('admin.inventory-item') }}" >
            <i class="fas fa-fw fa-folder-open"></i>
            <span>Material</span>
        </a>
    </li>
    <li class="nav-item {{ in_array($curr_url, ['admin.department']) ? 'active' : '' }}">
        <a class="nav-link collapsed"  href="{{ route('admin.department') }}" >
            <i class="fas fa-fw fa-home"></i>
            <span>Department</span>
        </a>
    </li>
    <li class="nav-item {{ in_array($curr_url, ['admin.units']) ? 'active' : '' }}">
        <a class="nav-link collapsed"  href="{{ route('admin.units') }}" >
            <i class="fas fa-fw fa-database"></i>
            <span>Workshop/Unit</span>
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
