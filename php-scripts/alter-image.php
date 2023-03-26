<?php

$dir_base    = 'images/clasify-images';
$dir_destiny    = 'images/clasified-images';
$dir_guard_after    = 'images/safe-guard-images';



$prefixer = $_POST['prefixer'];
$original_image = $_POST['original-image'];

$base_image = '../' . $dir_base . '/' . $original_image;
$destiny_image = '../' . $dir_destiny . '/' . $original_image;
$new_image = $prefixer . '-' . $original_image; // sem o dir
$prefixer_image = '../' . $dir_destiny . '/' . $prefixer . '-' . $original_image;
$safe_guard_image = '../' . $dir_guard_after . '/' . $original_image;

// Copia imagem
$result = copy($base_image, $destiny_image);

// Verifica se arquivo existe
if(!file_exists($base_image)){
    $log = date('Y-m-d H:i:s') . " - Arquivo não existe" . "\n";
    file_put_contents('../logs/log.txt', $log, FILE_APPEND);
    http_response_code(404);
    die;
}

// Renomeia Imagem
$result_rename_image = rename($destiny_image, $prefixer_image);

if ($result_rename_image) {
    $log = date('Y-m-d H:i:s') . " - Renomeado de: " . $original_image . ' para ' . $new_image . "\n";
    file_put_contents('../logs/log.txt', $log, FILE_APPEND);
    $safe_guard_rename_image = rename($base_image, $safe_guard_image);
    http_response_code(200);
} else {
    $erro = error_get_last();
    $log = date('Y-m-d H:i:s') . " - Erro ao mover arquivo: " . $erro['message'] . "\n";
    file_put_contents('../logs/log.txt', $log, FILE_APPEND);
    http_response_code(404);
}


?>