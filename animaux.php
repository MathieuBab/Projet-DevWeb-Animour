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
    <?php include('headerAdoptant.php'); ?>

    <br><br>
    <div class="presentation">
        <h1> Les animaux</h1>
        <h3> Quel compagnon allez-vous choisir ?</h3>
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