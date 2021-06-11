<?php 
$link = $_SERVER['REQUEST_URI'];
$link_array = explode('/',$link);
$name = $link_array[count($link_array) - 2];
?>
<nav class="main-header navbar navbar-expand border-bottom navbar-dark bg-primary">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
          <i class="fa fa-th-large"></i>
        </a>
      </li>
    </ul>
</nav>
    
    <?php
    include_once('php/connect.php');
    $sqllogo1 = "SELECT * FROM `hospital` ";
    $resultlogo1 = $conn->query( $sqllogo1);
    $rowlogo1 =  $resultlogo1->fetch_assoc();
    
    
    ?>
  <!-- /.navbar -->
<aside class="main-sidebar sidebar-dark-warning elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
        <div class="image">
          <img src="dist/images/<?php echo  $rowlogo1['logo']; ?>" class="img-circle elevation-2"  width="50px" hight ="50px" alt="User Image">
         <span class="brand-text font-weight-light text-left" style ="color:Yellow"><b>RiskManagement</b></span>
         </div>
    </a>
       
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/avatar04.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">guest</a>
        </div>
      </div>

      <!-- Sidebar Menu -->

      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget ="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href=" http://www.thai-sciencemuseum.com/risk/" target ="_blank" class="nav-link ">
              <i class="fas fa-users-cog nav-icon"></i>
              <p>ความรู้เกี่ยวกับความเสี่ยง</p>
            </a>
          </li>
          <li class="nav-item has-treeview ">
            <a href="download" class="nav-link  <?php echo $name == 'download.php' ? 'active': '' ?> ">
              <i class ="nav-icon fas fa-download"></i>
              <p>
                แบบฟอร์มดาวโหลด
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link ">
                  <i class="nav-icon fas fa-book"></i>
                  <p>แบบฟอร์มความเสี่ยง</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link ">
                  <i class="nav-icon fas fa-book"></i>
                  <p>แบบฟอร์ม RCA</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="about.php" class="nav-link <?php echo $name == 'about' ? 'active': '' ?>">
              <i class="fas fa-chalkboard-teacher nav-icon"></i>
              <p>ติดต่อเรา</p>
            </a>
          </li>
          <li class="nav-header">เข้าสู่ระบบ</li>
          <li class="nav-item">
          <a href="riskmanage/login.php" class="nav-link">
              <i class="fas fa-key"></i>
              <p>Login</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>