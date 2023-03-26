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
            <h1>Les chats</h1>
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
            <td class="page_photo"><img src="./image/cheshire.jpg" alt="image introuvable"></td>
            <td class="page_nom">
                <p>Cheshire</p>
                <p>Propriétaire : Nesim Fintz</p>
            
            </td>
            <td class="page_race"><a class="lien-race" href="europeen.php">Chat européen</a></td>
            <td class="page_desc">
                Cheshire est un petit chat de 3 ans à fourrure rousse, douce et soyeuse avec un sourire à en faire craquer plusieurs d'entre vous.
                Très loyal et affectueux, il peut devenir très joueur et actif lorsqu'il est stimulé. Il adore les câlins et les caresses !!
            </td>
            <td class="page_ado">
                <button type="submit" class="but_link" onclick="fonction()">Ajouter au panier</button></td>
        </tr>

        <tr>
            <td class="page_photo"><img src="./image/sylvestre.jpg" alt="image introuvable"></td>
            <td class="page_nom">
                <p>Sylvestre</p>
                <p>Propriétaire : Radjesvarane Alexandre</p>
            </td>
            <td class="page_race"><a class="lien-race" href="europeen.php">Chat européen</a></td>
            <td class="page_desc">
                Sylvestre, 6 ans, possède un pelage blanc et noir. A la fois doux et calme, il saura vous combler dans les bons comme les mauvais moments.
                Néanmoins, ce fidèle compagnon n'est pas doué pour la chasse, gare aux souris !!</td>
            <td class="page_ado">
                <button type="submit" class="but_link" onclick="fonction()">Ajouter au panier</button></td>
        </tr>
        
        <tr>
            <td class="page_photo"><img src="./image/garfield.jpg" alt="image introuvable"></td>
            <td class="page_nom">
                <p>Garfield</p>
                <p>Propriétaire : Nesim Fintz</p>
            </td>
            <td class="page_race"><a class="lien-race" href="exotic_short.php">Exotic Shorthair</a></td>
            <td class="page_desc">
                Garfield est chat de 5 ans gourmand au pelage caramel. Il est timide face aux inconnus mais adore venir faire des calins à ses propriétaires.
                Attention, ne laissez pas vos lasagnes sans surveillance !</td>
            <td class="page_ado">
                <button type="submit" class="but_link" onclick="fonction()">Ajouter au panier</button></td>
        </tr>

        <tr>
            <td class="page_photo"><img src="./image/galore.jpg" alt="image introuvable"></td>
            <td class="page_nom">
                <p>Galore</p>
                <p>Propriétaire : Radjesvarane Alexandre</p>
            </td>
            <td class="page_race"><a class="lien-race" href="sphynx.php">Sphynx</a></td>
            <td class="page_desc">
                Galore, 6 ans, a un caractère bien trempée. Elle adore jouer avec tout le monde mais également bronzer au soleil.
                Attention, elle déteste les chiens mais rêve de conquérir le monde !!</td>
            <td class="page_ado">
                <button type="submit" class="but_link" onclick="fonction()">Ajouter au panier</button></td>
        </tr>

        <tr>
            <td class="page_photo"><img src="./image/marie.jpg" alt="image introuvable"></td>
            <td class="page_nom">
                <p>Marie</p>
                <p>Propriétaire : Nesim Fintz</p>
            </td>
            <td class="page_race"><a class="lien-race" href="angora_turc">Angora turc</a></td>
            <td class="page_desc">
                Marie, 1 ans, possède un magnifique pelage blanc. Elle adore jouer du piano et saura vous faire une playlist digne de ce nom.
            </td>
            <td class="page_ado">
                <button type="submit" class="but_link" onclick="fonction()">Ajouter au panier</button></td>
        </tr>

        <tr>
            <td class="page_photo"><img src="./image/chi.jpg" alt="image introuvable"></td>
            <td class="page_nom">
                <p>Chi</p>
                <p>Propriétaire : Radjesvarane Alexandre</p>
            </td>
            <td class="page_race"><a class="lien-race" href="american_short.php">American Shorthair</a></td>
            <td class="page_desc">
                Chi, 1 ans, est un chaton très curieux qui aime explorer son environnement, en particulier les odeurs et les sons intéressants.
                Il est très affectueux et adore être avec les gens.
            </td>
            <td class="page_ado">
                <button type="submit" class="but_link" onclick="fonction()">Ajouter au panier</button></td>
        </tr>

        <tr>
            <td class="page_photo"><img src="./image/si.jpg" alt="image introuvable"></td>
            <td class="page_nom">
                <p>Si</p>
                <p>Propriétaire : Nesim Fintz</p>
            </td>
            <td class="page_race"><a class="lien-race" href="siamois.php">Siamois</a></td>
            <td class="page_desc">
                Si, 4 ans, est un chat très rusé qui adore faire des farces à son propriétaire. Vous ne vous ennuierez pas en sa compagnie, 
                pour votre plus grand plaisir !
            </td>
            <td class="page_ado">
                <button type="submit" class="but_link" onclick="fonction()">Ajouter au panier</button></td>
        </tr>
        </table>
    </div>

    <!-- FOOTER -->
    <?php include('footer.php'); ?>

</body>
</html>