<?php

if (isset($_POST['btnsub'])){
    
include '../db/conn.php';
session_start();
$username = $_POST["username"];
$password = $_POST["password"];

$sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password' ";
$link = mysqli_query($connect,$sql);

if ($link){

while($row = mysqli_fetch_array($link,MYSQLI_ASSOC)){

$_SESSION["email"] = $row["Email"];
$_SESSION["username"] = $row["Username"];
$_SESSION["passport"] = $row["Photo"];
echo "<script>alert('Welcome, $username')</script>";
echo "<script>window.location='dashboard.php'</script>";
exit();
}


}




?>

<script type="text/javascript">
    

    alert('Invalid Username/Password!!!');

</script>



<?php
echo "<script>window.location='login.php'</script>";

session_destroy();


}



?>








<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Leng Ile</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body style="background-color: #E2E2E2;">
    <div class="container">
        <div class="row text-center " style="padding-top:100px;">
            <div class="col-md-12">
                <img src="assets/img/leng.png" style="height: 200px; width: 200px"/>
                <p style="size: 16;"><b>LENG ILE ADMINISTRATORS LOGIN</b></p>
                            </div>
        </div>
         <div class="row ">
               
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                           
                            <div class="panel-body">
                                <form enctype="multipart/form-data" action="login.php" method="post" role="form" >
                                    <hr />
                                    <h5>Enter Details to Login</h5>
                                       <br />
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                            <input type="text" class="form-control" placeholder="Your Username " name="username"/>
                                        </div>
                                                                              <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" class="form-control"  placeholder="Your Password" name="password"/>
                                        </div>
                                    <div class="form-group">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" /> Remember me
                                            </label>
                                            <span class="pull-right">
                                                   <a href="index.html" >Forget password ? </a> 
                                            </span>
                                        </div>
                                     
                                      <button type="submit" class="btn btn-primary" name="btnsub">Login </button>
                                    <hr /> Or Go <a href="../index.php">Back</a> 
                                    </form>
                            </div>
                           
                        </div>
                
                
        </div>
    </div>

</body>
</html>
