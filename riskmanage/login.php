<?php 
    session_start();
    require_once('../php/connect.php');
    if (isset($_POST['submit'])) {

      // $_SESSION['authen_id'] = 1; 
      // header('Location: dashboard');
    
      $username = $conn->real_escape_string($_POST['username']);
      $password = $conn->real_escape_string($_POST['password']);

        $sql ="SELECT * FROM `admin` WHERE `username` = '".$username."' ";
        $result =$conn->query($sql);
        $row = $result->fetch_assoc();

      //print_r($row);

      if ( !empty ($row['password'] )){
        $_SESSION['authen_id'] = $row['id']; 
        $_SESSION['first_name'] = $row['first_name']; 
        $_SESSION['last_name'] = $row['last_name']; 
        $_SESSION['photo'] = $row['photo']; 
        $_SESSION['status'] = $row['status']; 

        header('Location: dashboard');
      
          
       } else {
           echo  '<script> alert ( "ชื่อผู้ใช้ไม่ถูต้อง") </script>' ;
      }
    }


?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login</title>
  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="180x180" href="../dist/img/favicons/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../dist/img/favicons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../dist/img/favicons/favicon-16x16.png">
  <link rel="manifest" href="../dist/img/favicons/site.webmanifest">
  <link rel="mask-icon" href="../dist/img/favicons/safari-pinned-tab.svg" color="#5bbad5">
  <link rel="shortcut icon" href="../dist/img/favicons/favicon.ico">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="msapplication-config" content="../dist/img/favicons/browserconfig.xml">
  <meta name="theme-color" content="#ffffff">
  
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">
   <!-- การลิ้ง sweetalert2 เเบบ cdn  -->
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>เข้าสู่ระบบ</b>
     <div class="image">
          <img src="../dist/images/16180046467618.jpg" class="img-circle elevation-3" width="200px" hight ="200px" alt="User Image">
        </div>
    </a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">ระบบบริหารความเสี่ยงโรงพยาบาลสตึก</p>

      <form action="" method="post">

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <input type="text" name ="username"class="form-control" placeholder="username" aria-label="username" aria-describedby="basic-addon1"  required >
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fas fa-lock"></i></span>
            </div>
            <input type="password" name= "password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1" required >
        </div>

        <div class="row">
          <!-- /.col -->
          <div class="col-12">
            <button type="submit" name="submit" class="btn btn-info btn-block btn-flat">เข้าสู่ระบบ</button>
          </div>
          <!-- /.col -->
        </div>
        
      </form>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   
   
</body>
</html>
