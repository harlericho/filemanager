<?php
require_once "../../config/session.config.php";
include_once "../../templates/header.template.php";
?>

<body id="page-top">
  <div id="wrapper">
    <?php include_once '../../templates/navC.template.php'; ?>
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        <?php include_once '../../templates/topbar.template.php'; ?>
        <!-- Topbar -->

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Web File Manager</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Inicio</a></li>
            </ol>
          </div>

          <?php include_once '../../templates/card.template.php'; ?>
          <!--Row-->
          <!-- Aqui va el contenido -->


          <?php include_once '../../templates/banner.template.php'; ?>
          <?php include_once '../../templates/presentation.template.php'; ?>
          <?php include_once '../../templates/modal.template.php'; ?>

        </div>
        <!---Container Fluid-->
      </div>
      <!-- Footer -->
      <?php include_once '../../templates/copyright.template.php'; ?>
      <!-- Footer -->
    </div>
  </div>

  <?php include_once "../../templates/footer.template.php" ?>
  <script src="../../src/presentation.js"></script>
</body>

</html>