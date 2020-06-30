<?php 
$loadedXML = simplexml_load_file('source.xml');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
var_dump($loadedXML);
$srcXml = 'source.xml';
$loadedXML = simplexml_load_file($srcXml);

if (isset($_GET['id'])) {
    var_dump(intval($_GET['id']));
    echo $loadedXML -> page[intval($_GET['id'])] -> menu; 
    echo $loadedXML -> page[intval($_GET['id'])] -> title;
    echo $loadedXML -> page[intval($_GET['id'])] -> content;
} else {
    echo $loadedXML -> page[intval($_GET[0])] -> menu; 
    echo $loadedXML -> page[intval($_GET[0])] -> title;
    echo $loadedXML -> page[intval($_GET[0])] -> content;
}
?>

<a href="index.php?id=0">Début de l'aventure</a>

</body>
</html>