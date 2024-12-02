
﻿<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Bootstrap Advance Admin Template</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body style="background-color:white;">
<?php
if(isset($_SESSION['admin']))
  {
	   echo "<script>
			window.location='admin';
		</script>";
  }	  
  
?>
    <div class="container">
        <div class="row text-center " style="padding-top:100px;">
            <div class="col-md-12">
                <h1 style="color:orange;  border-radius:15px;"></i>Food-Track</h1>
            </div>
        </div>
         <div class="row ">
               
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                           
                            <div class="panel-body">
                                <form role="form" method="post">
                                    <hr />
                                    <h3 style="text-align:center; color:navy;">Enter Details to Login</h3>
                                       <br />
                                       <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                            <input value="<?php if(isset($_COOKIE['admin_email'])) { echo $_COOKIE['admin_email']; }?>" type="text" name="admin_email" class="form-control" placeholder="Your Username " />
                                        </div>
                                                                              <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input value="<?php if(isset($_COOKIE['admin_password'])) { echo $_COOKIE['admin_password']; }?>" type="password" name="admin_password" class="form-control"  placeholder="Your Password" />
                                        </div>
                                    <div class="form-group">
                                            <label class="checkbox-inline">
                                                <input name="arem" value="arem" type="checkbox" /> Remember me
                                            </label>
                                            <span class="pull-right">
                                                   <a href="index.html" >Forget password ? </a> 
                                            </span>
                                        </div>
                                     
                                     
                                        <button type="submit" name="login" class="btn btn-primary ">Login Now</button>                                    <hr />
                                    <!-- Not register ? <a href="index.php" >click here </a> or go to <a href="index.php">Home</a>  -->
                                    </form>
                            </div>
                           
                        </div>
                
                
        </div>
    </div>

</body>
</html>
