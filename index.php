<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Photo Viwer Prerixer</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">

    <style>
        * {
          box-sizing: border-box;
          font-family: 'Inter', sans-serif;
        }

        span {
            color: white;
        }

        body {
        /*  font: 16px Arial;  */
        background: rgb(2,0,36);
        background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 35%, rgba(7,59,154,1) 51%, rgba(2,3,9,1) 100%);
        color: white;
        }
    </style>
  
</head>

<body class="container">

  <h1>Photo Viwer Prefix</h1>

  <span>Site para ver imagens e colocar sufixos. Desenvolvido por Rafael Assis em 19/03/2023</span>
  <br>

  <div class="container">

    <?php
        $dir    = './images/clasify-images';
        $files1 = scandir($dir, SCANDIR_SORT_DESCENDING);
        unset($files1[0]);
        unset($files1[1]);
    ?>

<?php foreach($files1 as $key=>$value): ?>
    <div class="mb-5" style="text-align: center; display: flex; flex-direction: row;">
        <img src="<?=$dir . '/' . $value ?>" alt="" height="500" width="400" style="border-radius: 10px;">
        <div class="d-flex flex-column ml-5">
            <form action="POST"  class="typing-area"> 
                <div style="width:300px;">
                    <!-- <input type="text" id="original-image" name="original-image" value="<?= $value; ?>" disabled> -->
                </div>
                <input type="text" id="original-image" name="original-image" value="<?= $value; ?>">

                <div class="autocomplete" style="width:300px;">
                    <!-- <input id="prefixer" type="text" name="prefixer" placeholder="Prefix"> -->
                </div>
                <input id="prefixer" type="text" name="prefixer" placeholder="Prefix">
                <br>
                <button type="button" class="btn btn-secondary send-form" id="send-form">Enviar</button>
            </form>
            <!-- <button type="button" class="btn btn-secondary">Previous</button> -->
            <!-- <button type="button" class="btn btn-secondary">Next</button> -->
        </div>
        
    </div>
<?php endforeach; ?>
    
</div>

<script src="./js-scripts/script.js" type="text/javascript"></script>
<script src="./js-scripts/autocomplete.js" type="text/javascript"></script>

</body>
</html>