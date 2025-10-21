<?php
    include('../inc/fonction.php');  
    $recettes_douanieres = table_recettes_douanieres();
    $taille = 0;
    while (isset($recettes_douanieres[$taille])) 
    {
        $taille++;
    }
    $totale_recettes_douanieres = totale_recettes_douanieres();
?>
<!DOCTYPE html>
<html lang="en">
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
                <h1 class="text-center p-3 text-white">RECETTES DOUANIERES</h1>
            </div>

            <div class="container contait_table_recette p-5 rounded shadow mb-4" style="font-size:20px;">
                <table  class="table table-striped table-hover text-center rounded border mt-4">
                <thead>
                    <tr class="fw-bold">
                        <td style="background-color: #e8f6e9ff; color: #79cb7dff">Natures des droits et taxes</td>
                        <td style="background-color: #e8f6e9ff; color: #79cb7dff">LFR 2024</td>
                        <td style="background-color: #e8f6e9ff; color: #79cb7dff">LF 2025</td>
                    </tr>
                </thead>

                <tbody>
                    <?php for($i = 0; $i < $taille; $i++) { ?>
                    <tr>
                            <td><?php echo $recettes_douanieres[$i]['Nom']?></td>
                            <td><?php echo $recettes_douanieres[$i]['avant']?></td>
                            <td><?php echo $recettes_douanieres[$i]['apres']?></td>
                        </tr>
                    <?php } ?>
                </tbody>

                <tfoot>
                    <tr class="fw-bold">
                        <td style="background-color: #e8f6e9ff; color: #79cb7dff">Totale</td>
                        <td style="background-color: #e8f6e9ff; color: #79cb7dff"><?php echo $totale_recettes_douanieres[0]?></td>
                        <td style="background-color: #e8f6e9ff; color: #79cb7dff"><?php echo $totale_recettes_douanieres[1]?></td>
                    </tr>
                </tfoot>
            </table>
            </div>
        </div>
    </main>
</body>
</html>