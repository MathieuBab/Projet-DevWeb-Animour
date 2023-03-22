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
        <?php include('header_bis.php'); ?>
    </header>

    <br><br>

    <form id="form-login" action="./php/loginProcess.php" method="post">
        <div id="formulaire">    
            <div class="presentation">
                <h1>Page de connexion</h1>
            </div>
            <br><br>
            <table>
                <tr>
                    <td>
                        <div><h4>Se connecter</h4></div>
                        <div class="input_label">
                            <label for="mail">Adresse mail</label>
                            <input type="email" name="mail" id="mail" class="" placeholder="Adresse mail" required>
                        </div><br>
                        <div class="input_label">
                            <label for="password">Mot de passe</label>
                            <input type="password" name="password" id="password" class="" placeholder="Mot de passe" required>
                        </div>
                        <p id="errorMessage-login-name" class="errorMessage"></p>
                        <div class="input_label">
                            <input class="but_link" type="submit" name="submitLogin" value="M'identifier">
                        </div>
                    </td>
                </tr>
            </table>
            <br>
            <table>
                <tr>
                    <td>
                        <div><p><b>S'inscrire</b></p></div>
                        <a href="creerCompteAdoptant.php" class="but_link"><input type="button" class="but_link" name="submitRegistrationAdoptant" value="En tant qu'adoptant"></a>
                        <br><br>
                        <a href="creerCompteDetenteur.php" class="but_link"><input type="button" class="but_link" name="submitRegistrationDetenteur" value="En tant que détenteur"></a>
                        <br>
                    </td>
                </tr> 
            </table>
        </div>  
    </form>

    <!-- FOOTER -->
    <?php include('footer.php'); ?>

</body>
</html>