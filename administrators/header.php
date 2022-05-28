<?php
session_start();
if (!isset($_SESSION['username'])){

  
echo "<script>alert('Please go back to login');</script>";
    echo "<script>window.location = 'login.php';</script>";

}
include('../db/conn.php');

$username = $_SESSION['username'];

$email = $_SESSION['email'];

$passport = $_SESSION['passport'];  

    


?>



<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

    <link href="../img/leng.png" rel="icon">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Leng Ile</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
       <!--CUSTOM BASIC STYLES-->
    <link href="assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />



   <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({
          google_ad_client: "ca-pub-6883622550208397",
          enable_page_level_ads: true
     });
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  
  <script src="countrystatecity.js"></script>
<script src="c/jquery.js"></script>
<script src="c/script.js"></script>


</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"> <img src="assets/img/leng.png" style="width: 30px; height: 30px;">Leng Ile</a>
            </div>

            <div class="header-right">


<?php

$sql = "SELECT * FROM messages WHERE Status = 'Unread'";
$link = mysqli_query($connect,$sql);
if ($link){
$s = mysqli_num_rows($link);
for ($ann = 1; $ann <=$s;$ann++){

  while ($row = mysqli_fetch_array($link,MYSQLI_ASSOC)){


  }}}?>






                <a href="inbox.php" class="btn btn-info" title="Inbox"><b><?php echo "$s";?> </b><i class="fa fa-envelope-o fa-2x"></i></a>
                
                <a href="logout.php" class="btn btn-danger" title="Logout"><i class="fa fa-exclamation-circle fa-2x"></i></a>

            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div">
                            <img src="<?php echo "$passport";?>" class="img-thumbnail" />

                            <div class="inner-text">
                                <?php echo "$username";?>
                            <br />
                                <small><i><?php echo "$email";?></i> </small>
                            </div>
                        </div>

                    </li>


                    <li>
                        <a class="active-menu" href="dashboard.php"><i class="fa fa-dashboard "></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-home "></i>Properties<span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="addp.php"><i class="fa fa-plus"></i>Add Property</a>
                            </li>
                            <li>
                                <a href="updp.php"><i class="fa fa-edit"></i>Update Property</a>
                            </li>
                            <li>
                                <a href="delp.php"><i class="fa fa-trash-o "></i>Delete Property</a>
                            </li>
                             <li>
                                <a href="slides.php"><i class="fa fa-circle-o "></i>Modifies Slide Properties</a>
                            </li>
                             
                             <li>
                                <a href="allp.php"><i class="fa fa-eyedropper "></i>All Properties</a>
                            </li>
                            
                           
                        </ul>
                    </li>
                     <li>
                        <a href="#"><i class="fa fa-yelp "></i>Extra Pages <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="inbox.php"><i class="fa fa-envelope-o"></i>Inbox</a>
                            </li>
                            <li>
                                <a href="addadmin.php"><i class="fa fa-plus "></i>Add Admin</a>
                            </li>
                          
                        </ul>
                    
                    </li>
                     
                    
                   
                    
                </ul>

            </div>

        </nav>