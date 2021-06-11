<?php include_once('../authen.php') ?>
<?php
   if(isset($_POST['submit'])){
    if($_FILES['file']['name'] != ''){
        $temp =  explode('.',$_FILES['file']['name']);
        $new_name = round(microtime(true)*9999) . '.' . end($temp);
        $url_upload = '../../../dist/img/'.$new_name;
        if ( move_uploaded_file($_FILES['file']['tmp_name'], $url_upload) ){
            $file_delete = ROOT_PATH . $base_path_pr . pathinfo($_POST['file'], PATHINFO_BASENAME);
            unlink($file_delete);
        }else{
            echo '<script> alert("ไม่สามารถอัพโหลดรูปภาพใหม่ได้ โปรดลองอีกครั้ง")</script>'; 
            header('Refresh:0; url=index.php'); 
        }
    }
        $sql = " UPDATE `admin` 
         SET  first_name = '".$_POST['first_name']."', 
              last_name  = '".$_POST['last_name']."',
              username   =  '".$_POST['username']."', 
              password  =   '".$_POST['password']."', 
                 name   =   '".$_POST['name']."', 
                 status =   '".$_POST['status']."',  
                photo   =   '".$new_name."', 
             create_at  =   '".date("Y-m-d H:i:s")."'
                 where `id` = '" . $_POST['id'] ."'; ";

            $result = $conn->query($sql) ;
            if($result){
                echo '<script> alert("แก้ไขข้อมูลสำเร็จ") </script>';
                header('Refresh:0; url=index.php');
            }

            } else {
               header('Refresh:0; url=index.php');
     
     }       
?>
