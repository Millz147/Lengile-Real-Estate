<?php
  
  $servername = "localhost"; //change this  accordingly
  $dBUsername = "root";
  $dBPassword = "";
  $dBName = "lengile";
 // session_start();
  $connect=mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

  if (!$connect) {
    die("Connection Failed: ".mysqli_connect_error());
  }
?>
