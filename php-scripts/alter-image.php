<?php

$dir    = 'images/clasify-images';
$dir2    = 'images/clasified-images';
$prefixer = $_POST['prefixer'];
$imageFile = $_POST['original-image'];

$result = copy('../' . $dir . '/' . $imageFile, '../' . $dir2 . '/' . $imageFile);
echo 'result = ' . $result . '<br>';

$resultRename = rename('../' . $dir2 . '/' . $imageFile, '../' . $dir2 . '/' . $prefixer . '-' . $imageFile);


if ($resultRename) {
    // echo "Arquivo movido e renomeado com sucesso.";
    $log = date('Y-m-d H:i:s') . " - Renomeado de: " . $imageFile . ' para ' . $resultRename . "\n";
    file_put_contents('../logs/log.txt', $log, FILE_APPEND);
} else {
    $erro = error_get_last();
    $log = date('Y-m-d H:i:s') . " - Erro ao mover arquivo: " . $erro['message'] . "\n";
    file_put_contents('../logs/log.txt', $log, FILE_APPEND);
}


?>