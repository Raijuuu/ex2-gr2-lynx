<?php
    $codeu = $_POST["courriel"];
    $passe = $_POST["mdp"];
?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page de connexion</title>
</head>
<body>
    <h2>
        vous etes connecté...
    </h2>
    
    <p>
        Bienvenu <?= $codeu ?>!
        Votre mot de passe : <?= $passe ?>
    </p>

</body>
</html>