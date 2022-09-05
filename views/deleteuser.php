<?php
    require '../../controller/userC.php';
if (isset($_GET['id'])) {
    $userC = new userC();
    $userC->supprimeruser($_GET['id']);
   header('Location:ajouteruser.php');
   echo 'sudd';
} else {
    echo 'oooooooooooooooooo';
}
    
?>