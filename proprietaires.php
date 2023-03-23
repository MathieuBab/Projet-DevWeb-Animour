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
        <h1>Propriétaires</h1>
        <p> Venez discuter de votre futur compagnon avec nos propriétaires !</p>
    </div>
   
    <table class="article">
        <tr>
            <th><h3>Photo<h3></th>
            <th><h3>Propriétaire</h3></th>
            <th><h3>Description</h3></th>
            <th><h3>Discuter</h3></th>
        <tr>
    
        <tr>
            <td><img src="./image/nesim_fintz.jpg" alt="image introuvable"></td>
            <td>
                <p>Nom : Nesim</p>
                <p>Prénom : Fintz</p>
                <br>
                <p>Les adoptants vous le recommendent ! </p>
                    <div class="box"> 
                        <div class="skill rad quatrevingt">99% satisfaits</div>
                    </div><br>
            </td>
            <td>L'EISTI c'est la vie !</td>
            <td>
                <button class="" onclick="window.location.href = ''">Discuter</button><br><br>
                <button type="submit" class="button">Voir ses animaux</button></td>
        </tr>

        <tr>
            <td><img src="./image/radja_alex.jpg" alt="image introuvable"></td>
            <td>
                <p>Nom : Radjesvarane</p>
                <p>Prénom : Alexandre</p>
                <br>
                <p>Les adoptants vous le recommendent ! </p>
                    <div class="box"> 
                        <div class="skill rad quatrevingt">89% satisfaits</div>
                    </div><br>
            </td>
            <td>Cy Tech et rien d'autre</td>
            <td>
                <button class="" onclick="window.location.href = ''">Discuter</button><br><br>
                <button type="submit" class="button">Voir ses animaux</button></td>
        </tr>
    </table>

    <!-- FOOTER -->
    <?php include('footer.php'); ?>
</body>
</html>