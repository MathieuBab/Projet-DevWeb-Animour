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
        <h1>Vos animaux</h1>
    </div>
    <br><br>

    <table class="article">
            <tr>
            <th class="offres_photo"><h3>Photo<h3></th>
            <th class="offres_nom"><h3>Nom</h3></th>
            <th class="offres_race"><h3>Race</h3></th>
            <th class="offres_desc"><h3>Description</h3></th>
            <th class="offres_modif"><h3>Modification</h3></th>
        <tr>

        <td colspan="5">
            <button class="but_link" onclick="window.location.href = 'creerOffre.php'">Ajouter une offre</button>
        </td>

        <tr>
            <td class="offres_photo"><img src="./image/milou.jpg" alt="image introuvable"></td>
            <td class="offres_nom">
                <p>Milou</p>            
            </td>
            <td class="offres_race">Fox-terrier à poil dur</td>
            <td class="offres_desc">Un chien intelligent et fidèle. il adore partir élucider des complots avec son maître !</td>
            <td class="offres_modif">
                <button class="but_link" onclick="window.location.href = ''">Modifier le profil</button><br><br>
                <button class="but_link" onclick="window.location.href = ''">Retirer l'offre</button>
            </td>
        </tr>

        <tr>
            <td class="offres_photo"><img src="./image/panpan.jpg" alt="image introuvable"></td>
            <td class="offres_nom">
                <p>Panpan</p>
            </td>
            <td class="offres_race">Lapin bélier</td>
            <td class="offres_desc">
                Jeune lapin de 2 ans, il est très attachant. 
                Gare à vous toutefois, il adore taper des pattes à tous moments de la journée, et est donc assez bruyant.</td>
            <td class="offres_modif">
                <button class="but_link" onclick="window.location.href = ''">Modifier le profil</button><br><br>
                <button class="but_link" onclick="window.location.href = ''">Retirer l'offre</button>
            </td>
        </tr>
    </table>
    
    <!-- FOOTER -->
    <?php include('footer.php'); ?>
</body>
</html>