<?php include_once('../authen.php'); ?>
<?php
    // echo '<script> alert("ลบข้อมูลเรียบร้อยเเล้ว!")</script>'; 
    // header('Refresh:0; url=index.php');
    $id = $_GET['id'];
       $sql ="DELETE FROM `admin` WHERE id = '".$id."' "; 
       $result = $conn->query($sql);
       if ($conn->affected_rows){
             echo '<script> alert("ลบข้อมูลเรียบร้อยเเล้ว!")</script>'; 
             header('Refresh:0; url=index.php');
       }else{
            echo '<script> alert("ไม่มีข้อมูล")</script>'; 
            header('Refresh:0; url=index.php');
       }
?>