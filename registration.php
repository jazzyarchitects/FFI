<?php
$con = mysqli_connect('localhost','root','','umeed');
function ff($user){
	$con = mysqli_connect('localhost','root','','umeed');
	return mysqli_real_escape_string($con,$user);
}
if(isset($_POST['name'])&&isset($_POST['contact'])&&isset($_POST['email'])&&isset($_POST['addr'])&&isset($_POST['city'])&&isset($_POST['sex'])&&isset($_POST['donate'])&&isset($_POST['bg'])){
			$con = mysqli_connect('localhost','root','','umeed');
			$name = $_POST['name'];
			$contact = $_POST['contact'];
			$add = $_POST['addr'];
			$city = $_POST['city'];
			$sex = $_POST['sex'];
			$email = $_POST['email'];
			$bg = $_POST['bg'];
			$donate = $_POST['donate'];
			if(!empty($name)&&!empty($contact)&&!empty($city)&&!empty($sex)&&!empty($bg)&&!empty($email)&&!empty($donate)&&!empty($add)){
					
					$query1 = "select name from list1 where name = '$name' ";
					$qr = mysqli_query($con,$query1);
					
	
						$query = "Insert into list1 values('','".ff($name)."','".ff($contact)."','".ff($email)."','".ff($add)."','".ff($city)."','".ff($bg)."','".ff($donate)."','".ff($sex)."',1) ";
						
						$qr = mysqli_query($con,$query);
						if($qr){
							$str = "Inserted";
							
						}
						else{
							$str =  "Not Succesful";
						}
						
					
					
				
			}
			else{
				$str =  "All field Required..";
			}
		}
		else{
			$name = '';$contact='';$add='';$email='';$city='';$bg='';$donate='';$sex='';
			$str = '';
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
  </style>
  
  
</head>

<body style="background-color:#FFF;">
 <?php include('header.php'); ?>
 <div class="container" style="max-width:900px;margin-top:50px">	
		<div class="row">
		<h1 style="text-align:center;color:black;font-size:60px;">Registration</h1>
		<p style="text-align:center;">Fill the form to register<br><?php echo $str; ?></p>
		<form action="first.php" method="POST" style="padding: 20px; border: 2px dashed orange;padding-bottom: 20px;background-color: teal;">
	<div class="row">
	<div class="col-sm-1"></div>
			<div class="col-sm-5"><label for="usr" id="xx">Name:</label></div>
			<div class="col-sm-5"><center><input type="text" class="form-control" style="width:45%;padding:10px;height:4%"id="usr" name="name" value="<?php echo $name; ?>"></div><br>
	</div>
	<div class="row">
	<div class="col-sm-1"></div>
			<div class="col-sm-5"><label for="usr" id="xx">Contact:</label></div>
			<div class="col-sm-5"><center><input type="text" class="form-control" id="usr" style="width:45%;padding:10px;height:4%" name="contact" value="<?php echo $contact; ?>"></div><br>
	</div>
    <div class="row">
	<div class="col-sm-1"></div>
			<div class="col-sm-5"><label for="usr" id="xx">Email:</label></div>
			<div class="col-sm-5"><center><input type="text" class="form-control" style="width:45%;padding:10px;height:4%" id="usr" name="email" value="<?php echo $email; ?>"></div><br>
    </div>
	
	<div class="row">
		<div class="col-sm-1"></div>
			<div class="col-sm-5"><label for="usr" id="xx">Address:</label></div>
			<div class="col-sm-5"><center><input type="text" class="form-control" style="width:45%;height:100px;" id="usr" name="addr"value="<?php echo $add; ?>"></div><br>
    </div>
	<div class="row">
	<div class="col-sm-1"></div>
			<div class="col-sm-5"><label for="usr" id="xx">City:</label></div>
			<div class="col-sm-5"><center><input type="text" class="form-control" style="width:40%;padding:10px;height:4%" id="usr" name="city" value="<?php echo $city; ?>"></div><br>
    </div>
	<div class="row">
		<div class="col-sm-1"></div>
			<div class="col-sm-5"><label for="sel1" id="xx">Sex:</label></div>
			<div class="col-sm-5"><center><select class="form-control" style="width:30%;" id="sel1" name="sex" value = "m">
					<option value="m">Male</option>
					<option value = "f">Female</option>
					</select>
			</div>
	</div><br>
	<div class="row">
		<div class="col-sm-1"></div>
			<div class="col-sm-5"><label for="sel1" id="xx">Blood Group:</label></div>
			<div class="col-sm-5"><center><select class="form-control" style="width:30%;" id="sel1" name="bg" value="A+">
					<option value="A+">A+</option>
					<option value = "A-">A-</option>
					<option value="B+">B+</option>
					<option value = "B-">B-</option>
					<option value="O+">O+</option>
					<option value = "O-">O-</option>
					<option value="AB+">AB+</option>
					<option value = "AB-">AB-</option>
					</select>
			</div>
	</div><br>
	<div class="row">
		<div class="col-sm-1"></div>
			<div class="col-sm-5"><label for="sel1" id="xx">Donated Before:</label></div>
			<div class="col-sm-5"><center><select class="form-control" style="width:30%;" id="sel1" name="donate" value="y">
					<option value="y">Yes</option>
					<option value = "n">No</option>
					</select>
			</div>
	</div><br>
	<div class="row"></div>
	<div class="row">
		<div class="col-sm-4"></div>
			<div class="col-sm-4"><center><button type="submit" style="width:30%;" class="btn btn-primary btn-block">Submit</button></div>
	</div>
			
  </form>
  <br>
</div><br><br>
</div>
	</div>
<?php include('footer.php'); ?></div>
</body>
</html>