<?php
session_start();
include "../../controller/userC.php";
include_once '../../model/user.php';



  $userC = new userC();
  $message="";
if (isset($_POST["email"])&&isset($_POST["pass"]))
   { 
    if (!empty($_POST["email"])&&
    !empty($_POST["pass"])
       )
       { 
           $message=$userC->connexionUser($_POST["email"],$_POST["pass"]);
          
          
           echo $message;
           if ($message!='pseudo ou le mot de passe est incorrect')
           {
            if($_SESSION['rol']=="Admin")
            header('Location:../Backend/ajouteruser.php');
            else if($_SESSION['rol']=="Formateur")
            {
              header('Location:../Backend/index_f.php');
            }
            else
              header('Location:index_2.php');
          
           }
               else
                 {
               $message='pseudo ou le mot de passe est incorrect';
               echo $message;
               
               
                 }


       }
       else
      { 
        $message="Missing information";
       echo $message;}
}
?>