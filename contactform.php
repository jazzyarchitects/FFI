<?php
function ff($user){
	$con = mysqli_connect('localhost','root','','umeed');
	return mysqli_real_escape_string($con,$user);
}
if(isset($_POST['name'])&&isset($_POST['email'])&&isset($_POST['comment'])){
			$con = mysqli_connect('localhost','root','','umeed');
			$name = ff($_POST['name']);
			$email = ff($_POST['email']);
			$comment = ff($_POST['comment']);
			if(!empty($name)&&!empty($email)&&!empty($comment)){
					
					$to = "rajakedia2222@gmail.com";
						
						$subject = "$name sent you a messgae via contact form";
						
						$message = "Name: $name\r\n";
						$message .= "Email: $email\r\n";
						$message  .= "Message: \r\n$comment";
						
						$message = wordwrap($message,72);
						
						$headers = "MIME-version :1.0\r\n";
						$headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
						$headers .=  "From: $name <$email> \r\n";
						$headers .= "X-Priority: 1\r\n";
						$headers .=  "X-MSmail-Priority :High\r\n\r\n";
						
						mail($to,$subject,$message,$headers);
					
				
			}
			else{
				$str =  "All field Required..";
			}
		}
		else{
			$name = '';$email='';$comment='';
			$str = '';
		}


?>




<!DOCTYPE html>
<html lang="en">
<head>
  <title>Contact Us</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap-3.3.5-dist/css/bootstrap.min.css" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  
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
#mar{
	color: blue;
	text-shadow: 5px 1px 5px rgba(77,0,55,0.6);
	display:block;
	font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;-webkit-font-smoothing: antialiased;
	text-rendering: optimizelegibility;
	
}
#contact-form {
	border: solid 2px #353535;
	outline: none;
	font-size: 18px;
	padding: 10px;
	text-align: center;
	width: 270px;
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
<body style=" background-image: url('siteimg/back2.gif'); color: #8ca757; margin:auto;">
<nav class="navbar navbar-inverse" style="position:fixed; width:100%;z-index:10;">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php">Umeed</a>
    </div>
    
  </div>
</nav>  
<br><br><br>

 <div class="container" style="max-width:900px">

		<div class="row">
		<h1 style="text-align:center;"> Contact Us</h1>
		<p style="text-align:center;">Umeed is a annual function of ffi and this time it is going to be awesome<br>You can Ask any question regarding FFI..<br><?php echo $str; ?></p>
		
		<div class="container-fluid" style="max-width: 900px; background-color: teal; color: black;">
  <h2 style="text-align:center;border-bottom: 2px solid yellow;">Contact Us</h2>
  <form role="form" action="contact.php" method="POST" style="padding: 20px; border: 2px dashed orange;padding-bottom: 20px;">
		
	<div class="row">
	<div class="col-sm-1"></div>
			<div class="col-sm-5"><label for="usr" id="xx">Name:</label></div>
			<div class="col-sm-5"><input type="text" class="form-control" id="usr" name="name" value="<?php echo $name; ?>"></div><br>
	</div>
    <div class="row">
	<div class="col-sm-1"></div>
			<div class="col-sm-5"><label for="usr" id="xx">Email:</label></div>
			<div class="col-sm-5"><input type="text" class="form-control" id="usr" name="email" value="<?php echo $email; ?>"></div><br>
    </div>
	<div class="row">
	<div class="col-sm-1" id="contact-form"></div>
			<div class="col-sm-5"><label for="usr" id="xx">Comments:</label></div>
			<div class="col-sm-5"><textarea style="height:50;" type="text" class="form-control" id="usr" name="comment" value="<?php echo $comment; ?>"></textarea></div><br>
    </div>
	
	<div class="row"></div><br>
	<div class="row">
		<div class="col-sm-4"></div>
			<div class="col-sm-4"><button type="submit" class="btn btn-primary btn-block">Submit</button></div>
	</div>
			
  </form>
  <br>
  </div>
  <br>
</div><br><br>
</div>
	<div style="background-color:black; color:white;  clear:both; text-align:center; padding:5px;"><h5>Privacy Policy | Terms of Use | Copyright &copy Umeed 2016  All rights reserved. </h5></div> <!--- end footer-->

</body>
</html>