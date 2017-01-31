<?php
//if "email" variable is filled out, send email
  if (isset($_REQUEST['email']))  {
  
  //Email information
  $admin_email = "fastforwardindia.org@gmail.com";
  $name=$_REQUEST['name'];
  $email = $_REQUEST['email'];
  $comment = $_REQUEST['comment'];
  
  //send email
  mail($admin_email, "$name", $comment, "From:" . $email);

  }
  ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="imgs/header.png"/>
    <title>Fast Forward India</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Fast Forward India">


    <link rel="stylesheet" href="css/font-awesome.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/bootstrap-responsive.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/superfish.css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
       <link rel="stylesheet" href="css/w3.css" type="text/css" media="screen">

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="js/superfish.js"></script>
    <script type="text/javascript" src="js/jquery.ui.totop.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
      <style>
  #xx{
  text-align: center;
  color: #8ca757;
  color:white;
  text-shadow: 1px 1px 5px rgba(0,0,0,0.6);
  display:block;
  font-size: 200%;
  font-family: Calibri, "Helvetica Neue", Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  text-rendering: optimizelegibility;
  
}
 #xx{
  text-align: center;
  color: #282828;
  color:#282828;
  text-shadow: 1px 1px 5px rgba(0,0,0,0.6);
  display:block;
  font-size: 200%;
  font-family: Calibri, "Helvetica Neue", Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  text-rendering: optimizelegibility;
  
}
#mar{
  color: blue;
  text-shadow: 5px 1px 5px rgba(77,0,55,0.6);
  display:block;
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;-webkit-font-smoothing: antialiased;
  text-rendering: optimizelegibility;
  
}
#contact-form {
  border: solid 2px #353535;
  font-size: 18px;
  text-align: center;

  width: 600px;
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  text-rendering: optimizelegibility;
}

#contact-form textarea {
  resize: vertical;
  height: 120px;
}
  </style>
  
</head>

<body style="background-color:#FFF">
<div id="main">
   <?php include('header.php'); ?>
<br>
<div class="well well-lg">
  <h1 style="color:#000"><center><br>CONTACT  US<br></center></h1>
</div>


    
   <center> <div class="container-fluid" style="max-width: 900px; background-color: teal; color: black;" id="contact-form">
        <p style="text-align:center;color:white">You can Ask any question regarding FFI..<br><?php echo $str; ?></p>
  <h2 style="text-align:center;border-bottom: 2px solid yellow;">Contact Us</h2>
  <form role="form" action="contact.php" method="POST" style="padding: 20px; border: 2px dashed orange;padding-bottom: 20px;">
    
  <div class="row">
  <div class="col-sm-1"></div>
      <div class="col-sm-5"><label for="usr" id="xx">Name:</label></div>
      <div class="col-sm-5"><center><input type="text" class="form-control" style="width:45%;padding:10px;height:4%" id="usr" name="name" value="<?php echo $name; ?>"></div><br>
  </div>
    <div class="row">
  <div class="col-sm-1"></div>
      <div class="col-sm-5"><label for="usr" id="xx">Email:</label></div>
      <div class="col-sm-5"><center><input type="text" class="form-control" style="width:45%;padding:10px;height:4%" id="usr" name="email" value="<?php echo $email; ?>"></div><br>
    </div>
  <div class="row">
  <div class="col-sm-1"></div>
      <div class="col-sm-5"><label for="usr" id="xx">Comments:</label></div>
      <div class="col-sm-5"><center><textarea style="width:45%;padding:10px;height:100" type="text" class="form-control" id="usr" name="comment" value="<?php echo $comment; ?>"></textarea></div><br>
    </div>
  
  <div class="row"></div><br>
 <center><button type="submit" class="btn btn-primary btn-block">Submit</button></center>
      
  </form>
  <br>
  </div>
  <br>
</div><br><br>
</div>
<center><div class="container">
<div class="span12">
      <div class="w3-card-16 w3-khaki" style="width:80%">
        <h2>Student Co-ordinators</h2>
        <h3>Rahul Sharma<a href="#"><img src=" imgs/social1.png" style=" width:50px"></a> Nirav Agrawal<a href="#"><img src=" imgs/social1.png" style="width:50px"></a></h3>
        </div></div></div></center>
<center><div class="container">
<div class="span12" style=" width:">
      <div class="w3-card-16 w3-lime" style="width:70%">
        <h2>Jagriti Co-ordinators</h2>
        <h3>Shanshank Shekhar<a href="#"><img src=" imgs/social1.png" style=" width:50px"></a>Milind Chauhan<a href="#"><img src=" imgs/social1.png" style=" width:50px"></a></h3>
        </div></div></div></center>
<center><div class="container">
<div class="span12" style=" width:">
      <div class="w3-card-16 w3-light-grey" style="width:70%">
        <h2>Bloodline Co-ordinators</h2>
        <h3>Vivek Krishna Agrawal<a href="#"><img src=" imgs/social1.png" style=" width:50px"></a>Shubham Kumar<a href="#"><img src=" imgs/social1.png" style="width:50px "></a></h3>
        </div></div></div></center>
        <center><div class="container">
<div class="span12" style=" width:">
      <div class="w3-card-16 w3-yellow" style="width:70%">
        <h2>Disha Co-ordinators</h2>
        <h3>Tanmay Jain<a href="#"><img src=" imgs/social1.png" style="width:50px "></a>Tanmay Jain<a href="#"><img src=" imgs/social1.png" style="width:50px "></a></h3>
        </div></div></div></center>
        <center><div class="container">
<div class="span12" style=" width:">
      <div class="w3-card-16 w3-teal" style="width:70%">
        <h2>Escape Co-ordinators</h2>
        <h3>Azhar Nehal<a href="#"><img src=" imgs/social1.png" style=" width:50px"></a>Azhar Nehal<a href="#"><img src=" imgs/social1.png" style="width:50px "></a></h3>
        </div></div></div></center>
</div></div>
  <?php include('footer.php'); ?>

</body>
</html>