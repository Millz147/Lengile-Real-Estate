<?php
include ('../db/conn.php');
include('header.php');

?>

        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">SLIDES UPDATOR</h1>
                        <h1 class="page-subhead-line">Update the Slide Shows</h1>

                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
                   

                        <div class="col-md-6">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            All Slides
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Full Address</th>
                                            <th>Price</th>
                                            <th>Nature of Apartment</th>
                                            <th>Purpose</th>
                                            <th></th>

                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php



$sql = "SELECT * FROM slides";
$link = mysqli_query($connect,$sql);
if ($link){
$s = mysqli_num_rows($link);
for ($ann = 1; $ann <=$s;$ann++){

  while ($row = mysqli_fetch_array($link,MYSQLI_ASSOC)){


  
$addr = $row['Address'];

$price = $row['Price'];
$Purpose = $row['Purpose'];
$Nature = $row['Nofapartment'];
 
                 
                    echo "<tr>

                      <td>";

                    

                      echo $addr;            


                     echo "</td>
                      <td>$price</td>
                      
                      
                      <td>$Nature</td>
                      <td>$Purpose</td>
                      <td><a href=\"remslide.php?addr=$addr\"><button>Remove from Slide</button><a></td>
                      
                     
                    </tr>";
                  }}
  }

          ?>
                   

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                     <!-- End  Kitchen Sink -->
                </div>


<div class="col-md-6">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            All Properties
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Full Address</th>
                                            <th>Price</th>
                                            <th>Date of Creation</th>
                                            <th>Nature of Apartment</th>
                                            <th></th>

                                            
                                        </tr>
                                    </thead>
                                    <tbody>


<?php



$sql = "SELECT * FROM properties";
$link = mysqli_query($connect,$sql);
if ($link){
$s = mysqli_num_rows($link);
for ($ann = 1; $ann <=$s;$ann++){

  while ($row = mysqli_fetch_array($link,MYSQLI_ASSOC)){


  
$addr = $row['Address'];

$price = $row['Price'];
$datee = $row['Dateofcreation'];
$Nature = $row['Nofapartment'];
 
                 
                    echo "<tr>

                      <td>";

                    

                      echo $addr;            


                     echo "</td>
                      <td>$price</td>
                      <td>$datee</td>
                      
                      <td>$Nature</td>
                      <td><a href=\"addslides.php?addr=$addr\"><button>Add to Slide</button></a></td>
                      
                     
                    </tr>";
                  }}
  }
                    ?>
                   



                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                     <!-- End  Kitchen Sink -->
                </div>




                </div>

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
      <?php
include('footer.php');


   ?>
    <!-- /. FOOTER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>


</body>
</html>
