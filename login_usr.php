<!DOCTYPE html>
<html>
<head>
	
	<title>login</title>
	<link href="style1.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>


<?php
session_start();
$error='';
if(isset($_POST['log'])){ 

  if (empty($_POST['lemail']) || empty($_POST['lpassword'])) {
$error = "Email or Password is empty";
echo $error;
}
else{
  // Define $username and $password
	
$lemail=$_POST['lemail'];
$lpass=$_POST['lpassword'];

// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysqli_connect("localhost", "root", "","prof_detail");
// To protect MySQL injection for Security purpose
$lemail = stripslashes($lemail);
$lpass = stripslashes($lpass);
$lemail = mysqli_real_escape_string($connection ,$lemail);
$lpass = mysqli_real_escape_string($connection ,$lpass);
// Selecting Database
$db = mysqli_select_db($connection,"prof_detail");
// SQL query to fetch information of registerd users and finds user match.
$query = mysqli_query( $connection,"SELECT * from users where email='$lemail' AND password ='$lpass'");
// print_r($query);
$rows = mysqli_num_rows($query);
if ($rows == 1) {
$_SESSION['lemail']=$lemail;
$_SESSION['lpass']=$lpass; // Initializing Session
header("location: prof_view.php"); // Redirecting To Other Page
} else {
//header("location: update.php");
?>
<div class="alert alert-danger alert_pad"  role="alert">
  Email or Password is invalid !
</div>
<?php
// $error = "Email or Password is invalid";
// echo $error;
}
mysqli_close($connection); // Closing Connection
}
}
?>
</body>
</html>