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
        <h1>Discussion avec Nesim Fintz</h1>
    </div>
    <br><br>

    <div class="chat_container">
        <div class="chat_box">
            <div class="chat_message_envoye">
                <div class="chat_message">
                    <div class="chat_user">Emilie Dupont</div><div class="chat_text">Bonjour Monsieur Fintz, je serais intéressée par votre compagnon Milou. </div><div class="chat_horaire">13:00</div>
                </div>
            </div>
            <div class="chat_message_recu">
                <div class="chat_message">
                    <div class="chat_user">Nesim Fintz</div><div class="chat_text">Bonjour Emilie, c'est un chien très futé !  </div><div class="chat_horaire">13:59</div>
                </div>
            </div>
            <div class="chat_message_envoye">
                <div class="chat_message_adoption">
                    <div class="chat_text">Demande d'adoption </div>
                </div>
                <hr>
                <div class="chat_message">
                    <div class="chat_user">Emilie Dupont</div><div class="chat_text">Je souhaite faire de Milou mon compagnon !</div><div class="chat_horaire">14:00</div>
                </div>
            </div>
            <div class="chat_message_recu">
                <div class="chat_message">
                    <div class="chat_user">Nesim Fintz</div><div class="chat_text">Il va me manquer...</div><div class="chat_horaire">14:01</div>
                </div>
            </div>
            <div class="chat_message_recu">
                <div class="chat_message_resultat">
                    <div class="chat_text">Nesim Fintz a accepté votre demande d'adoption !</div>
                </div>
            </div>
            <div class="chat_message_recu">
                <div class="chat_message">
                    <div class="chat_user">Nesim Fintz</div><div class="chat_text">J'espère que vous vous entendrez bien !</div><div class="chat_horaire">14:02</div>
                </div>
            </div>
        </div>
        <br>
        <hr class="form_hr">
        <form id="form_communiquer">
            <input type="text" class="communiquer_input" placeholder="Ecrivez votre message ici...   *N'oubliez pas de préciser le nom de l'animal qui vous intéresse*">
            <button type="submit" class="but_link_send2" onclick="window.location.href = ''">Envoyer</button>
            <button type="submit" class="but_link_send2" onclick="window.location.href = ''">Envoyer en tant que demande d'adoption</button>
        </form>
    </div>
    
    <!-- FOOTER -->
    <?php include('footer.php'); ?>
</body>
</html>