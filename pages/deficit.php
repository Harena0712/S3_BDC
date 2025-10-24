<?php
    include('../inc/fonction.php');  
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
        <h1 class="text-center bg-light titre_deficit" style="margin-left: 33%;">DEFICIT</h1>
        <div class="border_green rounded row p-5 mt-4">
            <div class="col-md-6">
                <a href="situation_deficit.php">
                    <h3 class="text-center border rounded text-white bg_bv p-5">Situation du déficit</h3>
                </a>
            </div>

            <div class="col-md-6">
                <a href="financement_deficit.php"> 
                    <h3 class="text-center border rounded text-white bg_bvv p-5">Financement du déficite</h3>
                </a>
            </div>
    </main>
</body>
</html>