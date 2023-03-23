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
    <div class="presentation">
        <h1>Messagerie</h1>
    </div>
    <br><br>

    <<div class="messagerie">
    <div class="etat">
            Etat
        </div>
        <div class="objet">
            objet
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
            [ Demande d'adoption ]
        </div>
        <div class="correspondant">
            Emilie Dupont
        </div>
        <div class="entete">
            Bonjour Monsieur Fintz, je serais...
        </div>
        <div class="action">
            <button type="submit" class="button">Répondre</button><br>
            <!--<button type="submit" class="button">Marquer comme non lu</button><br>-->
            <button type="submit" class="button">Supprimer le message</button>
        </div>
    </div>
    <br><br>

    <div class="message">
    <div class="etat">
            Lu
        </div>
        <div class="objet">
            [ Alimentation ]
        </div>
        <div class="correspondant">
            Radjesvarane Alexandre
        </div>
        <div class="entete">
            Bonjour Nessim, concernant...
        </div>
        <div class="action">
            <button type="submit" class="button">Répondre</button><br>
            <!--<button type="submit" class="button">Marquer comme non lu</button><br>-->
            <button type="submit" class="button">Supprimer le message</button>
        </div>
    </div>
    <br><br>

    <div class="message">
    <div class="etat">
            Lu
        </div>
        <div class="objet">
            [ Pre-Demande d'adoption ]
        </div>
        <div class="correspondant">
            Emilie Dupont
        </div>
        <div class="correspondant">
            Emilie Dupont
        </div>
        <div class="entete">
            Bonjour Monsieur, votre chien...
        </div>
        <div class="action">
            <button type="submit" class="button">Répondre</button><br>
            <!--<button type="submit" class="button">Marquer comme non lu</button><br>-->
            <button type="submit" class="button">Supprimer le message</button>
        </div>
    </div>
    <br><br>
    
    <!-- FOOTER -->
    <?php include('footer.php'); ?>
</body>
</html>