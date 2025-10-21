<?php
    include('../inc/fonction.php');  
    $depenses_rubrique = table_depenses_rubrique();
    $taille = 0;
    while (isset($depenses_rubrique[$taille])) 
    {
        $taille++;
    }
    $totale_depenses_rubrique = totale_depenses_rubrique();


    $depenses_tab8b = table_tab8b();
    $count = 0;
    while (isset($depenses_tab8b[$count])) 
    {
        $count++;
    }
    $totale_depenses_tab8b = totale_tab8b();
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
            
            <div class="row bg-light">
                <div class="container p-5 col-md-7 rounded mb-4">
                    
                    <div class="titre_depense_rubrique shadow rounded">
                        <h6 class="text-center p-4 text-white">VENTILATION DES DEPENSES PAR RUBRIQUE</h6>
                    </div>

                    <table  class="table table-striped table-hover text-center rounded border mt-4">
                        <thead>
                            <tr class="fw-bold">
                                <td style="background-color: #e8f6e9ff; color: #79cb7dff">Nature d'impöts</td>
                                <td style="background-color: #e8f6e9ff; color: #79cb7dff">LFR 2024</td>
                                <td style="background-color: #e8f6e9ff; color: #79cb7dff">LF 2025</td>
                            </tr>
                        </thead>
    
                        <tbody>
                            <?php for($i = 0; $i < $taille; $i++) { ?>
                                <tr>
                                    <td><?php echo $depenses_rubrique[$i]['Nom']?></td>
                                    <td><?php echo $depenses_rubrique[$i]['avant']?></td>
                                    <td><?php echo $depenses_rubrique[$i]['apres']?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
    
                        <tfoot>
                            <tr class="fw-bold">
                                <td style="background-color: #e8f6e9ff; color: #79cb7dff">Totale</td>
                                <td style="background-color: #e8f6e9ff; color: #79cb7dff"><?php echo $totale_depenses_rubrique[0]?></td>
                                <td style="background-color: #e8f6e9ff; color: #79cb7dff"><?php echo $totale_depenses_rubrique[1]?></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>

                <div class="container p-5 col-md-5 rounded mb-4">
                    <div class="titre_depense_rubrique shadow rounded">
                        <h6 class="text-center p-4 text-white">POSTES BUDGÉTAIRES AUTORISÉES POUR 2025</h6>
                    </div>
        
                    <table  class="table table-striped table-hover text-center rounded border mt-4">
                        <thead>
                            <tr class="fw-bold">
                                <td style="background-color: #e8f6e9ff; color: #79cb7dff">Ministeres</td>
                                <td style="background-color: #e8f6e9ff; color: #79cb7dff">LF</td>
                            </tr>
                        </thead>
        
                        <tbody>
                            <?php for($i = 0; $i < $count; $i++) { ?>
                                <tr>
                                    <td><?php echo $depenses_tab8b[$i]['Titre']?></td>
                                    <td><?php echo $depenses_tab8b[$i]['prix']?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
        
                        <tfoot>
                            <tr class="fw-bold">
                                <td style="background-color: #e8f6e9ff; color: #79cb7dff">Totale</td>
                                <td style="background-color: #e8f6e9ff; color: #79cb7dff"><?php echo $totale_depenses_tab8b?></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>

            </div>

              
                </div>
            </div>

        </div>
    </main>
</body>
</html>