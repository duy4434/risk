<?php include_once('../authen.php'); ?>
<?php
    // echo '<script> alert("ลบข้อมูลเรียบร้อยเเล้ว!")</script>'; 
    // header('Refresh:0; url=index.php');
    $id = $_GET['main_dept'];
       $sql ="DELETE FROM `cate_risk` WHERE cate_id = '".$id."' "; 
       $result = $conn->query($sql);
       if ($conn->affected_rows){
             echo '<script> alert("ลบข้อมูลเรียบร้อยเเล้ว!")</script>'; 
             header('Refresh:0; url=index.php');
       }else{
            echo '<script> alert("ไม่มีข้อมูล")</script>'; 
            header('Refresh:0; url=index.php');
       }
?>