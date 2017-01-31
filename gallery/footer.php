
<div class="bot_wrapper" style="color:white;">
    <div class="container">
        <div class="bot">
            <div class="row">
                <div class="span2">
                    <p style="font-size: large">Quick Links</p>
                    <ul >
                        <li><a href="#"style="color:#FFF; text-decoration:none;">Donate Us</a></li>
                        <li><a href="#"style="color:#FFF; text-decoration:none;">Registration Details</a></li>
                        <li><a href="#"style="color:#FFF; text-decoration:none;">Collborate with us</a></li>
                        <li><a href="../magzine.php"style="color:#FFF; text-decoration:none;">Aakaar</a></li>
                    </ul>
                </div>
                <div class="span3">

                    <div class="location1">
                        <dl>
                            <dd>Indian School of Mines, Dhanbad</dd>
                            <dd>Jharkhand , India</dd>
                            <dd> E-mail: <a href="#">fastforwardindia.org@gmail.com</a></dd>
                        </dl>
                    </div>

                </div>
                <div class="span4">

                    <div id="map" style="width:300x; height: 150px;">
                    </div>

                </div>

                <div class="span2">
                    <div class="location2">

                        <div class="social_wrapper_bot">
                            <ul class="social clearfix">
                                <li><a href="https://www.facebook.com/FastForwardIndia" target="_blank"><img src="imgs/social1.png" alt=""/></a></li>
                                <li><a href="https://twitter.com/fastforwrdindia" target="_blank"><img src="imgs/social3.png" alt=""/></a></li>
                                <li><a href="https://instagram.com/ffichanginglives/" target="_blank"><img src="imgs/insta.png" alt=""/></a></li>
                                <li><a href="https://www.youtube.com/watch?v=W-MSTZAIReU" target="_blank"><img src="imgs/you.png" alt=""/></a></li>
                            </ul>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script> function initialize() {
        var myLatLng = {lat: 23.8133, lng:  86.4419};
        var mapCanvas = document.getElementById('map');
        var mapOptions = {
            scrollwheel: false,
          center: myLatLng,
          zoom: 15,
          mapTypeId: google.maps.MapTypeId.ROADMAP
      }
      var map = new google.maps.Map(mapCanvas, mapOptions);
      var marker = new google.maps.Marker({
    position: myLatLng,
    map: map,
    title: 'Hello World!'
  });

  }
  google.maps.event.addDomListener(window, 'load', initialize);
  </script>