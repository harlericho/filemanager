<?php include "../../templates/header.template.php" ?>

<body id="page-top">
  <div id="wrapper">
    <?php include '../../templates/nav.template.php'; ?>
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        <?php include '../../templates/topbar.template.php'; ?>
        <!-- Topbar -->

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Web File Manager</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Inicio</a></li>
            </ol>
          </div>

          <?php include '../../templates/card.template.php'; ?>
          <!--Row-->
          <!-- Aqui va el contenido -->


          <?php include '../../templates/banner.template.php'; ?>

          <?php include '../../templates/modal.template.php'; ?>

        </div>
        <!---Container Fluid-->
      </div>
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>copyright &copy; - developed by
              <b><a href="https://indrijunanda.gitlab.io/" target="_blank">harlericho</a></b>
            </span>
          </div>
        </div>
      </footer>
      <!-- Footer -->
    </div>
  </div>

  <?php include "../../templates/footer.template.php" ?>
  <script src="../../src/presentation.js"></script>
</body>

</html>