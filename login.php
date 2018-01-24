<?php
session_start();
$error='';
if(isset($_POST['save_l'])){ 

  if (empty($_POST['loguser']) || empty($_POST['logpassword'])) {
$error = "Username or Password is empty";
echo $error;
}
else{
  // Define $username and $password
$username=$_POST['loguser'];
$password=$_POST['logpassword'];

// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysqli_connect("localhost", "root", "","testlogin");
// To protect MySQL injection for Security purpose
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysqli_real_escape_string($connection ,$username);
$password = mysqli_real_escape_string($connection ,$password);
// Selecting Database
$db = mysqli_select_db($connection,"testlogin");
// SQL query to fetch information of registerd users and finds user match.
$query = mysqli_query( $connection,"SELECT * from usr_detl where semail='$username' AND spassword ='$password'");
// print_r($query);
$rows = mysqli_num_rows($query);
if ($rows == 1) {
$_SESSION['login_user']=$username; // Initializing Session
header("location: helloworld.php"); // Redirecting To Other Page
} else {
$error = "Username or Password is invalid";
echo $error;
}
mysqli_close($connection); // Closing Connection
}
}

?>