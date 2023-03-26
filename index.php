<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" sizes="16x16" href="./image/bunny2.png">
    <title>Animour</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="script.js"></script>
</head>
<body>

    <!-- HEADER -->
    <header>
        <?php include('headerConnexion.php'); ?>
    </header>
    
    <br><br>
    <div class="cadreAccueil">
        <h1><i class="fa fa-paw"></i> Bienvenue sur notre site Animour ! <i class="fa fa-paw"></i></h1>
        <h3> Venez découvrir nos merveilleux animaux, et choisissez celui qui deviendra votre compagnon !</h3><br>
    </div>
    <br>
    <div class="cadreAccueil">
        <br>
        <h1><i class="fa fa-paw"></i> Message de prévention : </h1>
        <p class="infos">
            L'adoption d'un animal de compagnie est une décision importante qui peut changer votre vie et celle de l'animal 
            pour de nombreuses années à venir. Avant d'adopter un animal, il est important de prendre en compte les aspects suivants : 
        </p>

        <img class="img_accueil" src="./image/accueil.jpg">

        <h2><i class="fa fa-paw"></i> Engagements à long terme</h2>  
        <p class="infos">
            Les animaux ont besoin d'attention, de nourriture, d'exercice, de soins médicaux et d'amour tout 
            au long de leur vie. Vous devez être prêt à assumer ces responsabilités à long terme avant d'adopter un animal.
        </p>

        <h2><i class="fa fa-paw"></i> Compatibilité</h2>  
        <p class="infos">
            Il est important de choisir un animal qui convient à votre style de vie et à votre environnement. Par exemple,
            si vous vivez dans un petit appartement, un grand chien pourrait ne pas être la meilleure option.
        </p>

        <h2><i class="fa fa-paw"></i> Coût</h2>
        <p class="infos">
            L'adoption d'un animal implique des coûts, tels que les frais d'adoption, les fournitures pour animaux de compagnie, les 
            soins vétérinaires et la nourriture. Assurez-vous de pouvoir assumer ces coûts avant d'adopter un animal.
        </p>

        
        <h2><i class="fa fa-paw"></i> Responsabilité</h2>
        <p class="infos">    
            En tant que propriétaire d'un animal, vous êtes responsable de son bien-être et de sa sécurité. Vous devez 
            veiller à ce que votre animal soit bien traité et en sécurité en tout temps.
        </p>

        <p class="infos">
            En adoptant un animal, vous donnez une deuxième chance à un être vivant qui a besoin d'un foyer aimant. Cependant, il est 
            important de prendre le temps de bien réfléchir avant de prendre cette décision. Si vous êtes prêt à assumer les responsabilités 
            liées à l'adoption d'un animal, vous pouvez offrir à un animal de compagnie une vie heureuse et épanouissante.<br><br>
        </p>
        <br>
    </div>
      
    <!-- FOOTER -->
    <footer>
        <?php include('footer.php'); ?>
    </footer>

</body>
</html>