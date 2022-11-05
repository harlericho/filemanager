<?php
require "../../models/client/client.model.php";
session_start();
if (!isset($_SESSION['user_email'])) {
  header("Location: ../../../");
  exit();
}
$client = new Client();
$result = $client->getDataUser($_SESSION['user_email']);
// var_dump($result[0]["user_rol_id"]);
if ($result[0]['user_rol_id'] == 2 || $result[0]['user_rol_id'] == NULL) {
  header("Location: ../../views/admin/login.admin.php");
}
?>
<!-- Sidebar Admin-->
<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../../views/admin/index.admin.php">
    <div class="sidebar-brand-icon">
      <img src="../../../public/img/logo/logo.png">
    </div>
    <div class="sidebar-brand-text mx-3">File Manager</div>
  </a>
  <hr class="sidebar-divider my-0">
  <li class="nav-item active">
    <a class="nav-link" href="../../views/admin/index.admin.php">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Inicio</span></a>
  </li>
  <hr class="sidebar-divider">
  <div class="sidebar-heading">
    Modules
  </div>
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseForm" aria-expanded="true" aria-controls="collapseForm">
      <i class="fab fa-fw fa-wpforms"></i>
      <span>Files</span>
    </a>
    <div id="collapseForm" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Files</h6>
        <a class="collapse-item" href="../../views/admin/fileActive.admin.php ">Active</a>
        <a class="collapse-item" href="../../views/admin/fileInactive.admin.php">Inactive</a>
      </div>
    </div>
  </li>
  <hr class="sidebar-divider">
  <div class="sidebar-heading">
    Administration
  </div>
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePage" aria-expanded="true" aria-controls="collapsePage">
      <i class="fas fa-fw fa-user"></i>
      <span>Clients</span>
    </a>
    <div id="collapsePage" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">CLients</h6>
        <a class="collapse-item" href="../../views/admin/clientActive.admin.php">Active</a>
        <a class="collapse-item" href="../../views/admin/clientInactive.admin.php">Inactive</a>
      </div>
    </div>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="../../views/admin/rol.admin.php">
      <i class="fas fa-fw fa-user-tag"></i>
      <span>Rol</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="../../views/admin/profile.admin.php">
      <i class="fas fa-fw fa-cog"></i>
      <span>Profiles</span>
    </a>
  </li>
  <hr class="sidebar-divider">
  <div class="version" id="version-ruangadmin"></div>
</ul>