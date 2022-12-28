<?php 
    require_once "./../controllers/clientC.php";
    $clientC = new clientC();
    $clientC->supprimerclient($_POST['code']);
    header("Location: ./affichierListesclient.php");

?>