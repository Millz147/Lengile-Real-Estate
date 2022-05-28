<?php


if (isset($_POST['submit'])) {
   $username =$_POST['username'];

 $name = $_FILES['passport']['name'];
        $target_dir = "passports/";
        $target_file = $target_dir . basename($_FILES["passport"]["name"]);
 $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        $extensions_arr = array("jpg","jpeg","png","gif");

        if ($extensions_arr){

            $p = $username."-passport.".$imageFileType;
$passport = $target_dir.$username."-passport.".$imageFileType;
 move_uploaded_file($_FILES['passport']['tmp_name'],'passports/'.$p);

        }
else
{

echo "<script>Alert('Invalid Passport Choose');</script>";
  header("Location:addadmin.php");

}





$email = $_POST['email'];

$password = $_POST['password'];



include '../db/conn.php';
$sql = "SELECT * FROM admin WHERE username = '$username' OR Email = '$email'";
	  $raw_results = mysqli_query($connect,$sql);
            
            if($raw_results)
       {
			while($row = mysqli_fetch_array($raw_results,MYSQLI_ASSOC))
                
                {


echo "<script>alert('Username/Email not Avaialble!!!');</script>";
echo "<script>window.location = 'addadmin.php'</script>";
exit();

}



$sql1 = "INSERT INTO admin (Email, Username, Password, Photo)VALUES('$email','$username','$password','$passport')";


$res = mysqli_query($connect,$sql1);

      if ($res == TRUE)
       {
       	
       	echo "<script>alert('Successfully Registered');</script>";
        echo "<script>window.location = 'addadmin.php'</script>";

       }
}
}

?>