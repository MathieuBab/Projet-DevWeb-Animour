<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" sizes="16x16" href="./image/bunny2.png">
    <title>Animour</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>
<body>

    <!-- HEADER -->
    <?php include('headerDetenteur.php'); ?>


    <br><br>
    <div class="presentation">
        <h1> Les races</h1>
        <h3>Vous voulez en apprendre plus sur les différentes espèces ? C'est ici !</h3><br>
    </div>
    <br><br>

    <div class="wrapper">
      
      <!-- LES CHIENS -->
        <div class="menu">
            <br>
            <img src="./image/fox_terrier.png" alt="image introuvable">
            <hr>
            <br>
            <button class="hollow" onclick="window.location.href ='fox_terrier.php'">Fox terrier</button>
        </div>
      
        <div class="menu">
            <br>
            <img src="./image/dalmatien.png" alt="image introuvable">
            <hr>
            <br>
            <button class="hollow" onclick="window.location.href ='dalmatien.php'">Dalmatien</button>
        </div>
      
        <div class="menu">
            <br>
            <img src="./image/cocker.png"  alt="image introuvable">
            <hr>
            <br>
            <button class="hollow" onclick="window.location.href ='cocker_span.php'">Cocker spaniel</button>
        </div>

        <div class="menu">
            <br>
            <img src="./image/doberman.png"  alt="image introuvable">
            <hr>
            <br>
            <button class="hollow" onclick="window.location.href ='dog_all.php'">Dogue allemand</button>
        </div>

        <br><br><br>

        <!--LES CHATS -->
        <div class="menu">
            <br>
            <img src="./image/chat_europ.png"  alt="image introuvable">
            <hr>
            <br>
            <button class="hollow" onclick="window.location.href ='europeen.php'">Chat européen</button>
        </div>

        <div class="menu">
            <br>
            <img src="./image/siamois.png"  alt="image introuvable">
            <hr>
            <br>
            <button class="hollow" onclick="window.location.href ='siamois.php'">Siamois</button>
        </div>

        <div class="menu">
            <br>
            <img src="./image/sphynx.png"  alt="image introuvable">
            <hr>
            <br>
            <button class="hollow" onclick="window.location.href ='sphynx.php'">Sphynx</button>
        </div>

        <div class="menu">
            <br>
            <img src="./image/exotic_shorthair.png"  alt="image introuvable">
            <hr>
            <br>
            <button class="hollow" onclick="window.location.href ='exotic_short.php'">Exotic shorthair</button>
        </div>

        <div class="menu">
            <br>
            <img src="./image/american_shorthair.png"  alt="image introuvable">
            <hr>
            <br>
            <button class="hollow" onclick="window.location.href ='american_short.php'">American shorthair</button>
        </div>

        <div class="menu">
            <br>
            <img src="./image/angora_turc.png"  alt="image introuvable">
            <hr>
            <br>
            <button class="hollow" onclick="window.location.href ='angora_turc.php'">Angora turc</button>
        </div>

        <br><br><br>

        <!--LAPIN-->

        <div class="menu">
            <br>
            <img src="./image/rabbit.png"  alt="image introuvable">
            <hr>
            <br>
            <button class="hollow" onclick="window.location.href ='lapin.php'">Lapin</button>
        </div>

    
    </div>

    <!-- FOOTER -->
    <?php include('footer.php'); ?>


</body>
</html>