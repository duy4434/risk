<?php include_once('../authen.php') ?>
<?php
    if(isset($_POST['submit'])){
        $temp =  explode('.',$_FILES['file']['name']);
        $image_name = round(microtime(true)*9999) . '.' . end($temp);
        $url_upload = '../../dist/images/'.$image_name;
        if ( move_uploaded_file($_FILES['file']['tmp_name'], $url_upload) ){

       $sql= "INSERT INTO `hospital` ( `hospital`, `eng_name`,`manager`,`url`, `logo`, `create_at`)
       
                        VALUES ('".$_POST['`hospital`']."',
                                '".$_POST['`eng_name`']."',
                                '".$_POST['`manager`']."',
                                '".$_POST['`url`']."',
                                '" .$image_name."',
                                '".date("Y-m-d H:i:s")."'); "; 
                         $result = $conn->query($sql);
                         if ($result){
                             echo '<script> alert("บันทึกสำเร็จ")</script>'; 
                             header('Refresh:0; url= index.php');
                         }else{
                             echo '<script> alert("บันทึกไม่สำเร็จ!!")</script>'; 
                             header('Refresh:0; url= index.php');
                         }
              } else {
                 echo 'No';
              }
 
         }else{
                 header('Refresh:0; url=index.php');
         }
 ?>