<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title>Photo Viwer Prerixer</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  
</head>

<body>

  <h1>Photo Viwer Prefix</h1>

  <span>Site para ver imagens e colocar sufixos. Desenvolvido por Rafael Assis em 19/03/2023</span>
  <br>

  <div class="container">

<?php
    $dir    = './images/clasify-images';
    $files1 = scandir($dir);
    unset($files1[0]);
    unset($files1[1]);
    // $files2 = scandir($dir, SCANDIR_SORT_DESCENDING);

    // print_r($files1);
    // print_r($files2); 

?>

<?php foreach($files1 as $key=>$value): ?>
    <div >
        <!-- <td><?= $value; ?></td> -->
        <img src="<?=$dir . '/' . $value ?>" alt="" height="320" width="200">
        <span><?= $value; ?></span>
        <form action="POST"  class="typing-area"> 
            <input type="text" id="original-image" name="original-image" value="<?= $value; ?>">
            <input type="text" id="prefixer" name="prefixer">
            <button type="button" class="btn btn-secondary" id="send-form">Enviar</button>
        </form>
        <button type="button" class="btn btn-secondary">Previous</button>
        <button type="button" class="btn btn-secondary">Next</button>
    </div>
<?php endforeach; ?>

    
</div>

<script src="./js-scripts/script.js" type="text/javascript" charset="utf-8" async defer></script>

      
</body>
</html>