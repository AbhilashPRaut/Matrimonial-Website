



<html class="no-js">
<head>
<!-- basic page needs-->
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<title>matrimonial</title>
 
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<!-- mobile specific metas-->
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="format-detection" content="telephone=no">
<!-- css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap-theme.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
 <link rel="stylesheet" href="css/jquery.timepicker.css">
<link href="vendor/prettyphoto/css/prettyphoto.css" rel="stylesheet" type="text/css">
<link href="vendor/owl-carousel/css/owl.carousel.css" rel="stylesheet" type="text/css">
<link href="vendor/owl-carousel/css/owl.theme.css" rel="stylesheet" type="text/css">
<link href="css/custom.css" rel="stylesheet" type="text/css">
<link href="narrow-jumbotron.css" rel="stylesheet">
<!-- color style -->
<link class="alt" href="colors/color1.css" rel="stylesheet" type="text/css">

<link href="style-switcher/css/style-switcher.css" rel="stylesheet" type="text/css">
<!-- scripts -->
<script src="js/modernizr.js"></script>
<script src="js/jquery.js"></script>

<link rel="stylesheet" type="text/css" href="js/jScrollPane/jScrollPane.css" />
<link rel="stylesheet" type="text/css" href="css/page.css" />
<link rel="stylesheet" type="text/css" href="css/chat.css" />

  
  <script src="js/jquery.timepicker.js"></script>
  <link class="alt" href="css/jquery-ui.css" rel="stylesheet" type="text/css">
  <script src="js/jquery-1.10.2.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
  $(function() {
    $( "#datepicker2" ).datepicker();
  });
</script>

</head>
<body class="home" onload="initialize()">
    <!-- start site header -->
       

  <div class="jumbotron">
  <h1 class="display-3">Matrimonial Website</h1>
  <p class="lead">Be happy together....</p>
  </div>

 
 
  
    
  <div class="navbar">
            
               
                <div class="panel-heading">
            
      <div class="header-right">
                    <div class="user-logout-panel">
        <a href="index.php" ><input type="submit" name="signup" class="btn btn-primary btn-lg btn-block" value="Logout"></a>
                     </div>
      </div>
                    <a href="#" class="visible-sm visible-xs" id="menu-toggle"><i class="fa fa-bars"></i></a>
                <!-- Main Navigation -->
                  <nav class="main-navigation dd-menu toggle-menu" role="navigation">
                    <ul class="sf-menu">
                        <li><a href="index.php">Home</a> </li>
                        <li><a href="aboutus.php">About Us</a> </li>
                        <li><a href="successstory.php">Success Story</a> </li>
                        <li><a href="register.php">Registration</a> </li>
                        
                        <li><a href="search.php">Search</a> </li>
                       <li><a href="help.php">Contact Us</a></li>
                        
</ul>
        </nav>
            </div>
        </div>
    </div>

<!-- Start Body Content -->


<div class="main" role="main">
      <div id="content" class="content full dashboard-pages">
          <div class="container">

 <h3>My Profile</h3>
                           <div class="card" style="width: 20rem;">
                              <img class="card-img-top" src="..." alt="">
                      <div class="card-body">
                              <p class="card-text">
                                  </div>
                                        </div>
                             <form role="form" action="userprofile.php" method="post" enctype="multipart/form-data">
        
                                  <input id="Imgup" type="file" name="myfile" onchange="PreviewImage();" />
                                   
                                       <br>
                                    <div class="form-group" style="width:20% ">
                             <input type="text" class="form-control"  placeholder=" ">
    
                                         </div>
                                          <div class="spacer-20"></div>
                       <a href="myprofile.php>"><input type="submit" name="more" class="btn btn-primary btn-lg btn-block" value="more" style="width:10%"></a>
                      
   
                               
                            </form>








</div>
</div>
</div>
</div>
</div>
    <!-- End Body Content -->
   <!-- Start site footer -->
     <footer class="site-footer">
        <div class="site-footer-top">
          
        <div class="site-footer-bottom">
          <div class="container">
                <div class="row">
                  <div class="col-md-6 col-sm-6 copyrights-left">
                      <p>Copryright 2017 Matrimonial Website</p>
                    </div>
                   
                </div>
            </div>
        </div>
    </footer>
    <!-- End site footer -->
  </div>
 </div>
  <a id="back-to-top"><i class="fa fa-angle-double-up"></i></a>  
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4>Login to your account</h4>
            </div>
            <div class="modal-body">
                <form action="<?php $_SERVER['PHP_SELF'] ;?>" method="POST" >
                    <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-check">
          <label class="form-check-label">
            <input type="checkbox" class="form-check-input">
            Remember Me
          </label>
        </div>
        <a href="userprofile.php"type="submit" class="btn btn-primary">Login</a>
                </form>
        <div class="modal-footer"></div>
     <div class="social-auth-links text-center">
          <p>- OR -</p>
          <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using Facebook</a>
        </div><!-- /.social-auth-links -->

        <a href="forgetpass.php">I forgot my password</a><br>
        <a href="#" data-toggle="modal" data-target="#loginModal2" >Register new member</a>
           </div>
         </div>
    </div>
</div>

  </div>
</div>







<script src="js/bootstrap.js"></script> <!-- ui -->


</body>
</html>