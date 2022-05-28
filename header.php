<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Leng Ile</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/leng.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  


    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({
          google_ad_client: "ca-pub-6883622550208397",
          enable_page_level_ads: true
     });
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  
  <script src="administrators/countrystatecity.js"></script>


</head>

<body>

  <div class="click-closed"></div>
  <!--/ Form Search Star /-->
  <div class="box-collapse">
    <div class="title-box-d">
      <h3 class="title-d">Search Property</h3>
    </div>
    <span class="close-box-collapse right-boxed ion-ios-close"></span>
    <div class="box-collapse-wrap form">
      <form enctype="multipart/form-data" action="search.php" method="post" class="form-a">
        <div class="row">
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="city">Nature of Apartment</label>
              <select class="form-control form-control-lg form-control-a"  name = "nofap">
                 <option>Flat</option>
                                                <option>Duplex</option>
                                                <option>Bungalow</option>
                                                <option>Hut</option>
                                                <option>Mansion</option>
                                                <option>Villa</option>
                                                <option>Castle</option>
                                                <option>Farm House</option>
                                                <option>Studio Apartment</option>
                                                <option>Cottage</option>
                                                <option>Condominium</option>
                                                <option>Single-Family Home</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="Type">Purpose</label>
              <select class="form-control form-control-lg form-control-a" id="Type" name = "purpose">
                
                <option>Rent</option>
                <option>Sale</option>
               
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="city">Country</label>
              <select class="countries form-control form-control-lg form-control-a" id="countryId" name = "country">
                <option>Select Country</option>
                
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="state">State</label>
              <select class="states form-control form-control-lg form-control-a" id="stateId" name = "state">
                <option>Select State</option>
               
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="city">City</label>
              <select class="cities form-control form-control-lg form-control-a" id="cityId" name = "city">
                <option>Select City</option>
                 
              </select>
            </div>
          </div>
                   <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="price">Min Price ($)</label>
              <select class="form-control form-control-lg form-control-a" id="price" name = "price">
                <option>Unlimited</option>
                <option>50000</option>
                <option>100000</option>
                <option>150000</option>
                <option>200000</option>
              </select>
            </div>
          </div>
          <div class="col-md-12">
            <button type="submit" class="btn btn-b" name = "submit">Search Property</button>
          </div>
        </div>
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-149371669-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-149371669-1');
</script>

      </form>
    </div>
  </div>
  <!--/ Form Search End /-->

  <!--/ Nav Star /-->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand" href="index.html"><img src="img/leng.png" style="height: 50px; width:50px;" />Leng &nbsp<span class="color-e">Ile</span></a>
      <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse"
        data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button>
      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="property-grid.php">Property</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="services.php">Our Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
        </ul>
      </div>
      <button type="button" class="btn btn-b-n navbar-toggle-box-collapse d-none d-md-block" data-toggle="collapse"
        data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button>
    </div>
  </nav>
  <!--/ Nav End /-->