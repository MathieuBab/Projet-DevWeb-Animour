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

    <!-- HEADER
    <header>
        
    </header> -->
    <?php include('header_bis.php'); ?>
<!--
    <div class="barreNavigation">
        
        <nav>
            
            <a class="onglet_nav" href="index.php"> Accueil </a> 
            <a class="onglet_nav" href="animaux.php"> Animaux </a>
            <a class="onglet_nav" href="#"> Races </a>
            <a class="onglet_nav" href="#"> Propriétaire </a>

        <ul>
            <li><a class='survol active' href="index.php">Accueil</a></li>
            <li><a class='survol' href="animaux.php">Animaux</a></li>
            <li><a class='survol' href="#">Races</a></li>
            <li><a class='survol' href="#">Propriétaires</a></li>
        </ul>
-->



        </nav>
    </div>
    
    <br><br>
    <div class="presentation">
        <h1> Bienvenue sur notre site Animour !</h1>
        <p> Venez découvrir nos merveilleux animaux, et choisissez celui qui deviendra votre compagnon !</p>
        <br>
      </div>
      <br><br>
      <div class="wrapper">
      
        <div class="menu">
            <img src="./image/chien4.png" alt="image introuvable">
            <hr>
            <br>
            <button class="hollow" onclick="window.location.href = 'page_chien.php'">Nos chiens</button>
        </div>
      
        <div class="menu">
            <img src="./image/cat2.png" alt="image introuvable">
            <hr>
            <br>
            <button class="hollow" onclick="window.location.href ='page_chat.php'">Nos chats</button>
        </div>
      
        <div class="menu">
            <img src="./image/bunny3.png"  alt="image introuvable">
            <hr>
            <br>
            <button class="hollow" onclick="window.location.href ='page_lapin.php'">Nos lapins</button>
        </div>
      
    </div>

    <!-- FOOTER -->
    <?php include('footer.php'); ?>


</body>
</html>
