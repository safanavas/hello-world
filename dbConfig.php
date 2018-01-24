<?php

$conn=mysqli_connect("localhost","root","password","testDB");

if(!$conn)
{
die("Connection failed: " . mysqli_connect_error());
}

?>