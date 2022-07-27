<?php 
session_start(); 
if (isset($_SESSION['candidate'])) {
   header('location: index.php');
 } else {
   //header('location: login.php');
 } ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
  <link rel="stylesheet" href="assets/css/login.css">
</head>
<body >
<div class="container">
  <section id="content">
    <form method="post" action="">
      <h1>User Login</h1>
      <div>
        <input type="text" placeholder="Email" required="" id="email" name="email"/>
      </div>
      <div>
        <input type="password" placeholder="Password" required="" id="password" name="password"/>
      </div>
      <div>
        <input type="submit" value="Log in" name='submit'/>
        <a href="#">Lost your password?</a>
        <a href="#">Register</a>
      </div>
    </form><!-- form -->    
  </section><!-- content -->
</div>
</body>
</html>
<?php
// initializing variables
$email = "";
$password    = "";
$errors = array(); 
// connect to the database
include ("conn.php");
// REGISTER USER
if (isset($_POST['submit'])) {
  // receive all input values from the form
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($email)) { array_push($errors, "Username is required"); }
  if (empty($password)) { array_push($errors, "Password is required"); }
  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  if (count($errors) == 0) {
  	$user_check_query = "SELECT * FROM candidates WHERE email='$email' OR pwd='$password' LIMIT 1";
  	$result = mysqli_query($db, $user_check_query);
  	$user = mysqli_fetch_assoc($result);
  	if ($user) { // if user exists
  		echo "Email exists";
  		$_SESSION['candidate'] = $email;
  		header('location: index.php');
  	} else {
  		echo "Email not exists";
  	}
  }
}
?>