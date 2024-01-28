<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Photo Viewer Prefixer</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- Jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Fonte Inter do google fontes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <link rel="icon" href="assets/favicon.ico" type="image/x-icon">

    <!-- CSS -->
    <link rel="stylesheet" href="assets/style.css">

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

        input {
            border-radius: 10px;
        }

        .mb-10 {
            margin-bottom: 10px !important;
        }

        .blocked-cursor {
            cursor: not-allowed;
            background-color: #ced0d3;
        }

        /* Cortar parte da imagem, a parte de baixo* com object-fit */
        .img-container {
            width: 350px;
            height: 600px;
            overflow: hidden;
            position: relative;
        }

        .img-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            
        }

        /* */
        .item-of-flex {
            flex-basis: calc(20% - 10px); /* Define a largura de cada item (25% - 10px de margem) */
            margin: 5px; /* Adiciona uma margem entre os itens */
            box-sizing: border-box; /* Garante que a largura inclua a margem e o preenchimento */
            font-size: small;
        }
    </style>
  
</head>

<body class="container">

    <!-- <h1>Photo Viwer Prefix</h1> -->

    <!-- <span>Site para ver imagens e colocar sufixos. Desenvolvido por Rafael Assis em 19/03/2023</span> -->
    <br>

    <div class="container">

    <?php
        $dir    = './images/clasify-images';
        $files1 = scandir($dir);
        unset($files1[0]);
        unset($files1[1]);
    ?>

    <?php foreach($files1 as $key=>$value): ?>
        <div style="text-align: center; display: flex; flex-direction: row;">
            <!-- Mostrar Imagem -->
            <div class="img-container" style="margin-right: 20px;">           
                <img src="<?=$dir . '/' . $value ?>" alt="" width="350" style="border-radius: 10px; height: auto;">
            </div>
            <div class="d-flex flex-column ml-5">
                <form action="POST" class="typing-area"> 
                    <input type="text" id="original-image" name="show-text-image" disabled value="<?= $value; ?>" class="mb-10 blocked-cursor">
                    <input type="hidden" id="original-image" name="original-image" value="<?= $value; ?>" class="mb-10">

                    <div class="autocomplete" >
                        <input id="prefixer" type="text" name="prefixer" placeholder="Prefix" class="mb-10">
                    </div>
                    <!-- <input id="prefixer" type="text" name="prefixer" placeholder="Prefix"> -->
                    <br>
                    <button type="button" class="btn btn-secondary send-form" id="send-form">Enviar</button>
                    <button type="button" class="btn btn-success" id="succes" disabled style="display: none;">Sucesso</button>
                    <button type="button" class="btn btn-danger" id="failed" disabled style="display: none;">Falhou</button>

                    <div style="display: flex; width: 650px; flex-wrap: wrap;">   
                        <span style="width: 100%;">.</span>
                        <button type="button" class="btn btn-secondary send-form-taged item-of-flex" id="send-form" data-valor="delete">delete</button>
                        <button type="button" class="btn btn-secondary send-form-taged item-of-flex" id="send-form" data-valor="ds">ds</button>
                        <button type="button" class="btn btn-secondary send-form-taged item-of-flex" id="send-form" data-valor="dom-patcho">dom-patcho</button>
                        <button type="button" class="btn btn-secondary send-form-taged item-of-flex" id="send-form" data-valor="dom-patcho-ULTRA">dom-patcho-ULTRA</button>
                        <button type="button" class="btn btn-secondary send-form-taged item-of-flex" id="send-form" data-valor="hebert">hebert</button>
                        <button type="button" class="btn btn-secondary send-form-taged item-of-flex" id="send-form" data-valor="ULTRA">ULTRA</button>
                        <button type="button" class="btn btn-secondary send-form-taged item-of-flex" id="send-form" data-valor="raiam">raiam</button>
                        <button type="button" class="btn btn-secondary send-form-taged item-of-flex" id="send-form" data-valor="pedro7-subsolo">pedro7-subsolo</button>
                        <button type="button" class="btn btn-secondary send-form-taged item-of-flex" id="send-form" data-valor="pedro7">pedro7</button>
                        <button type="button" class="btn btn-secondary send-form-taged item-of-flex" id="send-form" data-valor="icaro">icaro</button>
                        <button type="button" class="btn btn-secondary send-form-taged item-of-flex" id="send-form" data-valor="icaro-ULTRA">icaro-ULTRA</button>
                        <button type="button" class="btn btn-secondary send-form-taged item-of-flex" id="send-form" data-valor="tmdz">tmdz</button>
                        <button type="button" class="btn btn-secondary send-form-taged item-of-flex" id="send-form" data-valor="candidate">candidate</button>
                        <button type="button" class="btn btn-secondary send-form-taged item-of-flex" id="send-form" data-valor="book">book</button>
                        <span style="width: 100%;">.</span>
                        <button type="button" class="btn btn-secondary send-form-taged item-of-flex" id="send-form" data-valor="direita">direita</button>
                        <button type="button" class="btn btn-secondary send-form-taged item-of-flex" id="send-form" data-valor="astrologia">astrologia</button>
                        <button type="button" class="btn btn-secondary send-form-taged item-of-flex" id="send-form" data-valor="tech">tech</button>
                        <button type="button" class="btn btn-secondary send-form-taged item-of-flex" id="send-form" data-valor="relacionamento">relaciona</button>
                        <button type="button" class="btn btn-secondary send-form-taged item-of-flex" id="send-form" data-valor="produtividade">produtividade</button>
                        <button type="button" class="btn btn-secondary send-form-taged item-of-flex" id="send-form" data-valor="estetica-fashion">estetica-fashion</button>
                        <button type="button" class="btn btn-secondary send-form-taged item-of-flex" id="send-form" data-valor="food-saude">food-saude</button>
                        
                        
                        
                        <button type="button" class="btn btn-secondary send-form-taged item-of-flex" id="send-form" data-valor="renan">renan</button>
                        
                        <button type="button" class="btn btn-secondary send-form-taged item-of-flex" id="send-form" data-valor="random">random</button>
                        
                        <button type="button" class="btn btn-secondary send-form-taged item-of-flex" id="send-form" data-valor="italo-normal">italo-normal</button>
                        <button type="button" class="btn btn-secondary send-form-taged item-of-flex" id="send-form" data-valor="italo">italo</button>
                        <button type="button" class="btn btn-secondary send-form-taged item-of-flex" id="send-form" data-valor="icaro-mkt">icaro-mkt</button>
                        <button type="button" class="btn btn-secondary send-form-taged item-of-flex" id="send-form" data-valor="icaro-luta">icaro-luta</button>
                        <button type="button" class="btn btn-secondary send-form-taged item-of-flex" id="send-form" data-valor="icaro-fitness">icaro-fitness</button>
                        <button type="button" class="btn btn-secondary send-form-taged item-of-flex" id="send-form" data-valor="icaro-financa">icaro-financa</button>
                        <button type="button" class="btn btn-secondary send-form-taged item-of-flex" id="send-form" data-valor="icaro-cases">icaro-cases</button>
                        
                        
                        <button type="button" class="btn btn-secondary send-form-taged item-of-flex" id="send-form" data-valor="ia-mkt">ia-mkt</button>
                        <button type="button" class="btn btn-secondary send-form-taged item-of-flex" id="send-form" data-valor="humor">humor</button>
                        <button type="button" class="btn btn-secondary send-form-taged item-of-flex" id="send-form" data-valor="hot-guy">hot-guy</button>
                        
                        <button type="button" class="btn btn-secondary send-form-taged item-of-flex" id="send-form" data-valor="fitness">fitness</button>
                        <button type="button" class="btn btn-secondary send-form-taged item-of-flex" id="send-form" data-valor="exterior">exterior</button>
                        <button type="button" class="btn btn-secondary send-form-taged item-of-flex" id="send-form" data-valor="bh">bh</button>
                        <button type="button" class="btn btn-secondary send-form-taged item-of-flex" id="send-form" data-valor="victor-moretti">victor-moretti</button>
                        <button type="button" class="btn btn-secondary send-form-taged item-of-flex" id="send-form" data-valor="empreender">empreender</button>
                        
                        
                        
                        
                        
                        
                        
                    </div>
                    
                    
                </form>

            </div>
        </div>
    <?php endforeach; ?>

    </div>

<!-- Scrit que chama alter-php e move a imagem -->
<script src="./js-scripts/script.js" type="text/javascript"></script>
<!-- Script para auto-complete -->
<script src="./js-scripts/autocomplete.js" type="text/javascript"></script>

</body>
</html>