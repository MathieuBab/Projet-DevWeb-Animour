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
                <th class="page_photo"><h3>Photo<h3></th>
                <th class="page_nom"><h3>Prénom et propriétaire</h3></th>
                <th class="page_race"><h3>Race</h3></th>
                <th class="page_desc"><h3>Description</h3></th>
                <th class="page_ado"><h3>Adopter</h3></th>
            <tr>

        <tr>
            <td class="page_photo"><img src="./image/milou.jpg" alt="image introuvable"></td>
            <td class="page_nom">
                <p>Milou</p>
                <p>Propriétaire : Nesim Fintz</p>
            
            </td>
            <td class="page_race"><a class="lien-race" href="fox_terrier.php">Fox-terrier à poil dur</a></td>
            <td class="page_desc">Un chien de 3 ans intelligent et fidèle. Grand détective, il adore partir élucider des complots avec son maître !</td>
            <td class="page_ado">
                <button type="submit" class="but_link" onclick="fonction()">Ajouter à la niche</button></td>
        </tr>

        <tr>
            <td class="page_photo"><img src="./image/lady.jpg" alt="image introuvable"></td>
            <td class="page_nom">
                <p>Lady</p>
                <p>Propriétaire : Nesim Fintz</p>
            </td>
            <td class="page_race"><a class="lien-race" href="cocker_span.php">Cocker spaniel anglais</a></td>
            <td class="page_desc">Une jeune chienne douce et attentionnée de 2 ans, qui saura prendre soins de ses maîtres.</td>
            <td class="page_ado">
                <!--<button type="submit" class="but_link" onclick="window.location.href = ''">Ajouter à la niche</button>-->
                <button type="submit" class="but_link" onclick="fonction()">Ajouter à la niche</button>
            </td>
        </tr>
        
        <tr>
            <td class="page_photo"><img src="./image/pongo.jpg" alt="image introuvable"></td>
            <td class="page_nom">
                <p>Pongo</p>
                <p>Propriétaire : Radjesvrane Alexandre</p>
            </td>
            <td class="page_race"><a class="lien-race" href="dalmatien.php">Dalmatien</a></td>
            <td class="page_desc">Dalmatien mâle de 5 ans qui a la fâcheuse habitude de récupérer les chiots perdus. 
                Si vous ne faites pas attention, vous aurez bientôt une rimambelle de chiens dont il faudra vous occuper §
            </td>
            <td class="page_ado">
                <button type="submit" class="but_link" onclick="fonction()">Ajouter à la niche</button></td>
        </tr>

        <tr>
            <td class="page_photo"><img src="./image/scooby.jpg" alt="image introuvable"></td>
            <td class="page_nom">
                <p>Scooby-Doo</p>
                <p>Propriétaire : Nesim Fintz</p>
            </td>
            <td class="page_race"><a class="lien-race" href="dog_all.php">Dogue allemand</a></td>
            <td class="page_desc">Chien de 7 ans très gourmands et peureux, mais très affectueux ! 
                Evitez les balades nocturnes si vous ne voulez pas avoir à porter ce colosse le long du trajet §</td>
            <td class="page_ado">
                <button type="submit" class="but_link" onclick="fonction()">Ajouter à la niche</button></td>
        </tr>
        </table>
    </div>

    <!-- FOOTER -->
    <?php include('footer.php'); ?>

</body>
</html>