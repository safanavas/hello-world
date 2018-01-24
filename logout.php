<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: helloworld.php"); // Redirecting To Home Page
}
?>