 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">User</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ in_array($curr_url,['police.dashboard'])?'active':'' }}">
        <a class="nav-link" href="{{ route('police.dashboard') }}">
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
<li class="nav-item {{ in_array($curr_url, ['police.ticket.all']) ? 'active' : '' }}">
    <a class="nav-link collapsed" href="#"  >
        <i class="fas fa-fw fa-list"></i>
        <span>User fine List</span>
    </a>
</li>
<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item {{ in_array($curr_url, ['police.ticket.all']) ? 'active' : '' }}">
    <a class="nav-link collapsed" href="#"  >
        <i class="fas fa-fw fa-book-medical"></i>
        <span>Medical</span>
    </a>
</li>
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
