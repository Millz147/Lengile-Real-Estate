<?php
include('header.php');
include ('../db/conn.php');
?>

        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">ALL PROPERTIES</h1>
                        <h1 class="page-subhead-line">ALL AVAILABLE PROPERTIES</h1>

                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
                   

                       

<div class="col-md-11">
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
                                            <th>Purpose</th>

                                            
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
$purpose = $row['Purpose'];
                 
                    echo "<tr>

                      <td>";

                    

                      echo $addr;            


                     echo "</td>
                      <td>$price</td>
                      <td>$datee</td>
                      
                      <td>$Nature</td>
                      <td>$purpose</td>
                      
                     
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
