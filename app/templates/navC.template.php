<?php
require "../../models/client/client.model.php";
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}
if (!isset($_SESSION['user_email'])) {
  header("Location: ../../../");
  exit();
}
$client = new Client();
$result = $client->getDataUser($_SESSION['user_email']);
// var_dump($result[0]["user_rol_id"]);
if ($result[0]['user_rol_id'] == 1 || $result[0]['user_rol_id'] == NULL) {
  header("Location: ../../views/client/login.client.php");
}
?>
<!-- Sidebar -->
<ul class="navbar-nav sidebar sidebar-light  accordion" id="accordionSidebar">
  <a class="sidebar-brand d-flex align-items-center bg-dark justify-content-center" href="../../views/client/index.client.php">
    <div class="sidebar-brand-icon">
      <img src="../../../public/img/logo/logo.png">
    </div>
    <div class="sidebar-brand-text mx-3">File Manager</div>
  </a>
  <hr class="sidebar-divider my-0">
  <li class="nav-item active">
    <a class="nav-link" href="../../views/client/index.client.php">
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
        <a class="collapse-item" href="../../views/client/fileForm.client.php">Add</a>
        <a class="collapse-item" href="../../views/client/fileView.client.php">View</a>
      </div>
    </div>
  </li>
  <hr class="sidebar-divider">
  <li class="nav-item">
    <a class="nav-link" href="../../views/client/profile.client.php">
      <i class="fas fa-fw fa-cog"></i>
      <span>Profiles</span>
    </a>
  </li>
  <hr class="sidebar-divider">
  <div class="version" id="version-ruangadmin"></div>
</ul>