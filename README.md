# Photo Viwer

Precisa que uma imamge esteja na pasta images/classify-images

## Metodos PHP

scandir(lista todos os arquivos de uma pasta)

Aplicaçâo que serve para clasificar imagens, adicionando um prefixo na imagem

# Como usar

````sh
php -S 127.0.0.1:8000
````

+ Vá eM [http://127.0.0.1:8000/](http://127.0.0.1:8000/)

tem que ter as 3 pastas:

+ classified-images: É onde vai ficar a image após inserir o prefix
+ clasify-images: imagesn para serem classificadas
+ safe-guard-images: É OBRIGATORIO TER ELA. é A IMAGEM ORIGINAL, QUE SAI DE CLASIFY-IMAGES VAI APRA ESSA, SERVE PARA DELETAR DE CLASIFY-IMAGES E AO MESO TEMPO NAO PERDER A IMAGE. pROVAVLEMTEN DELETA ELA QUANDO TERMINAR

+ Ao clicar enter em input, já dar o click e salvar
+ colocar o autocomplete em tudo
+ Lidar quando nâo tem mais imagens, quando nao tem nenhuma na pasta ou quando a imagens acabam
+ Listar tags já inseridas
+ Contador e quanto falta (contagme e porcentagem)
+ Reverter
+ Pobtao par aenvia o ultimo (agiliza e evita CTRL+V)
+ botao para inserir delete

## Tags

Coloque as tags em `tags.txt`
