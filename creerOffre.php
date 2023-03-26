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
        <h1>Créer une offre </h1>
    </div>
    <br><br>

    <form  id="form-creerOffre" action="./php/createOfferProcess.php" method="post">
    <div id="formulaire">
         
        <table>
            <tr>
                <td>
                    <div class="input_label">
                        <label for="name">Espèce</label><br>
                        <input type="text" name="species" id="species" class="form_input" required placeholder="Nom" size="32" value="">
                        <p id="errorMessage-creerOffre-species" class="errorMessage"></p>
                    </div> 
                </td>
                <td>
                    <div class="input_label">
                        <label for="name">Race</label><br>
                        <input type="text" name="breed" id="breed" class="form_input" required placeholder="Nom" size="32" value="">
                        <p id="errorMessage-creerOffre-breed" class="errorMessage"></p>
                    </div> 
                </td>
            </tr>
            <tr>
                <td>
                    <div class="input_label">
                        <label for="name">Nom de l'animal</label><br>
                        <input type="text" name="name" id="name" class="form_input" required placeholder="Nom" size="32" value="">
                        <p id="errorMessage-creerOffre-name" class="errorMessage"></p>
                    </div> 
                </td>
                <td>
                    <div class="input_label">
                        <label for="identity">Photo</label><br>
                        <input type="file" name="identity" id="identity" class="form_input" accept="image/png, image/jpeg" required value="">
                        <p id="errorMessage-creerOffre-job" class="errorMessage"></p>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <div class="input_label">
                        <label for="address">Description (Veuillez inquiquer l'âge et le sexe de votre petit compagnon)</label><br>
                        <textarea class="adresse" name="description" id="description" class="form_textarea" required rows="3" ></textarea>
                        <p id="errorMessage-creerOffre-description" class="errorMessage"></p>
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