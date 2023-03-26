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
        <h1>Messagerie</h1>
    </div>
    <br><br>

    <div class="messagerie">
        <div class="etat">
            Etat
        </div>
        <div class="objet">
            Objet
        </div>
        <div class="correspondant">
            Correspondant
        </div>
        <div class="entete">
            Entete
        </div>
        <div class="action">
            Action
        </div>
    </div>
    <br><br>

    <div class="message">
        <div class="etat">
            Non lu
        </div>
        <div class="objet">
            [ Demande d'adoption ]<br>
        </div>
        <div class="correspondant">
            Animour
        </div>
        <div class="entete">
            [14:05] Vous venez d'attribuer la note de <i class="fa-solid fa-paw"></i><i class="fa-solid fa-paw"></i><i class="fa-solid fa-paw"></i><i class="fa-solid fa-paw"></i><i class="fa-solid fa-paw"></i> à <b>Nesim Fintz</b>!
        </div>
        <div class="action">
        </div>
    </div>
    <br><br>

    <div class="message">
        <div class="etat">
            Lu
        </div>
        <div class="objet">
            [ Message ]
        </div>
        <div class="correspondant">
            Nesim Fintz
        </div>
        <div class="entete">
            [14:02] J'espère que vous...
        </div>
        <div class="action">
            <button type="submit" class="but_link_msg" onclick="window.location.href = 'communiquerAdoptant.php'">Répondre</button><br><br>
            <!--<button type="submit" class="but_link_msg">Marquer comme non lu</button><br>-->
            <button type="submit" class="but_link_msg">Supprimer le message</button>
        </div>
    </div>
    <br><br>

    <div class="message">
        <div class="etat">
            Lu
        </div>
        <div class="objet">
            [ Message ]
        </div>
        <div class="correspondant">
            Nesim Fintz
        </div>
        <div class="entete">
            [14:01] Il va me manquer...
        </div>
        <div class="action">
            <button type="submit" class="but_link_msg" onclick="window.location.href = 'communiquerAdoptant.php'">Répondre</button><br><br>
            <!--<button type="submit" class="but_link_msg">Marquer comme non lu</button><br>-->
            <button type="submit" class="but_link_msg">Supprimer le message</button>
        </div>
    </div>
    <br><br>

    <div class="message">
        <div class="etat">
            Lu
        </div>
        <div class="objet">
            [ Demande d'adoption ]
        </div>
        <div class="correspondant">
            Animour
        </div>
        <div class="entete">
            [14:01] Nous avons le plaisir de vous annocer que <b>Nesim Fintz</b> a accepté votre demande d'adoption !
        </div>
        <div class="action">
            <button type="submit" class="but_link_msg" onclick="window.location.href = 'noter.php'">Noter Nesim Fintz</button>
        </div>
    </div>
    <br><br>

    <div class="message">
        <div class="etat">
            Lu
        </div>
        <div class="objet">
            [ Message ]
        </div>
        <div class="correspondant">
            Nesim Fintz
        </div>
        <div class="entete">
            [13:59] Bonjour Emilie, c'est...
        </div>
        <div class="action">
            <button type="submit" class="but_link_msg" onclick="window.location.href = 'communiquerAdoptant.php'">Répondre</button><br><br>
            <!--<button type="submit" class="but_link_msg">Marquer comme non lu</button><br>-->
            <button type="submit" class="but_link_msg">Supprimer le message</button>
        </div>
    </div>
    <br><br>
    
    <!-- FOOTER -->
    <?php include('footer.php'); ?>
</body>
</html>