<?php include_once('../authen.php'); ?>
<?php
   
        if(isset($_POST['submit'])){
                   
                   
                   $sql = "INSERT INTO `level_risk` (`group_level`, `level_risk`,`level_name`,`create_at`) 
                                   VALUES ( '".$_POST['group_level']."', 
                                            '".$_POST['level_risk']."', 
                                            '".$_POST['level_name']."',
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