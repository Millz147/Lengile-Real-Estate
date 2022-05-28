<?php


if (isset($_POST['submit'])) {
   






$fullname = $_POST['fullname'];
$email =$_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$datee = date('d/m/y');

$randd = rand(00,9293842);
$status = "Unread";
$interested = $_POST['interest'];


include ('db/conn.php');

$sql = "INSERT INTO messages (Fullname, Email, Messagebody, Interested, Datee, Status, Phone, Messageno)VALUES('$fullname','$email','$message','$interested','$datee','$status','$phone','$randd')";


$res = mysqli_query($connect,$sql);

      if ($res)
       {
        
        echo "<script>alert('Message Successfully Sent');</script>";
        echo "<script>window.location = 'index.php'</script>";

       }






                
            } 

            else {
                echo ".<script>alert('Can't Receive any message!!!.)</script><br/><br/>";
                     echo "<script>window.location = 'index.php'</script>";
  
}


?>