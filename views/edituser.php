<?php
	include "../../controller/userC.php";
  include_once '../../model/user.php';
  
 session_start();
  
	$userC = new userC();
	$error = "";
	
  if (isset($_REQUEST['edit']))
  {
	if (
		(isset($_POST["nom"])) &&  (isset($_POST["prenom"])) && (isset($_POST["sexe"])) && (isset($_POST["email"])) && (isset($_POST["logg"])) /*&& (isset($_POST["Date_N"]))*/ && (isset($_POST["pass"])) && (isset($_POST["rol"]))
	 )
    {
        if (
            !empty($_POST["nom"]) && 
            !empty($_POST["prenom"]) && 
            !empty($_POST["sexe"]) && 
            !empty($_POST["email"]) &&
            !empty($_POST["rol"]) &&
            !empty($_POST["logg"])&&
            !empty($_POST["pass"])
        ) {
            $user = new User(
                $_POST['id'],
                $_POST['nom'],
                $_POST['prenom'], 
                $_POST['sexe'],
                $_POST['email'],
                $_POST['logg'],
                $_POST['daten'],
                $_POST['pass'],
                $_POST['rol']
			);
			
            $userC->modifieruser($user);
            header('location:ajouteruser.php');
        }
        else
            $error = "Missing information";
	}
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
                  <a class="nav-link" href="pages/ui-features/dropdowns.html">Formations</a>
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
				$user = $userC->getuserbyID($_GET['id']);
				
         ?>

            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Edit user</h4>
                  
                  
                  <form class="forms-sample" action="" enctype="multipart/form-data" method="POST">
                   
                         <div class="form-group">
                      <label for="id">id</label>
                      <input type="text" class="form-control" name="id" id="id"  value = "<?php echo $user['id']; ?>">
                    </div>
                      
                    
                    <div class="form-group">
                      <label for="nom">Name</label>
                      <input type="text" class="form-control" name="nom" id="nom" maxlength="20" value = "<?php echo $user['nom']; ?>">
                   <label id="error1"></label>
                    </div>
                    <div class="form-group">
                      <label for="prenom">Surname</label>
                      <input type="text" class="form-control" name="prenom" id="prenom" maxlength="20" value = "<?php echo $user['prenom']; ?>">
                    </div>
                    <div class="form-group">
                    <label for="cars">Choose Sexe</label>

<select name="sexe" id="sexe">
  <option value="Homme" <?php echo $user['sexe'] == 'Homme' ? ' selected ' : '';?>>Male</option>
  <option value="Femme" <?php echo $user['sexe'] == 'Femme' ? ' selected ' : '';?>>Female</option> 
  <option value="Autre" <?php echo $user['sexe'] == 'Autre' ? ' selected ' : '';?>>Autre</option> 
</select>
                 </div>    
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="email" class="form-control" name="email" id="email" pattern=".+@gmail.com|.+@esprit.tn" value = "<?php echo $user['email']; ?>">
                    </div>
                    <div class="form-group">
                      <label for="login">Pseudo</label>
                      <input type="text" class="form-control" name="logg" id="logg" value = "<?php echo $user['logg']; ?>">
                    </div>
                    <div class="form-group">
                      <label for="daten">Birth Date</label>
                      <input type="date" name="daten" id="daten" class="form-control"  value = "<?php echo $user['daten']; ?>">
                    </div>
                    <div class="form-group">
                      <label for="password">Password</label>
                      <input type="password" class="form-control" name="pass" id="pass" value = "<?php echo $user['pass']; ?>">
                    </div>
                    <div class="form-group">
                    <label for="rol">Choose Role</label>

<select name="rol" id="rol">
  <option value="Admin" <?php echo $user['rol'] == 'Admin' ? ' selected ' : '';?>>Admin</option>
  <option value="User" <?php echo $user['rol'] == 'User' ? ' selected ' : '';?>>User</option> 
  <option value="Formateur" <?php echo $user['rol'] == 'Formateur' ? ' selected ' : '';?>>Formateur</option> 
</select>
                 </div>    
                    
              

                
                    
                    
                 <button type="submit" name="edit" class="btn btn-dark btn-icon-text">
                                Edit
                                  <i class="ti-file btn-icon-append"></i>                          
                            </button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                  </div>
                </div>
              </div>
              <?php
		   }
       ?>
              <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap dashboard template</a> from Bootstrapdash.com</span>
            </div>
          </footer>
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="assets/vendors/select2/select2.min.js"></script>
    <script src="assets/vendors/typeahead.js/typeahead.bundle.min.js"></script>
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/file-upload.js"></script>
    <script src="assets/js/typeahead.js"></script>
    <script src="assets/js/select2.js"></script>
  </body>
</html>