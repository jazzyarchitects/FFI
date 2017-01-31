<?php

$con = mysqli_connect('localhost','root','','umeed');
function ff($user){
  $con = mysqli_connect('localhost','root','','umeed');
  return mysqli_real_escape_string($con,$user);
}
if(isset($_POST['name'])&&isset($_POST['contact'])&&isset($_POST['email'])&&isset($_POST['addr'])&&isset($_POST['city'])&&isset($_POST['amount'])){
      $con = mysqli_connect('localhost','root','','umeed');
      $name = $_POST['name'];
      $contact = $_POST['contact'];
      $add = $_POST['addr'];
      $city = $_POST['city'];
      
      $email = $_POST['email'];
      $amount = $_POST['amount'];
      if(!empty($name)&&!empty($contact)&&!empty($city)&&!empty($email)&&!empty($amount)&&!empty($add)){
          
          $query1 = "select name from list2 where name = '$name' ";
          $qr = mysqli_query($con,$query1);
          
  
            $query = "Insert into list2 values('','".ff($name)."','".ff($contact)."','".ff($email)."','".ff($add)."','".ff($city)."','".ff($amount)."',1) ";
            
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
      $name = '';$contact='';$add='';$email='';$city='';
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

<body style="background-color:#FFF">

   <?php include('header.php'); ?>
<br>
<div class="well well-lg">
   <h2 style="color:#000; font-family:'Palatino Linotype', 'Book Antiqua', Palatino, serif;font-size:300%"><center><br>GET INVOLVED<br></center></h2>
</div>
  <br><center>
  <div style="padding-left:">
  <img src="imgs/gimain.jpg" class="img-responsive img-rounded" style="width:80%;height:250px"></div>
  <br>
  <div class="w3-card-16 w3-khaki img-circle" style="width:60%">
  <h3>"Take care of the small things, the big ones will automatically fall in place. "</h3></div>
<br>
<hr style="width:90%"></center>
<div class="container">
<div class="row">
<div class="col-sm-6">
<div style="font-family:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif">
<div style="font-size:35px">
<h2 style="padding-left:20px" ><b>Get Involved as a volunteer</b></h2></div>
<div>
<p style="padding-left:10px;font-size:18px">Whatever we achieve is given to us by the society and it is the rightful duty of every individual to give it back to the society. The evil in the society can only be eliminated by working at the grass root level. Here is your chance to give back your share and make this world a better place for the deprived souls. </p></div></div></div>
<tr>
<div class="col-sm-6">
<div style="font-size:35px">
<h2 style="padding-left:20px"><b>Donate Us</b></h2></div>
<div style="font-size:20px">
<p style="padding-left:10px">They will gain something which is of great value to them and you will lose barely anything but will receive their blessing and satisfaction. Your donation will give light to a hope, nurture it and help the society move ahead. </p>
<div style="padding-left:10px">
<p style="font-color:#F1282C"><a href="#myModal" data-toggle="modal">Click here to donate</a></p></div></div></div></div>
<br>
<div style="font-size:35px">
<h2 style="padding-left:0px"><b>Sponsor a Child</b></h2>
</div>
<div style="font-size:20px">
<p style="padding-left:10px">You can now help a child complete his studies. Contibute a small amount of your earnings to their schooling. Just sponsor a child. Fill the Form below. Team FFI will contact you as Soon. </p>
<div style="padding-left:10px">
<p><a href="">Form Here</a></p></div></div>
<hr>
<div style="font-size:35px">
<h2 style="padding-left:0px"><b>Open a chapter in your college</b></h2></div>

<div class="row">
<div class="span6">

			<div style="font-size:20px">
           
			<p style="padding-left:10px">
				We cannot reach every needy person on our own. We need support to grow, to educate and to develop. Join us, become a part of FFI family. Open a chapter in your collge. 
Fill this form. Team FFI will contact you soon.
			</p>
           <p><b>Benifits of opening a chapter in your college</b></p>
			<ul>
            <li>Become a part of National NGO</li>
            <li>Handle cases of blood donation and need</li>
            <li>Manage blood donation camps.</li>
            <li>Develop team skills</li>
            <li>Experience for future</li>
            <li>You being a student can teach better</li>
            </ul>
            </div>			
		</div></div>
	</div>
</div>
</div>
<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">DONATE ! IT FEELS GOOD.</h4>
        </div>
        <div class="modal-body">
          
     
    <div class="row">
    
    <div class="container-fluid" style="max-width: 900px; background-color: teal; color: black;">
  <h1 style="text-align:center;border-bottom: 2px solid yellow;">Donate Us</h1>
  <form role="form" action="donate.php" method="POST" style="padding: 20px; border: 2px dashed orange;padding-bottom: 20px;">
    
    
  <div class="row">
  <div class="col-sm-2"></div>
      <div class="col-sm-5"><center><label for="usr" id="xx">Name:</label></center></div>
      <div class="col-sm-5"><center><input type="text" class="form-control" style="width:45%;padding:10px;height:4%" id="usr" name="name" value="<?php echo $name; ?>"></center></div><br>
  </div>
  <div class="row">
  <div class="col-sm-1"></div>
      <div class="col-sm-5"><center><label for="usr" id="xx">Contact:</label></center></div>
      <div class="col-sm-5"><center><input type="text" class="form-control" style="width:45%;padding:10px;height:4%" id="usr" name="contact" value="<?php echo $contact; ?>"></div><br>
  </div>
    <div class="row">
  <div class="col-sm-1"></div>
      <div class="col-sm-5"><center><label for="usr" id="xx">Email:</label></center></div>
      <div class="col-sm-5"><center><input type="text" class="form-control" style="width:45%;padding:10px;height:4%" id="usr" name="email" value="<?php echo $email; ?>"></div><br>
    </div>
  
  <div class="row">
    <div class="col-sm-1"></div>
      <div class="col-sm-5"><center><label for="usr" id="xx">Address:</label></center></div>
      <div class="col-sm-5"><center><input type="text" class="form-control" style="width:45%;height:100px;" id="usr" name="addr"value="<?php echo $add; ?>"></div><br>
    </div>
  <div class="row">
  <div class="col-sm-1"></div>
      <div class="col-sm-5"><center><label for="usr" id="xx">City:</label></center></div>
      <div class="col-sm-5"><center><input type="text" class="form-control" style="width:40%;padding:10px;height:4%" id="usr" name="city" value="<?php echo $city; ?>"></div><br>
    </div>
  <div class="row">
  <div class="col-sm-1"></div>
      <div class="col-sm-5"><center><label for="usr" id="xx">Amount:</label></center></div>
      <div class="col-sm-5"><center><input type="text" class="form-control" style="width:35%px;padding:10px;height:4%" id="usr" name="amount"></div><br>
    </div>
  
  <div class="row"></div><br>
  <center>
      <button type="submit" class="btn btn-primary btn-block" style="width:15%px;">Submit</button></center>
  </div>
      
  </form></div></div></div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
<?php include('footer.php'); ?>
</div>
</body>
</html>