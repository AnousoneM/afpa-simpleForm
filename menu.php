<?php
var_dump($_GET);

foreach($_GET as $key => $value){
    echo $key, $value . '<br>';
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choix du client</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">

</head>

<body class="text-center">
    <h1>MENU : <?= isset($_GET['name']) ? ucwords($_GET['name']) : 'Param non présent' ?></h1>
    <h2>ENTREE</h2>
    <p class="h3"><?= ucwords($_GET['starter'] ?? 'Param non présent V2') ?></p>
    <h2>PLAT</h2>
    <p class="h3"><?= ucwords($_GET['main']) ?></p>
    <h2>DESSERT</h2>
    <p class="h3"><?= ucwords($_GET['dessert']) ?></p>
    <a href="index.php" class="btn btn-outline-dark mt-3">Retour</a>
</body>

</html>