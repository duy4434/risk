<?php 
  $uri =$_SERVER['REQUEST_URI'];
  $array = explode('/', $uri);
  $key =  array_search("riskmanage",$array);
  $name = $array[$key + 1];
?>
<nav class="main-header navbar navbar-expand border-bottom navbar-dark bg-info">
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
  <!-- /.navbar -->
<aside class="main-sidebar sidebar-dark-warning elevation-4">
    <!-- Brand Logo -->
    <?php
          $sqllogo = "SELECT *  FROM `hospital` ";
          $resultlogo = $conn->query( $sqllogo);
          $rowlogo =  $resultlogo->fetch_assoc();
    ?>
    <a href="#" class="brand-link">
        <div class="image">
          <img src="../../dist/images/<?php echo  $rowlogo ['logo']; ?>" class="img-circle elevation-2" width="50px" hight ="50px" alt="User Image">
         <span class="brand-text font-weight-light text-left" style ="color:Yellow"><b>RiskManagement</b></span>
         </div>
    </a>
    <!-- Sidebar -->
    
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        
          <img src = "../../dist/img/<?php echo $_SESSION['photo']?>" class ="img-circle elevation-2" alt= "User Image">
        </div>
       
        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION['first_name'].' '.$_SESSION['last_name'] ?></a>
        </div>
       
      </div> 
     
    
  
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="../dashboard" class="nav-link <?php echo $name == 'dashboard' ? 'active': '' ?>">
            <i class="fas fa-tachometer-alt nav-icon"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../news_risk" class="nav-link <?php echo $name == 'news_risk' ? 'active': '' ?>">
              <i class="fas fa-edit nav-icon"></i>
              <p>เขียนความเสี่ยง</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../contacts" class="nav-link <?php echo $name == 'contacts' ? 'active': '' ?>">
              <i class="fas fa-chalkboard-teacher nav-icon"></i>
              <p>Contacts</p>
            </a>
          </li>
          
          <?php if($_SESSION['status'] == 'admin') {?>
          <li class="nav-item has-treeview ">
            <a href="#" class="nav-link  "> 
            <i class="fas fa-users-cog nav-icon"></i>
              <p>
                ตั้งค่าระบบ
                <i class="right fas fa-angle-left"> </i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                 <a href="../hospital" class="nav-link <?php echo $name == 'hospital' ? 'active': '' ?>">
                    <i class="fas fa-cog"></i>
                  <p>ตั้งค่าระดับองค์กร</p>
                </a>
              </li>
              <li class="nav-item">
                 <a href="../admin" class="nav-link <?php echo $name == 'admin' ? 'active': '' ?>">
                    <i class="fas fa-cog"></i>
                  <p>ตั้งค่าผู้ใช้งาน</p>
                </a>
              </li>
              <li class="nav-item">
                 <a href="../department_group" class="nav-link <?php echo $name == 'department_group' ? 'active': '' ?>">
                  <i class="fas fa-cog"></i>
                  <p>ตั้งค่าฝ่ายงาน</p>
                </a>
              </li>
              <li class="nav-item">
                 <a href="../department" class="nav-link <?php echo $name == 'department' ? 'active': '' ?>">
                  <i class="fas fa-cog"></i>
                  <p>ตั้งค่าหน่วยงาน</p>
                </a>
              </li>
              <li class="nav-item">
                 <a href="../cate_risk" class="nav-link <?php echo $name == 'cate_risk' ? 'active': '' ?>">
                  <i class="fas fa-cog"></i>
                  <p>ตั้งค่าหมวดความเสี่ยง</p>
                </a>
              </li>
              <li class="nav-item">
                 <a href="../subcate_risk" class="nav-link <?php echo $name == 'subcate_risk' ? 'active': '' ?>">
                  <i class="fas fa-cog"></i>
                  <p>ตั้งค่าความเสี่ยง</p>
                </a>
              </li>
              <li class="nav-item">
                 <a href="../levelrisk" class="nav-link <?php echo $name == 'levelrisk' ? 'active': '' ?>">
                  <i class="fas fa-cog"></i>
                  <p>ระดับความรุนเเรง</p>
                </a>
              </li>
            </ul>
           </li>
           <?php }?>
          <li class="nav-header">Account Settings</li>
          <li class="nav-item">
            <a href="../../index.php" class="nav-link">
             <i class="fas fa-sign-out-alt"></i>
              <p>Logout</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>