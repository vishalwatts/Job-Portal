<main role="main" class="container">
    <div class="row">
        <div class="col-md-12 blog-main">
            <h3 class="pb-3 mb-4 font-italic border-bottom"></h3>
            <div class="blog-post">
                <h2 class="blog-post-title text-white">Contact Us</h2>
                <p class="text-white">24x7 We are available for you.</p>
                <hr>
                <form method="post">
                    <div class="form-row">
                        <div class="col">
                            <label class="text-white">Full Name</label>
                            <input type="name" name="name" id="name" class="form-control" placeholder="Your name">
                        </div>
                        <div class="col">
                            <label class="text-white">Mobile number</label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">+91</div>
                                </div>
                                <input type="phone" class="form-control" id="mobile" name="mobile" placeholder="Mobile Number">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="text-white">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
                    </div>
                    <div class="form-group">
                        <label for="" class="text-white">Your Massage</label>
                        <textarea class="form-control" id="massage" name="massage" rows="5"></textarea>
                    </div>
                    <input type="submit" name="submit" id="submit" class="btn btn-primary mb-2" value="Send">
                </form>
            </dv>
        </div>          
    </div><!-- /.row -->
</main><!-- /.container -->
<?php
// initializing variables
$name = "";
$mobile = "";
$email = "";
$massage    = "";
$errors = array(); 
// connect to the database
include ("conn.php");
// REGISTER USER
if (isset($_POST['submit'])) {
  // receive all input values from the form
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $mobile = mysqli_real_escape_string($db, $_POST['mobile']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $massage = mysqli_real_escape_string($db, $_POST['massage']);
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($name)) { array_push($errors, "Username is required"); }
  if (empty($mobile)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Username is required"); }
  if (empty($massage)) { array_push($errors, "Password is required"); }
  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  if (count($errors) == 0) {
  	$massage_query = "INSERT INTO contact(fullName, phone, email, msg) VALUES ('$name', '$mobile', '$email', '$massage')";
  	if (mysqli_query($db, $massage_query)) { // if user exists
        echo "<script>alert('Massage Send Successfully!! Thank You.');</script>";
  	} else {
  		echo "Email not exists";
  	}
  }
  mysqli_close($db);
}
?>
<!-- $sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
} -->