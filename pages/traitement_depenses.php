<?php
    include('../inc/fonction.php');

    $id = $_GET['id'];
    if ($id = 1) 
    {
        header('Location: depense_rubrique.php');
    }
    else
    {
        header('Location: repartition_budget.php');
    }
?>