<?php
include('header.php');
?>

        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">INBOX</h1>
                        <h1 class="page-subhead-line">This are all inboxes</h1>

                    </div>
                </div>
                <!-- /. ROW  -->
                       <div class="row">
                   <div class="col-md-12">
                       <div class="panel panel-primary">
      <!-- Default panel contents -->
      <div class="panel-heading">INBOX</div>

      <!-- Table -->
      <table class="table">
        <thead>
          <tr>
            <th>Interested in</th>
              <th>Sender's Name</th>
            <th>On Date</th>
            <th>Status</th>
            <th></th>
        
          </tr>
        </thead>
        <tbody>
          

<?php



$sql = "SELECT * FROM messages";
$link = mysqli_query($connect,$sql);
if ($link){
$s = mysqli_num_rows($link);
for ($ann = 1; $ann <=$s;$ann++){

  while ($row = mysqli_fetch_array($link,MYSQLI_ASSOC)){


  
$fname = $row['Fullname'];

$fname = $row['Fullname'];

$email = $row['Email'];
$message = $row['Messagebody'];
$interested = $row['Interested'];
 $datee = $row['Datee'];
$status = $row['Status'];
$phone = $row['Phone'];
$mno = $row['Messageno'];
                 
                    echo "<tr>

                      <td>";

                    

                      echo $interested;            


                     echo "</td>
                      <td>$fname</td>
                      <td>$datee</td>
                      
                      " ;

                      if ($status == "Unread"){

echo "<td> $status <i class=\"fa fa-circle \" style =\"color: red;\"></i>
                        </td>";}
                        else{
                            echo "<td> $status </i>";
                        }



                      echo "<td><a href=\"read.php?mno=$mno\" class=\"btn btn-primary\">Read</a></td>
                     
                    </tr>";
                  }}
  }
                    ?>
                   


        </tbody>
      </table>
    </div>

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
