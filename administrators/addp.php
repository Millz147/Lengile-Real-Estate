﻿<?php
include('header.php');
?>

        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">ADD PROPERTY</h1>
                        <h1 class="page-subhead-line">Add a new available property here</h1>

                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-12">
                       

 <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
               <div class="panel panel-primary" >
                        <div class="panel-heading" style ="background-color: #5cb85c;">
                           <b>ADD PROPERTY</b>
                        </div>
                        <div class="panel-body">
                            <form enctype="multipart/form-data" action="addp2.php" method="post" role="form">
                            
                                        <div class="form-group">
                                            <label>Nature of Apartment</label>
                                            
                                            <select class="form-control" name="nofap" required>
                                                <option>Flat</option>
                                                <option>Duplex</option>
                                                <option>Bungalow</option>
                                                <option>Hut</option>
                                                <option>Mansion</option>
                                                <option>Villa</option>
                                                <option>Castle</option>
                                                <option>Farm House</option>
                                                <option>Studio Apartment</option>
                                                <option>Cottage</option>
                                                <option>Condominium</option>
                                                <option>Single-Family Home</option>
                                            </select>
                                        </div>
                                           
                                        <div class="form-group">
                                            <label>Purpose</label>
                                            
                                            <select class="form-control" name ="purp" required>
                                                <option>Rent</option>
                                                <option>Sale</option>
                                               
                                            </select>
                                        </div>

                                   <div class="form-group">
                                            <label>Bed</label>
                                            
                                            <select class="form-control" name="bed" required>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                                <option>6</option>
                                                <option>7</option>
                                                <option>8</option>
                                                <option>9</option>
                                                <option>10</option>
                                            </select>
                                        </div>


                                          <div class="form-group" >
                                            <label>Bathroom</label>
                                            
                                            <select class="form-control" name="bathroom" required>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                                <option>6</option>
                                                <option>7</option>
                                                <option>8</option>
                                                <option>9</option>
                                                <option>10</option>
                                            </select>
                                        </div>


                                         <div class="form-group">
                                            <label>Garage</label>
                                            
                                            <select class="form-control" name="garage" required>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                                <option>6</option>
                                                <option>7</option>
                                                <option>8</option>
                                                <option>9</option>
                                                <option>10</option>
                                            </select>
                                        </div>
 <div class="form-group">
                                            <label>Enter Area Covered</label>
                                            <input name="area" class="form-control" type="text" placeholder="Eg. 12X24" required>
                                     
                                        </div>
                                            

<label>Price</label>
                                             <div class="input-group">
                                                
      <span class="form-group input-group-btn">
        <button class="btn btn-default" type="button">$</button>
      </span>
      <input type="number" class="form-control" name="price" required/>
    </div>
    <br>
                                     
                                            <div class="form-group">
                                            <label>Brief Description</label>
                                            <textarea class="form-control" rows="3" name="descr" required></textarea>
                                        </div>


                                         <div class="form-group">
                                            <label>Full Address</label>


                                            <input class="form-control" type="text" name="addr" required>
                                        </div>

 <div class="form-group">
                                            <label>Country</label>

                                            <select class="countries form-control" name="country" id="countryId" required>
                                                <option value="">Select Country</option>
                                            </select>
                                        </div>
                                   <div class="form-group">
                                            <label>State</label>
                                            
                                            <select name="state" class="states form-control" id="stateId" required>
                                                 <option value="">Select State</option>
                                            </select>
                                        </div>
                                 
                                  <div class="form-group">
                                            <label>City</label>
                                            
                                            <select class="cities form-control" name="city" id="cityId" required>
                                                
                                                 <option value="">Select City</option>
                                            </select>
                                        </div>
                                 
  <div id="maindiv">

            <div id="formdiv">
                <h2>Upload Property Images</h2>
                
                    6 Photos is Needed. Only JPEG,PNG,JPG Type Image Uploaded. Image Size Should Be Less Than 100KB.
                    <hr/>
                    <div id="filediv"><input name="file[]" type="file" id="file"/></div><br/>
           
                    <input type="button" id="add_more" class="upload" value="Add More Files"/>
                    
                <br/>
                <br/>
                

            </div>
           
           <!-- Right side div -->

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
