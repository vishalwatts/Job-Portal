<?php 
session_start(); 
if (isset($_SESSION['author_admin'])) {
   header('location: dash.php');
 } else {
   //header('location: login.php');
 } ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
  <link rel="stylesheet" href="css/login.css">
</head>
<body>
<div class="container">
  <section id="content">
    <form method="post" action="">
      <h1>Login Form</h1>
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
	<!-- <form method="post" action="">
		<label>Email</label>
		<input type="email" name="email" placeholder="Email">
		<label>Password</label>
		<input type="password" name="password" placeholder="Password">
		<input type="submit" name="submit" placeholder="Submit">
	</form> -->
</body>
</html>
<?php
// initializing variables
$email = "";
$password    = "";
$errors = array(); 
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'database');
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
  	$user_check_query = "SELECT * FROM adminlogin WHERE adminEmail='$email' OR adminPass='$password' LIMIT 1";
  	$result = mysqli_query($db, $user_check_query);
  	$user = mysqli_fetch_assoc($result);
  	if ($user) { // if user exists
  		echo "Email exists";
  		$_SESSION['author_admin'] = $email;
  		header('location: dashboard.php');
  	} else {
  		echo "Email not exists";
  	}
  }
  // Finally, register user if there are no errors in the form
  // if (count($errors) == 0) {
    // $password = md5($password_1);//encrypt the password before saving in the database
    // $query = "INSERT INTO insta (userId, pwd) 
    //       VALUES('$username', '$password')";
    //       if (mysqli_query($db, $query)) {
    //         echo '<script>alert("Invalid Username or Password")</script>';
    //       } else {
    //         echo "Something wrong !";
    //       }        
    // mysqli_query($db, $query);
    // $_SESSION['username'] = $username;
    // $_SESSION['success'] = "You are now logged in";
    // header('location: index.php');
  //}
}
?>