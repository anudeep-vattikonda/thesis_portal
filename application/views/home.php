<?php
include_once('header.php');
$conn = mysqli_connect('localhost','root','','thesis_trail_2');
?>
  <div class="col-sm-5">
    <div class="card text-center " style="border: 1px solid rgba(0, 0, 0, .125); height: 450px;">
      <div class="card-header" style="font-family: 'Source Sans Pro', sans-serif; font-size: 30px; background: rgba(0,0,0,.08)">Student Details</div>
      <hr>
      <div class="card-body">
        <h6><strong>Name: </strong><span><?php echo $user['student_name'] ?></span></h6>
        <h6><strong>Branch: </strong><span><?php echo $user['department'] ?></span></h6>
        <h6><strong>Admission Number: </strong><span><?php echo $user['student_id'] ?></span></h6>
        <h6><strong>Thesis Title: </strong><span><?php echo $user['thesis_name'] ?></span></h6>
        <?php
               $query = "SELECT * FROM credentials where student_id = '".$user['student_id']."' AND  examiner_id = '".$user['examiner_id']."' ";
               $run = mysqli_query($conn,$query);
               
               $rows = mysqli_fetch_assoc($run)
        ?>
        <a href="download?file=<?php echo $rows['thesis_file'] ?>" class="btn btn-primary">Download Thesis</a><br>
        <br>
        <a href="download.php?file=<?php echo $rows['synopsis_file'] ?>" class="btn btn-primary">Download Synopsis</a><br>
        <!-- <a href="download.php" class="btn btn-primary" >Download Thesis</a>
        <br>
        <a href="download.php" class="btn btn-primary" >Download Synopsis</a> -->
      </div>
    </div>
  </div>
  <div class="col-sm-5">
    <div class="card text-center" style="border: 1px solid rgba(0, 0, 0, .125); height: 450px;">
      <div class="card-header" style="font-family: 'Source Sans Pro', sans-serif; font-size: 30px; background: rgba(0,0,0,.08)">Examiner Details</div>
      <hr>
      <div class="card-body">
        <h6><strong>Name: </strong><span><?php echo $user['examiner_name'] ?></span></h6>
        <h6><strong>Designation: </strong><span><?php echo $user['desgination'] ?>  </span></h6>
        <h6><strong>Organisation: </strong><span><?php echo $user['organisation'] ?>  </span></h6>
     <!--    <h6><strong>Designation: </strong><span><?php echo $user['email'] ?>  </span></h6> -->
      </div>
    </div>
  </div>
</div>
<?php
include_once('footer.php');
?>