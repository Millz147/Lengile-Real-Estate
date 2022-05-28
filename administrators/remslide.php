<?php




include ('../db/conn.php');
$addr = $_GET["addr"];

      


$sql = "DELETE FROM slides WHERE Address = '$addr'";

    $raw_resultsss = mysqli_query($connect,$sql);
            
            if($raw_resultsss)
       {





echo "<script>alert('Property Successfully Removed from Slide !!!');</script>";
echo "<script>window.location = 'slides.php'</script>";
exit();

}














?>

