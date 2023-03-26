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
            <h1>Les lapins</label></h1>
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
            <td class="page_photo"><img src="./image/percy.jpg" alt="image introuvable"></td>
            <td class="page_nom">
                <p>Percy</p>
                <p>Propriétaire : Nesim Fintz</p>
            </td>
            <td class="page_race"><a class="lien-race" href="lapin.php">Lapin blanc de Vandée</a></td>
            <td class="page_desc">
                Lapin de 6 ans qui a beaucoup de mal à se réveiller le matin ! Il adore jouer avec ses maîtres.</td>
            <td class="page_ado">
                <button type="submit" class="but_link" onclick="fonction()">Ajouter au terrier</button></td>
        </tr>

        <tr>
            <td class="page_photo"><img src="./image/coco.jpg" alt="image introuvable"></td>
            <td class="page_nom">
                <p>Coco</p>
                <p>Propriétaire : Radjesvarane Alexandre</p>
            </td>
            <td class="page_race"><a class="lien-race" href="lapin.php">Lapin jaune</a></td>
            <td class="page_desc">
                Ce lapin de 8 ans adore les carottes ! 
                Egalment adepte de propreté, il fera en sorte que son petit chez lui soit bien organisé.</td>
            <td class="page_ado">
                <button type="submit" class="but_link" onclick="fonction()">Ajouter au terrier</button></td>
        </tr>
    
        <tr>
            <td class="page_photo"><img src="./image/panpan.jpg" alt="image introuvable"></td>
            <td class="page_nom">
                <p>Panpan</p>
                <p>Propriétaire : Nesim Fintz</p>
            </td>
            <td class="page_race"><a class="lien-race" href="lapin.php">Lapin bélier</a></td>
            <td class="page_desc">
                Jeune lapin de 2 ans, il est très attachant. 
                Gare à vous toutefois, il adore taper des pattes à tous moments de la journée, et est donc assez bruyant.</td>
            <td class="page_ado">
                <button type="submit" class="but_link" onclick="fonction()">Ajouter au terrier</button></td>
        </tr>

        <tr>
            <td class="page_photo"><img src="./image/judy.jpg" alt="image introuvable"></td>
            <td class="page_nom">
                <p>Judy</p>
                <p>Propriétaire : Radjesvarane Alexandre</p>
            </td>
            <td class="page_race"><a class="lien-race" href="lapin.php">Lapin européen</a></td>
            <td class="page_desc">
                C'est une lapine de 4 ans avec un grand sens de la justice ! 
                Très courageuse, elle n'a pas peur des inconnus et se montrera très attachantes avec ses propriétaires.</td>
            <td class="page_ado">
                <button type="submit" class="but_link" onclick="fonction()">Ajouter au terrier</button></td>
        </tr>
        </table>

    </div>

    <!-- FOOTER -->
    <?php include('footer.php'); ?>
    
</body>
</html>