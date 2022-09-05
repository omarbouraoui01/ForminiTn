<?php
session_start();
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
            <li class="nav-item dropdown d-none d-lg-block">
                                       <form method="POST" action="trieruser.php">
                                    
                                                  <input type="submit" name="trier" value="trier" class="btn btn-success">
                                       </form>
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
            
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Add user</h4>
                  
                  <form class="forms-sample" action="" enctype="multipart/form-data" method="POST">
                    <?php if (isset($userToEdit)) {?>
                         <div class="form-group">
                      <label for="id">id</label>
                      <input type="text" class="form-control" id="id" name="id" value="<?php echo $userToEdit['id'] ?>">
                    </div>
                      <?php  }
                    ?>
                    <div class="form-group">
                      <label for="nom">Name</label>
                      <input type="text" class="form-control" id="nom" name="nom" placeholder="nom" name="<?php if (isset($userToEdit)) echo $userToEdit['nom']  ?>"   >
                   <label id="error1"></label>
                    </div>
                    <div class="form-group">
                      <label for="prenom">Surname</label>
                      <input type="textarea" class="form-control" id="prenom" name="prenom" placeholder="prenom" <?php if (isset($userToEdit)) echo 'value".'.$userToEdit['prenom'].'"' ?>  >
                    </div>
                    <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Gender</label>
                            <div class="col-sm-5">
                              <select name="sexe" class="form-control">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Autre">Autre</option>
                              </select>
                            </div>
                    </div>
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="text" class="form-control" id="email" placeholder="email" name="email"   <?php if (isset($userToEdit)) echo 'value".'.$userToEdit['email'].'"' ?>    >
                    </div>
                    <div class="form-group">
                      <label for="login">Pseudo</label>
                      <input type="text" class="form-control" id="login" placeholder="login" name="login"   <?php if (isset($userToEdit)) echo 'value".'.$userToEdit['logg'].'"' ?>    >
                    </div>
                    <div class="form-group">
                      <label for="daten">Birth Date</label>
                      <input type="Date" class="form-control" id="daten" placeholder="daten" name="daten"   <?php if (isset($userToEdit)) echo 'value".'.$userToEdit['daten'].'"' ?>    >
                    </div>
                    <div class="form-group">
                      <label for="password">Password</label>
                      <input type="password" class="form-control" id="password" placeholder="password" name="password"   <?php if (isset($userToEdit)) echo 'value".'.$userToEdit['pass'].'"' ?>    >
                    </div>
                    <div class="form-group">
                    <label for="cars" class="col-sm-3 col-form-label">Choose Role</label>
                    <div class="col-sm-5">

<select  class="form-control" name="role" id="role" <?php if (isset($userToEdit)) echo 'value".'.$userToEdit['rol'].'"' ?>>
  <option value="Admin">Admin</option>
  <option value="User">User</option> 
  <option value="Formateur">Formateur</option> 
</select>
                 </div> 
                    </div>   
                <div>
                    
                    <button type="submit" name="add" class="btn btn-primary me-2">Ajouter</button>
                    </div>
                    <div>
                    <button type="reset" class="btn btn-secondary me-2">Cancel</button>
                    </div>
                  </form>
                  </div>
                </div>
              </div>
             
              <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Users</h4>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                            Nom
                          </th>
                          <th>
                           Prenom
                          </th>
                          <th>
                            sexe
                          </th>
                          <th>
                            email
                          </th>
                          <th>
                            Login
                          </th>
                          <th>
                            daten
                          </th>
                          
                          <th>
                            role
                          </th>
                          <th>
                            Edit
                          </th>
                          <th>
                            Delete
                          </th>
                        </tr>
                      </thead>
                      <?PHP
                    
                      require_once '..\..\Controller/userC.php';
                      require_once '..\..\Model/user.php';
                      
                      $userC = new userC();
                    $listesusers=$userC->trierNom();
                    

                      
                        
                    
                        foreach ($listesusers as $key) {
                        ?>
                        <tbody>
                        <tr>
                          <td>
                            <?php echo $key['nom']; ?>
                          </td>
                          <td>
                          <?php echo $key['prenom']; ?> 
                          
                          </td>
                          <td>
                          <?php echo $key['sexe']; ?> 
                          </td>
                          <td>
                          <?php echo $key['email']; ?> 
                          </td>
                          <td>
                          <?php echo $key['logg']; ?> 
                          </td>
                          <td>
                          <?php echo $key['daten']; ?> 
                          </td>
                          <td>
                          <?php echo $key['rol']; ?> 
                          </td>
                          
                         
                          <td>
                            <a href="edituser.php?id=<?php echo $key['id']; ?>" >
                            <button type="submit" class="btn btn-dark btn-icon-text">
                                Edit
                                  <i class="ti-file btn-icon-append"></i>                          
                            </button>
                            </a>

                          </td>
                          <td>
                          <a href="deleteuser.php?id=<?php echo $key['id']; ?>">
                          <button type="button" class="btn btn-danger">Delete</button>
                          </td>
                        </a>
                        <td>
          <a class="btn btn-primary btn-fw" href="Mail.php?id=<?php echo $key['id']?>"> envoyer un mail </a>
           
         
                        </td>

                        </tr>
                      <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              
            </div>
            <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Charts</h4>
                <a href="Charts.php">
                  <button class="btn btn-danger">Voir stats</button>
              </div>
            </div>
          </div>
          </div>
        </div>

                    
              
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