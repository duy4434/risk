<?php include_once('../authen.php') ?>
<?php
    // echo '<script> alert("Finished Updating!")</script>'; 
    // header('Refresh:0; url=index.php');
    if(isset($_POST['submit'])){
        $sql  = "UPDATE `department` SET 
                              `name` = '".$_POST['name']."',
                              `dept_name` = '".$_POST['dept_name']."',
                              `dept_update` = '".date("Y-m-d H:i:s")."' 
                        WHERE `dept_id` ='".$_POST['dept_id']."';";
             
          
          $result = $conn->query($sql) ;
          if ($result){
                echo '<script> alert("แก้ไขข้อมูลสำเร็จ")</script>'; 
                header('Refresh:0; url=index.php');
          }else{
                echo '<script> alert("แก้ไขข้อมูลไม่สำเร็จ!!")</script>'; 
                header('Refresh:0; url=index.php');
        }

    }else {
        header('Refresh:0; url=index.php');
    }
   

?>