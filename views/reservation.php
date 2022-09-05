<?php   
	session_start();
    
    if(isset($_GET["action"]))  
	{  
		 if($_GET["action"] == "delete")  
		 {  
			  foreach($_SESSION["shopping_cart"] as $keys => $values)  
			  {  
				   if($values["item_id"] == $_GET["id"])  
				   {  
						unset($_SESSION["shopping_cart"][$keys]);  
						echo '<script>alert("Item Removed")</script>';  
						echo '<script>window.location="formation.php"</script>';  
				   }  
			  }  
		 }  
	} 
	 ?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>About - Progressus Bootstrap template</title>

	<link rel="shortcut icon" href="assets/images/gt_favicon.png">
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="assets/css/main.css">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body class="home">
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="index.html"><img src="assets/images/logo.png" alt="Progressus HTML5 template"></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
				<li><a class="btn" href="index_2.php"> Hello <?php echo  $_SESSION['nom']  ?></a></li>
					<li ><a href="index_2.php">Home</a></li>
					<li ><a  href="formation.php">Nos Formations</a></li>
					<li class="active"><a href="reservation.php">Reservations</a></li>
					<li><a href="contact.php">Contact</a></li>
					
					<li><a href="logout.php">Logout</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div> 
		</div>
	</div> 
	<!-- /.navbar -->

	<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">

    <div style="clear:both"></div>  
				   <br/>  
				   <h3>&nbsp; &nbsp; &nbsp;Order Details</h3>  
				   <div class="table-responsive">  
						<table class="table table-bordered">  
							 <tr>  
								  <th width="20%">&nbsp; &nbsp; &nbsp; Item Name</th>  
								   
								  <th width="20%">Price</th>  
								   
								  <th width="5%">Action</th>  
							 </tr>  
							 <?php   
							 if(!empty($_SESSION["shopping_cart"]))  
							 {  
								  $total = 0;  
								  foreach($_SESSION["shopping_cart"] as $keys => $values)  
								  {  
							 ?>  
							 <tr>  
								  <td>&nbsp; &nbsp; &nbsp;<?php echo $values["item_name"]; ?></td>  
								 
								  <td>$ <?php echo $values["item_price"]; ?></td>  
								  
								  <td><a href="reservation.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>  
							 </tr>  
							 <?php  
									    
								  }  
							 ?>  
							 
							 <?php  
							 }  
							 ?>  
						</table>  
				   </div>  
			  </div>  
			  <br /> 
              <footer id="footer" class="top-space">

		<div class="footer1">
			<div class="container">
				<div class="row">
					
					<div class="col-md-3 widget">
						<h3 class="widget-title">Contact</h3>
						<div class="widget-body">
							<p>+216 23987323<br>
								<a href="mailto:#">Omar.bouraoui@esprit.tn</a><br>
								<br>
								La Marsa , Tunis
							</p>	
						</div>
					</div>

					<div class="col-md-3 widget">
						<h3 class="widget-title">Follow me</h3>
						<div class="widget-body">
							<p class="follow-me-icons">
								<a href=""><i class="fa fa-twitter fa-2"></i></a>
								<a href=""><i class="fa fa-dribbble fa-2"></i></a>
								<a href=""><i class="fa fa-github fa-2"></i></a>
								<a href=""><i class="fa fa-facebook fa-2"></i></a>
							</p>	
						</div>
					</div>

					

				</div> <!-- /row of widgets -->
			</div>
		</div>

		<div class="footer2">
			<div class="container">
				<div class="row">
					
					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="simplenav">
								<a href="#">Home</a> | 
								<a href="about.html">Nos Formations</a> |
								<a href="sidebar-right.html">Sidebar</a> |
								<a href="contact.html">Reservations</a> |
								<b><a href="index.php">Sign up</a></b>
							</p>
						</div>
					</div>

					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="text-right">
								Copyright &copy; 2022, Omar. Designed by <a href="http://gettemplate.com/" rel="designer">gettemplate</a> 
							</p>
						</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>

	</footer>	
		




	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>
</body>
</html>
