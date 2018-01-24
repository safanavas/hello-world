<?php
// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";
echo "llll";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["user"]);

}



?>