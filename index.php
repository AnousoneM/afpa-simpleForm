<?php

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choix du Menu</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>

<body>

    <?= $_POST['name'] ?? 'Nest pas présent' ?>

    <form action="" method="POST">

        <label for="name">Nom : </label>
        <input id="name" name="name" type="text">

        <button>SUBMIT</button>
    </form>


</body>

</html>