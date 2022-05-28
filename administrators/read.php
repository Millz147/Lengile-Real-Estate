<?php
include('header.php');
?>

        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Read Message</h1>
                        <h1 class="page-subhead-line">You can also Reply with a Response Here</h1>

                    </div>
                </div>
                <!-- /. ROW  -->
                
    <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Inbox Reader
                        </div>
                        <div class="panel-body">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#Interested" data-toggle="tab">Interested In</a>
                                </li>
                                <li class=""><a href="#mbody" data-toggle="tab">Message Body</a>
                                </li>
                                <li class=""><a href="#info" data-toggle="tab">Sender's Info</a>
                                </li>
                              
                                </li>
                            </ul>

<?php

$mno = $_GET['mno'];

$sql = "SELECT * FROM messages WHERE Messageno = $mno";
$link = mysqli_query($connect,$sql);
if ($link){
$s = mysqli_num_rows($link);
for ($ann = 1; $ann <=$s;$ann++){

  while ($row = mysqli_fetch_array($link,MYSQLI_ASSOC)){


$save = "UPDATE messages SET Status = 'Read' WHERE Messageno = '$mno'";
$linkk = mysqli_query($connect,$save);
if ($linkk){


  
$fname = $row['Fullname'];

$email = $row['Email'];
$message = $row['Messagebody'];
$interested = $row['Interested'];
 $datee = $row['Datee'];
$status = $row['Status'];
$phone = $row['Phone'];
$mno = $row['Messageno'];



$sql2 = "SELECT * FROM properties WHERE Address = 'Apapa, Manchester, England'";
$link2 = mysqli_query($connect,$sql2);
if ($link2){
$s2 = mysqli_num_rows($link2);
for ($ann2 = 1; $ann2 <=$s2;$ann2++){

  while ($row2 = mysqli_fetch_array($link2,MYSQLI_ASSOC)){


  
$price = $row2['Price'];

$purpose = $row2['Purpose'];


}}}}



}}}
?>



                            <div class="tab-content">
                                <div class="tab-pane fade active in" id="Interested">
                                    <h4>Interested In</h4>
                                    <p><?php  echo "$interested";?> </p>

                                    <h6><i>Price:</i><?php  echo "$price";?></h6>
                                    
                                    <h6><i>Purpose:</i> <?php  echo "$purpose";?></h6>

                                </div>
                                <div class="tab-pane fade" id="mbody">
                                    <h4>Message Body</h4>
                                    <p><?php  echo "$message";?></p>
                                </div>
                                <div class="tab-pane fade" id="info">
                                    <h4>Sender's Info</h4>

<h6><i>Fullname:</i></h6> 
<?php  echo "$fname";?>
                                    
<h6><i>Email:</i></h6>
                      <?php  echo "$email";?>              
<h6><i>Phone:</i></h6>
<?php  echo "$phone";?>
<h6><i>Since On:</i></h6>
<?php  echo "$datee";?>

                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
                

                 <div class="col-md-6 col-sm-6 col-xs-12">
               <div class="panel panel-info">
                        <div class="panel-heading">
                           Reply
                        </div>
                        <div class="panel-body">
                            <form role="form">
                                        <div class="form-group">
                                            <label>Subject</label>
                                            <input class="form-control" type="text" value="<?php  echo "Re: $interested (LengIle)";?>" Disabled>
                                            
                                        </div>
                                 <div class="form-group">
                                            <label>From </label>
                                            <input class="form-control" type="email" placeholder="Email Only">
                                     
                                        </div>
                                            <div class="form-group">
                                            <label>Body</label>
                                            <textarea class="form-control" rows="5"></textarea>
                                        </div>
                                  
                                 
                                        <button type="submit" class="btn btn-info">Send Message </button>

                                    </form>
                            </div>
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
