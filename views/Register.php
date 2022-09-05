<?php


 include "../../Controller/userC.php";
 require_once "../../Model/user.php";
 $userC=new userC();
 if (isset($_POST["nom"]) &&
  isset($_POST["prenom"]) && 
  isset($_POST["sexe"]) &&
   isset($_POST["email"]) &&
    isset($_POST["logg"]) && 
	isset($_POST["daten"]) &&
	 isset($_POST["pass"]) && 
     isset($_POST["rol"]) &&
	 isset($_POST["pass2"])) 
	 
 { 
    $newuser=new User(1,$_POST['nom'],$_POST['prenom'],$_POST['sexe'],$_POST['email'],$_POST['logg'],$_POST['daten'],$_POST['pass'],$_POST['rol']);
	if ($_POST["pass"]!=$_POST["pass2"])
{
    echo '<script>alert("Les deux mots de passe sont differents")</script>';

}
     else
     {
       
             if( $userC->ajouteruser($newuser));
              header("Location: index.php");
        
     }
     
 }
 
 
 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>S'inscrire</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form">
                        <h2 class="form-title">S'inscrire</h2>
                        <div class="form-row">
					
				</div>
                <label for="full-name">Nom</label>
                        <div class="form-group">
                            <input type="text" class="form-input" name="nom" id="nom" placeholder="Votre nom"/>
                        </div>
                        <label for="full-name">Prenom</label>
                        <div class="form-group">
                            <input type="text" class="form-input" name="prenom" id="prenom" placeholder="Votre prenom"/>
                        </div>
                        <div class="form-group">
					<label for="full-name">Sexe</label>
					<select class="form-input" name="sexe" id="sexe">
					<option value="Femme">Femme</option>
 					<option value="Homme">Homme</option>
                    <option value="Autre">Autre</option>
 				</select>
				</div>
                <label for="full-name">Email</label>
                        <div class="form-group">
                            <input type="text" name="email" id="email" class="form-input" placeholder="Email" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
                        </div>
                        <label for="daten">Date de Naissance</label>
                        <div class="form-group">
                            <input type="Date" name="daten" id="daten" class="form-input" placeholder="Date de Naisssance" >
                        </div>
                        <label for="daten">Login</label>
                        <div class="form-group">
                            <input type="text" name="logg" id="logg" class="form-input" placeholder="Votre login" >
                        </div>
                        <label for="full-name">Mot de passe</label>
                        <div class="form-group">
                            <input type="password" class="form-input" name="pass" id="pass" placeholder="Password"/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="pass2" id="pass2" placeholder="Confirmer votre mot de passe"/>
                        </div>
                        <label for="full-name">Vous etes</label>
					<select class="form-input" name="rol" id="rol">
					<option value="Formateur">Formateur</option>
 					<option value="User">Participant</option>
                    
 				</select>
				</div>
                        <div class="form-group">
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>J'accepte les conditions d'utilisation <a href="#" class="term-service">Terms of service</a></label>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="register" id="submit" class="form-submit" value="register"/>
                        </div>
                    </form>
                    <p class="loginhere">
                        Have already an account ? <a href="index.php" class="loginhere-link">Login ici</a>
                    </p>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>