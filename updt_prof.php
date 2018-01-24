<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
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

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
    <!-- 1 -->
      <li style="color:#9d9d9d; margin-top: 15px;">Welcome <?php echo $_SESSION['lemail'] ; ?></li>
      <!-- <li><a href="#">Page 2</a></li> --> 
    </ul>
    <ul class="nav navbar-nav navbar-right">
     <!--  <li><a href="#" id="signup"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#" id="login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li> -->
      <li><a href="user_logout.php">Log Out</a></li>
    </ul>
  </div>
</nav>

<div class="container"></div>




<form class="form-inline my-2 my-lg-0" style="margin-left: 580px;" action="search.php" method="post">


     <!--  <div class="dropdown">
  <button onclick="myFunction()" class="dropbtn">Dropdown</button> 
  <div id="myDropdown" class="dropdown-content">
    <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
    
  </div>
</div> -->
     <div class="dropdown">
  <!-- <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Dropdown Example
  <span class="caret"></span></button> -->
  <input data-toggle="dropdown" class="dropdown-toggle" type="text" id="suid" name="suid" onkeyup
  ="myFunction()" placeholder="search uid " style="padding: 10px">
  <ul class="dropdown-menu" id="valser">
    
  </ul>
</div>

      <!-- <input type="text" name="suid" placeholder="search uid " style="padding: 10px"> -->
      <button class="btn btn-outline-success my-2 my-sm-0"  name="search" type="submit"><img src="Search.png" width="30" height="30" alt=""></button>
      

    </form>

<div>

</div>


<!-- <script type="text/javascript">
	function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}
 function filterFunction(){
 	var input, filter, ul, li, a, i;
  input = document.getElementById("myInput");
  filter = input.value();
  
 }


</script> -->

<script type="text/javascript">
	function myFunction(){
	$("#valser").html("");
		console.log("hello");
		var seres = $("#suid").val();
		url='ser.php';
		$.ajax({
        url: url,
        type: "POST",
        dataType: "json",
        data: {
        	seres: seres
        },
        beforeSend: function(XMLHttpRequest) {
        },
        complete: function(XMLHttpRequest, textStatus) {
           
        },
        success:function(response, XMLHttpRequest, textStatus) {
        	for (var i = 0; i < response.length; i++) {
        	$("#valser").append("<li><a onclick='deletek("+response[i].uid+")' href='#'>"+response[i].name+"</a></li>");
        	}
        	},
        error: function  (exception) {
      // Your error handling logic here..
      alert("Sorry, something went wrong. Start again please!");
        }
        });	
	};

	function deletek(duid){
		console.log(duid);
		 $.post("ser.php",
    {
        name: duid,
        
    },
    function(data){
        alert(data);
    });
	};
</script>


</body>
</html>