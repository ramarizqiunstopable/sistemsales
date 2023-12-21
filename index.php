﻿<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sistem Sales IDM</title>
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
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <img class="mb-4" src="assets/img/Logo Indomaret.png" alt="" width="150" height="65">
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;">  &nbsp; <a href="login.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
					</li>
                    <li><a href="index.php?halaman=sales"><i class="fa fa-edit fa-3x"></i> Input data sales</a></li>
                    <li><a  href="index.php?halaman=stockout"><i class="fa fa-table fa-3x"></i> Input data Stockout</a></li>				
					<li><a   href="login.php"><i class="fa fa-bolt fa-3x"></i> Logout</a></li>	

                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">  
                <?php 
                if (isset($_GET['halaman']))
                {
                    if ($_GET['halaman']=="stockout")
                    {
                        include 'istockout.php';
                    }
                    elseif ($_GET['halaman']=="sales")
                    {
                        include 'isales.php';
                    }
                    elseif ($_GET['halaman']=="hapussls")
                    {
                        include 'hapussales.php';
                    }
                    elseif ($_GET['halaman']=="editsls")
                    {
                        include 'editsales.php';
                        
                    }
                    elseif ($_GET['halaman']=="hapusstc")
                    {
                        include 'hapusstock.php';
                    }
                    elseif ($_GET['halaman']=="editstc")
                    {
                        include 'editstock.php';
                    }
                    

                }
                else
                {
                    include 'index.php';
                }

                ?>    
            </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
   
</body>
</html>
