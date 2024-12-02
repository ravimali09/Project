<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Panel Railway</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
  
     
<?php
  include_once('header.php');
  ?>
       
                <!-- /. ROW  -->
                <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Manage Food</h1>

                    </div>
                </div>
                <!-- /. ROW  -->
              
            <div class="row">
                <div class="col-md-12">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Manage Food
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>food_id</th>
                                            <th>restaurant_id</th>
                                            <th>name</th>
                                            <th>Description</th>
                                            <th>price</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       
                                       <?php

                                       foreach($food_arr as $data)
                                       {

                                       ?>

                                       <td><?php echo $data->food_id; ?></td>
                                       <td><?php echo $data->restaurant_id; ?></td>
                                         <td><?php echo $data->name; ?></td>
                                           <td><?php echo $data->description; ?></td>
                                           <td><?php echo $data->price; ?></td>
                                           <td><img src="assets/img/food/<?php echo $data->image?>" width="50px" height="30px"/></td>


                                           <td>
                                            <a href="edit?edit_food=<?php echo $data->food_id; ?>" class="btn btn-primary">Edit</a>
                                            <a href="delete?del_food=<?php echo $data->food_id; ?>" class="btn btn-danger" > Delete</a>    
											<a href="#" class="btn btn-info">Status</a>
											</td>
                                        </tr>
                                        <?php
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
                <!-- /. ROW  -->
           
 

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <?php
  include_once('footer.php');
  ?>
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
 
</body>
</html>
