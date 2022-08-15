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
              <li class="breadcrumb-item"><a href="./">File</a></li>
            </ol>
          </div>

          <?php include '../../templates/card.template.php'; ?>
          <!--Row-->
          <!-- Aqui va el contenido -->
          <!-- Row -->
          <div class="row">
            <!-- Datatables -->
            <!-- DataTable with Hover -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Registration of files active</h6>
                </div>
                <!-- Modal basic -->
                <!-- <div class="card mb-4">
                  <div class="card-body">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" id="#myBtn">
                      Add file
                    </button>
                  </div>
                </div> -->
                <div class="table-responsive p-3" id="tbody">
                </div>
                <!-- Modal -->
                <!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal file</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <p>You Content</p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                      </div>
                    </div>
                  </div>
                </div> -->
              </div>
            </div>
          </div>
          <!--Row-->


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
  <!-- JavaScript CLient -->
  <script src="../../src/admin/fileActive.admin.js"></script>
</body>

</html>