<?php 
      include_once('../authen.php');
      $sql = "SELECT * FROM hospital "; 
      $result = $conn->query($sql);
    

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>hospital</title>
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

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title d-inline-block">ตั้งค่าองค์กร</h3>
          <a href="form-create.php" class="btn btn-primary float-right ">ตั้งค่าองค์กร </a href="">
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="dataTable" class="table table-bordered table-striped table-responsive-lg">
            <thead>
            <tr>
              <th>#</th>
              <th>ชื่อโรงพยาบาล</th>
              <th>ชื่อโรงพยาบาล(ENGLISH) </th>
              <th>ผู้อำนวยการ </th>
              <th>website </th>
              <th>LOGO </th>
              <th>แก้ไข/ลบข้อมูล</th>
             
          
             
            </tr>
            </thead>
            <tbody>
            <?php 
                $num = 0;
                while ($row =$result->fetch_assoc()) {
                  $num ++; ?>
              <tr>
                <td><?php echo $num; ?></td>
                <td><?php echo $row['hospital']; ?></td>
                <td><?php echo $row['eng_name']; ?></td>
                <td><span class="badge badge-success"><?php echo $row['manager']; ?></span></td>
                <td><?php echo $row['url']; ?></td>
                <td><img src="../../dist/images/<?php echo $row['logo']; ?>" width="50px" hight = "50px" alt=""></td>
                <td>
                  <a href="form-edit.php?id_hos=<?php echo $row['id_hos'];?>" class="btn btn-sm btn-warning text-white">
                    <i class="fas fa-edit"></i> แก้ไข
                  </a> 
                     <a href="#" onclick="deleteItem(<?php echo $row['id_hos']; ?>);" class="btn btn-sm btn-danger">
                    <i class="fas fa-trash-alt"></i> ลบ
                  </a>
                  </td>
              </tr>
            <?php } ?>
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

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

  function deleteItem (id) { 
    if( confirm('คุณจะลบข้อมูลจริงหรือไม่') == true){
      window.location=`delete.php?id_hos=${id}`;
      // window.location='delete.php?id='+id;
    }
  };

</script>

</body>
</html>