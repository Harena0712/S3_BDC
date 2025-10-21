<?php
    include('../inc/fonction.php');

    $id = $_GET["id"];
    if ($id == 1) 
    {
        header('Location : depenses_par_nature.php');
    }
    else
    {
        header('Location : depenses_selon_rattachement.php');
    }
?>