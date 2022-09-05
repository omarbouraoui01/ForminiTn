<?php
include '../../Controller/formationC.php';
require_once '../../model/formation.php';

session_start();
$formationC = new formationC();
$formation = $formationC->getformationbyID($_SESSION['sq']);
if(isset($_POST["test"])){ 
  $formationC->Noter($_SESSION['sq'], $_POST["note"]);
  header("Location:profile.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> Films </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Day - v4.7.0
  * Template URL: https://bootstrapmade.com/day-multipurpose-html-template-for-free/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>


  <main id="main">

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">

    <ol>
      <li><a href="formation.php">Home</a></li>
      <li> Formation </li>
    </ol>
    <h2>Formation</h2>

  </div>
</section><!-- End Breadcrumbs -->

<section class="inner-page">
  <div class="container">
   <!-- ======= Services Section ======= -->
<section id="services" class="services">
  <div class="container">

    <div class="section-title">
      
      <h1><?php echo $formation['titre'] ?></h1>
      <p>Noter la formation</p>
    </div>
    <img  src="<?php echo $formation["img"] ?>"  width="250"  height="250" alt="image"/>
    <h4><a href=""><?php echo "Note:" . number_format((float)$formation["note"], 1, '.', ''). "/5" ?> </a></h4>
    <form action="" method="POST">
    <select name="note" id="note" value="0">
          <option value=0>0/5</option>
          <option value=1>1/5</option>
          <option value=2>2/5</option>
          <option value=3>3/5</option>
          <option value=4>4/5</option>
          <option value=5>5/5</option>
        </select>
        <input type="submit" name="test" id="test" value="Noter"/>
    </form>
    <div style="position:relative;right:-300px;bottom:300px;">
      <h3><b>Titre:</b></h3>
      <h4><?php echo $formation['titre'] ?></h4>
      <h3><b>Réalisateur:</b></h3>
      <h4><?php echo $formation['adresse'] ?></h4>
      <h3><b>Description:</b></h3>
      <h4><?php echo $formation['datef'] ?></h4>
      <h3><b>Catégorie:</b></h3>
      <h4><?php echo $formation['categorie'] ?></h4>
      <h3><b>Prix:</b></h3>
      <h4><?php echo $formation['prix'] . "DT" ?></h4>
    </div>
    
  </div>
</section><!-- End Services Section -->
<section id="clients" class="clients">
      <div class="container" data-aos="zoom-in">

        <div class="row d-flex align-items-center">

          <div class="col-lg-2 col-md-4 col-6">
            <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
          </div>

        </div>

      </div>
    </section><!-- End Clients Section -->
    <p align = "center">
     End 
    </p>
  </div>
</section>

</main><!-- End #main -->

  

  <!-- ======= Footer ======= -->
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