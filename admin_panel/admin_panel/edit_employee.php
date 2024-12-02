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
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
   
           <!-- /. NAV TOP  -->
<?php
include_once('header.php');
?> 
        <!-- /. NAV SIDE  -->
     
                 <!-- /. ROW  -->
                 <hr />
             
                 <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Edit Employee</h1>
                   

                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
               <div class="panel panel-info">
                        <div class="panel-heading">
                        Edit Employee
                        </div>
                        <div class="panel-body">
                            <form role="form" method="post" enctype="multipart/form-data">
                                        <!-- <div class="form-group">
                                            <label>employee_id</label>
                                            <input class="form-control" type="number">
                                            <p class="help-block">Enter Employee ID here.</p>
                                        </div> -->
									<div class="form-group">
                                            <label>Name</label>
                                            <input class="form-control" type="text" name="name" value="<?php echo $fetch->name;?>">
                                     <p class="help-block">Enter Employee Name here.</p>
                                        </div>
									<div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" type="email"  name="email" value="<?php echo $fetch->email;?>">
                                     <p class="help-block">Enter Employee Email here.</p>
                                        </div>
										<div class="form-group">
                                            <label>Status</label>
                                            <input class="form-control" type="text"  name="status" value="<?php echo $fetch->status;?>">
                                     <p class="help-block">Enter status here.</p>
                                        </div>
										
										
										
									
                                        <button type="submit" name="update"class="btn btn-info">Save Changes</button>

                                    </form>
                            </div>
                        </div>
                            </div>

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
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
