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
        <?php include('headerAdoptant.php'); ?>
    </header>

<br><br>
    <div>
        <div class="presentation" font-style="italic">
            <h1>Les chats</h1>
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
            <td><img src="./image/cheshire.jpg" alt="image introuvable"></td>
            <td>
                <p>Cheshire</p>
                <p>Propriétaire : Alice</p>
            
            </td>
            <td>Chat européen</td>
            <td>Un chat souriant</td>
            <td>
                <button class="" onclick="window.location.href = ''">Détails</button><br><br>
                <button type="submit" class="button">Ajouter à la niche</button></td>
        </tr>

        <tr>
            <td><img src="./image/sylvestre.jpg" alt="image introuvable"></td>
            <td>
                <p>Sylvestre</p>
                <p>Propriétaire : Mémé</p>
            </td>
            <td>Chat européen</td>
            <td>Un chat pas doué pour la chasse</td>
            <td>
                <button class="" onclick="window.location.href = ''">Détails</button><br><br>
                <button type="submit" class="button">Ajouter à la niche</button></td>
        </tr>
        
        <tr>
            <td><img src="./image/garfield.jpg" alt="image introuvable"></td>
            <td>
                <p>Garfield</p>
                <p>Propriétaire : John</p>
            </td>
            <td>Exotic Shorthair</td>
            <td>Chat très gourmand</td>
            <td>
                <button class="" onclick="window.location.href = ''">Détails</button><br><br>
                <button type="submit" class="button">Ajouter à la niche</button></td>
        </tr>

        <tr>
            <td><img src="./image/galore.jpg" alt="image introuvable"></td>
            <td>
                <p>Galore</p>
                <p>Propriétaire : Mandrin</p>
            </td>
            <td>Sphynx</td>
            <td>Deteste les chiens, a envie de conquérir le monde</td>
            <td>
                <button class="" onclick="window.location.href = ''">Détails</button><br><br>
                <button type="submit" class="button">Ajouter à la niche</button></td>
        </tr>

        <tr>
            <td><img src="./image/marie.jpg" alt="image introuvable"></td>
            <td>
                <p>Marie</p>
                <p>Propriétaire : </p>
            </td>
            <td>Angora turc</td>
            <td>Adore jouer du piano</td>
            <td>
                <button class="" onclick="window.location.href = ''">Détails</button><br><br>
                <button type="submit" class="button">Ajouter à la niche</button></td>
        </tr>

        <tr>
            <td><img src="./image/chi.jpg" alt="image introuvable"></td>
            <td>
                <p>Chi</p>
                <p>Propriétaire : </p>
            </td>
            <td>American Shorthair</td>
            <td>Chat très curieux</td>
            <td>
                <button class="" onclick="window.location.href = ''">Détails</button><br><br>
                <button type="submit" class="button">Ajouter à la niche</button></td>
        </tr>

        <tr>
            <td><img src="./image/si.jpg" alt="image introuvable"></td>
            <td>
                <p>Si</p>
                <p>Propriétaire : </p>
            </td>
            <td>Siamois</td>
            <td>Chat très rusé qui adore faire des farces à son propriétaire</td>
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