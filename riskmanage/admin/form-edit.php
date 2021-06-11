<?php 
  include_once('../authen.php');
  $id= $_GET['id'];
  $sql = "SELECT * FROM `admin` WHERE `id` = '".$id."' ";
  $sql2 = "SELECT * FROM department";
  $result2 = $conn->query($sql2);  
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>จัดการผู้ใช้งาน</title>
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
            <h1>เเก้ไขผู้ใช้งาน</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="card card-primary">
        <div class="card-header">
        <h3 class="card-title">เเก้ไขผู้ใช้งาน</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="update.php" method="post" enctype ="multipart/form-data">
          <div class="card-body">
             <div class ="row">
                <div class = "col-12">
                  <div class="form-group">
                   <label for="firstName">ชื่อ</label>
                     <input type="text" class="form-control" name= "first_name" id="first_name" placeholder="FirstName"  value = " <?php echo $row['first_name']; ?>" required>
                  </div>
                  <div class="form-group">
                   <label for="lastName">นามสกุล</label>
                     <input type="text" class="form-control" name= "last_name" id="last_name" placeholder="LastName" value = "<?php echo $row['last_name']; ?>" required>
                  </div>
                </div>
             <div class = "col-3">    
                <div class="form-group">
                  <label for="username">ชื่อเข้าใช้งาน</label>
                  <input type="text" class="form-control" name= "username" id="username" placeholder="Username" value = "<?php echo $row['username']; ?>" required>
                </div>
              </div>
              <div class = "col-3">    
               <div class="form-group">
                  <label for="password">รหัสผ่านเข้าใช้งาน</label>
                  <input type="password" class="form-control" name= "password" id="password" placeholder="Password" value = "<?php echo $row['password']; ?>"required>
              </div>
            </div>
            <div class = "col-3">   
                <div class="form-group">
                  <label>เลือกหน่วยงาน</label>
                  <select class="form-control" required name ="name">
                  <option value=" "disableed >เลือกหน่วยงาน</option>
                        
                        <?php
                            while($row =$result2->fetch_assoc()) {
                              ?>
                            <option value="<?php echo $row["name"];?>"><?php echo $row["name"];?></option>
                            <?php }?>
                  </select>
                </div>
            </div>
          <div class = "col-3">  
            <div class="form-group">
              <label>เลือกสถานะ</label>
                <select class="form-control" required name ="status">
                    <option value=" "disableed select Permission>เลือกสถานะ</option>
                    <option value="admin"> Admin</option>
                      <option value="user">user</option>
                  </select>
            </div>
          </div>
          </div>
          <div class="form-group">
              <label>Upload Image</label>
              <div class="custom-file">
                  <input type="file" class="custom-file-input" name="file" id="customFile">
                  <label class="custom-file-label" for="customFile">Choose file</label>
              </div>
              <figure class="figure text-center d-block mt-2">
                  <input type="hidden" name="data_file" value="<?php echo $row['image']; ?>">
                  <img id="imgUpload" src="../../dist/images<?php echo $row['image']; ?>" class="figure-img img-fluid rounded" alt="">
              </figure>
            </div>
            <input type="hidden" name="id" value="<?php echo $id;?>">

          <div class="card-footer">
             <button type="submit" name ="submit" class="btn btn-warning">แก้ไข</button>
              <a href="index.php" class="btn btn-danger">ยกเลิก</button></a>
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
<!-- CK Editor -->
<script src="../../plugins/ckeditor/ckeditor.js"></script>
<!-- Select2 -->
<script src="../../plugins/select2/select2.full.min.js"></script>

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

    $('.custom-file-input').on('change', function(){
        var fileName = $(this).val().split('\\').pop()
        $(this).siblings('.custom-file-label').html(fileName)
        if (this.files[0]) {
            var reader = new FileReader()
            $('.figure').addClass('d-block')
            reader.onload = function (e) {
                $('#imgUpload').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0])
        }
    })

    ClassicEditor
      .create(document.querySelector('#detail'))
      .then(function (editor) {
        // The editor instance
      })
      .catch(function (error) {
        console.error(error)
      })

    //Initialize Select2 Elements
    $('.select2').select2()

  });
  
</script>

</body>
</html>