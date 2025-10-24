<?php
    include('../inc/fonction.php');  
    $depenses1 = table_depenses1();
    $taille = 0;
    while (isset($depenses1[$taille])) 
    {
        $taille++;
    }
    $totale_tab8b = totale_tab8b(); 
    $table_tab8 = table_tab8(); 
    $totale_tab9 = totale_tab9();   
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
                <h1 class="text-center p-3 text-white">REPARTITION DES DEPENSES PAR NATURE ECONOMIQUE</h1>
            </div>

            <div class="container contait_table_recette p-5 rounded shadow mb-4" style="font-size:20px;">

                <table class="table table-striped table-hover text-center rounded border mt-4">
                    <thead>
                        <tr class="fw-bold">
                            <td style="background-color: #e8f6e9ff; color: #79cb7dff">Ministeres</td>
                            <td style="background-color: #e8f6e9ff; color: #79cb7dff">Totale</td>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td><a href="ministeres.php">Postes budgetaires autorisées pour 2025</a></td>
                            <td><?php echo $totale_tab8b?></td>
                        </tr>
                    
                    </tbody>
                </table>
                <table  class="table table-striped table-hover text-center rounded border mt-4">
                    <thead>
                        <tr class="fw-bold">
                            <td style="background-color: #e8f6e9ff; color: #79cb7dff">Depenses</td>
                            <td style="background-color: #e8f6e9ff; color: #79cb7dff">Totale LFR2024</td>
                            <td style="background-color: #e8f6e9ff; color: #79cb7dff">Totale LF2025</td>
                        </tr>
                    </thead>

                    <tbody>
                        <?php for($i = 0; $i < $taille; $i++) { ?>
                            <tr>
                                <td><a href="depense_rubrique_detaille.php"><?php echo $depenses1[$i]['Titre']?></a></td>
                                <td><?php echo $depenses1[$i]['Totale_2024']?></td>
                                <td><?php echo $depenses1[$i]['Totale_2025']?></td>
                            </tr>
                        <?php } ?>
                    </tbody>


                </table>

                <table class="table table-striped table-hover text-center rounded border mt-4">
                    <thead>
                        <tr class="fw-bold">
                            <td style="background-color: #e8f6e9ff; color: #79cb7dff">LIBELLES</td>
                            <td style="background-color: #e8f6e9ff; color: #79cb7dff">LFR2024</td>
                            <td style="background-color: #e8f6e9ff; color: #79cb7dff">LF2025</td>
                            <td style="background-color: #e8f6e9ff; color: #79cb7dff">Ecart</td>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td><a href="depenses_solde.php"><?php echo $table_tab8['Nom']?></a></td>
                            <td><?php echo $table_tab8['avant']?></td>
                            <td><?php echo $table_tab8['apres']?></td>
                            <td><?php echo $table_tab8['Ecart']?></td>
                        </tr>
                        
                        <tr>
                            <td><a href="recap_depenses.php"><?php echo $totale_tab9['Titre']?></a></td>
                            <td><?php echo $totale_tab9['Totale_2024']?></td>
                            <td><?php echo $totale_tab9['Totale_2025']?></td>
                            <td><?php echo $totale_tab9['Ecart']?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</body>
</html>