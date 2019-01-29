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
								<li role="presentation"><a href="contact.html">Contact</a></li>	
								<li role="presentation"><a href="alogout.php">Logout</a></li>						
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
				<li><a href="uhome.php">Home</a></li>
				<li>Recharge</li>			
			</div>		
		</div>	
	</div>
	
	<section id="portfolio">	
        <div class="container">
            <div class="center">
               <p style="color:#FFFFFF">welcome</p>
            </div>

            <ul class="choice">
               <li ><a class="btn btn-default " href="uhome.php" style="background: #1BBD36;color:#FFFFFF" >recharge now</a></li>
                <li ><a class="btn btn-default" href="u_offer.php" >view offers</a></li>
                <li><a class="btn btn-default" href="u_plan.php" data-filter=".html">view Plans</a></li>
                <li ><a class="btn btn-default" href="transaction.php">Transaction History</a></li>
          
            </ul><!--/#portfolio-filter-->
		</div>
	
	<section id="contact-page">
        <div class="container">
            <div class="center">        
               
            </div> 
            <div class="row contact-wrap"> 
                <div class="status alert alert-success" style="display: none"></div>
                
                 <?php if(isset($_SESSION["recharge"]))
					{ 
					?>
    		<font style="margin-left:200px;margin-bottom:50px;" color="#000000">
    
	 				<?php
					 echo $_SESSION["recharge"];
					}
					unset($_SESSION["recharge"])
    				?>
            </font>
                <form id="main-contact-form" class="contact-form"  method="post" action="main.php">
                    <div class="col-sm-5 col-sm-offset-1">
                        <div class="form-group">
                        
                            <label>Select Operator -</label><br />

              <select name="operator" style="width:235px; height:30px;color:#727272	;border-color:#D1D1D1;">
                  <option value="0">--------------Select Operator--------------</option>
                       			 <?php
										$query="select DISTINCT operator from aplan";
									$stmt=$con->prepare($query);
									$stmt->execute();
									while($row=$stmt->fetch(PDO::FETCH_ASSOC))
										{
							
                       			 ?>
				<option style="color:#999999;" value="<?php echo $row["operator"]; ?>" ><?php echo $row["operator"]; ?></option>
                                 <?php
								    }
                        		 ?>
           </select>
                        </div>
                        
                        
                        
                        
<div class="form-group" style="color:#000000">
<br>

	
<input type="radio" name="type" value="prepaid"><label style="margin-right:20px;"> Prepaid </label>
<input type="radio" name="type" value="postpaid" ><label style="margin-right:20px;">Postpaid </label>

<br />
 
</div>
                      
 
 <div class="form-group">
                            <label>Mobile Number</label>
                            <input type="text" name="m_no" class="form-control" required="required"> 
                        </div>                     
                         
                                        
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">GO</button>
                        </div>
                    </div>
                </form>
                
                
                
  
                
                
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->
	
	
	
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