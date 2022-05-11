<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/dashboard">
    <img src="img/logo-pd.png" style="max-height: 40px; max-width: 40px;">
    <div class="sidebar-brand-text mx-3">Peduli Diri</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Nav Item - Dashboard -->
  <div class="sidebar-heading">
    Dashboard
  </div>
  <li class="nav-item active">
    <a class="nav-link" href="http://127.0.0.1:8000/dashboard">
      <i class="fas fa-th-large"></i>
      <span>Dashboard</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
    Menu
  </div>

  <!-- Nav Item - Pages Collapse Menu -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
      aria-expanded="true" aria-controls="collapseTwo">
      <i class="fas fa-fw fa-table"></i>
      <span>Catatan Anda</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
          {{-- <h6 class="collapse-header">Custom Components:</h6> --}}
          <a class="collapse-item" href="http://127.0.0.1:8000/form-perjalanan">Form Perjalanan</a>
          <a class="collapse-item" href="http://127.0.0.1:8000/data-perjalanan">Data Perjalanan</a>
      </div>
    </div>
  </li>

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>
<!-- End of Sidebar -->