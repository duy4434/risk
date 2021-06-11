<?php include_once('../authen.php'); 
  $id = $_GET['dept_id'];
  $sql = "SELECT `name`,`dept_name` FROM `department` WHERE `dept_id` = '".$id."' ";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
  $id1 = $_GET['main_dept'];
  $sql1 = "SELECT dept_name FROM department_group  WHERE `main_dept` = '".$id1."' ";
  $result1 = $conn->query($sql1);

  $row1 = $result1->fetch_assoc();
 
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>จัดารหน่วยงาน</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="180x180" href="../../dist/img/favicons/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../../dist/img/favicons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../../dist/img/favicons/favicon-16x16.png">
  <link rel="manifest" href="../../dist/img/favicons/site.webmanifest">
  <link rel="mask-icon" href="../../dist/img/favicons/safari-pinned-tab.svg" color="#5bbad5">
  <link rel="shortcut icon" href="../../dist/img/favicons/favicon.ico">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="msapplication-config" content="../../dist/img/favicons/browserconfig.xml">
  <meta name="theme-color" content="#ffffff">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
 <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables/dataTables.bootstrap4.min.css">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar & Main Sidebar Container -->
  <?php include_once('../includes/sidebar.php') ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div>
          <div class="col-sm-6">
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="card card-primary">
        <div class="card-header">
        <h3 class="card-title">จัดารหน่วยงาน</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="update.php" method="post">
          <div class="card-body">
             <div class ="row">
                <div class = "col-12">
                  <div class="form-group">
                   <label for="name">หน่วยงาน</label>
                     <input type="text" class="form-control" name= "name" id="name" placeholder="หน่วยงาน" value=" <?php echo $row ['name'];?>" required>
                  </div>
                </div>
                <div class = "col-12">
                  <div class="form-group">
                   <label >เลือกฝ่ายงาน</label>
                   <select class="form-control" id="dept_name" name="dept_name" value=" <?php echo $row1 ['dept_name'];?>" required>>
                    <option value=" " disableed select Permission>เลือกฝ่ายงาน</option>
                      <option value="<?php echo $row1[ "dept_name"]; ?>"> <?php echo $row1["dept_name"]; ?></option>
                     

                  </select>
                  </div>
              </div>  
          </div>
             <input type="hidden" name="dept_id" value ="<?php echo $id;?>">
          <div class="card-footer">
              <button type="submit" name ="submit" class="btn btn-warning">แก้ไข</button>
              <a href="index.php" class="btn btn-danger">cancel</button></a>
          </div>
        </form>
      </div>    
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- footer -->
  <?php include_once('../includes/footer.php') ?>
  
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- SlimScroll -->
<script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- DataTables -->
<script src="https://adminlte.io/themes/AdminLTE/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables/dataTables.bootstrap4.min.js"></script>

<script>
  $(function () {
    $('#dataTable').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true
    });
  });
</script>

</body>
</html>
