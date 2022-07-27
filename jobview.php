<style>
    .labelText {
        font-size: 14px;
    }
    .socialIcons {
        display: flex;
        justify-content: center;
    }
    .socialIcons a {
        margin-right: 20px;
        /* height: 250px; */
    }
    .jobImg {
        height: 300px;
        width: 900px;
        object-fit: fill;
    }
</style>
<?php
if (empty($_GET['job'])) {
    header('location: 404.php');
} else {
    $get_work=mysqli_query($db, "SELECT * FROM worklist WHERE id='".$_GET['job']."'");
      while($row=mysqli_fetch_array($get_work)) {
    echo '<div class="container mt-5">
    <div class="row">
        <div class="col-lg-8">
            <!-- Post content-->
            <article>
                <!-- Post header-->
                <header class="mb-4">
                    <!-- Post title-->
                    <h1 class="fw-bolder mb-1 text-white">'.$row["title"].'</h1>
                    <!-- Post meta content-->
                    <div class="text-white fst-italic mb-2">Job by <b>'.$row["party"].'</b></div>
                    <!-- Post categories-->
                    <p class="labelText badge bg-danger text-white text-decoration-none ">'.$row["label"].'</p>
                    <p class="labelText badge bg-success text-white text-decoration-none ">'.$row["type"].'</p>
                </header>
                <!-- Preview image figure-->
                <figure class="mb-4"><img class="jobImg img-fluid rounded" src='.$row["jobImg"].' alt="..." /></figure>
                <!-- Post content-->
                <section class="mb-5">
                    <h2 class="text-white fw-bolder mb-4 mt-5">Job Description</h2>
                    <p class="text-white fs-5 mb-4">'.$row["description"].'</p>
                    <h2 class="text-white fw-bolder mb-4 mt-5">Details</h2>
                    <p class="text-white fs-5">Location : '.$row["location"].'</p>
                    <p class="text-white sfs-5 ">Salary : '.$row["salary"].' INR</p>
                </section>
            </article>
            
        </div>';
} echo '
        <!-- Side widgets-->
        <div class="col-lg-4">
            <!-- Search widget-->
            <div class="card mb-4">
                <div class="card-header">Search</div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="input-group">
                            <input class="form-control" name="searchText" type="text" placeholder="Search Somthing..."/>
                            <input class="btn btn-primary" type="submit" name="submit" value="Go!"/>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Categories widget-->
            <div class="card mb-4">
                <div class="card-header">Categories</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <ul class="list-unstyled mb-0">
                                <li><a href="index.php?page=search&category=web_design">Web Design</a></li>
                                <li><a href="index.php?page=search&category=devloper">Devloper</a></li>
                                <li><a href="index.php?page=search&category=Delivery_boy">Delivery Boy</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-6">
                            <ul class="list-unstyled mb-0">
                                <li><a href="index.php?page=search&category=medical">Medical</a></li>
                                <li><a href="index.php?page=search&category=techer">Teacher</a></li>
                                <li><a href="index.php?page=search&category=securty">Securty</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Side widget-->
            <div class="socialIcons">
                <a class="btn btn-primary" style="background-color: #3b5998;" href="https://www.facebook.com/nokrijugaard" role="button"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-primary" style="background-color: #ac2bac;" href="https://www.instagram.com/nokrijugaad/" role="button"><i class="fab fa-instagram"></i></a>
                <a class="btn btn-primary" style="background-color: #0082ca;" href="#!" role="button"><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-primary" style="background-color: #ed302f;" href="#!" role="button"><i class="fab fa-youtube"></i></a>
                <a class="btn btn-primary" style="background-color: #25d366;" href="#!" role="button"><i class="fab fa-whatsapp"></i></a>
            </div>
        </div>
    </div>
</div>';
}
if (isset($_POST['submit'])) { //to check if the form was submitted
    $searchQuery= $_POST['searchText'];
    echo("<script>location.href = 'index.php?page=search&query=".$searchQuery."';</script>");
   }
 ?>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script> -->