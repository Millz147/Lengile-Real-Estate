<?php

include ('header.php');
?>

  <!--/ Intro Single star /-->
  <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">Our Amazing Properties</h1>
            <span class="color-text-a">Search Results</span>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="#">Home</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Search Results 
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->

  <!--/ Property Grid Star /-->
  <section class="property-grid grid">
    <div class="container">
      <div class="row">
     

<?php

if (!isset($_POST['submit'])) {
echo "<script>alert('Unavailable Results');</script>";
    echo "<script>window.location = 'index.php';</script>";




}



$nofap = $_POST['nofap'];
$country =$_POST['country'];
$city = $_POST['city'];
$state = $_POST['state'];
$purpose = $_POST['purpose'];
$price = $_POST['price'];





include ('db/conn.php');
$sql = "SELECT * FROM properties WHERE Nofapartment ='$nofap' AND City ='$city' AND Purpose = '$purpose'";
$link = mysqli_query($connect,$sql);
if ($link){

  while ($row = mysqli_fetch_array($link,MYSQLI_ASSOC)){


$photo = $row["p1"];
$address = $row["Address"];
$bed = $row["Bed"];
$garage = $row["Garage"];
$area= $row["Areacovered"];
$purpose= $row["Purpose"];
$price= $row["Price"];
$bathroom= $row["Bathroom"];
$price= $row["Price"];

?>







        <div class="col-md-4">
          <div class="card-box-a card-shadow">
            <div class="img-box-a">
              <img src="<?php echo"administrators/$photo" ?>" alt="" class="img-a img-fluid">
            </div>
            <div class="card-overlay">
              <div class="card-overlay-a-content">
                <div class="card-header-a">
                  <h2 class="card-title-a">
                    <a href="#"> <?php echo"$address";?></a>
                  </h2>
                </div>
                <div class="card-body-a">
                  <div class="price-box d-flex">
                    <span class="price-a"><?php echo"$purpose | $ $price";?></span>
                  </div>
                  <a href="property-single.html" class="link-a">Click here to view
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

      <?php }}




      ?>
        
      <div class="row">
        <div class="col-sm-12">
          <nav class="pagination-a">
            <ul class="pagination justify-content-end">
              <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">
                  <span class="ion-ios-arrow-back"></span>
                </a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">1</a>
              </li>
              <li class="page-item active">
                <a class="page-link" href="#">2</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">3</a>
              </li>
              <li class="page-item next">
                <a class="page-link" href="#">
                  <span class="ion-ios-arrow-forward"></span>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--/ Property Grid End /-->

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
