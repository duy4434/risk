<?php include_once('../authen.php'); ?>
<?php
   
        if(isset($_POST['submit'])){
                   
                   
                   $sql = "INSERT INTO `department` (`name`, `dept_name`, `dept_update`) 
                                   VALUES ( '".$_POST['name']."', 
                                            '".$_POST['dept_name']."', 
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
                header('Refresh:0; url=index.php');
        }
?>