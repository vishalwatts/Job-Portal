<?php
$get_workList=mysqli_query($db, "SELECT * FROM worklist WHERE status='1'");
while($row=mysqli_fetch_array($get_workList)) {
    echo '<div class="row mb-2 mt-4 mb-4">
    <div class="col-md-12">
        <div class="card card-body">
            <div class="media align-items-center align-items-lg-start text-center text-lg-left flex-column flex-lg-row">
                <div class="mr-2 mb-3 mb-lg-0"> <img style="object-fit: contain;" src='.$row["jobImg"].' width="150" height="150" alt=""> </div>
                    <div class="media-body">
                        <h6 class="media-title font-weight-semibold"> <a href="#" data-abc="true">'.$row["title"].'</a> </h6>
                        <ul class="list-inline list-inline-dotted mb-3 mb-lg-2">
                            <li class="list-inline-item" id="jobData" name="jobData">Job ID '.$row["id"].'</li>
                            <li class="list-inline-item"><a href="#" class="text-muted" data-abc="true">'.$row["label"].'</a></li>
                            <li class="list-inline-item"><a href="#" class="text-muted" data-abc="true">'.$row["type"].'</a></li>
                        </ul>
                        <p class="mb-3">'.$row["description"].'</p>
                        <ul class="list-inline list-inline-dotted mb-0">
                            <li class="list-inline-item">Location <a href="#" data-abc="true">'.$row["location"].'</a></li>
                            <li class="list-inline-item">Salary <a href="#" data-abc="true">'.$row["salary"].'</a></li>
                        </ul>
                    </div>
                    <div class="mt-3 mt-lg-0 ml-lg-3 text-center">
                        <!-- <h3 class="mb-0 font-weight-semibold">$459.99</h3>
                        <div> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                        <div class="text-muted">1985 reviews</div> -->
                        <!-- <input type="submit" id="apply" name="apply" class="btn btn-dark mt-4 text-white" value="Apply"> -->
                        '.($_SESSION['candidate']==true ?
                            '<a href="index.php?page=jobview&job='.$row["id"].'" class="btn btn-dark mt-4 text-white btn-block">Apply</a>'
                            :'<button (click)="clearModal()" data-toggle="modal" data-target="#contact" class="btn btn-dark mt-4 text-white btn-block">Apply</button>'
                        ).'
                    </div>
                </div>
            </div>
        </div>
    </div>';
}
?>