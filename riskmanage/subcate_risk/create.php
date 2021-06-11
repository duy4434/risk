<?php include_once('../authen.php') ;
 print_r($_POST);
    if(isset($_POST['submit'])){

       $sql= "INSERT INTO `subcate_risk` (`subcate_name`,`cate_id`,`create_at`) 
                   VALUES  ('".$_POST['subcate_name']."',
                            '".$_POST['cate_id']."',
                           '".date("Y-m-d H:i:s")."');";
                          $result = $conn->query($sql);
                          if ($result){
                              echo '<script> alert("บันทึกข้อมูลสำเร็จ")</script>'; 
                              header('Refresh:0; url=index.php');
                          }else{
                              echo '<script> alert("บันทึกข้อมูลไม่สำเร็จ!!")</script>'; 
                              header('Refresh:0; url=index.php');
                          }


    }else{
        header('Refresh:url:index.php');
    }
// ?>