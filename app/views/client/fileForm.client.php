<?php include "../../templates/header.template.php" ?>

<body id="page-top">
  <div id="wrapper">
    <?php include '../../templates/navC.template.php'; ?>
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
              <li class="breadcrumb-item"><a href="./">File</a></li>
            </ol>
          </div>

          <?php include '../../templates/card.template.php'; ?>
          <!--Row-->
          <!-- Aqui va el contenido -->
          <div class="card mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
              <h6 class="m-0 font-weight-bold text-primary">Form File</h6>
            </div>
            <div class="card-body">
              <form action="javascript:void(0);" method="POST" onsubmit="app.registerFile()">
                <input type="text" id="id" value="<?php echo $_SESSION['user_id'] ?>">
                <div class="form-group">
                  <label for="phone">File</label>
                  <input type="file" class="form-control" id="file" placeholder="File" autofocus required>
                </div>
                <div class="form-group">
                  <label for="photo">Name</label>
                  <input type="text" class="form-control" id="name" placeholder="Name or description" required>
                </div>
                <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-upload"></i> Upload</button>
              </form>
            </div>
          </div>


          <?php include '../../templates/banner.template.php'; ?>
          <?php include '../../templates/modal.template.php'; ?>

        </div>
        <!---Container Fluid-->
      </div>
      <!-- Footer -->
      <?php include '../../templates/copyright.template.php'; ?>
      <!-- Footer -->
    </div>
  </div>

  <?php include "../../templates/footer.template.php" ?>
  <script src="../../src/client/fileUpload.client.js"></script>
</body>

</html>