<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTIga1iTzr3Jgft2Ax-lQcgnd3LGBERQoFsOMUo28XrxiZdofhrFJxaG9nUj9K5iIps2fg&usqp=CAU">
    <title>Nokri Jugaad</title>
    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet"> -->
    <link href="https://getbootstrap.com/docs/4.0/examples/blog/blog.css" rel="stylesheet">
    <!-- icons -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <!-- <link rel="icon" type="image/x-icon" href="/images/favicon.ico"> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css">
    <link rel="stylesheet" href="assets/css/index.css">
  </head>
  <body class=" bg-dark">
    <div class="container">
    <?php 
    session_start(); 
    include ("conn.php");
    $userId="";
    if (isset($_SESSION['candidate'])) {
      $userGet=mysqli_query($db, "SELECT * FROM candidates WHERE email='".$_SESSION['candidate']."'");
      while($userData=mysqli_fetch_array($userGet)) {
        $userId=$userData['id'];
      }
      $user=1; ?>
       <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
          <div class="col-4 pt-1">
          <a class="btn btn-primary" style="background-color: #3b5998;" href="https://www.facebook.com/nokrijugaard" role="button"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-primary" style="background-color: #ac2bac;" href="https://www.instagram.com/nokrijugaad/" role="button"><i class="fab fa-instagram"></i></a>
                <a class="btn btn-primary" style="background-color: #0082ca;" href="#!" role="button"><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-primary" style="background-color: #ed302f;" href="#!" role="button"><i class="fab fa-youtube"></i></a>
                <a class="btn btn-primary" style="background-color: #25d366;" href="#!" role="button"><i class="fab fa-whatsapp"></i></a>
          </div>
          <div class="col-4 text-center">
            <a class="blog-header-logo text-white" href="#">Nokri Jugaad</a>
          </div>
          <div class="col-4 d-flex justify-content-end align-items-center">
            <a class="text-muted" href="index.php?page=search">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-white mx-3"><circle cx="10.5" cy="10.5" r="7.5"></circle><line x1="21" y1="21" x2="15.8" y2="15.8"></line></svg>
            </a>
            <a class="btn btn-sm btn-danger" href="logout.php">Logout</a>
          </div>
        </div>
      </header>
      <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
          <a class="text-white p-2" href="index.php">Job Feed</a>
          <a class="p-2 text-white" href="index.php?page=applications">Applications</a>
          <a class="p-2 text-white" href="index.php?page=profile">Profile</a>
          <a class="p-2 text-white" href="index.php?page=about">About</a>
          <a class="p-2 text-white" href="index.php?page=disclaimer">Disclaimer</a>
          <a class="p-2 text-white" href="index.php?page=privacy-policy">Privacy Policy</a>
          <a class="p-2 text-white" href="index.php?page=contact">Conatact Us</a>
          <!-- <a class="p-2 text-muted" href="#">Opinion</a>
          <a class="p-2 text-muted" href="#">Science</a>
          <a class="p-2 text-muted" href="#">Health</a>
          <a class="p-2 text-muted" href="#">Style</a>
          <a class="p-2 text-muted" href="#">Travel</a> -->
        </nav>
      </div>
     <?php } else {
       $user=0; ?>
       <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
          <div class="col-4 pt-1">
          <a href="https://www.facebook.com/nokrijugaard" class="fa fa-facebook"></a>          
          <a href="#" class="fa fa-linkedin"></a>
          <a href="#" class="fa fa-youtube"></a>
          <a href="https://www.instagram.com/nokrijugaad/" class="fa fa-instagram"></a>
          </div>
          <div class="col-4 text-center">
            <a class="blog-header-logo text-white" href="#">Nokri Jugaad</a>
          </div>
          <div class="col-4 d-flex justify-content-end align-items-center">
            <a class="text-muted" href="index.php?page=search">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-white mx-3"><circle cx="10.5" cy="10.5" r="7.5"></circle><line x1="21" y1="21" x2="15.8" y2="15.8"></line></svg>
            </a>
            <a class="btn btn-sm btn-primary" href="userlogin.php">Login</a>
          </div>
        </div>
      </header>
      <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
          <a class="p-2 text-white" href="index.php">Job Feed</a>
          <a class="p-2 text-white" href="index.php?page=about">About</a>
          <a class="p-2 text-white" href="index.php?page=disclaimer">Disclaimer</a>
          <a class="p-2 text-white" href="index.php?page=privacy-policy">Privacy Policy</a>
          <a class="p-2 text-white" href="index.php?page=contact">Conatact Us</a>
          <!-- <a class="p-2 text-muted" href="#">Opinion</a>
          <a class="p-2 text-muted" href="#">Science</a>
          <a class="p-2 text-muted" href="#">Health</a>
          <a class="p-2 text-muted" href="#">Style</a>
          <a class="p-2 text-muted" href="#">Travel</a> -->
        </nav>
      </div>
      <?php } 
      if (!empty($_GET['page'])) {
        $body=$_GET['page'];
        include $body.".php";
      } else {
        echo '<div class="jumbotron p-3 p-md-5 text-white rounded" style="background-image: url(assets/images/bg_1.jpg); background-size: cover;">
        <div class="col-md-12 px-0">
          <h1 class="display-4 font-italic text-dark font-weight-bold">We <span class="type-data"></span></h1>
          <p class="lead my-3 col-md-6">Nokri Jugaad is a platform where you can find your #dream job. We Post job articles on daily basis you can follow the articles or apply for job.</p>
          <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">become Pro Member...</a></p>
        </div>
      </div>
      <section class="text-center mt-2 mb-10">
        <div class="container">
          <h1 class="jumbotron-heading text-white">About Us</h1>
          <p class="lead text-light">Nokri Jugaad is a platform where you can find your dream job. Our team is made up of Market specialist, Business Consultant, business analytics and public relation Experts who are working day and night for our valuable candidates.
Nokri Jugaad  was established in 2022 with a vision to provide employment to our subscribers with the help of experienced and professional team. We try to connect with best job opportunity.
</p>
          <p>
            <a href="index.php?page=about" class="btn btn-primary my-2">Read More</a>
            <a href="index.php?page=contact" class="btn btn-secondary my-2">Contact Us</a>
          </p>
        </div>
      </section>';
      $get_workList=mysqli_query($db, "SELECT * FROM worklist WHERE status='1'");
      while($row=mysqli_fetch_array($get_workList)) {
    echo '<div class="row">
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
      $clintCount=mysqli_query($db, "SELECT * FROM partners WHERE status='1'");
      $clintRows=mysqli_num_rows($clintCount);
      $jobCount=mysqli_query($db, "SELECT * FROM worklist WHERE status='1'");
      $jobRows=mysqli_num_rows($jobCount);
      $resumeCount=mysqli_query($db, "SELECT * FROM applications WHERE status='1'");
      $resumeRows=mysqli_num_rows($resumeCount);
      $candidateCount=mysqli_query($db, "SELECT * FROM candidates WHERE status='1'");
      $candidateRows=mysqli_num_rows($candidateCount);
      ?>
      <div class="py-5">
        <div class="row justify-content-center align-items-center" style="background-image: url(assets/images/about.jpg); background-size: cover;">
            <div class="col-md-2">
              <div class="card mb-4 bg-transparent" style='border-style: none;'>
                <div class="card-body" style="text-align: center;">
                  <h1 class="font-weight-bold count"><?php echo $clintRows; ?></h1>
                  <h5 class="">Companies</h5>
                </div>
              </div>
            </div>
            <div class="col-md-2">
              <div class="card mb-4 bg-transparent" style='border-style: none;'>
                <div class="card-body" style="text-align: center;">
                  <h1 class="font-weight-bold count"><?php echo $jobRows; ?></h1>
                  <h5 class="">JOBS</h5>
                </div>
              </div>
            </div>
            <div class="col-md-2">
              <div class="card mb-4 bg-transparent" style='border-style: none;'>
                <div class="card-body" style="text-align: center;">
                  <h1 class="font-weight-bold count"><?php echo $resumeRows; ?></h1>
                  <h5 class="">Applications</h5>
                </div>
              </div>
            </div>
            <div class="col-md-2">
              <div class="card mb-4 bg-transparent" style='border-style: none;'>
                <div class="card-body" style="text-align: center;">
                  <h1 class="font-weight-bold count"><?php echo $candidateRows; ?></h1>
                  <h5 class="">Candidates</h5>
                </div>
              </div>
            </div>
          </div>
      </div>

      <section id="team">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                  <h2 class="text-white">Meet Our Team</h2>
                  <p class="text-white">Team members help customers find desired goods or services. They answer questions, make purchase recommendations and explain the benefits of the goods or services. Once they have helped customers make a satisfactory selection, they add up the total purchases and complete the transactions.</p>
                </div>
            </div>
            <div class="row justify-content-center">
            <div class="col-lg-3 col-md-6">
                    <div class="member">
                      <div class="member-img">
                          <img src="assets/images/mepic.jpg" class="img-fluid" alt="">
                      </div>
                        <div class="member-info">
                            <h4>Vishal Watts</h4>
                            <span class="text-white">CEO, Programmer</span>
                            <div class="social-links">
                                <a href="https://www.facebook.com/mr.vishalwatts"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://twitter.com/vishalwatts92"><i class="fab fa-twitter"></i></a>
                                <a href="https://www.linkedin.com/in/vishalwatts/"><i class="fab fa-linkedin-in"></i></a>
                                <!-- <a href="#"><i class="fab fa-pinterest-p"></i></a> -->
                                <a href="https://www.instagram.com/vishalwatts92"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="member">
                      <div class="member-img">
                          <img src="assets/images/suraj1.jpg" class="img-fluid" alt="">
                      </div>
                        <div class="member-info">
                            <h4>Suraj Garg</h4>
                            <span class="text-white">Graphic Designer</span>
                            <div class="social-links">
                                <a href="https://www.facebook.com/suraj.garg.750546"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <!-- <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a> -->
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
    include ("contact.php") ;
    }
      ?>      
    </div>
    <!-- <section class="text-center mt-2 mb-10">
        <div class="container">
          <h1 class="jumbotron-heading">About Us</h1>
          <p class="lead text-muted">Nokri Jugaad is a platform where you can find your #dream job. We Post job articles on daily basis you can follow the articles or apply for job.</p>
          <p>
            <a href="#" class="btn btn-primary my-2">Read More</a>
            <a href="#" class="btn btn-secondary my-2">Contact Us</a>
          </p>
        </div>
      </section> -->
      
    <!-- <main role="main" class="container">
      <div class="row">
      </div>
    </main> -->
    <!-- <nav class="blog-pagination">
      <a class="btn btn-outline-primary" href="#">Older</a>
      <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
    </nav> -->
    <footer class="blog-footer bg-dark" >
      <p class="text-white">
        Devloped By 
        <a class="text-white font-weight-bold" href="https://wattsitsolutions.blogspot.com/">
          Watts IT Solutions
        </a>
         For 
        <a class="text-white font-italic" href="https://www.instagram.com/nokrijugaad/">
          @NokriJugaad
        </a>
        .
      </p>
      <p>
        <a class="text-white" href="#">Back to top</a>
      </p>
    </footer>
<div class="modal fade" id="contact" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="contact">Login Required</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <p for="msj">Se enviará este mensaje a la persona que desea contactar, indicando que te quieres comunicar con el. Para esto debes de ingresar tu información personal.</p>
        </div>
        <!--  <div class="form-group">
          <label for="txtFullname">Nombre completo</label>
          <input type="text" id="txtFullname" class="form-control">
        </div>
        <div class="form-group">
          <label for="txtEmail">Email</label>
          <input type="text" id="txtEmail" class="form-control">
        </div>
        <div class="form-group">
          <label for="txtPhone">Teléfono</label>
          <input type="text" id="txtPhone" class="form-control">
        </div> -->
      </div>
      <div class="modal-footer">
        <a href="userlogin.php" type="button" class="btn btn-secondary">Login</a>
        <a href="" type="button" class="btn btn-primary">Sign Up</a>
      </div>
    </div>
  </div>
</div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="https://getbootstrap.com/docs/4.0/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="https://getbootstrap.com/docs/4.0/assets/js/vendor/popper.min.js"></script>
    <script src="https://getbootstrap.com/docs/4.0/dist/js/bootstrap.min.js"></script>
    <script src="https://getbootstrap.com/docs/4.0/assets/js/vendor/holder.min.js"></script>
    <script>
      Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script>
$(document).ready(function(){
 load_data();
 function load_data(query){
  $.ajax({
   url:"fetch.php",
   method:"POST",
   data:{query:query},
   success:function(data)
   {
    $('#result').html(data);
   }
  });
 }
 $('#search').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });
});
</script>
<script>
  $(document).ready(function(){
    $('#applyJob').click(function(){
      // var applyJobId=$('#applyJob').serialize();
      alert('fuck');
      // return false;
    })
  });
