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

    <form  id="form-profil" onsubmit="" action="./php/profilProcess.php" method="post">
        <div id="formprofil"> 
            
        
    <div class="presentation">
        <h1>Profil</h1>
    </div>
    <br><br>

            <table>
                <tr>
                    <td>
                        <div class="input_label">
                            <label for="name">Nom</label><br>
                            <input type="text" name="name" id="name" class="" required placeholder="Nom" size="32" value="Fintz" readonly>
                            <p id="errorMessage-creerCompte-name" class="errorMessage"></p>
                        </div> 
                    </td>
                    <td>
                        <div class="input_label">
                            <label for="firstName">Prénom</label><br>
                            <input type="text" name="firstName" id="firstName" class="" required placeholder="Prénom" size="32" value="Nesim" readonly>
                            <p id="errorMessage-creerCompte-firstName" class="errorMessage"></p>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="1">
                        <div class="input_label">
                            <label for="sexChoice">Sexe</label><br>
                            <div id="sexChoice">
                                <input type="radio" id="sexMan" class="" name="sex" value="Man" checked>
                                <label for="sexMan">Homme</label>
                            
                                <input type="radio" id="sexWoman" class="" name="sex" value="Woman" style="display:none;">
                                <label for="sexWoman" style="display:none;">Femme</label>

                                <input type="radio" id="sexOther" class="" name="sex" value="Other" style="display:none;">
                                <label for="sexOther" style="display:none;">Autre</label>
                            </div>  
                            <p id="errorMessage-creerCompte-sex" class="errorMessage"></p>
                        </div>
                    </td>
                    <td>
                        <div class="input_label">
                            <label for="birthDate">Date de naissance</label><br>
                            <input type="date" name="birthDate" id="birthDate" class="" required value="1950-01-01" readonly min="1900-01-01" max="2005-01-01">
                            <p id="errorMessage-creerCompte-birthDate" class="errorMessage"></p>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="input_label">
                            <label for="mail">Adresse mail</label><br>
                            <input type="email" name="mail" id="mail" class="" placeholder="Adresse mail" required size="25" value="nesim.fintz@cy-tech.fr" readonly>
                            <p id="errorMessage-creerCompte-mail" class="errorMessage"></p>
                        </div>
                    </td>
                    <td style="display:none;">
                        <div class="input_label">
                            <label for="confirmationMail">Confirmation mail</label><br>
                            <input type="email" name="confirmationMail" id="confirmationMail" class="" required placeholder="Adresse mail" size="25" value="" readonly>
                            <p id="errorMessage-creerCompte-confirmationMail" class="errorMessage"></p>
                        </div>
                    </td>
                </tr>
                <tr style="display:none;">
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
                            <textarea class="adresse" name="address" id="address" class="" required rows="3" readonly>Av. du Parc</textarea>
                            <p id="errorMessage-creerCompte-address" class="errorMessage"></p>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="input_label">
                            <label for="postalCode">Code postal</label><br>
                            <input type="number" name="postalCode" id="postalCode" class="" required placeholder="Code postal" min="00000" max="99999" class="bouton" value="95000" readonly>
                            <p id="errorMessage-creerCompte-postalCode" class="errorMessage"></p> 
                        </div>
                    </td>
                    <td>
                        <div class="input_label">
                            <label for="city">Ville</label><br>
                            <input type="text" name="city" id="city" class="" placeholder="Ville" required value="Cergy" readonly>
                            <p id="errorMessage-creerCompte-city" class="errorMessage"></p>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <div class="input_label">
                            <label for="phoneNumber">Numéro de Téléphone</label><br>
                            <input type="tel" name="phoneNumber" id="phoneNumber" class="" required placeholder="Téléphone" value="+331 00 00 00 00" readonly>
                            <p id="errorMessage-creerCompte-phoneNumber" class="errorMessage"></p>
                        </div>
                    </td>
                    <td>
                        <div class="input_label">
                            <label for="job">Métier</label><br>
                            <input type="text" name="job" id="job" class="" placeholder="Métier" required value="Fondateur de l'EISTI" readonly>
                            <p id="errorMessage-creerCompte-job" class="errorMessage"></p>
                        </div>
                    </td>
                </tr>
                <tr>
                        <td colspan="2">
                            <div class="input_label">
                                <label for="identity">Pièce d'identité Recto/Verso</label><br>
                                <input type="file" name="identity" id="identity" class="" accept="image/png, image/jpeg" required value="./user/carte.jpg" readonly>
                                <p id="errorMessage-creerCompte-job" class="errorMessage"></p>
                            </div>
                        </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" class="but_link" name="changeProfile" id="changeProfile" value="Modifier les informations"><br>
                        <input type="submit" class="but_link" name="returnProfile" id="returnProfile" value="Annuler les modification" style="display:none;"><br style="display:none;">
                        <input type="submit" class="but_link" name="submitProfile" id="submitProfile" value="Sauvegarder les modifications" style="display:none;"><br style="display:none;">
                        <input type="submit" class="but_link" name="deleteProfile" id="deleteProfile" value="Supprimer votre compte">
                    </td>
                </tr>
            </table>
        </div>
    </form>

    <!-- FOOTER -->
    <?php include('footer.php'); ?>

</body>
</html>