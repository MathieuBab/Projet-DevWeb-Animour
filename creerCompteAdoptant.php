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

    <form  id="form-CreerCompte" action="./php/createAccountProcess.php" method="post">
    <div id="formulaire">
         
        <div class="presentation">
            <h1>Inscription en tant qu'Adoptant</h1>
        </div>
        <br><br>
        <table>
            <tr>
                <td>
                    <div class="input_label">
                        <label for="name">Nom</label><br>
                        <input type="text" name="name" id="name" class="" required placeholder="Nom" size="32" value="">
                        <p id="errorMessage-creerCompte-name" class="errorMessage"></p>
                    </div> 
                </td>
                <td>
                    <div class="input_label">
                        <label for="firstName">Prénom</label><br>
                        <input type="text" name="firstName" id="firstName" class="" required placeholder="Prénom" size="32" value="">
                        <p id="errorMessage-creerCompte-firstName" class="errorMessage"></p>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="1">
                    <div class="input_label">
                        <label for="sexChoice">Sexe</label><br>
                        <div id="sexChoice">
                            <input type="radio" id="sexMan" class="" name="sex" value="Man">
                            <label for="sexMan">Homme</label>
                        
                            <input type="radio" id="sexWoman" class="" name="sex" value="Woman">
                            <label for="sexWoman">Femme</label>

                            <input type="radio" id="sexOther" class="" name="sex" value="Other">
                            <label for="sexOther">Autre</label>
                        </div>  
                        <p id="errorMessage-creerCompte-sex" class="errorMessage"></p>
                    </div>
                </td>
                <td>
                    <div class="input_label">
                        <label for="birthDate">Date de naissance</label><br>
                        <input type="date" name="birthDate" id="birthDate" class="" required value="" min="1900-01-01" max="2005-01-01">
                        <p id="errorMessage-creerCompte-birthDate" class="errorMessage"></p>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="input_label">
                        <label for="mail">Adresse mail</label><br>
                        <input type="email" name="mail" id="mail" class="" placeholder="Adresse mail" required size="25" value="">
                        <p id="errorMessage-creerCompte-mail" class="errorMessage"></p>
                    </div>
                </td>
                <td>
                    <div class="input_label">
                        <label for="confirmationMail">Confirmation mail</label><br>
                        <input type="email" name="confirmationMail" id="confirmationMail" class="" required placeholder="Adresse mail" size="25" value="">
                        <p id="errorMessage-creerCompte-confirmationMail" class="errorMessage"></p>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="input_label">
                        <label for="password">Mot de passe</label><br>
                        <input type="password" name="password" id="password" class="" required placeholder="Mot de passe">
                        <p id="errorMessage-creerCompte-password" class="errorMessage"></p>
                    </div>
                </td>
                <td>
                    <div class="input_label">
                        <label for="confirmationPassword">Confirmation mot de passe</label><br>
                        <input type="password" name="confirmationPassword" id="confirmationPassword" class="" required placeholder="Mot de passe">
                        <p id="errorMessage-creerCompte-confirmationPassword" class="errorMessage"></p>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <div class="input_label">
                        <label for="address">Adresse</label><br>
                        <textarea class="adresse" name="address" id="address" class="" required rows="3" ></textarea>
                        <p id="errorMessage-creerCompte-address" class="errorMessage"></p>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="input_label">
                        <label for="postalCode">Code postal</label><br>
                        <input type="number" name="postalCode" id="postalCode" class="" required placeholder="Code postal" min="00000" max="99999" class="bouton" value="">
                        <p id="errorMessage-creerCompte-postalCode" class="errorMessage"></p> 
                    </div>
                </td>
                <td>
                    <div class="input_label">
                        <label for="city">Ville</label><br>
                        <input type="text" name="city" id="city" class="" placeholder="Ville" required value="">
                        <p id="errorMessage-creerCompte-city" class="errorMessage"></p>
                    </div>
                </td>
            </tr>

            <tr>
                <td>
                    <div class="input_label">
                        <label for="phoneNumber">Numéro de Téléphone</label><br>
                        <input type="tel" name="phoneNumber" id="phoneNumber" class="" required placeholder="Téléphone" value="">
                        <p id="errorMessage-creerCompte-phoneNumber" class="errorMessage"></p>
                    </div>
                </td>
                <td>
                    <div class="input_label">
                        <label for="job">Métier</label><br>
                        <input type="text" name="job" id="job" class="" placeholder="Métier" required value="">
                        <p id="errorMessage-creerCompte-job" class="errorMessage"></p>
                    </div>
                </td>
            </tr>

            <tr>
                <td colspan="2">
                    <input type="submit" class="but_link" name="submitRegistration" value="Valider inscription">
                </td>
            </tr>
        </table>
    </div>
    </form>

    <!-- FOOTER -->
    <?php include('footer.php'); ?>

</body>
</html>