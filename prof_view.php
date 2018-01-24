<?php
include('login_usr.php'); // Includes Login Script

if(isset($_SESSION['lemail'])){
header("location: updt_prof.php");
}
?>
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

if(isset($_POST['save'])){ 
    
    $name=$_POST['name'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $phone=$_POST['phone'];
    // echo $_POST['name'];
    // echo $_POST['email'];
    // echo $_POST['pass'];
    // echo $_POST['phone'];
$connection = mysqli_connect("localhost", "root", "","prof_detail");

$query = mysqli_query( $connection,"SELECT * from users where email='$email' ");
//print_r($query);
$rows = mysqli_num_rows($query);
if ($rows == 1) {
?>
<!--  header("location: hello.php"); // Redirecting To Other Page
echo '<script> window.location="http://localhost/GitHub/my-profile/helloworld.php"</script>';
echo "email already exist"; -->

<div class="alert alert-danger alert_pad" role="alert">
 Email already exist!
</div>
<?php
} else {

$query1 = "INSERT INTO `prof_detail`.`users`(`uid`, `name`, `email`, `password`, `phone`)VALUES ('', '$name', '$email', '$pass', '$phone')";
$result = $connection->query($query1) ;
  //echo "signed up successfully";
?>
<div class="alert alert-danger alert_pad"  role="alert">
  Details Submitted !
</div>
<?php
}

}
    

?>

<div class="container ">
<form action="login_usr.php" method="post">

<h2 align="center">Login</h2><br>

<div class="row pad_top">
	<label for="exampleFormControlInput1">Email:</label>
	<input type="email" name="lemail" class="form-control" placeholder="Enter email address">
</div>
<div class="row">
	<label for="exampleFormControlInput1">Password:</label>
	<input type="password" name="lpassword" class="form-control" placeholder="Enter Password">
</div>
<div style="margin-top: 20px">
<button type="submit" name="log" class="btn btn-primary " style="margin-left: 100px;">Login</button>
</div>



</form>
</div>

	<!-- <b><a class="pad_logout" href="user_logout.php">   Log Out</a></b> -->

</body>
</html>