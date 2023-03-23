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
    <div>
        <div class="presentation" font-style="italic">
            <h1>Les chiens</h1>
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
            <td><img src="./image/milou.jpg" alt="image introuvable"></td>
            <td>
                <p>Milou</p>
                <p>Propriétaire : Tintin</p>
            
            </td>
            <td>Fox-terrier à poil dur</td>
            <td>Un chien intelligent et fidèle. il adore partir élucider des complots avec son maître !</td>
            <td>
                <button class="" onclick="window.location.href = ''">Détails</button><br><br>
                <button type="submit" class="button">Ajouter à la niche</button></td>
        </tr>

        <tr>
            <td><img src="./image/lady.jpg" alt="image introuvable"></td>
            <td>
                <p>Lady</p>
                <p>Propriétaire : Jim et darling</p>
            </td>
            <td>Cocker spaniel anglais</td>
            <td>Une jeune chienne douce et attentionnée, qui saura prendre soins de ses maîtres.</td>
            <td>
                <button class="" onclick="window.location.href = ''">Détails</button><br><br>
                <button type="submit" class="button">Ajouter à la niche</button></td>
        </tr>
        
        <tr>
            <td><img src="./image/pongo.jpg" alt="image introuvable"></td>
            <td>
                <p>Pongo</p>
                <p>Propriétaire : Roger Radcliffe</p>
            </td>
            <td>Dalmatien</td>
            <td>Dalmatien qui a la facheuse habitude de récupérer les chiots perdus</td>
            <td>
                <button class="" onclick="window.location.href = ''">Détails</button><br><br>
                <button type="submit" class="button">Ajouter à la niche</button></td>
        </tr>

        <tr>
            <td><img src="./image/scooby.jpg" alt="image introuvable"></td>
            <td>
                <p>Scooby-Doo</p>
                <p>Propriétaire : Sammy</p>
            </td>
            <td>Dogue allemand</td>
            <td>chien très gourmands et peureux, mais très affectueux !</td>
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