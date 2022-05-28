<?php


if (isset($_POST['submit'])) {
   






$nofap = $_POST['nofap'];
$purp =$_POST['purp'];
$bed = $_POST['bed'];
$bathroom = $_POST['bathroom'];
$garage = $_POST['garage'];
$area = $_POST['area'];
$price = $_POST['price'];
$descr = $_POST['descr'];
$addr = $_POST['addr'];
$country = $_POST['country'];
$state = $_POST['state'];
$city = $_POST['city'];
$docreation = date('d/m/y');


   $j = 0; //Variable for indexing uploaded image 
    
    $target_pathc = "uploads/"; //Declaring Path for uploaded images


    if (count($_FILES['file']['name']) == 6){
   for ($i = 0; $i < count($_FILES['file']['name']); $i++) {//loop to get individual element from the array
$randd = rand(3445666,667787887);

        $validextensions = array("jpeg", "jpg", "png");  //Extensions which are allowed

        $ext = explode('.', basename($_FILES['file']['name'][$i]));//explode file name from dot(.) 
        $file_extension = end($ext); //store extensions in the variable
        
        $target_path = $target_pathc. $nofap . $randd . "." . $ext[count($ext) - 1];//set the target path with a new name of image

        $j = $j + 1;//increment the number of uploaded images according to the files in array       
      
      if (($_FILES["file"]["size"][$i] < 1000000) //Approx. 100kb files can be uploaded.
                && in_array($file_extension, $validextensions)) {
            if (move_uploaded_file($_FILES['file']['tmp_name'][$i], $target_path)) {//if file moved to uploads folder
               
                if ($j == 1){
                    $p1 = $target_path;
                    global $p1;
                }
                 if ($j == 2){
                    $p2 = $target_path;
                     global $p2;
                }
                if ($j == 3){
                    $p3 = $target_path;
                     global $p3;
                }
                 if ($j == 5){
                    $p5 = $target_path;
                     global $p5;
                }
                if ($j == 4){
                    $p4 = $target_path;
                     global $p4;
                }
                 if ($j == 6){
                    $p6 = $target_path;
                     global $p6;
                }


                
            } else {//if file was not moved.
                echo ".<script>alert('Please Try Again.')</script><br/><br/>";
                     echo "<script>window.location = 'addp.php'</script>";
            }
        } else {//if file size and file type was incorrect.
            echo ".<script>alert('***Invalid file Size or Type***')</script><br/><br/>";
               echo "<script>window.location = 'addp.php'</script>";
        }
    }  }
    else{
        echo "<script>alert('6 Photos need to be attached!!!')</script>";
     echo "<script>window.location = 'addp.php'</script>";
    }



include '../db/conn.php';
$sql = "SELECT * FROM properties WHERE Address = '$addr'";
	  $raw_results = mysqli_query($connect,$sql);
            
            if($raw_results)
       {
			while($row = mysqli_fetch_array($raw_results,MYSQLI_ASSOC))
                
                {


echo "<script>alert('Property is already in existence here!!!');</script>";
echo "<script>window.location = 'addp.php'</script>";
exit();

}



$sql1 = "INSERT INTO properties (Dateofcreation, Nofapartment, Purpose, Bed, Garage, Bathroom, Areacovered, Price, Description, Address, Country, State, City, p1, p2, p3, p4, p5, p6)VALUES('$docreation','$nofap','$purp','$bed','$garage','$bathroom','$area','$price','$descr','$addr','$country','$state','$city','$p1', '$p2','$p3', '$p4', '$p5', '$p6')";


$res = mysqli_query($connect,$sql1);

      if ($res == TRUE)
       {
       	
       	echo "<script>alert('Successfully Added');</script>";
        echo "<script>window.location = 'addp.php'</script>";

       }
}
}

?>