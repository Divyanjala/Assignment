 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Support police </div>
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
{{-- <li class="nav-item {{ in_array($curr_url,['police.ticket.all'])?'active':'' }}">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
        aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-cog"></i>
        <span>Customer Tickets</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item {{ in_array($curr_url,['police.ticket.all'])?'active':'' }}"
            href="{{ route('police.ticket.all') }} ">Tickets</a>
        </div>
    </div>
</li> --}}
<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item {{ in_array($curr_url, ['police.ticket.all']) ? 'active' : '' }}">
    <a class="nav-link collapsed" href="#"  >
        <i class="fas fa-fw fa-list"></i>
        <span>People fine List</span>
    </a>
</li>
<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item {{ in_array($curr_url, ['police.ticket.all']) ? 'active' : '' }}">
    <a class="nav-link collapsed" href="#">
        <i class="fas fa-fw fa-file-lines"></i>
        <span>New Fine</span>
    </a>

</li>
<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item {{ in_array($curr_url, ['police.ticket.all']) ? 'active' : '' }}">
    <a class="nav-link collapsed" href="#">
        <i class="fas fa-fw fa-user"></i>
        <span>Users</span>
    </a>

</li>
<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item {{ in_array($curr_url, ['police.ticket.all']) ? 'active' : '' }}">
    <a class="nav-link collapsed" href="#">
        <i class="fas fa-fw fa-user-group"></i>
        <span>Policemen</span>
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
