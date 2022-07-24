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
                    <h1 class="h4 text-gray-900 mb-4">Login Administration</h1>
                  </div>
                  <form class="user" action="javascript:void(0);" method="POST">
                    <div class="form-group">
                      <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter Email Address" required autofocus>
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control" id="password" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary btn-block">Enter</button>
                    </div>
                    <hr>
                  </form>
                  <div class="text-center">
                    <a class="font-weight-bold small" href="#">Create an Account!</a>
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
<?php include "../../templates/footer.template.php" ?>
</body>

</html>