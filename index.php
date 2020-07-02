<?php 
$srcXml = 'source.xml';
$loadedXML = simplexml_load_file($srcXml);
(isset($_GET['id'])) ? '' : header ("location: 0");
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/nav.css">
    <title><?= $loadedXML -> page[intval($_GET['id'])] -> title ?></title>
</head>
<body>
<head>
    <h1><?= $loadedXML -> page[intval($_GET['id'])] -> title ?></h1>
</head>
<nav>
    <ul>
    <?php
        foreach ($loadedXML -> page as $key => $value) {
    ?>
    <li><a <?=(intval($_GET['id']) == (intval($value['id']) - 1)) ? 'class="active"' : ''?> href="<?=(intval($value['id']) - 1)?>">
    <?=$value -> menu?></a></li>
        <?php
        }
    ?>
    </ul>
</nav>
<main>
    <?= $loadedXML -> page[intval($_GET['id'])] -> content; ?>
</main>
</body>
</html>