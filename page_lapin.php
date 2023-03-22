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
    <header>
        <?php include('header_bis.php'); ?>
    </header>

<!--
    <div class="barreNavigation">
        <nav>
            <a class="onglet_nav" href="index.php"> Accueil </a> 
            <a class="onglet_nav" href="animaux.php"> Animaux </a>
            <a class="onglet_nav" href="#"> Races </a>
            <a class="onglet_nav" href="#"> Propriétaire </a>
        </nav>
    </div>
-->

<br><br>
    <div>
        <div class="presentation" font-style="italic">
            <h1>Les lapins</label></h1>
        </div>

        <table class="article">
            <tr>
            <th><h3>Photo<h3></th>
            <th><h3>Prénom et propriétaire</h3></th>
            <th><h3>Race</h3></th>
            <th><h3>Description</h3></th>
            <th><h3>Adopter</h3></th>
        <tr>

        <tr>
            <td><img src="./image/percy.jpg" alt="image introuvable"></td>
            <td>
                <p>Percy</p>
                <p>Propriétaire : Alice</p>
            </td>
            <td>Lapin blanc de Vandée</td>
            <td>toujours en retard ! a du mal le matin, passe-temps : se faire poursuivre</td>
            <td>
                <button class="" onclick="window.location.href = ''">Détails</button><br><br>
                <button type="submit" class="button">Ajouter à la niche</button></td>
        </tr>

        <tr>
            <td><img src="./image/coco.jpg" alt="image introuvable"></td>
            <td>
                <p>Coco</p>
                <p>Propriétaire : </p>
            </td>
            <td>lapin jaune</td>
            <td>voir personnalite winnie l'ourson</td>
            <td>
                <button class="" onclick="window.location.href = ''">Détails</button><br><br>
                <button type="submit" class="button">Ajouter à la niche</button></td>
        </tr>
    
        <tr>
            <td><img src="./image/panpan.jpg" alt="image introuvable"></td>
            <td>
                <p>Panpan</p>
                <p>Propriétaire : </p>
            </td>
            <td>lapin bélier</td>
            <td>lapin bruyant mais attachant</td>
            <td>
                <button class="" onclick="window.location.href = ''">Détails</button><br><br>
                <button type="submit" class="button">Ajouter à la niche</button></td>
        </tr>

        <tr>
            <td><img src="./image/judy.jpg" alt="image introuvable"></td>
            <td>
                <p>Judy</p>
                <p>Propriétaire : </p>
            </td>
            <td>Lapin européen</td>
            <td>Lapin avec un grand sens de la justice</td>
            <td>
                <button class="" onclick="window.location.href = ''">Détails</button><br><br>
                <button type="submit" class="button">Ajouter à la niche</button></td>
        </tr>
        </table>

    </div>

    <!-- FOOTER -->
    <?php include('footer.php'); ?>
    
</body>
</html>