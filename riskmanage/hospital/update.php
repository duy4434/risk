<?php include_once('../authen.php') ?>
<?php

     if(isset($_POST['submit'])){
        if($_FILES['file']['name'] != ''){
            $temp =  explode('.',$_FILES['file']['name']);
            $image_name = round(microtime(true)*9999) . '.' . end($temp);
            $url_upload = '../../dist/images/'.$image_name;
            if ( move_uploaded_file($_FILES['file']['tmp_name'], $url_upload) ){
            }else{
                echo '<script> alert("ไม่สามารถอัพโหลดรูปภาพใหม่ได้ โปรดลองอีกครั้ง")</script>'; 
                header('Refresh:0; url=index.php'); 
            }
        }   
        $sql = "UPDATE `hospital`
                  SET   `hospital` = '".$_POST['`hospital`']."',
                        `eng_name` = '".$_POST['`eng_name`']."',
                        `manager`  = '".$_POST['`manager`']."',
                        `url`      = '".$_POST['`url`']."',
                        `logo`     = '".$image_name."', 
                        `create_at` = '".date("Y-m-d H:i:s")."' 
                 WHERE  `id_hos` = '".$_POST['id_hos']."';";
             
          
             $result = $conn->query($sql);
             if($result){
                 echo '<script> alert("แก้ไขข้อมูลสำเร็จ") </script>';
                 header('Refresh:0; url=index.php');
     
            } else {
             header('Refresh:0; url=index.php');
        
            }

        }
 ?>