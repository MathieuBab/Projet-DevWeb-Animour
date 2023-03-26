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
        <h1>Félicitation pour votre adoption !</h1>
        <p>Vous pouvez noter Nesim Fintz pour le recommander aux futurs adoptants.</p>
    </div>
    <br><br>

    <div class="rating_container">
        <div class="rating">
            <input type="radio" name="p1">
            <input type="radio" name="p1">
            <input type="radio" name="p1">
            <input type="radio" name="p1">
            <input type="radio" name="p1">
            <button type="submit" class="but_link_adoption" onclick="window.location.href = 'noter.php'">Noter</button>
        </div>
    </div>

    <!-- FOOTER -->
    <?php include('footer.php'); ?>
</body>
</html>