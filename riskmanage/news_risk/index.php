<?php include_once('../authen.php');
 $sql = "SELECT * FROM department ";
 $result2 = $conn->query($sql); 
 $result1 = $conn->query($sql);  

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>เขียนความเสี่ยง</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
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
            <h5><i class="fas fa-edit nav-icon">ระบุรายละเอียดความเสี่ยง</h5></i>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="card card-success">
        <div class="card-header">
        <h3 class="card-title">ข้อมูลความเสี่ยง</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->


        <?php 

                  $_month_name = array("01"=>"มกราคม",  "02"=>"กุมภาพันธ์",  "03"=>"มีนาคม",   
                  "04"=>"เมษายน",  "05"=>"พฤษภาคม",  "06"=>"มิถุนายน",   
                  "07"=>"กรกฎาคม",  "08"=>"สิงหาคม",  "09"=>"กันยายน",   
                  "10"=>"ตุลาคม", "11"=>"พฤศจิกายน",  "12"=>"ธันวาคม");
                  $vardate=date('Y-m-d');
                  $yy=date('Y');

                  $mm =date('m');$dd=date('d');
                  if ($dd<10){
                  $dd=substr($dd,1,2);
                  }
                  $date=$dd ." ".$_month_name[$mm]."  ".$yy+= 543;
                
         ?>
        <form role="form" action="create.php" method="post" enctype = "multipart/form-data">
          <div class="card-body">
             <div class ="row">
              <div class = "col-3">    
                <div class="form-group">
                  <label for="วันที่">วันที่เกิดเหตุ</label>
                  <input type="date" class="form-control"  name ="date" data-date-language="th-th"  placeholder="-วันที่-" >     
                </div>
              </div>
              <div class = "col-3">    
               <div class="form-group">
               <label>ช่วงเวลา</label>
                  <select class="form-control" required name ="BD">
                    <option value=" "disableed select Permission>ช่วงเวลา</option>
                    <option value="morning"> เช้า</option>
                    <option value="evning">บ่าย</option>
                    <option value="night">ดึก</option>
                  </select>
              </div>
            </div>
            <div class = "col-6">   
                <div class="form-group">
                  <label>กลุ่มความเสี่ยงความเสี่ยง</label>
                  <select class="form-control" required name ="name">
                  <option value=" "disableed >-กรุณาเลือก-</option>
                        
                  </select>
                </div>
            </div>
             <div class = "col-7">   
                <div class="form-group">
                  <label>ค้นหารายการความเสี่ยง</label>
                  <select class="form-control" required name ="name">
                  <option value=" "disableed >-กรุณาเลือก-</option>
                        

          
                  </select>
                </div>
            </div>
            <div class = "col-5">    
            <div class="form-group">
                    <label>ประเภทความเสี่ยง</label>
                    <select class="form-control" required name = "group_name">
                    <option value=" "disableed >-กรุณาเลือก-</option>    

                    <?php 
                        $sql ="select * from group_levelrisk";
                        $result = $conn->query($sql); 
                            while($row =$result->fetch_assoc()) {
                              ?>
                            <option value="<?php echo $row["group_name"];?>"><?php echo $row["group_name"];?></option>
                            <?php }?>
                    </select>
                  </div>
            </div>
            <div class = "col-6">   
                <div class="form-group">
                    <label>ที่เกิดความเสี่ยง</label>
                    <select class="form-control" required name ="depart_name">
                    <option value=" "disableed >-กรุณาเลือก-</option>    

                    <?php
                            while($row1 =$result1->fetch_assoc()) {
                              ?>
                            <option value="<?php echo $row1["name"];?>"><?php echo $row1["name"];?></option>
                            <?php }?>
                  </select>
                </div>
            </div>
              <div class = "col-6">   
                <div class="form-group">
                    <label>ความเสี่ยงเกิดจาก</label>
                    <select class="form-control" required name ="dept_risk">
                    <option value=" "disableed >กรุณาเลือก</option>
                        <?php
                            while($row2 =$result2->fetch_assoc()) {
                              ?>
                            <option value="<?php echo $row2["name"];?>"><?php echo $row2["name"];?></option>
                            <?php }?>
                  </select>
                </div>
            </div>
            <div class = "col-3">    
                    <div class="form-group">
                        <label for="HN">HN</label>
                        <input type="text" class="form-control" name= "HN" id="HN" placeholder="HN" >
                    </div>
              </div>
            <div class = "col-3">    
                  <div class="form-group">
                      <label for="AN">AN</label>
                      <input type="text" class="form-control" name= "AN" id="AN" placeholder="AN" >
                  </div>
            </div>
            <div class = "col-3">   
                    <div class="form-group">
                      <label>บุคลากรที่เกี่ยวข้อง</label>
                      <select class="form-control" required name ="status">
                        <option value=" "disableed select Permission>-กรุณาเลือก-</option>
                        <option value="my_risk">ตนเองเป็นผู้กระทำ</option>
                        <option value="you_risk">ผู้อื่น เป็นผู้กระทำ</option>
                      </select>
                    </div>
            </div>
            <div class = "col-3">   
                    <div class="form-group">
                      <label>การแก้ไข</label>
                      <select class="form-control" required name ="status">
                        <option value=" "disableed select Permission>-กรุณาเลือก-</option>
                        <option value="yes">แก้ไขเเล้ว</option>
                        <option value="no">ยังไม่ได้รับการเเก้ไข</option>
                      </select>
                    </div>
            </div>

