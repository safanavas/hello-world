<!DOCTYPE html>
<html>
<head>
	<title>Searching</title>
	<title>profile details</title>
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

if(isset($_POST['search'])){ 
	$suid=$_POST['suid'];
	 $_SESSION['suid'] =$_POST['suid'];
 if (empty($_POST['suid'])) {
$error = "uid is empty";
echo $error;
}
else{
	$connection = mysqli_connect("localhost", "root", "","prof_detail");
	$db = mysqli_select_db($connection,"prof_detail");
	$query = mysqli_query( $connection,"SELECT * from users where uid='$suid' ");
	$rows = mysqli_num_rows($query);
if ($rows == 1) {
	while($row = $query->fetch_assoc()) {
        // echo "uid: " . $row["uid"]. " - Name: " . $row["name"]. " -Email". $row["email"]." - Password: ". $row["password"]."-Phone:". $row["phone"]."<br>";

        $uuid=$row["uid"];
        $uname=$row["name"];
        $uemail=$row["email"];
        $upass=$row["password"];
        $uphone=$row["phone"];
    }
}
else{
	$error = "Uid does not exist";
echo $error;
}
}
}

?>

<div class="container ">
<form action="update_detl.php" method="post">

<h2 align="center">Details</h2><br>
<!-- <div class="row pad_top">
	<label for="exampleFormControlInput1">Full Name:</label>
	<input type="text" name="name" value=" <?php echo $uuid ; ?>" class="form-control" placeholder="Enter Full name">
</div> -->
<div class="row ">
	<label for="exampleFormControlInput1">Full Name:</label>
	<input type="text" name="uname" value=" <?php echo $uname ; ?>" class="form-control" placeholder="Enter Full name">
</div>
<div class="row">
	<label for="exampleFormControlInput1">Email:</label>
	<input type="email" name="uemail" value=" <?php echo $uemail ; ?>" class="form-control" placeholder="Enter email address">
</div>
<div class="row">
	<label for="exampleFormControlInput1">Password:</label>
	<input type="password" name="upass" value=" <?php echo $upass ; ?>" class="form-control" placeholder="Enter password">
</div>
<div class="row">
	<label for="exampleFormControlInput1">Phone:</label>
	<input type="text" name="uphone" value=" <?php echo $uphone ; ?>" class="form-control" placeholder="Enter phonenumber">
</div>


<div style="margin-top: 20px">
<button type="submit" name="update" class="btn btn-primary " style="margin-left: 100px;">Update</button>
</div>
<b><a class="pad_logout" href="user_logout.php">   Log Out</a></b>
</body>
</html>