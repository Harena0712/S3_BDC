<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Figure 1</title>
</head>
<style>
    .diagramme{ 
        background-color: rgb(229 229 229);
        width: 60%;
        margin-left: 20%;
        margin-top: 50px;
    }
    .avant{
        background-color: #4aaac9;
        width: 10px;
        height: 20px;   
    }
    .apres{
        background-color: #4b6db8;
        width: 10px;
        height: 20px;   
    }
    .image {
        display: flex;
        justify-content: center;
        gap: 60px;
        align-items: flex-end;
        height: 380px;
        width: 900px;
        margin-top: -60px;
  }
  .baton{
        display: flex;
        gap: 60px;
        align-items: flex-end;
        position: absolute;
        margin-bottom: 99px;
        margin-left: 10%;
  }
    .rotate{
        rotate: -90deg;
        width: 200px;
        margin-bottom: 140px;
        margin-right: -100px;
    }
    .x p{
        font-size: 11px;
        margin-top: 23px;
        margin-right: -100px;
    }
    .hr {
        position: relative;
        width: 100%;
    }
    .hr hr{
        margin-top: 40px;
    }
  .groupe {
    display: flex;
    flex-direction: column;
    align-items: center;
  }

  .barres {
    display: flex;
    gap: 10px;
    align-items: flex-end;
  }

  .barre {
    width: 70px;
    text-align: center;
    color: white;
    font-size: 12px;
  }

  .pos{ 
    background-color: #4aaac9; 
    }
  .neg{ 
    background-color: #4aaac9; 
    margin-bottom: -66px;
    }

  .barre.lfr_2025 { background-color: #4b6db8; }

</style>
</head>
<body>
    <div class="diagramme">
        <div class="row col-md-8" style="margin-left: 30%; margin-bottom:-50px;">
            <div class="row col-md-6" style="margin-top:40px;">
                <div class="avant col-md-6"></div>
                <p class="col-md-6">LFR 2024</p>
            </div>
            <div class="row col-md-6" style="margin-top:40px;">
                <div class="apres col-md-6"></div>
                <p class="col-md-6">LFR 2025</p>
            </div>
        </div>

        <div class="image">
            <div class="rotate text-center">
                <p>En pourcentage</p>
            </div>
            <div class="x">
                <p>5,0</p>
                <p>4,0</p>
                <p>3,0</p>
                <p>2,0</p>
                <p>1,0</p>
                <p>0,0</p>
                <p>-2,0</p>
                <p>-4,0</p>
            </div>
            
            <div class="hr">
                <hr>
                <hr>
                <hr>
                <hr>
                <hr>
                <hr>
                <hr>
                <hr>
            </div>

            <div class="baton">
                
                <div class="groupe">
                    <div class="barres">
                        <div class="barre pos" style="height:106px;">
                            <p class="mt-1">5,3</p>
                        </div>
                        <div class="barre pos lfr_2025" style="height:156px;">
                            <p class="mt-1">7,8</p>
                        </div>
                    </div>
                </div>
            
                <div class="groupe">
                    <div class="barres">
                        <div class="barre neg" style="height:66px;">
                            <p class="mt-5">-3,3</p></div>
                        <div class="barre pos lfr_2025" style="height:68px;">
                            <p class="mt-1">3,4</p>
                        </div>
                    </div>
                </div>
                
                <div class="groupe">
                    <div class="barres">
                        <div class="barre pos" style="height:100px;">
                            <p class="mt-1">5,0</p>
                        </div>
                        <div class="barre pos lfr_2025" style="height:108px;">
                            <p class="mt-1">5,4</p>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="row w-50" style="margin-left: 28%;">
            <div class="categorie text-smart col-md-4">Secteur Primaire</div>
            <div class="categorie text-center col-md-4">Secteur Secondaire</div>
            <div class="categorie text-end col-md-4">Secteur Tertiaire</div>
        </div>
    </div>
</body>
</html>