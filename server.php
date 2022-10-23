<?php
session_start();

// initializing variables
$fname = "";
$mname = "";
$lname = "";
$gender = "";
$username = "";
$email    = "";
$errors = array(); 

//Connect to the database
$db = mysqli_connect('localhost', 'root', '', 'jimcordova');

//Registration
if (isset($_POST['reg_user'])) {
  //Input Values
  $fname = mysqli_real_escape_string($db, $_POST['fname']);
  $mname = mysqli_real_escape_string($db, $_POST['mname']);
  $lname = mysqli_real_escape_string($db, $_POST['lname']);
  $gender = mysqli_real_escape_string($db, $_POST['gender']);
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $password_repeat = mysqli_real_escape_string($db, $_POST['password_repeat']);

  //Error Array
  if (empty($fname)) { array_push($errors, "First Name is required"); }
  if (empty($lname)) { array_push($errors, "Last Name is required"); }
  if (empty($gender)) { array_push($errors, "Input your Gender"); }
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password)) { array_push($errors, "Password is required"); }
  if ($password != $password_repeat) {
	array_push($errors, "The two passwords do not match");
  }

  if (count($errors) == 0) {
  	$query = "INSERT INTO users (fname, mname, lname, gender, username, email, password) 
  			VALUES('$fname', '$mname', '$lname', '$gender', '$username', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: test1.php');
  }
}

?>