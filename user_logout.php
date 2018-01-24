<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: try.php"); // Redirecting To Home Page
}
?>