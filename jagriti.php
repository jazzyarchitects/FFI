<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="imgs/header.png"/>
    <title>Jagriti</title>
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

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="js/superfish.js"></script>
    <script type="text/javascript" src="js/jquery.ui.totop.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
</head>

<body>
  <script>
$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});
</script>
    <div id="main">
     <?php include('header.php'); ?>
     <br>
<div class="well well-lg">
  <h1 style="color:#000"><center><br>Jagriti<br></center></h1>
</div>
     <div id="content_wrapper" style="margin-top: 25px;">
        <div id="content">
            <div class="container">
                <div class="span8 offset2">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators" style="z-index:1;">
                            <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                            <li data-target="#myCarousel" data-slide-to="3"></li>
                            <li data-target="#myCarousel" data-slide-to="4"></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                           <div class="item active"><center>
                            <img src="imgs/awardhead.jpg" alt="" width="460" height="345">
                        </div>

                        <div class="item"><center>
                            <img src="imgs/blood1.jpg" alt="" width="460" height="345">
                        </div>

                        <div class="item"><center>
                            <img src="imgs/blood2.jpg" alt="" width="460" height="345">
                        </div>

                        <div class="item"><center>
                            <img src="imgs/blood3.jpg" alt="" width="460" height="345">
                        </div>
                        <div class="item"><center>
                            <img src="imgs/disha1.jpg" alt="" width="460" height="345">
                        </div>
                        <div class="item"><center>
                            <img src="imgs/Disha2.jpg" alt="" width="460" height="345">
                        </div>
                        <div class="item"><center>
                            <img src="imgs/escape1.jpg" alt="" width="460" height="345">
                        </div>
                        <div class="item"><center>
                            <img src="imgs/header3.jpg" alt="" width="460" height="345">
                        </div>
                        <div class="item"><center>
                            <img src="imgs/jagriti2.jpg" alt="" width="460" height="345">
                        </div>
                    </div>
                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    </a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="span2 offset1">
               <nav id="myScrollspy">
                  <ul class="nav nav-pills nav-stacked">
                    <li><a href="#section1">ABOUT</a></li>
                    <li><a href="#section2">VISION</a></li>
                    <li><a href="#section3">WORKING</a></li>
                    <li><a href="#section4">ACHIEVEMENTS</a></li>
                </ul>
            </nav>
        </div>

        <div class="container offset1">
        <div class="span10">  
            <div style="text-align: justify;">
              <div id="section1">
                <h3>About</h3>

                <p>In today’s competitive world, it is not the fittest who survives, but it is the one who is most adaptive to change. Life today has become so fast that we are dependent on machines for most of our work. Computers have penetrated our lives so deep that to achieve professional success in any field, crossing paths with computer education has become indispensable. In a country like India where most people are deprived of basic necessities for life, computer education for these underprivileged children is a distant dream. Keeping the current scenario in mind, Jagriti was proposed as a part of Fast Forward India to impart basic computer education free of cost to the underprivileged children in and around Dhanbad. Jagriti started its functioning in 2008 and since then has been actively involved in achieving its goals and fulfilling this cause.

                  we are trying to empower them with basic computer education needs so that they will</p>
              </div>
              <hr>
              <div id="section2">
                  <h3>Vision</h3>
                  <p>this chapter of ffi was started with a vision to empower underprivilage students with computer education so that they can stand in this changing era of india, also computer education for those people who are diconncted from society and want to change themselves so that they can serve and live in society with selfrespect.

                  </p>
              </div>
              <hr>
              <div id="section3">
                  <h3>Working</h3>
                  <p>Admissions for all courses under Jagriti start at the beginning of each academic session. Children are then divided into batches according to their age and on the extent of the computer knowledge they possess (if any). Both theory and practical classes are taken at the FFI centre regularly by Jagriti volunteers. The various courses under Jagriti are as follows:
                    Aadhar: Under this project, very basic knowledge of computers is provided. The beginner’s course structure is designed keeping in mind that the students possess no prior knowledge of computers and is of 10 weeks duration including the final test. The following topics are taught under Aadhar:
                    <ul>
                      <li> Understanding the Hardware of the computer and their functions.</li>
                      <li>Basic operational understanding of the Windows Interface.</li>
                  </ul>
              </p></div>
              <hr>
              <div id="section4">
                <h3>Achievements</h3>
                <p>Under this project of FFI, the following things have been done for the society:
                  164 students have been imparted computer education in the previous 6 batches successfully at our center.
                  Among 29 inmates from KARAGAR JAGRITI CHAPTER, 14 inmates have been retracted on righteous path and now they are earning honestly.
                  Dwanda a computer quiz, for the slum students has been organized at annual basis.
                  Tulika a painting competition is an annually organized event.
                  Our student Rajni got 1st rank in interview for Biotech. course in P.K. Roy memorial College.
                  A student Sachin of our batch has got the Job as computer operator in the ISM, Emrald Hostel
              </p>
          </div>
      </div>
  </div>
</div>
</div>
</div>
</div>
</div>
</div>
<?php include('footer.php'); ?>
</div>

</body>
</html>