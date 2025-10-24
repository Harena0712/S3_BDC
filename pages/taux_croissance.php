<?php
    include('../inc/fonction.php');  
    $taux = table_taux_de_croissance_sectorielle();
    $taille = 0;
    while (isset($taux[$taille])) 
    {
        $taille++;
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Document</title>
</head>
<body>
    <?php include('header1.php') ?>
    <main class="m-4 p-4">
        <div class="p-4">
            <div class="titre_recette shadow rounded">
                <h1 class="text-center p-3 text-white">TAUX DE CROISSANCE SECOTRIELLE</h1>
            </div>
            <div class="container contait_table_recette p-5 rounded shadow mb-4" style="font-size:20px;">
                <table  class="table table-striped table-hover text-center rounded border mt-4">
                <thead>
                    <tr class="fw-bold">
                        <td style="background-color: #e8f6e9ff; color: #46b64cff">Variation en %</td>
                        <td style="background-color: #e8f6e9ff; color: #46b64cff">2024</td>
                        <td style="background-color: #e8f6e9ff; color: #46b64cff">2025</td>
                    </tr>
                </thead>
                <tbody>
                    <?php for($i = 0; $i < $taille; $i++) { ?>
                    <tr>
                            <td><?php echo $taux[$i]['Nom']?></td>
                            <td><?php echo $taux[$i]['Annee1']?></td>
                            <td><?php echo $taux[$i]['Annee2']?></td>
                        </tr>
                    <?php } ?>
                </tbody>
        </div>
    </main>
</body>
</html>