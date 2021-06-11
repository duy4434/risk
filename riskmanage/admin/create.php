
<?php include_once('../authen.php') ?>
<?php
        if(isset($_POST['submit'])){
                $temp =  explode('.',$_FILES['file']['name']);
                $new_name = round(microtime(true)*9999) . '.' . end($temp);
                $url_upload = '../../dist/img/'.$new_name;
                if ( move_uploaded_file($_FILES['file']['tmp_name'], $url_upload) ){

        
                    $sql = "INSERT INTO `admin` (`first_name`,`last_name`,`username`,`password`,`name`,`status`,`photo`,`create_at`) 
                            VALUES ( '".$_POST['first_name']."', 
                                     '".$_POST['last_name']."',
                                     '".$_POST['username']."', 
                                     '".$_POST['password']."', 
                                     '".$_POST['name']."', 
                                     '".$_POST['status']."',  
                                     '".$new_name."', 
                                     '".date("Y-m-d H:i:s")."'); ";
                       $result = $conn->query($sql);
                       if ($result){
                           echo '<script> alert("บันทึกสำเร็จ")</script>'; 
                           header('Refresh:0; url= index.php');
                       }else{
                           echo '<script> alert("บันทึกไม่สำเร็จ!!")</script>'; 
                           header('Refresh:0; url= index.php');
                       }
            
       }else{
               header('Refresh:0; url=index.php');
       }
}
?>
