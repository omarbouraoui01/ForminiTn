<?php
    require '../../controller/formationC.php';
if (isset($_GET['id'])) {
    $formationC = new formationC();
    $formationC->supprimerformation($_GET['id']);
   header('Location:ajouterformation.php');
   echo 'sudd';
} else {
    echo 'oooooooooooooooooo';
}
    
?>