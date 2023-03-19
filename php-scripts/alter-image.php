<?php

var_dump($_POST);
var_dump($_GET);
// die;

$dir    = 'images/clasify-images';
$dir2    = 'images/clasified-images';
$prefixer = $_POST['prefixer'];
$imageFile = $_POST['original-image'];

$newPath =

var_dump($_POST);

echo $dir . '/' . $imageFile;
echo '<br>';
echo $dir2 . '/' . $imageFile;
echo '<br>';
echo $dir2 . '/' . $prefixer . '-' . $imageFile;
echo '<br>';


$result = copy('../' . $dir . '/' . $imageFile, '../' . $dir2 . '/' . $imageFile);
echo 'result = ' . $result . '<br>';

rename('../' . $dir2 . '/' . $imageFile, '../' . $dir2 . '/' . $prefixer . '-' . $imageFile);

?>