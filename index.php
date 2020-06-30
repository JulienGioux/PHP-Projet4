<?php
$srcXml = 'source.xml';
$loadedXML = simplexml_load_file($srcXml);
?>
<?php
if (isset($_GET['id'])) {

    echo $loadedXML -> page[intval($_GET['id'])] -> content;
} else {
    echo $loadedXML -> page[0] -> content;
}
?>