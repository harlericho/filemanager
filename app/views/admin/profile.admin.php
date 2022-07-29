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
              <li class="breadcrumb-item"><a href="./">Profile</a></li>
            </ol>
          </div>

          <?php include '../../templates/card.template.php'; ?>
          <!--Row-->
          <!-- Aqui va el contenido -->

          <div class="card mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
              <h6 class="m-0 font-weight-bold text-primary">Form User</h6>
            </div>
            <div class="card-body">
              <form action="javascript:void(0);" method="POST">
                <div class="form-group">
                  <label for="names">Names</label>
                  <input type="text" class="form-control" id="names" placeholder="Names" autofocus required>
                </div>
                <div class="form-group">
                  <label for="phone">Phone</label>
                  <input type="text" class="form-control" id="phone" placeholder="Phone">
                </div>
                <div class="form-group">
                  <label for="image">Image</label>
                  <img src="../../uploads/img/sin-foto.png" alt="user_names" class="img-thumbnail" width="100">
                </div>
                <div class="form-group">
                  <label for="photo">Photo</label>
                  <input type="file" class="form-control" id="photo" placeholder="Photo">
                </div>
                <div class="form-group">
                  <label for="networking">Networking Url</label>
                  <input type="url" class="form-control" id="Networking" placeholder="Networking">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" disabled>
                  <small id="emailHelp" class="form-text text-muted">We'll never share your
                    email with anyone else.</small>
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" id="password" placeholder="Password" disabled>
                </div>
                <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-upload"></i> Update</button>
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
  <script src="../../src/presentation.js"></script>
</body>

</html>