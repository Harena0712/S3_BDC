<?php
    include('../inc/fonction.php');  
    $situation_deficit = Situ_deficit();
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
    <main class="container bg-light shadow p-4" style="margin-top: 5%;">
        <h1 class="text-center bg-light titre_deficit" style="margin-left: 25%;">SITUATUIN DU DEFICIT</h1>
        <div class="border_green rounded row p-5 mt-4">
            <div class="row col-md-6">
                <div class="col-md-12 text-center mb-4 border rounded text-white bg_bv p-5">
                    <h3><?php echo $situation_deficit[0]['Nom']?></h3>
                    <h3><?php echo $situation_deficit[0]['valeur']?> milliards d’Ariary</h3>
                </div>
    
                <div class="col-md-12  bg_bvv p-5 rounded border text-center text-white">
                    <h3><?php echo $situation_deficit[1]['Nom']?></h3>
                    <h3><?php echo $situation_deficit[1]['valeur']?> milliards d’Ariary</h3>
                </div>
            </div>

            <div class="text-center col-md-6 ms-4 text-black border bg_w rounded bg-warning p-5">
                <h3 style="margin-top: 21%;"><?php echo $situation_deficit[2]['Nom']?></h3>
                <h3><?php echo $situation_deficit[2]['valeur']?> milliards d’Ariary</h3>
            </div>
    </main>
</body>
</html>