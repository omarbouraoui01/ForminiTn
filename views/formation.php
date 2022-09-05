<?php
include '../../Controller/formationC.php';
require_once '../../model/formation.php';
session_start();


$formationC = new formationC();

$listeEvents['Pas de filtres'] = $formationC->afficherformation();
$listeEvents['Developpement'] = $formationC->afficherCateg("Developpement");
$listeEvents['Electromecanique'] = $formationC->afficherCateg("Electromecanique");
$listeEvents['Genie civil'] = $formationC->afficherCateg("Genie civil");
$listeEvents['finance'] = $formationC->afficherCateg("finance");
$listeEvents['sante'] = $formationC->afficherCateg("sante");
$listeEvents['multimedia'] = $formationC->afficherCateg("multimedia");
$filtre = "Pas de filtres";

if(isset($_POST['search'])){
	$filtre = $_POST["categ"];
  }
  foreach($listeEvents["Pas de filtres"] as $key){
	if(isset($_POST["res" . $key["id"]])){
	  $formationC->augmenterVente($key["titre"]);
	}
	if(isset($_POST["profile" . $key["id"]])){
	  $_SESSION['sq'] = $key["id"];
	  header("Location:profile.php");
	}
  }

  $connect = mysqli_connect("localhost", "root", "", "omar");  
	if(isset($_POST["add_to_cart"]))  
	{  
		 if(isset($_SESSION["shopping_cart"]))  
		 {  
			  $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");  
			  if(!in_array($_GET["id"], $item_array_id))  
			  {  
				   $count = count($_SESSION["shopping_cart"]);  
				   $item_array = array(  
						'item_id'               =>     $_GET["id"],  
						'item_name'               =>     $_POST["hidden_name"],  
						'item_price'          =>     $_POST["hidden_price"]  
						
				   );  
				   $_SESSION["shopping_cart"][$count] = $item_array;  
			  }  
			  else  
			  {  
				   echo '<script>alert("Item Already Added")</script>';  
				   echo '<script>window.location="formation.php"</script>';  
			  }  
		 }  
		 else  
		 {  
			  $item_array = array(  
				   'item_id'               =>     $_GET["id"],  
				   'item_name'               =>     $_POST["hidden_name"],  
				   'item_price'          =>     $_POST["hidden_price"]  
				    
			  );  
			  $_SESSION["shopping_cart"][0] = $item_array;  
		 }  
	}  
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
					<li class="active"><a  href="formation.php">Nos Formations</a></li>
					<li><a href="reservation.php">Reservations</a></li>
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

		<ol class="breadcrumb">
			<li><a href="index.html">Home</a></li>
			<li class="active">Nos Formations</li>
			
		</ol>
		<h1>Formations</h1>
      <p>Cherchez vos Formations preférées</p>
      <form action="" method="post">
        <select name="categ" id="categ" value="Pas de filtres">
          <option value="Pas de filtres">Pas de filtres</option>
          <option value="Developpement">Developpement</option>
          <option value="Electromecanique">Electromecanique</option>
          <option value="Genie civil">Genie civil</option>
          <option value="finance">Finance</option>
          <option value="sante">Sante</option>
          <option value="multimedia">Multimedia</option>
        </select>
        <input type="submit" name="search" value="Go"/>
      </form>
    </div>

		<div class="row">

			<?php foreach ($listeEvents[$filtre] as $key)  { ?>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up">
                  <div class="icon-box">
                    <div class="icon"><i class="bi bi-card-text"></i></div>
					<form method="post" action="formation.php?action=add&id=<?php echo $key["id"]; ?>"> 
                    <h4><a href=""><?php echo $key['titre']; ?> </a></h4>
                    <img src="<?php echo $key['img']; ?>" width="250" height="250" alt="image" />
                    <h3> &nbsp; &nbsp; &nbsp; <?php echo $key['prix']; ?> DT &nbsp; &nbsp; &nbsp;</h3>
					<h2> &nbsp; &nbsp; &nbsp; <?php echo $key['note']; ?> /5 &nbsp; &nbsp; &nbsp;</h2>
                    <p>  &nbsp; &nbsp; Aura lieu &nbsp; &nbsp; &nbsp; <br> 
                     &nbsp;  <?php echo $key['adresse']; ?> &nbsp; </p>
					 
                               <input type="hidden" name="hidden_name" value="<?php echo $key["titre"]; ?>" />  
                               <input type="hidden" name="hidden_price" value="<?php echo $key["prix"]; ?>" />  
                               <input type="submit" name="add_to_cart" style="margin-top:2px;" class="btn btn-success" value="Add to Cart" />  
					<div>
			</form>
					<form method="post">
            
            <input type="submit" name="profile<?php echo $key['id']?>" id="profile<?php echo $key['id']?>" style="position:relative;bottom:-20px;" value="Noter"/>
          </form>
			</div>
                  </div>
                </div>

              <?php
              }
              ?>

				   

			
			
			
			
			
		</div>
	</div>	<!-- /container -->
	

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