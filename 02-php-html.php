<?php

$nom = "Sara";
$age = 21;

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>PHP et HTML</title>
</head>

<body>

    <h1>Mon profil</h1>

    <p>
        Bonjour
        <?php echo $nom; ?>
    </p>

    <p>
        Vous avez
        <?php echo $age; ?>
        ans.
    </p>

</body>

</html>