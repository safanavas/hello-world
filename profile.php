<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Your Home Page</title>
<link href="style.css" rel="stylesheet" type="text/css">
<!-- Latest compiled and minified CSS -->
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
	<div class="well well-lg lob_font ">
	<b> Welcome : <?php echo $_SESSION['login_user']; ?> </b>
     <b><a class="pad_logout" href="logout.php">   Log Out</a></b>
     <?php
    echo "<br>"."Today is " . date("Y/m/d") ; ?>
	</div>

	<div class="container">
  <h2></h2>  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner ">
      <div class="item active carousel-img">
      	<img src="pic1.jpg" alt="coffee" style="width:100%;">
		<div class="carousel-caption">
               <h1>Croissant</h1>
              
               <p>Toffee jelly-o tootsie roll gummi bears cake dessert biscuit. Apple pie marzipan tiramisu muffin. Wafer gingerbread liquorice 				  marzipan sesame snaps wafer. Topping danish fruitcake.

		Chocolate cake sesame snaps sweet roll danish muffin gummies topping. Dragée oat cake cake. Dessert sugar plum chocolate bar gingerbread macaroon candy canes jelly-o chocolate cake.

		Gingerbread caramels jelly. Soufflé icing chocolate. Croissant jelly macaroon gummies lollipop</a>
               </p>
      </div>
 </div>
      <div class="item carousel-img ">
      	<img src="pic2.jpg" alt="coffee" style="width:100%;">
        <div class="carousel-caption ">
               <h1>Marshmallow</h1>
               
               <p>Tootsie roll jelly beans sesame snaps sesame snaps. Chocolate cake ice cream ice cream. Dragée cake dragée muffin. I love tootsie roll chocolate bar marshmallow gingerbread pie dessert chocolate.

Dessert tart danish. Sweet roll jelly marzipan bonbon croissant I love candy canes. Bonbon chocolate cake bonbon gingerbread jujubes.
               </p>
      </div>
    </div>
      <div class="item carousel-img" >
      	<img src="pic3.jpg" alt="coffee" style="width:100%;">
        <div class="carousel-caption" >
               <h1>Apple Pie</h1>
               
               <p>Tiramisu topping chupa chups bonbon powder pastry donut wafer. Cake ice cream cookie. Pie liquorice danish cake I love jelly beans I love cotton candy cookie. Lemon drops tootsie roll pie chocolate bar pudding cheesecake.

Jujubes marzipan wafer topping I love. Apple pie jelly gummies brownie. Oat cake cupcake pastry chocolate tiramisu jelly I love halvah biscuit.
               </p>
      </div>    
        </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</body>
</html>
