<?php




include ('../db/conn.php');
$addr = $_GET["addr"];

$sql2 = "DELETE FROM properties WHERE Address = '$addr'";

    $raw_resultss = mysqli_query($connect,$sql2);
            
            if($raw_resultss)
       {
      


$sql = "DELETE FROM slides WHERE Address = '$addr'";

    $raw_resultsss = mysqli_query($connect,$sql);
            
            if($raw_resultsss)
       {





echo "<script>alert('Property Successfully Deleted !!!');</script>";
echo "<script>window.location = 'delp.php'</script>";
exit();

}
echo "<script>alert('Property Successfully Deleted !!!');</script>";
echo "<script>window.location = 'delp.php'</script>";
exit();










}




?>

