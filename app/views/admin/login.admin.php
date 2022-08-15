<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="../../../public/img/logo/logo2.ico" rel="icon">
  <title>Web - FileManager</title>
  <link href="../../../public/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="../../../public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="../../../public/css/ruang-admin.min.css" rel="stylesheet">
  <link href="../../../public/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

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
                  <form class="user" action="javascript:void(0);" method="POST" onsubmit="app.login()">
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
                  <!-- <div class="text-center">
                    <a class="font-weight-bold small" href="#">Create an Account!</a>
                  </div> -->
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
  <script src="../../../public/vendor/jquery/jquery.min.js"></script>
  <script src="../../../public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../../../public/vendor/jquery-easing/jquery.easing.min.js"></script>
  <!-- JavaScript CLient -->
  <script src="../../src/admin/login.admin.js"></script>
</body>

</html>