<?php
include('login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: profile.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="style.css"> 

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">

  <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css">

</head>

<body id="body">
   
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"></a>
  <nav class="navbar navbar-light bg-faded">
  <a class="navbar-brand" href="#run">
    <img src="safa.png" width="80" height="60" alt="">
  </a>
</nav>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#"><img src="home-icon.png" width="30" height="30" alt=""> <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Menu
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><img src="Search.png" width="30" height="30" alt=""></button>
    </form>
  </div>
</nav>


    <div class ="paddtop container-fluid">
<div class="row">

  <div class="col-sm-3">
  
<div class="card curve " style="width: 18rem;">
  <img class="card-img-top innercurve" src="work.jpg" alt="Card image cap">
  <div class="card text-white bg-dark outercurve " >  
  <div class="card-body  ">
    <h5 class="card-title cure">Work</h5>
    <p class="card-text ">Let the beauty of what you love be what you do.</p>
    <a href="#" class="btn btn-primary">Move on...</a>
  </div>
</div>
</div>
</div>
<!-- div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item">
        <a class="nav-link active" href="#">Active</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
  </div>
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div> -->

<div class="jumbotron text-center jump" id="run" >
  <!-- <span><img src="chair.jpg" alt="Smiley face"></span> -->
    <h1 class="lob_font">My Portfolio</h1>      
    <p class="lob_font">Hi, I'am Safa Navas.I'am a beginner web developer and programmer living in India.</p>
  </div>
<div class="col-sm-3 padpop ">
<button type="button" class="btn btn-lg btn-danger " data-container="body" data-placement="bottom" data-toggle="popover" title="Hey Folks!" data-content="Welcome to my page.Excited!?">Ping Me!</button>
</div>
    </div>


    
  <!-- <div class="container">
  <div class="col-sm">
</div>
</div>
  <div class="container-fluid bg-3 text-center">    
  <h3>Some of my Work</h3><br>
  <div class="row">
    <div class="col-sm-3">
      <p>Some text..</p>
      <img src="C:\Users\user\Desktop\p2.jpg" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3"> 
      <p>Some text..</p>
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3"> 
      <p>Some text..</p>
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3">
      <p>Some text..</p>
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
    </div>
  </div>
</div> --><!-- <br>

<div class="container-fluid bg-3 text-center">    
  <div class="row">
    <div class="col-sm-3">
      <p>Some text..</p>
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3"> 
      <p>Some text..</p>
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3"> 
      <p>Some text..</p>
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3">
      <p>Some text..</p>
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
    </div>
  </div>
</div> --><br><br>
<div class="container text-center">
  <div class="row">
    <div class="col-sm-3">
  </div>
  <div class="col-sm-5">
<form action="<?php echo $_SERVER['PHP_SELF']; ?>"  method="post" class="border-form">
  <div class="form-group ">
    <span class="login-font">Sign-up</span><br>
    <label for="exampleInputEmail1 " required>Email address</label>
    <input type="email" class="form-control" name="user" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1" required>Password</label>
    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" name="save" class="btn btn-primary">Submit</button>
</form>
<?php

if(isset($_POST['save'])){ 
    $suser=$_POST['user'];
    $spassword=$_POST['password'];
$connection = mysqli_connect("localhost", "root", "","testlogin");

$query = mysqli_query( $connection,"SELECT * from usr_detl where semail='$suser'");
//print_r($query);
$rows = mysqli_num_rows($query);
if ($rows == 1) {
?>
<!--  header("location: hello.php"); // Redirecting To Other Page
echo '<script> window.location="http://localhost/GitHub/my-profile/helloworld.php"</script>';
echo "email already exist"; -->

<div class="alert alert-danger alert_pad" role="alert">
 Email already exist!
</div>
<?php
} else {

$query1 = "INSERT INTO `testlogin`.`usr_detl`(`semail`, `spassword`, `uid`)VALUES ('$suser' , '$spassword', '')";
$result = $connection->query($query1) ;
  //echo "signed up successfully";
?>
<div class="alert alert-danger alert_pad"  role="alert">
  Sign-up Successfull!
</div>
<?php
}

}
    

?>
</div>
<div class="col-sm-3">
<form action="" id= "form-id" method="post" class="border-form">
  <div class="form-group "> 
    <span class="login-font">Login</span><br>
    <label for="exampleInputEmail1 " required>Email address</label>
    <input type="email" class="form-control" name="loguser" id="fffexampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1" required>Password</label>
    <input type="password" class="form-control" name="logpassword" id="ffffexampleInputPassword1" placeholder="Password">
  </div>
  
  <button type="submit" name="save_l" class="btn btn-primary">Login</button>
</form>
</div>
</div>

</div>

  

 </div>            


</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
<script type="text/javascript">
  $(function () {
    $('[data-toggle="popover"]').popover()
  $('.example-popover').popover({
    container: 'body'
  })
})
</script>
</html>