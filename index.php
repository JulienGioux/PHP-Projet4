<?php 
$srcXml = 'source.xml';
$loadedXML = simplexml_load_file($srcXml);
(isset($_GET['id'])) ? '' : header ("location: 0");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            echo '<li><a href="' . (intval($value['id']) - 1) . '">' . $value -> menu . '</a></li>';
        }
    ?>
    </ul>
</nav>
<main>
    <?= $loadedXML -> page[intval($_GET['id'])] -> content; ?>
</main>
</body>
</html>