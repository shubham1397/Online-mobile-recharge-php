<?php session_start();
include_once("conne.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FreeCharge</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/animate.css">
	<link href="css/prettyPhoto.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet" />	
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
	<header>		
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="navigation">
				<div class="container">					
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<div class="navbar-brand">
							<a href="index.html"><h1><span>Free</span>Charge</h1></a>
						</div>
					</div>
					
					<div class="navbar-collapse collapse">							
						<div class="menu">
							<ul class="nav nav-tabs" role="tablist">
									<li role="presentation"><a href="index.html" >Home</a></li>
								<li role="presentation"><a href="about.html">About Us</a></li>
								<li role="presentation"><a href="contact.html" >Contact</a></li>	
                                <li role="presentation"><a href="login.php" class="active">Login</a></li>						
							</ul>
						</div>
					</div>						
				</div>
			</div>	
		</nav>		
	</header>
	
	<div id="breadcrumb">
		<div class="container">	
			<div class="breadcrumb">							
				<li><a href="index.html">Home</a></li>
				<li>Login</li>			
			</div>		
		</div>	
	</div>
	
	
	<section id="contact-page">
        <div class="container">
            <div class="center">   <br>
     
                <h2>Login</h2>
                
            </div> 
  <a href="signup.php" class="btn btn-primary btn-lg" required="required" style="float:right">sign up</a>

            <div class="row contact-wrap" style="margin-top:100px;"> 
                <?php if(isset($_SESSION["logout"]))
					{ 
					?>
    		<font style="margin-left:200px;padding-bottom:50px; font-family:Verdana, Arial, Helvetica, sans-serif" color="#000000">
    
	 				<?php
					 echo $_SESSION["logout"];
					}
					unset($_SESSION["logout"])
    				?>
            </font>
            
            
            <?php if(isset($_SESSION["wrongpass"]))
					{ 
					?>
    		<font style="margin-left:200px;" color="#000000">
    
	 				<?php
					 echo $_SESSION["wrongpass"];
					}
					unset($_SESSION["wrongpass"])
    				?>
            </font>
            
            <?php if(isset($_SESSION["login"]))
					{ 
					?>
    		<font style="margin-left:200px;" color="#000000">
    
	 				<?php
					 echo $_SESSION["login"];
					}
					unset($_SESSION["login"])
    				?>
            </font>
            
            
                <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="wlogin.php">
                    <div class="col-sm-5 col-sm-offset-1">
                        <div class="form-group">
                            <label>UserName *</label>
                            <input type="text" name="username" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Password *</label>
                            <input type="password" name="pass" class="form-control" required="required">
                        </div>
                      
                           
                                           
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Login</button>
                        </div>
                    </div>
                </form>
                </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->
	
	<footer>
		<div class="footer">
			<div class="container">
				<div class="social-icon">
					<div class="col-md-4">
						<ul class="social-network">
							<li><a href="#" class="fb tool-tip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" class="twitter tool-tip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#" class="gplus tool-tip" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#" class="linkedin tool-tip" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="#" class="ytube tool-tip" title="You Tube"><i class="fa fa-youtube-play"></i></a></li>
						</ul>	
					</div>
				</div>
				
				<div class="col-md-4 col-md-offset-4">
					<div class="copyright">
						&copy; shubham shinde and sandip chavan</a>
					</div>
                    <!-- 
                        All links in the footer should remain intact. 
                        Licenseing information is available at: http://bootstraptaste.com/license/
                        You can buy this theme without footer links online at: http://bootstraptaste.com/buy/?theme=Company
                    -->
				</div>						
			</div>
			<div class="pull-right">
				<a href="#home" class="scrollup"><i class="fa fa-angle-up fa-3x"></i></a>
			</div>
		</div>
	</footer>
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jquery-2.1.1.min.js"></script>	
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>  
	<script src="js/wow.min.js"></script>
	<script src="js/functions.js"></script>
	
  </body>
</html>