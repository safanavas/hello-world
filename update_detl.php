<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Updated</title>
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

if(isset($_POST['update'])){ 
    $name1=$_POST['uname'];
    $email1=$_POST['uemail'];
    $pass1=$_POST['upass'];
    $phone1=$_POST['uphone'];
   $suid1= $_SESSION['suid'];
$connection = mysqli_connect("localhost", "root", "","prof_detail");

$query = mysqli_query( $connection,"SELECT * from users where uid='$suid1'");
//print_r($query);
$rows = mysqli_num_rows($query);
if ($rows == 1) {



$query1 = "UPDATE users SET  name ='$name1', email='$email1', password='$pass1', phone='$phone1' WHERE uid='$suid1'";
$result = $connection->query($query1) ;
  //echo "signed up successfully";
?>
<div class="alert alert-danger alert_pad"  role="alert">
  Details Updated !
</div>
<?php
}

}
    

?>
<b><a class="pad_logout" href="user_logout.php">   Log Out</a></b>
</body>
</html>