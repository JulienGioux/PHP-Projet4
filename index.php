<?php 
if (file_exists('source.xml')){
    $srcXml = 'source.xml';
    $loadedXML = simplexml_load_file($srcXml);
} else {
    header ("location: 404.html");
}
(isset($_GET['id'])) ? '' : header ("location: 0.html");
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/nav.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <title><?= $loadedXML -> page[intval($_GET['id'])] -> title ?></title>
</head>
<body>
<header class="container  bg-gold">
    <h1 class="txt-center txt-white font-Title"><?= $loadedXML -> page[intval($_GET['id'])] -> title ?></h1>
</header>
<nav>
    <ul>
    <?php
        foreach ($loadedXML -> page as $key => $value) {
    ?>
    <li><a <?=(intval($_GET['id']) == (intval($value['id']) - 1)) ? 'class="active"' : ''?> href="<?=(intval($value['id']) - 1)?>.html">
    <?=$value -> menu?></a></li>
        <?php
        }
    ?>
    </ul>
</nav>
<main class="container">
    <?= $loadedXML -> page[intval($_GET['id'])] -> content; ?>
</main>
</body>
</html>