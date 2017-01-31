<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="shortcut icon" href="imgs/header.png"/>
  <title>Gallery</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="Fast Forward India">

  <link rel="stylesheet" href="w3.css">

  <link rel="stylesheet" href="css/font-awesome.css" type="text/css" media="screen">
  <link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="screen">
  <link rel="stylesheet" href="css/bootstrap-responsive.css" type="text/css" media="screen">
  <link rel="stylesheet" href="css/superfish.css" media="screen">
  <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="css/w3.css" type="text/css" media="screen">

  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
  <script type="text/javascript" src="js/superfish.js"></script>
  <script type="text/javascript" src="js/jquery.ui.totop.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>


  <script src="photo-gallery.js"></script>
  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
    width: 70%;
    margin: auto;
  }
  .test img {cursor: pointer;border: 10px solid transparent;}
  .test img:hover {border: 10px solid #f1f1f1;}
  body,h1,h2,h3,h4,h4 {font-family: 'Montserrat', sans-serif !important;}
  .w3-topnav {width:100%;position:fixed;z-index:1;}
  .w3-topnav a:first-child:hover{color: #fff;border-bottom: 3px solid transparent;}
  @media only screen and (max-width: 601px) {.w3-topnav {position:static;}}

  body {
    position: relative;
  }
  
  </style>


</head>

<body>
  <div id="main">
   <?php include('header.php'); ?>
   <div id="content_wrapper" style="margin-top: 25px;">
    <div id="content">
      <div class="container">


        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
            <li data-target="#myCarousel" data-slide-to="5"></li>
            <li data-target="#myCarousel" data-slide-to="6"></li>
            <li data-target="#myCarousel" data-slide-to="7"></li>
            <li data-target="#myCarousel" data-slide-to="8"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img src="imgs/awardhead.jpg" alt="" width="460" height="345">
            </div>

            <div class="item">
              <img src="imgs/blood1.jpg" alt="" width="460" height="345">
            </div>

            <div class="item">
              <img src="imgs/blood2.jpg" alt="" width="460" height="345">
            </div>

            <div class="item">
              <img src="imgs/blood3.jpg" alt="" width="460" height="345">
            </div>
            <div class="item">
              <img src="imgs/disha1.jpg" alt="" width="460" height="345">
            </div>
            <div class="item">
              <img src="imgs/Disha2.jpg" alt="" width="460" height="345">
            </div>
            <div class="item">
              <img src="imgs/escape1.jpg" alt="" width="460" height="345">
            </div>
            <div class="item">
              <img src="imgs/header3.jpg" alt="" width="460" height="345">
            </div>
            <div class="item">
              <img src="imgs/jagriti2.jpg" alt="" width="460" height="345">
            </div>
          </div>

          <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><!-- 
            <span class="sr-only">Previous</span> -->
          </a>
          <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <!-- <span class="sr-only">Next</span> -->
          </a>
        </div>


        <div class="row">
          <div class="w3-row-padding">
            <a href="gallery/jagriti.php"><div class="w3-third">
              <div class="w3-card-16">
                <img src="imgs/jagriti1.jpg" style="height:200px;">
                <div class="w3-container">
                  <h4>JAGRITI</h4>
                </div>
              </div>
            </div></a>
            <a href="gallery/bloodline.php"><div class="w3-third">
              <div class="w3-card-16">
                <img src="imgs/mainblood.jpg" style="height:200px;width:100%">
                <div class="w3-container">
                  <h4>BLOODLINE</h4>
                </div>
              </div>
            </div></a>
            <a href="gallery/escape.php"><div class="w3-third">
              <div class="w3-card-16">
                <img src="imgs/espmain.jpg" style="height:200px;width:100%">
                <div class="w3-container">
                  <h4>ESCAPE</h4>
                </div>
              </div>
            </div></a></div><hr>
            <div class="w3-row-padding">
              <a href="gallery/disha.php"><div class="w3-third">
                <div class="w3-card-16">
                  <img src="imgs/dishamain.jpg" style="height:200px;">
                  <div class="w3-container">
                    <h4>DISHA</h4>
                  </div>
                </div>
              </div></a>

              <a href="gallery/independenceday.php"><div class="w3-third">
                <div class="w3-card-16">
                  <img src="imgs/topind.jpg" style="height:200px;width:100%">
                  <div class="w3-container">
                    <h4>INDEPENDENCE DAY</h4>
                  </div>
                </div>
              </div></a>
              <a href="gallery/umeed.php"><div class="w3-third">
                <div class="w3-card-16">
                  <img src="imgs/umeed1.jpg" style="height:200px;">
                  <div class="w3-container">
                    <h4>UMEED</h4>
                  </div>
                </div>
              </div></a></div><hr>
              <div class="w3-row-padding">
                <a href="gallery/basant.php"><div class="w3-third">
                  <div class="w3-card-16">
                    <img src="imgs/basantmain.png" style="height:200px;width:100%">
                    <div class="w3-container">
                      <h4>BASANT & IMC</h4>
                    </div>
                  </div>
                </div></a>

              </div>
              <hr>
              <ul class="nav nav-pills">
                <li><a href="gallery/jagriti.php">Jagriti</a></li>
                <li><a href="gallery/bloodline.php">Bloodline</a></li>
                <li><a href="gallery/escape.php">Escape</a></li>
                <li><a href="gallery/disha.php">Disha</a></li>
                <li><a href="gallery/independenceday.php">Independence Day</a></li>
                <li><a href="gallery/umeed.php">Umeed</a></li>
                <li><a href="gallery/basant.php">Basant</a></li>
              </ul>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include('footer.php'); ?>
</div>
</div>
</body>
</html>