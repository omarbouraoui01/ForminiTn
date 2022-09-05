<?php 
include '..\..\Controller\formationC.php';

require_once '..\..\model\formation.php';
session_start();
$formationC = new formationC();
if (isset($_REQUEST['edit'])) {


if (isset($_GET['id'])) {
  $salleToEdit = $formationC->getformationbyID($_GET['id']);
}

  
 
     
          
          
          
          
          $formation = new formation($_POST['id'],$_POST['sujet'],$_POST['type'],$_POST['adresse'], $_POST['categorie'], "" ,$_POST['prix'],$_POST['duree'],$_POST['datef'],$_SESSION['id']);
          $formationC->modifierformation($formation);
          
          header('Location:ajouterformation.php');
          
         // header('Location:blank.php');
}
       else
  {
          echo 'error';
          //header('Location:blank.php');
      }
    


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Breeze Admin</title>
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css" />
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css" />
    <link rel="stylesheet" href="assets/vendors/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="shortcut icon" href="assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <div class="text-center sidebar-brand-wrapper d-flex align-items-center">
        <a class="sidebar-brand brand-logo" href="index.html"><img src="assets/images/logo.svg" alt="logo" /></a>
        <a class="sidebar-brand brand-logo-mini pl-4 pt-3" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <ul class="nav">
          <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
              <div class="nav-profile-image">
                <img src="assets/images/faces/face1.jpg" alt="profile" />
                <span class="login-status online"></span>
                <!--change to offline or busy as needed-->
              </div>
              <div class="nav-profile-text d-flex flex-column pr-3">
                <span class="font-weight-medium mb-2"><?php echo $_SESSION['nom']; ?></span>
                
              </div>
            
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../index.html">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="mdi mdi-crosshairs-gps menu-icon"></i>
              <span class="menu-title">Gestion</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="ajouteruser.php">Utilisateur</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="ajouterformation.php">Formations</a>
                </li>
               
              </ul>
            </div>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="pages/charts/chartjs.html">
              <i class="mdi mdi-chart-bar menu-icon"></i>
              <span class="menu-title">Charts</span>
            </a>
          </li>
          
          <li class="nav-item sidebar-actions">
            <div class="nav-link">
              <div class="mt-4">
                <div class="border-none">
                  <p class="text-black">Notification</p>
                </div>
                <ul class="mt-4 pl-0">
                  <li>Sign Out</li>
                </ul>
              </div>
            </div>
          </li>
        </ul>
      </nav>
      <div class="container-fluid page-body-wrapper">
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close mdi mdi-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-default-theme">
            <div class="img-ss rounded-circle bg-light border mr-3"></div> Default
          </div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme">
            <div class="img-ss rounded-circle bg-dark border mr-3"></div> Dark
          </div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles light"></div>
            <div class="tiles dark"></div>
          </div>
        </div>
        <nav class="navbar col-lg-12 col-12 p-lg-0 fixed-top d-flex flex-row">
          <div class="navbar-menu-wrapper d-flex align-items-stretch justify-content-between">
            <a class="navbar-brand brand-logo-mini align-self-center d-lg-none" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
            <button class="navbar-toggler navbar-toggler align-self-center mr-2" type="button" data-toggle="minimize">
              <i class="mdi mdi-menu"></i>
            </button>
            <ul class="navbar-nav">
              
             
                
              <li class="nav-item nav-search border-0 ml-1 ml-md-3 ml-lg-5 d-none d-md-flex">
                <form class="nav-link form-inline mt-2 mt-md-0">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search" />
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-magnify"></i>
                      </span>
                    </div>
                  </div>
                </form>
              </li>
            </ul>
            <ul class="navbar-nav navbar-nav-right ml-lg-auto">
              <li class="nav-item dropdown d-none d-xl-flex border-0">
                <a class="nav-link dropdown-toggle" id="languageDropdown" href="#" data-toggle="dropdown">
                  <i class="mdi mdi-earth"></i> Francais </a>
                
              </li>
              <li class="nav-item nav-profile dropdown border-0">
                <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown">
                  
                  <span class="profile-name"><?php echo $_SESSION['email']; ?></span>
                </a>
                <div class="dropdown-menu navbar-dropdown w-100" aria-labelledby="profileDropdown">
                  
                  <a class="dropdown-item" href="logout.php">
                    <i class="mdi mdi-logout mr-2 text-primary"></i> Signout </a>
                </div>
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-menu"></span>
            </button>
          </div>
        </nav>
        <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
          <?php
			if (isset($_GET['id'])){
				$formation = $formationC->getformationbyID($_GET['id']);
				
         ?>
            
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Modifier Formation</h4>


        <form class="forms-sample" action="" enctype="multipart/form-data" method="POST">
                
                         <div class="form-group">
                      
                      <input type="text" class="form-control" id="id" name="id" value = "<?php echo $formation['id']; ?>" >
                    </div>
                      
                    
                    <div class="form-group">
                      <label for="sujet">Sujet</label>
                      <input type="text" class="form-control" id="sujet" name="sujet" placeholder="Titre de la formation" value = "<?php echo $formation['titre']; ?>">
                   <label id="error1"></label>
                    </div>
                    <div class="form-group">
                      <label for="type">Type</label>
                      <input type="text" class="form-control" id="type" name="type" placeholder="Type de la Formation" value = "<?php echo $formation['type']; ?>">
                   <label id="error1"></label>
                    </div>
                    <div class="form-group">
                      <label for="type">Adresse</label>
                      <input type="text" class="form-control" id="adresse" name="adresse" placeholder="Adresse" value = "<?php echo $formation['adresse']; ?>">
                   <label id="error1"></label>
                    </div>
                    
                    
                    <div class="form-group">
                      <label for="capacite">Date</label>
                      <input type="Date" class="form-control" id="capacite" placeholder="Capacite" name="datef" value = "<?php echo $formation['datef']; ?>">    
                    </div>
                    <div class="form-group">
                      <label for="frais">Prix</label>
                      <input type="text" class="form-control" id="prix" placeholder="prix" name="prix"   value = "<?php echo $formation['prix']; ?>" >
                    </div>
                    <div class="form-group">
                      <label for="duree">Durée</label>
                      <input type="text" class="form-control" id="duree" placeholder="Durée" name="duree" value = "<?php echo $formation['duree']; ?>"  >
                    </div>
                    <div class="form-group">
                      <label>File upload</label>
                      <input required type="file" class="form-control" id="fileToUpload"  name="fileToUpload" value = "<?php echo $formation['img']; ?>">
                    </div>
                    <div>
                    <label for="cars"  >choisir Categorie</label>
                   
<select class="form-control"  name="categorie" id="categorie" >
  <option value="Developpement">Developpement</option>
  <option value="Electromecanique">Electromecanique</option>
  <option value="Genie Civil">Genie Civil</option>
  <option value="Finance">Finance</option>
  <option value="Sante">Sante</option>
  <option value="Multimedia">Multimedia</option>
  <option value="Soft skills">Soft skills</option>
  
  
</select>
</div>
                     

                <div>
                    
                    <button type="submit" name="edit" class="btn btn-primary me-2">Edit</button>
</div>
                    <div>
                    <button class="btn btn-light">Cancel</button>
</div>
                  </form>
                  </div>
                </div>
              </div>
              <?php
		   }
       ?>