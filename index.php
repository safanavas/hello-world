
<!DOCTYPE html>
<html>
<head>
	<title>Search and Delete</title>
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
      <a class="navbar-brand" href="#">Search Application</a>
    </div>
    <ul class="nav navbar-nav">
   
      <li style="color:#9d9d9d; margin-top: 15px;">Welcome</li>
      
    </ul>
    <ul class="nav navbar-nav navbar-right">
    
      <li><a href="user_logout.php">Log Out</a></li>
    </ul>
  </div>
</nav>

<div class="container"></div>



<form class="form-inline my-2 my-lg-0" style="margin-left: 580px;" action="search.php" method="post">


     <div class="dropdown">
 
  <input data-toggle="dropdown" class="dropdown-toggle" type="text" id="suid" name="suid" onkeyup
  ="myFunction()" placeholder="search uid " style="padding: 10px">
  <ul class="dropdown-menu" id="valser">
    
  </ul>
    </div>

    <button class="btn btn-outline-success my-2 my-sm-0"  name="search" type="submit"><img src="Search.png" width="30" height="30" alt=""></button>
      

    </form>

<div>

</div>


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