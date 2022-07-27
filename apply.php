<?php
//session_start();
//$user=$_SESSION['candidate'];
include ("conn.php");
$order = "INSERT INTO applications(jobId, user, ststus)VALUES('$_POST[jobId]','$_POST[user]','1')";
$result = mysqli_query($db, $order);  
if($result){
echo ("DATA SAVED SUCCESSFULLY");
} else{
echo("Input data is fail");
}
?>

<?php
session_start();
$user=$_SESSION['candidate'];
include ("conn.php"); 
$get_workList=mysqli_query($db, "SELECT * FROM worklist WHERE status='1'");
while($row=mysqli_fetch_array($get_workList)) { ?>
<div class="row mb-2 mt-4 mb-4">
    <div class="col-md-12">
        <div class="card card-body">
            <div class="media align-items-center align-items-lg-start text-center text-lg-left flex-column flex-lg-row">
                <div class="mr-2 mb-3 mb-lg-0"> <img style="object-fit: contain;" src="<?php echo $row['jobImg']; ?>" width="150" height="150" alt=""> </div>
                    <div class="media-body">
                        <h6 class="media-title font-weight-semibold"> <a href="#" data-abc="true"><?php echo $row['title']; ?></a> </h6>
                        <ul class="list-inline list-inline-dotted mb-3 mb-lg-2">
                            <li class="list-inline-item" id="jobData" name="jobData">Job ID <?php echo $row['id']; ?></li>
                            <li class="list-inline-item"><a href="#" class="text-muted" data-abc="true"><?php echo $row['label']; ?></a></li>
                            <li class="list-inline-item"><a href="#" class="text-muted" data-abc="true"><?php echo $row['type']; ?></a></li>
                        </ul>
                        <p class="mb-3"><?php echo $row['description']; ?></p>
                        <ul class="list-inline list-inline-dotted mb-0">
                            <li class="list-inline-item">Location <a href="#" data-abc="true"><?php echo $row['location']; ?></a></li>
                            <li class="list-inline-item">Salary <a href="#" data-abc="true"><?php echo $row['salary']; ?></a></li>
                        </ul>
                    </div>
                    <div class="mt-3 mt-lg-0 ml-lg-3 text-center">
                        <!-- <h3 class="mb-0 font-weight-semibold">$459.99</h3>
                        <div> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                        <div class="text-muted">1985 reviews</div> -->
                        <form action="" method="post">
                            <input type="hidden" value='<?php echo $row['id']; ?>' name="jobId">
                            <input type="submit" id="apply" name="apply" class="btn btn-dark mt-4 text-white" value="Apply">
                        <form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } 
if(isset($_POST["query"])) {
    $jobId=$_POST["query"];
    $user=$_SESSION['candidate'];
    echo "<script>alert('$jobId!! Thank You.');</script>";
    // $setJob=mysqli_query($db, "INSERT INTO applications(jobid, user, jStatus) VALUES ('$jobId', '$user', '1')");
    // if ($setJob) {
    //   echo "<script>alert('Massage Send Successfully!! Thank You.');</script>";
    // } else {
    //   echo "<script>alert('Massage not Send Successfully!! Thank You.');</script>";
    // }
  }?>