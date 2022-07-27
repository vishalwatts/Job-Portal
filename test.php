<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTIga1iTzr3Jgft2Ax-lQcgnd3LGBERQoFsOMUo28XrxiZdofhrFJxaG9nUj9K5iIps2fg&usqp=CAU">
    <title>Blog Template for Bootstrap</title>
    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/4.0/examples/blog/blog.css" rel="stylesheet">
    <!-- icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="icon" type="image/x-icon" href="/images/favicon.ico"> -->
    <style>
      .fa {
        padding: 8px;
        font-size: 16px;
        width: 30px;
        text-align: center;
        text-decoration: none;
      }
      .fa:hover {
        opacity: 0.7;
      }
      .fa-facebook {
        background: #3B5998;
        color: white;
      }
      .fa-linkedin {
        background: #007bb5;
        color: white;
      }
      .fa-youtube {
        background: #bb0000;
        color: white;
      }
      .fa-instagram {
        background: #125688;
        color: white;
      }
      /* card */
      body {
        margin: 0;
        font-family: Roboto, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        font-size: .8125rem;
        font-weight: 400;
        line-height: 1.5385;
        color: #333;
        text-align: left;
        background-color: #f5f5f5
      }
      .mt-50 {
        margin-top: 50px
      }
      .mb-50 {
        margin-bottom: 50px
      }
      .bg-teal-400 {
        background-color: #26a69a
      }
      a {
        text-decoration: none !important
      }
      /* .fa {
        color: red
      } */
    </style>
  </head>
  <body>
    <div class="container">
    <?php 
    session_start(); 
    if (isset($_SESSION['candidate'])) {
      $user=1; ?>
       <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
          <div class="col-4 pt-1">
          <a href="https://www.facebook.com/nokrijugaard" class="fa fa-facebook"></a>          
          <a href="#" class="fa fa-linkedin"></a>
          <a href="#" class="fa fa-youtube"></a>
          <a href="https://www.instagram.com/nokrijugaad/" class="fa fa-instagram"></a>
          </div>
          <div class="col-4 text-center">
            <a class="blog-header-logo text-dark" href="#">Nokri Jugaad</a>
          </div>
          <div class="col-4 d-flex justify-content-end align-items-center">
            <a class="text-muted" href="index.php?page=search">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mx-3"><circle cx="10.5" cy="10.5" r="7.5"></circle><line x1="21" y1="21" x2="15.8" y2="15.8"></line></svg>
            </a>
            <a class="btn btn-sm btn-danger" href="logout.php">Logout</a>
          </div>
        </div>
      </header>
      <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
          <a class="p-2 text-muted" href="index.php">Job Feed</a>
          <a class="p-2 text-muted" href="index.php?page=resume">Resume</a>
          <a class="p-2 text-muted" href="index.php?page=profile">Profile</a>
          <a class="p-2 text-muted" href="index.php?page=about">About</a>
          <a class="p-2 text-muted" href="index.php?page=disclaimer">Disclaimer</a>
          <a class="p-2 text-muted" href="index.php?page=privacy-policy">Privacy Policy</a>
          <a class="p-2 text-muted" href="index.php?page=contact">Conatact Us</a>
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
            <a class="blog-header-logo text-dark" href="#">Nokri Jugaad</a>
          </div>
          <div class="col-4 d-flex justify-content-end align-items-center">
            <a class="text-muted" href="index.php?page=search">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mx-3"><circle cx="10.5" cy="10.5" r="7.5"></circle><line x1="21" y1="21" x2="15.8" y2="15.8"></line></svg>
            </a>
            <a class="btn btn-sm btn-primary" href="userlogin.php">Login</a>
          </div>
        </div>
      </header>
      <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
          <a class="p-2 text-muted" href="index.php">Job Feed</a>
          <a class="p-2 text-muted" href="index.php?page=about">About</a>
          <a class="p-2 text-muted" href="index.php?page=disclaimer">Disclaimer</a>
          <a class="p-2 text-muted" href="index.php?page=privacy-policy">Privacy Policy</a>
          <a class="p-2 text-muted" href="index.php?page=contact">Conatact Us</a>
          <!-- <a class="p-2 text-muted" href="#">Opinion</a>
          <a class="p-2 text-muted" href="#">Science</a>
          <a class="p-2 text-muted" href="#">Health</a>
          <a class="p-2 text-muted" href="#">Style</a>
          <a class="p-2 text-muted" href="#">Travel</a> -->
        </nav>
      </div><?php } ?>
        <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
        <div class="col-md-6 px-0">
          <h1 class="display-4 font-italic">We Understand Your Need Better</h1>
          <p class="lead my-3">Nokri Jugaad is a platform where you can find your #dream job. We Post job articles on daily basis you can follow the articles or apply for job.</p>
          <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">become Pro Member...</a></p>
        </div>
      </div>
    </div>
    <main role="main" class="container">
    <div class="row">
        <div class="col-md-12 blog-main">
            <!-- <h3 class="pb-3 mb-4 font-italic border-bottom"></h3> -->
            <div class="blog-post">
                <h2 class="blog-post-title">Job Search</h2>
                <hr>
                <div class="input-group">
                    <input type="text" class="form-control" name="search" id="search">
                    <div class="input-group-append">
                        <input class="btn btn-outline-secondary" type="submit" name="submit" value="Search">
                    </div>
                </div>
                <div id="result"></div>
            </dv>
        </div>          
    </div><!-- /.row -->
</main><!-- /.container -->
    <footer class="blog-footer">
      <p>Devloped By <a href="https://wattsitsolutions.blogspot.com/">Watts IT Solutions</a> For <a href="https://www.instagram.com/nokrijugaad/">@NokriJugaad</a>.</p>
      <p>
        <a href="#">Back to top</a>
      </p>
    </footer>
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

 function load_data(query)
 {
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
  </body>
</html>