</script>
<!-- <script>
$(document).ready(function(){
 function jobView(query){
  $.ajax({
   url:"fetch_job.php",
   method:"POST",
   data:{query:query},
  //  success:function(data)
  //  {
  //   $('#result').html(data);
  //  }
  });
 }
 $('#apply').click(function(){
  var jobData = $(this).val();
  jobView(jobdata);
 });
});
</script> -->
<script>
  $('.count').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 3000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
<script>
    var typing=new Typed(".type-data", {
   strings: [ "Understand Your Need Batter", "Know What You Want"],
   typeSpeed: 100,
   backSpeed: 40,
   loop: true,
 });
    </script>
    <!-- <script>
      $('#apply').click(function(){
        var jobId = document.getElementById("jobId").innerHTML;
        var user = <?php echo json_encode($_SESSION['candidate']); ?>;
        //var postData='jobId='+jobId+'&user='+user;
        if (user !==null) {
          aler('user');
          // $.ajex({
          //   url : "apply.php",
          //   type: "POST",
          //   data: data,
          //   success: function(data,status,xhr){
          //     $("#apply").removeClass("btn-dark").addClass("btn-danger");
          //   },
          //   error: function(jqXHR, status, errorThrown){
          //     alert("fuck");
          //   }
          // });
        } else {
          // alert("logdin"); when not login
        }
        // alert(session);
      });
    </script> -->
  </body>
</html>