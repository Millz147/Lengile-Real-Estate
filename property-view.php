<?php

include('header.php');

include('db/conn.php');
$address = $_GET['address'];


$sql = "SELECT * FROM properties WHERE Address = '$address'";

$link = mysqli_query($connect,$sql);


if ($link){

while($row = mysqli_fetch_array($link,MYSQLI_ASSOC)){


$Fulladdress = $row["Address"];
$Price = $row["Price"];
$Nature = $row["Nofapartment"];
$bed = $row["Bed"];
$bathroom = $row["Bathroom"];
$garage = $row["Garage"];
$area = $row["Areacovered"];
$country = $row["Country"];
$state = $row["State"];
$city = $row["City"];
$purpose = $row["Purpose"];
$descr = $row["Description"];
$p1 = $row["p1"];
$p2 = $row["p2"];
$p3 = $row["p3"];
$p4 = $row["p4"];
$p5 = $row["p5"];
$p6 = $row["p6"];

?>


  <!--/ Intro Single star /-->
  <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single"><?php echo "$Fulladdress"; ?></h1>
            <span class="color-text-a"><?php echo "$city , $state"; ?></span>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="index.html">Home</a>
              </li>
              <li class="breadcrumb-item">
                <a href="property-grid.html">Properties</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                <?php echo "$Fulladdress"; ?>
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->

  <!--/ Property Single Star /-->
  <section class="property-single nav-arrow-b">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div id="property-single-carousel" class="owl-carousel owl-arrow gallery-property">
            <div class="carousel-item-b">
              <img src="<?php echo "administrators/$p1"; ?>" alt="">
            </div>
            <div class="carousel-item-b">
              <img src="<?php echo "administrators/$p2"; ?>" alt="">
            </div>
            <div class="carousel-item-b">
              <img src="<?php echo "administrators/$p3"; ?>" alt="">
            </div>
            <div class="carousel-item-b">
              <img src="<?php echo "administrators/$p4"; ?>" alt="">
            </div>
            <div class="carousel-item-b">
              <img src="<?php echo "administrators/$p5"; ?>" alt="">
            </div>
            <div class="carousel-item-b">
              <img src="<?php echo "administrators/$p6"; ?>" alt="">
            </div>
          </div>
          <div class="row justify-content-between">
            <div class="col-md-5 col-lg-4">
              <div class="property-price d-flex justify-content-center foo">
                <div class="card-header-c d-flex">
                  <div class="card-box-ico">
                    <span class="ion-money">$</span>
                  </div>
                  <div class="card-title-c align-self-center">
                    <h5 class="title-c"><?php echo "$Price"; ?></h5>
                  </div>
                </div>
              </div>
              <div class="property-summary">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="title-box-d section-t4">
                      <h3 class="title-d">Quick Summary</h3>
                    </div>
                  </div>
                </div>
                <div class="summary-list">
                  <ul class="list">
                   
                    <li class="d-flex justify-content-between">
                      <strong>Location:</strong>
                      <span><?php echo "$Fulladdress"; ?></span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Property Type:</strong>
                      <span><?php echo "$Nature"; ?></span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Status:</strong>
                      <span><?php echo "$purpose"; ?></span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Area:</strong>
                      <span><?php echo "$area"; ?>
                      </span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Beds:</strong>
                      <span><?php echo "$bed"; ?></span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Baths:</strong>
                      <span><?php echo "$bathroom" ?></span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Garage:</strong>
                      <span><?php echo "$garage"; ?></span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-7 col-lg-7 section-md-t3">
              <div class="row">
                <div class="col-sm-12">
                  <div class="title-box-d">
                    <h3 class="title-d">Property Description</h3>
                  </div>
                </div>
              </div>
              <div class="property-description">
                <p class="description color-text-a">
                 <?php echo "$descr";?>
                </p>
              
              </div>
              
             
            </div>
          </div>
        </div><?php }}?>
        
        <div class="col-md-12">
          
          <div class="row">
            
        

            <div class="col-md-6 col-lg-4">
              <div class="property-agent">
                <h4 class="title-agent">Do you have an Interest in this Property?</h4>
                <p class="color-text-a">If yes, Please Send us a Message
                </p>
                
                
              </div>
            </div>







            <div class="col-md-12 col-lg-4">
              <div class="property-contact">
                <form enctype="multipart/form-data" action="message.php" method="post" class="form-a">
                  <div class="row">
                    <div class="col-md-12 mb-1">
                      <div class="form-group">
                        <input type="text" class="form-control form-control-lg form-control-a" id="inputName"
                          placeholder="FullName *" name = "fullname" required>
                    </div></div>
                    <div class="col-md-12 mb-1">
                      <div class="form-group">
                        <input type="email" class="form-control form-control-lg form-control-a" id="inputEmail1"
                          placeholder="Email *" name = "email" required>
                      </div>
                    </div>
                    <div class="col-md-12 mb-1">
                      <div class="form-group">
                        <input type="phone" class="form-control form-control-lg form-control-a" id="inputEmail1"
                          placeholder="Phone *" name = "phone" required>
                      </div>
                    </div>
                    <div class="col-md-12 mb-1">
                      <div class="form-group">
                        <textarea id="textMessage" class="form-control" placeholder="Your Message *" name="message" 
                          rows="8" required>
                            
                          </textarea>
                           <input type="text" class="form-control form-control-lg form-control-a" id="inputEmail1"
                          placeholder="Phone *" name = "interest" value="<?php echo"$address"; ?>" hidden>
                      </div>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <button type="submit" class="btn btn-a" name = "submit">Send Message</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Property Single End /-->

 



<?php
include('footer.php');

?>


  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/popper/popper.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/scrollreveal/scrollreveal.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
