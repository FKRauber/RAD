<!DOCTYPE html>
<html>
  <head>
    <title>RAD</title>

    <meta name="viewport" content="width=device-width">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="https://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="../assets/javascripts/application.js"></script>
    <script src="https://github.com/kswedberg/jquery-smooth-scroll/blob/master/jquery.smooth-scroll.min.js"></script>

    <link rel="stylesheet" type="text/css" href="../assets/stylesheets/detail.css">
    <script src="../assets/javascripts/detail.js"></script>

  </head>
  <body>


    <!-- NAVIGATION -->
    <nav id="nav">
      <p class="logo">RAD</p>
      <div class="menu">
        <a href="#home">Home</a>
        <a href="#about">About</a>
        <a href="#gallery">Gallery</a>
        <a href="#services">Services</a>
        <a href="#contact">Contact</a>      
      </div>
    </nav>


    <!-- PAGES -->

    <!-- PAGE 1 - HOME -->
    <div id="page1">
      <a id="home" class="smooth"></a>
      <img src="../assets/images/RAD_COVER.jpg" style="width:100%;opacity:0.8;">
      <div class="name">
        <p>RIP'S AUTO DETAIL</p>
      </div>
    </div>


    <!-- PAGE 2 - ABOUT -->

    <div id="page2">
      <a id="about" class="smooth"></a>
      
      <div class="container">
        <table>
          <tr class="preamble">
            <h2>About</h2>
            <td>Welcome to Rip's! <br>
              <p>In this garage it's a One-Man:One-Car operation. I work
                 on an appointment only basis; one car at a 
                 time, so that your vehicle receives my 
                 devoted attention. With 16 years of experience in detail 
                 and body shops, I have gathered both a sharp eye and 
                 the technical skills necessary to achieve the highest level of
                 aesthetic greatness. My specialties rest in paint correction and application of ceramic coatings.  
                 It is here where I, and your vehicle, truly shine.</p><br>
              <i>Car Lookin' Sad? Get R.A.D!</i></p>
            </td>
            <td>
              <img class="about-img" src="../assets/images/RAD_ABOUT.png">
            </td>
          </tr>
        </table>
      </div>

    

    <!-- PAGE 3 - GALLERY -->

    <div id="page3">
      <a id="gallery" class="smooth"></a> 
      <div class="container">
        <h2>Gallery</h2><br>
        <a href="https://www.instagram.com/ripsautodetail" target="_blank">
          <img class="galimg" src="../assets/images/img_001.jpg">
          <img class="galimg" src="../assets/images/img_003.jpg">
          <img class="galimg" src="../assets/images/img_004.jpg">
          <img class="galimg" src="../assets/images/img_006.jpg">
          <img class="galimg" src="../assets/images/img_005.jpg">
          <img class="galimg" src="../assets/images/img_015.jpg">
          <img class="galimg" src="../assets/images/img_008.jpg">
          <img class="galimg" src="../assets/images/img_009.jpg">
          <img class="galimg" src="../assets/images/img_010.jpg">
          <img class="galimg" src="../assets/images/img_013.jpg">
          <img class="galimg" src="../assets/images/img_007.jpg">
          <img class="galimg" src="../assets/images/img_014.jpg">
          <img class="galimg" src="../assets/images/img_012.jpg">
          <img class="galimg" src="../assets/images/img_016.jpg">
        </a>
      </div>
    </div>


    <!-- PAGE 4 - SERVICES -->

    <div id="page4">
      <a id="services" class="smooth"></a> 
      <div class="container">
        <h2>Services and Pricing</h2><br>
        <div class="pricing">
          <p>A Level 1 Detail starts at $300 for cars, $350 for midsize vehicles, $400 for fullsize trucks and SUVs.  
            This includes comprehensive interior and exterior deep cleaning.<br><br>
            Pricing for <b>paint correction and ceramic coating</b> is contingent upon the desires and budget of the owner as well as 
            the effort necessary to meet your needs. Ceramic can be applied to a car's paint, glass, wheels and brakes, and even some interior 
            surfaces. Ceramic is truly the longest-lasting form of protection available today as coatings last for years, not 
            weeks or months as seen with traditional sealants and waxes. A quote will be established once 
            we have spoken and worked out the best possible outcome for the specified budget.<br><br>
            Not sure what you need? Feel free to call, we can work it out!
            </p>
        </div>

      </div>
    </div>


    <!-- PAGE 5 - CONTACT -->

    <div id="page5">
      <a id="contact" class="smooth"></a>
      <div class="container">
        <h2>Contact</h2><br>
        
        <form id="rad-form" method="post" action="contact-form-handler.php" style="width:40%;">
          <input name="name" type="text" class="form-control" placeholder="Name*" required>
          <input name="tel" type="tel" class="form-control" placeholder="Phone Number*" required>
          <input name="email" type="email" class="form-control" placeholder="Email Address">
          <input name="vehicle" type="text" class="form-control" placeholder="Vehicle">
          <textarea name="message" class="form-control" placeholder="Message* include desired services and contact hours"rows="4" required></textarea>
          <input type="submit" class="form-control submit" value="SEND"> 
        </form>

        <div class="rad-details">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3028.4913589747302!2d-75.4361270489588!3d40.61904465113251!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c43ecb50d1b335%3A0xe16c46d3b6d77a89!2s630+N+Nelson+St%2C+Allentown%2C+PA+18109!5e0!3m2!1sen!2sus!4v1555702553928!5m2!1sen!2sus" frameborder="0" allowfullscreen></iframe>
          <p>CALL</p>
          <p>484-553-1366</p><br>
          <p>GO</p>
          <p>630 North Nelson Street</p>
          <p>Allentown, PA 18109</p><br>
          <p>WRITE</p>
          <p>ripsautodetail@gmail.com</p><br>
        </div>

      </div>
    </div>


    <!-- FOOTER -->

    <div id="footer">

      <a href="https://www.facebook.com/RipsAutoDetail/" target="_blank"><img class="social-icon" src="../assets/images/24.png"></a>
      <a href="https://www.instagram.com/ripsautodetail/" target="_blank"><img class="social-icon" src="../assets/images/16.png"></a>
  
      <p>©RipsAutoDetail</p>

    </div>

  </body>
</html>
