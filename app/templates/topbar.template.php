<?php

// require "../../models/client/client.model.php";
session_start();
if (!isset($_SESSION['user_email'])) {
  header("Location: ../../../");
  exit();
}
$client = new Client();
$result = $client->getDataUser($_SESSION['user_email']);
// var_dump($result);
foreach ($result as $row) {
  $user_id = $row["user_id"];
  $user_names = $row["user_names"];
  $user_photo = $row["user_photo"];
  $user_email = $row["user_email"];
  $user_rol = $row["rol_description"];
  $user_rol_id = $row["user_rol_id"];
}

?>
<nav class="navbar navbar-expand navbar-light bg-dark topbar mb-4 static-top">
  <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
    <i class="fa fa-bars"></i>
  </button>
  <ul class="navbar-nav ml-auto">
    <li class="nav-item dropdown no-arrow">
      <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <b><?php echo $user_rol ?></b>
      </a>
    </li>
    <div class="topbar-divider d-none d-sm-block"></div>
    <li class="nav-item dropdown no-arrow">
      <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <img class="img-profile rounded-circle" src="../../../public/img/boy.png" style="max-width: 60px">
        <span class="ml-2 d-none d-lg-inline text-white small">
          <?php echo $user_names ?>
        </span>
      </a>
      <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
        <a class="dropdown-item" href="#">
          <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
          <?php echo $user_email ?>
        </a>
        <a class="dropdown-item" href="../../views/client/profile.client.php">
          <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
          Profile
        </a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="javascript:void(0);" data-toggle="modal" data-target="#logoutModal">
          <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
          Logout
        </a>
      </div>
    </li>
  </ul>
</nav>