<!-- //คำสั่งเลือกตาราง level_risk-/ -->
      <?php
      $sqllevel = ("SELECT * FROM  level_risk ") ;
      $resultlevel = $conn->query($sqllevel);
      $rowlevel = $resultlevel->fetch_assoc();
      
      ?>
    <div class = "col-12">  
      <div class ="row mb-2">
        <div class ="col-md-6">
            <div class="card card-success">
              <div class="card-header  mb-2">
                    <h3 class="card-title">ระดับความรุนแรง</h3>
              </div>
              <div class = "container mb-2">
                <div class="form-check mb-1 ">
                  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="A" checked>
                  <label class="form-check-label" for="exampleRadios2">
                     A:มีโอกาศเกิดอุบัติการณ์เเต่ยังไม่เกิด (Near miss)
                  </label>
              </div>
                <div class="form-check mb-1">
                  <input class="form-check-input" type="radio" name="level_risk" id="level_risk" value="B">
                  <label class="form-check-label" for="exampleRadios2">
                    B:มีโอกาศเกิดอุบัติการณ์เเต่ยังไม่เกิด (Near miss)
                  </label>
                </div>
                <div class="form-check mb-1">
                  <input class="form-check-input" type="radio" name="level_risk" id="level_risk" value="C">
                  <label class="form-check-label" for="exampleRadios2">
                    C:เกิดความเสี่ยง เกิดความเสียหายเล็กน้อย
                 </label>
                </div>
                <div class="form-check mb-1">
                  <input class="form-check-input" type="radio" name="level_risk" id="level_risk" value="D">
                  <label class="form-check-label" for="exampleRadios2">
                     D:เกิดความเสี่ยงกับผู้ป่วย/ผู้รับบริการ/จนท./รพ. ต้องเฝ้าระวัง
                  </label>
                </div>
                <div class="form-check mb-1">
                  <input class="form-check-input" type="radio" name="level_risk" id="level_risk" value="E">
                  <label class="form-check-label" for="exampleRadios2">
                     E:เกิดความเสี่ยงกับผู้ป่วย/ผู้รับบริการ/จนท./รพ. ต้องมีการแก้ไข
                  </label>
                </div>
                <div class="form-check mb-1">
                  <input class="form-check-input" type="radio" name="level_risk" id="level_risk" value="F">
                  <label class="form-check-label" for="exampleRadios2">
                    F:ความเสี่ยง มีการสูญเสียถึงขั้นต้องนอนโรงพยาบาล
                  </label>
                </div>
                <div class="form-check mb-1">
                  <input class="form-check-input" type="radio" name="level_risk" id="level_risk" value="G">
                  <label class="form-check-label" for="exampleRadios2">
                    G:ความเสี่ยง มีการสูญเสียอวัยวะ ถาวร
                  </label>
                </div>
                <div class="form-check mb-1">
                  <input class="form-check-input" type="radio" name="level_risk" id=level_risk" value="H">
                  <label class="form-check-label" for="exampleRadios2">
                     H:ความเสี่ยง เกือบเสียชีวิต
                  </label>
                </div>
                <div class="form-check mb-1">
                  <input class="form-check-input" type="radio" name="level_risk" id="level_risk" value="I">
                  <label class="form-check-label" for="exampleRadios2">
                   I: เสียชีวิต มีแนวโน้มการฟ้องร้อง
                  </label>
                </div>
                <div class="form-check mb-1">
                  <input class="form-check-input" type="radio" name="level_risk" id="level_risk" value="TG">
                  <label class="form-check-label" for="exampleRadios2">
                   TG: กำหนดให้เป็นTrigger Tool เป็นตัวกระตุ้น การค้นหาความเสี่ยงด้านคลินิกเชิงรุก
                  </label>
                </div>         
             </div>
            </div>  
        </div> 
        <div class ="col-md-3 mb-2">
            <div class="card card-success">
              <div class="card-header mb-2">
                    <h3 class="card-title">กรรมการที่เกี่ยวข้อง</h3>
              </div>
              <div class = "container mb-2">
                <div class="form-check mb-1">
                    <input class="form-check-input" type="checkbox" name="pct" id="pct1" value="PCT">
                    <label class="form-check-label" for="pct">
                   PCT
                  </label>
              </div>
                <div class="form-check mb-1">
                    <input class="form-check-input" type="checkbox" name=" MED ERROR" id=" MED ERROR" value=" MED ERROR">
                    <label class="form-check-label" for=" MED ERROR">
                      MED ERROR
                  </label>
                </div>
                  <div class="form-check mb-1">
                    <input class="form-check-input" type="checkbox" name=" IC" id=" IC" value=" IC">
                    <label class="form-check-label" for=" IC">
                      IC
                  </label>
                </div>
                <div class="form-check mb-1">
                    <input class="form-check-input" type="checkbox" name="  IM" id="  IM" value="  IM">
                    <label class="form-check-label" for="  IM">
                      IM
                  </label>
                </div>
                <div class="form-check mb-1">
                  <input class="form-check-input" type="checkbox" name= "HRD" id= "HRD" value="HRD">
                  <label class="form-check-label" for="HRD">
                      HRD
                  </label>
                </div>
                <div class="form-check mb-1">
                  <input class="form-check-input" type="checkbox" name="ENV" id="ENV" value="ENV">
                  <label class="form-check-label" for="ENV">
                     ENV
                  </label>
                </div>
                <div class="form-check mb-1">
                  <input class="form-check-input" type="checkbox" name=" ET HIC" id=" ET HIC" value="ET HIC">
                  <label class="form-check-label" for="ET HIC">
                     ET HIC
                  </label>
                </div>
                <div class="form-check mb-1">
                  <input class="form-check-input" type="checkbox" name=" PTC" id="PTC" value="PTC">
                  <label class="form-check-label" for="PTC">
                     PTC
                  </label>
                </div>
                <div class="form-check mb-1">
                  <input class="form-check-input" type="checkbox" name="UM" id="UM" value="UM">
                  <label class="form-check-label" for="UM">
                      UM
                  </label>
                </div>
                <div class="form-check mb-1">
                  <input class="form-check-input" type="checkbox" name="NCD" id="NCD" value="NCD">
                  <label class="form-check-label" for="NCD">
                      NCD
                  </label>
                </div>
             </div>
            </div>  
          </div>
          <div class ="col-md-3 mb-2">
            <div class="card card-success">
              <div class="card-header mb-2">
                    <h3 class="card-title">ผลกระทบ</h3>
              </div>
            <div class = "container mb-2">
                
              <div class="form-check form-check-inline mb-1">
                    <input class="form-check-input" type="checkbox" name= "person" id="person" value="person">
                    <label class="form-check-label" for="person">ผู้มารับบริการ หรือผู้ป่วย</label>
              </div>
              <div class="form-check form-check-inline mb-1">
                    <input class="form-check-input" type="checkbox" name ="staff" id="staff" value="staff">
                    <label class="form-check-label" for="staff">ผู้ปฎิบัติงาน</label>
              </div>
              <div class="form-check form-check-inline mb-1">
                    <input class="form-check-input" type="checkbox" name ="hos_guide" id="hos_guide" value="hos_guide" >
                    <label class="form-check-label" for="hos_guide">ชื่อเสียง ทรัพย์สินโรงพยาบาล</label>
             </div>
              <div class="form-check mb-1">
                    <label class="form-check-label" for="exampleRadios2">
                   </label>
            </div>
            <div class="form-check mb-1">
                    <label class="form-check-label" for="exampleRadios2">
                    </label>
            </div>
            <div class="form-check mb-1">
                    <label class="form-check-label" for="exampleRadios2">
                   </label>
            </div>
                <div class="form-check mb-1">
                    <label class="form-check-label" for="exampleRadios2">
                    </label>
                </div>
                <div class="form-check mb-1">
                    <label class="form-check-label" for="exampleRadios2">
                   </label>
                </div>
                <div class="form-check mb-1">
                    <label class="form-check-label" for="exampleRadios2">
                    </label>
                </div>
                <div class="form-check mb-1">
                  <label class="form-check-label" for="exampleRadios2">
                  </label>
                </div>
           </div>
       </div>
       </div>
    </div>
      <div class ="col-12">
       <div class="card card-success">
          <div class="card-header">
            <h3 class="card-title">ระบุเหตุการณ์ความเสี่ยง รายละเอียด</h3>
          </div>

          <div class = "col-12">
              <div class="form-group">
                  <label for="detail">บรรยายเหตุการณ์ความเสี่ยง</label>
                  <textarea class="form-control" name ="detail" id="detail" rows="3"></textarea>
              </div>
        </div>
         <div class = "col-12">
            <div class="form-group">
                <label for="sub_detail">การแก้ไขเบื้องต้น</label>
                <textarea class="form-control" name ="sub_detail" id="sub_detail" rows="3"></textarea>
            </div>
         </div>
        
          <div class = "col-12">
             <div class="form-group">
                <label fname ="edit_detail" or="edit_detail">ข้อเสนอแนะอื่นๆ เพื่อการแก้ไขป้องกัน</label>
                <textarea class="form-control" name ="edit_detail" id="edit_detail" rows="5"></textarea>
              </div>
          <div class="form-group">
              <label>Upload Image</label>
          <div class="custom-file">
                <input type="file" class="custom-file-input" name="file" id="customFile" >
                <label class="custom-file-label" for="customFile">Choose file</label>
          </div>
              <figure class="figure text-center d-none mt-2">
                 <img id="imgUpload" class="figure-img img-box rounded" alt="">
              </figure>
          </div>
         </div>
        </div>
          <div class="card-footer">
                <button type="submit" name ="submit" class="btn btn-primary">บันทึก</button>
                <a href= "#" class="btn btn-danger">ยกเลิก</button></a>
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
      <script src="../../dist/js/bootstrap-datepicker/bootstrap-datepicker.js"></script>
      <script src="../../dist/js/bootstrap-datepicker/bootstrap-datepicker-thai.js"></script>
      <script src="../../dist/js/bootstrap-datepicker/locales/bootstrap-datepicker.th.js"></script>
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
  
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js" type="text/javascript"></script>
 

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
