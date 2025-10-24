<?php
    include('../inc/fonction.php');  
    $depenses = table_depenses();
    $taille = 0;
    while (isset($depenses[$taille])) 
    {
        $taille++;
    }
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
                <h1 class="text-center p-3 text-white">DEPENSES</h1>
            </div>

            <div class="container contait_table_recette p-5 rounded shadow mb-4" style="font-size:20px;">
                <table  class="table table-striped table-hover text-center rounded border mt-4">
                    <thead>
                        <tr class="fw-bold">
                            <td style="background-color: #e8f6e9ff; color: #79cb7dff">Dépenses</td>
                            <td style="background-color: #e8f6e9ff; color: #79cb7dff">Totale 2024</td>
                            <td style="background-color: #e8f6e9ff; color: #79cb7dff">Totale 2025</td>
                        </tr>
                    </thead>

                    <tbody>
                        <?php for($i = 0; $i < $taille; $i++) { ?>
                            <tr>
                                <td><a href="traitement_depenses.php?id=<?php echo $depenses[$i]['id_depenses']?>"><?php echo $depenses[$i]['Depenses']?></a></td>
                                <td><?php echo $depenses[$i]['Totale_2024']?></td>
                                <td><?php echo $depenses[$i]['Totale_2025']?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</body>
</html>