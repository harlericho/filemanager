<?php include "../../templates/header.template.php" ?>

<body class="bg-gradient-login">
  <!-- Register Content -->
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
                    <h5 class="h5 text-gray-900 mb-2">Register</h5>
                  </div>
                  <hr>
                  <form action="javascript:void(0);" method="POST" onsubmit="app.register()">
                    <div class="form-group">
                      <label>Names</label>
                      <input type="text" class="form-control" id="names" placeholder="Enter Names" required autofocus>
                    </div>
                    <div class="form-group">
                      <label>Email</label>
                      <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter Email Address" required>
                    </div>
                    <div class="form-group">
                      <label>Password</label>
                      <input type="password" class="form-control" id="password" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                      <label>Repeat Password</label>
                      <input type="password" class="form-control" id="password-confirm" placeholder="Repeat Password" required>
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-dark btn-block">Register</button>
                    </div>
                    <hr>
                  </form>
                  <div class="text-center">
                    <a class="font-weight-bold small text-dark" href="./login.client.php">Already have an account?</a>
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
  <!-- Register Content -->
  <script src="/public/vendor/jquery/jquery.min.js"></script>
  <script src="/public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/public/vendor/jquery-easing/jquery.easing.min.js"></script>
   <!-- JavaScript CLient -->
   <script src="../../src/client/register.client.js"></script>
</body>

</html>