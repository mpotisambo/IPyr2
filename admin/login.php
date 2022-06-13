<?php require_once('../config.php') ?>
<!DOCTYPE html>
<html lang="en" class="" style="height: auto;">
 <?php require_once('inc/header.php') ?>
 <style>
   body{
     background-image: url('<?php echo validate_image($_settings->info('cover')) ?>');
     background-size:cover;
     background-repeat:no-repeat;
   }
 </style>
<body class="hold-transition login-page ">
  <script>
    start_loader()
  </script>
  <h2 class="text-center pb-4 mb-4 text-light"><?php echo $_settings->info('name') ?> - Admin Login</h2>
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-primary">
    <div class="card-body">
      <form id="form" action="" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="username"  id="username" placeholder="Username" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row justify-content-between">
          <div class="col">
            <a href="<?php echo base_url ?>">Go to Portal</a>
          </div>
          <!-- /.col -->
          <div class="col text-right">
            <button type="submit" class="btn btn-primary btn-flat btn-sm" >Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/adminlte.min.js"></script>

    <script type="text/javascript">
      document.getElementById("form").addEventListener("submit", auth);
      function auth(event) {
        event.preventDefault();

            var x = document.getElementById("username").value;
            var y = document.getElementById("password").value;
          
            if (username.length === 0 || password.length === 0) {
              alert("Username and password must be filled!");
              return;
            } 

            else if(x == "admin" && y == "123")
            {
                window.location.href = "admin.html";
                return;
            }

            else if( x == "staff" && y == "234")
            {
                window.location.href = "nyumbani.html";
                return;
            }

            else
            {
              alert("Username and password incorrect");
            }
        }
    </script>

    <script>
        $(document).ready(function() {
            end_loader();
        })
    </script>
</body>

</html>