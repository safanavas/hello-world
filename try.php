<?php
include('login_usr.php'); // Includes Login Script

if(isset($_SESSION['lemail'])){
header("location: updt_prof.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign-up and Login</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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

<script type="text/javascript">
	$(document).ready(function(){
       $("#log").hide();
	$("#login").click(function(){
		console.log("ooooo");
		// $('#log').css('display', 'inline-block');
		// $('#sign').css('display', 'none');
		$("#sign").hide();
	    $("#log").show();
	});
	$("#signup").click(function(){
		console.log("ooooo");
		// $('#sign').css('display', 'inline-block');
		// $('#log').css('display', 'none');
		$("#sign").show();
		$("#log").hide();
 });
	// $("#signup").click(function(){
	// 	$("#sign").show();
	// 	$("log").hide();
	// });
});
</script>


</head>
<body>


 <!-- NAVBAR CODE -->
 <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="try.php">Home</a></li>
      <!-- <li><a href="#">Page 1</a></li>
      <li><a href="#">Page 2</a></li> -->
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#" id="signup"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#" id="login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>

<div class="container ">
<!--  Sign up code -->
<div id="sign">
<form action="prof_view.php" method="post">

<h2 align="center">Sign-up</h2><br>

<div class="row pad_top">
	<label for="exampleFormControlInput1">Full Name:</label>
	<input type="text" name="name" class="form-control" placeholder="Enter Full name">
</div>
<div class="row">
	<label for="exampleFormControlInput1">Email:</label>
	<input type="email" name="email" class="form-control" placeholder="Enter email address">
</div>
<div class="row">
	<label for="exampleFormControlInput1">Password:</label>
	<input type="password" name="pass" class="form-control" placeholder="Enter password">
</div>
<div class="row">
	<label for="exampleFormControlInput1">Phone:</label>
	<input type="text" name="phone" class="form-control" placeholder="Enter phonenumber">
</div>


<div class="signup">
<button type="submit" name="save" class="btn btn-primary " >Sign-up</button>
<!-- a href="http://localhost//GitHub/my-profile/prof_view.php" class="button btn btn-primary">Login</a> -->
</div>

</form>
</div>


<!-- Login code starts here -->


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
<div id="log">

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

</div>

</body>
</html>