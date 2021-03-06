<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Cafee - Sign</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">SIGN UP</div>
      <div class="card-body">
        <form method="post" action="insertAdmin.php">
          <div class="form-group">
            <label for="exampleInputEmail1">Name</label><br>
            <input class="form-control" type="text" name="nama" placeholder="Name">
          </div>
		  <div class="form-group">
            <label for="exampleInputEmail1">Email</label><br>
            <input class="form-control" type="email" name="email" placeholder="Email">
          </div>
		  <div class="form-group">
            <label for="exampleInputEmail1">Username</label><br>
            <input class="form-control" type="text" name="username" placeholder="Username">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label><br>
            <input class="form-control" type="password" name="password" placeholder="Password">
          </div>
          
          <a><input class="login btn btn-success" type="submit" name="kirim" value ="Sign"></a>
        </form>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
