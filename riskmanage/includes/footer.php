
<?php
          $sql = "SELECT *  FROM `hospital` ";
          $result = $conn->query( $sql);
          $row =  $result->fetch_assoc();
  ?>
  <footer class="main-footer">
      <div class="float-right d-none d-sm-block">
        <b>Version</b> 3.0.0-alpha
      </div>
      <strong>Copyright &copy; 2021-2025<a href=" <?php echo $row['url'];?>"> <?php echo $row['hospital'];?> </a></strong>AdminLTE All rights
      reserved.
  </footer>