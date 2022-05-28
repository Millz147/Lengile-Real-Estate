<?php
include('header.php');
?>

        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">ADD A NEW ADMIN</h1>
                        <h1 class="page-subhead-line">Add a New Admin Here</h1>

                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
               <div class="panel panel-primary" >
                        <div class="panel-heading" style ="background-color: #5cb85c;">
                           <b>ADD ADMIN</b>
                        </div>
                        <div class="panel-body">
                            <form enctype="multipart/form-data" action="addadmin2.php" method="post" role="form">           
                                            

<label>Email</label>
                                             <div class="input-group">
                                                
    
      <input type="email" class="form-control" name="email" required/>
    </div>
    <br>
                                     
                                    


                                         <div class="form-group">
                                            <label>Username</label>


                                            <input class="form-control" type="text" name="username" required>
                                        </div>
                                         <div class="form-group">
                                            <label>Password</label>


                                            <input class="form-control" type="password" name="password" required>
                                        </div>

 
<script>
    function previewFile(input){
        var file = $("input[type=file]").get(0).files[0];
 
        if(file){
            var reader = new FileReader();
 
            reader.onload = function(){
                $("#previewImg").attr("src", reader.result);
            }
 
            reader.readAsDataURL(file);
        }
    }


       </script>

  <div class="form-group">
                                            <label>Passport</label><br>

<img src="" width="200" height="200" id="previewImg" ><br><input onchange="previewFile(this);" type="file" name="passport" value = "Select Image" />
</div>



                                        <button type="submit" class="btn btn-success" name="submit">Submit </button>
                                         <button type="button" class="btn btn-danger">Reset</button>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-149371669-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-149371669-1');
</script>



                                    </form>
                            </div>
                        </div>
                            </div></div>








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
