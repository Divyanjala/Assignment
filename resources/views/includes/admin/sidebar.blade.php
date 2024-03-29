 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

     <!-- Sidebar - Brand -->
     <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
         <div class="sidebar-brand-icon ">
             <i class="fas fa-user"></i>
         </div>
         <div class="sidebar-brand-text mx-3">Admin </div>
     </a>

     <!-- Divider -->
     <hr class="sidebar-divider my-0">

     <!-- Nav Item - Dashboard -->
     <li class="nav-item {{ in_array($curr_url, ['admin.dashboard']) ? 'active' : '' }}">
         <a class="nav-link collapsed" href="{{ route('admin.dashboard') }}">
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

     <li class="nav-item {{ in_array($curr_url, ['admin.user']) ? 'active' : '' }}">
         <a class="nav-link collapsed" href="{{ route('admin.user') }}">
             <i class="fas fa-fw fa-user-plus"></i>
             <span>Users</span>
         </a>
     </li>

     <li class="nav-item {{ in_array($curr_url, ['admin.plant']) ? 'active' : '' }}">
         <a class="nav-link collapsed" href="{{ route('admin.plant') }}">
             <i class="fas fa-fw fa-tree"></i>
             <span>Plants</span>
         </a>
     </li>
     <li class="nav-item {{ in_array($curr_url, ['admin.fish']) ? 'active' : '' }}">
        <a class="nav-link collapsed" href="{{ route('admin.fish') }}">
            <i class="fas fa-fw fa-fish"></i>
            <span>Fish</span>
        </a>
    </li>


     <div class="sidebar-heading">
         Reports
        </div>
        <li class="nav-item {{ in_array($curr_url, ['admin.income-report']) ? 'active' : '' }}">
            <a class="nav-link collapsed" href="{{ route('admin.income-report') }}">
                <i class="fas fa-fw fa-folder-open"></i>
                <span>Income Report</span>
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
