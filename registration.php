<?php
 session_start();
 if(!empty($_SESSION['userLogin'])){
     header("Location:registration.php");
     die();
 }
include 'registration_core.php';
?>


<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>BDTutor | Registration </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition register-page">
  <div class="register-box">
    <div class="register-logo">
      <a href="index.php"><b>BD</b>Tutors</a>
    </div>
    <div class="card">
      <div class="card-body register-card-body">
        <p class="login-box-msg">Register a new membership</p>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
          <div class="input-group mb-3">
            <input type="text" class="form-control" name="name" placeholder="Full name">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
            <span><?php echo $err_pass; ?></span>
          </div>
          <div class="input-group mb-3">
            <input type="email" class="form-control" name="email" placeholder="Email">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
            <span><?php echo $err_pass; ?></span>
          </div>
          <div class="input-group mb-3">
            <label>Date of Birth:</label>

          </div>
          <div class="input-group mb-3">

            <input type="date" class="form-control" name="dob">
            <span><?php echo $err_name; ?></span>
          </div>
          <div class="input-group mb-3">
            <input type="number" class="form-control" name="phone_no" placeholder="Phone Number">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-phone"></span>
              </div>
            </div>
            <span><?php echo $err_phone_no; ?></span>
          </div>
          <div class="input-group mb-3">
            <input type="text" class="form-control" name="address" placeholder="Address">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-map-marked-alt"></span>
              </div>
            </div>
            <span><?php echo $err_address; ?></span>
          </div>
          <div class="form-check form-check-inline">
            <label class="form-check-label" for="inlineRadio1">Gender: </label>
            <span><?php echo $err_gender; ?></span>
          </div>
          <div class="form-check form-check-inline">

            <input class="form-check-input" type="radio" name="gender" value="male">
            <label class="form-check-label" for="inlineRadio1">Male</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" value="female">
            <label class="form-check-label" for="inlineRadio2">Female</label>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" name="password" placeholder="Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
            <span><?php echo $err_pass; ?></span>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" name="confrim_password" placeholder="Retype password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
            <span><?php echo $err_confirm_pass; ?></span>
          </div>
          <div class="input-group mb-3">
            <div class="dropdown">
              <select class="form-control" name="user_type">
                <option selected>Choose User Type</option>
                <option value="teacher">Teacher</option>
                <option value="student">Student</option>
              </select>
            </div>
            <span><?php echo $err_user_type; ?></span>
          </div>
          <input type="hidden" name="action" value="registration">
          <div class="row">
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block">Register</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
        <a href="login.php" class="text-center">I already have a membership</a>
      </div>
      <!-- /.form-box -->
    </div><!-- /.card -->
  </div>
  <!-- /.register-box -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
</body>

</html>