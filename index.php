<?php

include('header.php');

?>

  <!--/ Carousel Star /-->
  <div class="intro intro-carousel">
    <div id="carousel" class="owl-carousel owl-theme">
<?php
include ('db/conn.php');


$sql = "SELECT * FROM slides";
$link = mysqli_query($connect,$sql);
if ($link){
$s = mysqli_num_rows($link);
for ($ann = 1; $ann <=$s;$ann++){

  while ($row = mysqli_fetch_array($link,MYSQLI_ASSOC)){
$photo = $row["Photo"];
$city = $row["City"];
$state = $row["State"];
$country = $row["Country"];
$address= $row["Address"];
$purpose= $row["Purpose"];
$price= $row["Price"];
?>
      <div class="carousel-item-a intro-item bg-image" style="background-image: url(<?php echo"administrators/$photo" ?>)">
  <?php
echo "<div class=\"overlay overlay-a\"></div>
        <div class=\"intro-content display-table\">
          <div class=\"table-cell\">
            <div class=\"container\">
              <div class=\"row\">
                <div class=\"col-lg-8\">
                  <div class=\"intro-body\">
<p class=\"intro-title-top\">$city, $state $country
     
                    <h1 class=\"intro-title mb-4\">
             $address </h1>

   <p class=\"intro-subtitle intro-price\">
                      <a href=\"property-view.php?address=$address\"><span class=\"price-a\">$purpose | $ $price</span></a>
                    </p>


                           </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>";
  }}}?>

        
                    
                   
                 
           
    
     
    </div>
  </div>
  <!--/ Carousel end /-->

  

  <!--/ Property Star /-->
  <section class="section-property section-t8">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 class="title-a">Latest Properties</h2>
            </div>
            <div class="title-link">
              <a href="property-grid.html">All Property
                <span class="ion-ios-arrow-forward"></span>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div id="property-carousel" class="owl-carousel owl-theme">

<?php


$sql2 = "SELECT * FROM properties";
$link2 = mysqli_query($connect,$sql2);
if ($link2){

  while ($row2 = mysqli_fetch_array($link2,MYSQLI_ASSOC)){


$photo2 = $row2["p1"];
$address2 = $row2["Address"];
$bed = $row2["Bed"];
$garage = $row2["Garage"];
$area= $row2["Areacovered"];
$purpose2= $row2["Purpose"];
$price2= $row2["Price"];
$bathroom= $row2["Bathroom"];
$price= $row2["Price"];


?>
<div class="carousel-item-b">
          <div class="card-box-a card-shadow">
            <div class="img-box-a">
              <img src="<?php echo "administrators/$photo2";?>" alt="" class="img-a img-fluid">
            </div>
            <div class="card-overlay">
              <div class="card-overlay-a-content">
                <div class="card-header-a">
                  <h2 class="card-title-a">
                    <a href="property-single.html"><?php echo"$address2";?></a>
                  </h2>
                </div>
               
               <div class="card-body-a">
                  <div class="price-box d-flex">
                    <span class="price-a"><?php echo"$purpose2 | $ $price2";?></span>
                  </div>
                  <a href="property-view.php?address=<?php echo"$address2"; ?>" class="link-a">Click here to view
                    <span class="ion-ios-arrow-forward"></span>
                  </a>
                </div>
                <div class="card-footer-a">
                  <ul class="card-info d-flex justify-content-around">
                    <li>
                      <h4 class="card-info-title">Area</h4>
                      <span><?php echo"$area";?>
                      </span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Beds</h4>
                      <span><?php echo"$bed";?></span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Baths</h4>
                      <span><?php echo"$bathroom";?></span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Garages</h4>
                      <span><?php echo"$garage";?></span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
<?php
   
     }}


     ?>





      </div>
    </div>
  </section>
  <!--/ Property End /-->

  

  



  <?php
include('footer.php');
  ?>
  <!--/ Footer End /-->

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
