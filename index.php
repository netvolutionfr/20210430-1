<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Essai PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="liste-fruits">
<?php
$fruits = array("Pomme", "Banane", "Fraise", "Abricot", "Melon");

$fruits[] = "Poire";
$fruits[] = "Cerise";

foreach ($fruits as $fruit) {
    echo '<div class="item-fruit">' . $fruit . '</div>';
}
?>
</div>
</body>
</html>