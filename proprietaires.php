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
    <?php include('headerAdoptant.php'); ?>

    <br><br>
    <div class="presentation">
        <h1>Propriétaires</h1>
        <h3> Venez discuter de votre futur compagnon avec nos propriétaires !</h3><br>
    </div><br>
   
    <table class="article">
        <tr>
            <th class="prop_photo"><h3>Photo<h3></th>
            <th class="prop_prop"><h3>Propriétaire</h3></th>
            <th class="prop_desc"><h3>Description</h3></th>
            <th class="prop_disc"><h3>Discuter</h3></th>
        <tr>
    
        <tr>
            <td class="prop_photo"><img src="./image/nesim_fintz.jpg" alt="image introuvable"></td>
            <td class="prop_prop">
                <p>Nom : Nesim</p>
                <p>Prénom : Fintz</p>
                <hr>
                <p>Les adoptants vous le recommendent fortement ! </p>
                <i class="fa-solid fa-paw"></i> <i class="fa-solid fa-paw"></i> <i class="fa-solid fa-paw"></i> <i class="fa-solid fa-paw"></i> <i class="fa-solid fa-paw"></i>
            </td>
            <td class="prop_desc">L'EISTI c'est la vie !</td>
            <td class="prop_disc">
                <button class="but_link" onclick="window.location.href = 'communiquerAdoptant.php'">Discuter</button><br><br>
                <button class="but_link" onclick="window.location.href = ''">Voir ses animaux</button></td>
        </tr>

        <tr>
            <td class="prop_photo"><img src="./image/radja_alex.jpg" alt="image introuvable"></td>
            <td class="prop_prop">
                <p>Nom : Radjesvarane</p>
                <p>Prénom : Alexandre</p>
                <hr>
                <p>Les adoptants vous le recommendent ! </p>
                <i class="fa-solid fa-paw"></i> <i class="fa-solid fa-paw"></i> <i class="fa-solid fa-paw"></i> <i class="fa-solid fa-paw"></i>
            </td>
            <td class="prop_desc">Cy Tech et rien d'autre</td>
            <td class="prop_disc">
                <button class="but_link" onclick="window.location.href = ''">Discuter</button><br><br>
                <button class="but_link" onclick="window.location.href = ''">Voir ses animaux</button></td>
        </tr>
    </table>

    <!-- FOOTER -->
    <?php include('footer.php'); ?>
</body>
</html>