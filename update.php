<!DOCTYPE html>
<html>
<head>
	<title>Sign-up and Login</title>
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

<div class="container ">
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



<a href="http://localhost//GitHub/my-profile/prof_view.php" class="button btn btn-primary">Login</a>
</div>
</form>
</div>
</body>
</html>