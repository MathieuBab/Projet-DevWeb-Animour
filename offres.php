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
            <th><h3>Photo<h3></th>
            <th><h3>Prénom</h3></th>
            <th><h3>Race</h3></th>
            <th><h3>Description</h3></th>
            <th><h3>Modification</h3></th>
        <tr>

        <tr>
            <td><img src="./image/milou.jpg" alt="image introuvable"></td>
            <td>
                <p>Milou</p>            
            </td>
            <td>Fox-terrier à poil dur</td>
            <td>Un chien intelligent et fidèle. il adore partir élucider des complots avec son maître !</td>
            <td>
                <button class="" onclick="window.location.href = ''">Modifier le profil</button><br><br>
                <button type="submit" class="button">Retirer des offres</button></td>
        </tr>

        <tr>
            <td><img src="./image/panpan.jpg" alt="image introuvable"></td>
            <td>
                <p>Panpan</p>
            </td>
            <td>lapin bélier</td>
            <td>lapin bruyant mais attachant</td>
            <td>
                <button class="" onclick="window.location.href = ''">Modifier le profil</button><br><br>
                <button type="submit" class="button">Retirer des offres</button></td>
        </tr>
    </table>
    
    <!-- FOOTER -->
    <?php include('footer.php'); ?>
</body>
</html>