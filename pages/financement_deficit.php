<?php
    include('../inc/fonction.php');  
    $financement_deficit = financ_deficit();
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
        <h1 class="text-center bg-light titre_deficit" style="margin-left: 25%;">FINANCEMENT DU DEFICIT</h1>
        <div class="border_green rounded p-5 mt-4">
            <div class="text-center mb-4 border rounded text-white bg_w bg-warning p-5">
                <h3><?php echo $financement_deficit[0]['Nom']?></h3>
                <h3><?php echo $financement_deficit[0]['valeur']?> milliards d’Ariary</h3>
            </div>
            
            <div class="row">
                <div class="col-md-5 bg_bvv p-5 ms-5 rounded border text-center text-white">
                    <h3><?php echo $financement_deficit[1]['Nom']?></h3>
                    <h3><?php echo $financement_deficit[1]['valeur']?> milliards d’Ariary</h3>
                </div>

                <div class="text-center col-md-5 text-black border bg_w rounded bg_bv p-5" style="margin-left: 9%;">
                    <h3><?php echo $financement_deficit[2]['Nom']?></h3>
                    <h3><?php echo $financement_deficit[2]['valeur']?> milliards d’Ariary</h3>
                </div>
            </div>
    </main>
</body>
</html>