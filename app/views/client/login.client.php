<?php include "../../templates/header.template.php" ?>

<body class="bg-gradient-login">
  <!-- Login Content -->
  <div class="container-login">
    <div class="row justify-content-center">
      <div class="col-xl-4 col-lg-4 col-md-4">
        <div class="card shadow-sm my-5">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-12">
                <div class="login-form">
                  <div class="text-center">
                    <h3><strong>Web File Manager</strong></h3>
                    <h5 class="h5 text-gray-900 mb-4">Login</h5>
                  </div>
                  <form action="javascript:void(0);" method="POST" onsubmit="app.login()">
                    <div class="form-group">
                      <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter Email Address" required autofocus>
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control" id="password" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-info btn-block">Enter</button>
                    </div>
                    <hr>
                  </form>
                  <div class="text-center">
                    <a class="font-weight-bold small text-info" href="./register.client.php">Create an Account!</a>
                  </div>
                  <div class="text-center">
                    Copyright: @harlericho 2022
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Login Content -->
  <script src="/public/vendor/jquery/jquery.min.js"></script>
  <script src="/public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/public/vendor/jquery-easing/jquery.easing.min.js"></script>
  <!-- JavaScript CLient -->
  <script src="../../src/client/login.client.js"></script>
</body>

</html>