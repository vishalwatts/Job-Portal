<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="insta.png">
    <title>Mario Party</title>
    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.0/examples/sign-in/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <form class="form-signin" method="post">
      <img class="mb-4" src="insta.png" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <label for="" class="sr-only">First Name</label>
      <input type="" name="f_name" id="f_name" class="form-control" placeholder="First Name" required autofocus>
      <label for="" class="sr-only">Last Name</label>
      <input type="" name="l_name" id="l_name" class="form-control" placeholder="Last Name" >
      <label for="" class="sr-only">Date of Birth</label>
      <input type="" name="dob" id="dob" class="form-control" placeholder="Data of Birth" >
      <label for="" class="sr-only">Eamil</label>
      <input type="email" name="email" id="email" class="form-control" placeholder="Eamil">
      <label for="" class="sr-only">Mobile</label>
      <input type="" name="phn" id="phn" class="form-control" placeholder="Mobile" >
      <label for="" class="sr-only">City</label>
      <input type="" name="city" id="city" class="form-control" placeholder="City" >
      <input type="submit" name="submit" id="submit" class="btn btn-lg btn-primary btn-block" value="Sign In">
      <!-- <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button> -->
      <p class="mt-5 mb-3 text-muted">&copy; Mario Party 2021</p>
    </form>
  </body>
</html>
<?php
//session_start();
// initializing variables
$f_name = "";
$l_name = "";
$dob = "";
$email = "";
$phn = "";
$city = "";
$errors = array(); 
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'database');
// REGISTER USER
if (isset($_POST['submit'])) {
  // receive all input values from the form
  $f_name = mysqli_real_escape_string($db, $_POST['f_name']);
  $l_name = mysqli_real_escape_string($db, $_POST['l_name']);
  $dob = mysqli_real_escape_string($db, $_POST['dob']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $phn = mysqli_real_escape_string($db, $_POST['phn']);
  $city = mysqli_real_escape_string($db, $_POST['city']);
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($f_name)) { array_push($errors, "Username is required"); }
  // if (empty($l_name)) { array_push($errors, "Password is required"); }
  // if (empty($dob)) { array_push($errors, "Password is required"); }
  // if (empty($email)) { array_push($errors, "Password is required"); }
  // if (empty($phn)) { array_push($errors, "Password is required"); }
  // if (empty($city)) { array_push($errors, "Password is required"); }
  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  // $user_check_query = "SELECT * FROM insta WHERE userId='$username' OR pwd='$email' LIMIT 1";
  // $result = mysqli_query($db, $user_check_query);
  // $user = mysqli_fetch_assoc($result);
  
  // if ($user) { // if user exists
  //   if ($user['username'] === $username) {
  //     array_push($errors, "Username already exists");
  //   }

  //   if ($user['email'] === $email) {
  //     array_push($errors, "email already exists");
  //   }
  // }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
    // $password = md5($password_1);//encrypt the password before saving in the database

    $query = "INSERT INTO janta(first_name, last_name, dob, email, phn, city) 
          VALUES('$f_name', '$l_name', '$dob', '$email', '$phn', '$city')";
          if (mysqli_query($db, $query)) {
            echo '<script>alert("Data Submited Done!")</script>';
          } else {
            echo '<script>alert("Something wrong!")</script>';
          }
          
    // mysqli_query($db, $query);
    // $_SESSION['username'] = $username;
    // $_SESSION['success'] = "You are now logged in";
    // header('location: index.php');
  }
}