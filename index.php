<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Accueil</title>
</head>
<body>
    <?php include('./pages/header.php') ?>
    <main class="m-4 p-4">
        <div class="shadow p-4" style="background-color:#ffffffff; font-size:20px;">
            <h1 class="text-center">Budjet des citoyens</h1>
            <h3 class="text-center">relatif a la Loi de Finance</h3>
            <div class="row" style="margin-top: 7%; margin-bottom: 10%">
                
                <div class="text-center col-md-4 bordure_blue">
                        <a href="./pages/recettes.php">
                            <h3>Recettes</h3>
                            <p>12 962,7 milliards d'ariary</p>
                        </a>
                    </div>

                <div class="text-center col-md-4">
                    <a href="./pages/deficit.php">
                        <h3>Deficit</h3>
                        <p>3 642,2 milliards d'ariary</p>
                    </a>
                </div>

                <div class="text-center col-md-4">
                    <a href="./pages/depenses.php">
                        <h3>Dépenses</h3>
                        <p>16 304,9 milliards d'ariary</p>
                    </a>
                </div>
            </div>
        </div>
    </main>
</body>
</html>