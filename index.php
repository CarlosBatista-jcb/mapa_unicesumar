<?php
$title = "Aula 2 de PHP";
$titulotutorial1 = "Coxa Frango";
$textotutorial1 = "Coxa e Sobre de Frango</br>
Lorem Ipsum é simplesmente um texto fictício da indústria tipográfica e de impressão. Lorem Ipsum tem sido o texto fictício padrão da indústria desde os anos 1500, quando um impressor desconhecido pegou uma cozinha de tipos e embaralhou-a para fazer um livro de espécimes de tipos. Ele sobreviveu não apenas cinco séculos, mas também o salto para a composição eletrônica, permanecendo essencialmente inalterado. Foi popularizado na década de 1960 com o lançamento de folhas Letraset contendo passagens de Lorem Ipsum e, mais recentemente, com software de editoração eletrônica como Aldus PageMaker, incluindo versões de Lorem Ipsum.";
$frango = "frango.jpg";

$titulolinguica = "Linguiça mista";
$textolinguica = "Linguiça mista e Salada
Lorem Ipsum é simplesmente um texto fictício da indústria tipográfica e de impressão. Lorem Ipsum tem sido o texto fictício padrão da indústria desde os anos 1500, quando um impressor desconhecido pegou uma cozinha de tipos e embaralhou-a para fazer um livro de espécimes de tipos. Ele sobreviveu não apenas cinco séculos, mas também o salto para a composição eletrônica, permanecendo essencialmente inalterado. Foi popularizado na década de 1960 com o lançamento de folhas Letraset contendo passagens de Lorem Ipsum e, mais recentemente, com software de editoração eletrônica como Aldus PageMaker, incluindo versões de Lorem Ipsum.";
$linguica = "linguica.jpg";

$tituloempanado = "Empanado ";
$textoempanado = "Empanada de Frango</br>
Lorem Ipsum é simplesmente um texto fictício da indústria tipográfica e de impressão. Lorem Ipsum tem sido o texto fictício padrão da indústria desde os anos 1500, quando um impressor desconhecido pegou uma cozinha de tipos e embaralhou-a para fazer um livro de espécimes de tipos. Ele sobreviveu não apenas cinco séculos, mas também o salto para a composição eletrônica, permanecendo essencialmente inalterado. Foi popularizado na década de 1960 com o lançamento de folhas Letraset contendo passagens de Lorem Ipsum e, mais recentemente, com software de editoração eletrônica como Aldus PageMaker, incluindo versões de Lorem Ipsum.";
$empanado = "empanado.jpg";

$tituloarroz_feijao = "Arroz e Feijão";
$textoarroz_feijao = "Arroz e Feijão</br>
Lorem Ipsum é simplesmente um texto fictício da indústria tipográfica e de impressão. Lorem Ipsum tem sido o texto fictício padrão da indústria desde os anos 1500, quando um impressor desconhecido pegou uma cozinha de tipos e embaralhou-a para fazer um livro de espécimes de tipos. Ele sobreviveu não apenas cinco séculos, mas também o salto para a composição eletrônica, permanecendo essencialmente inalterado. Foi popularizado na década de 1960 com o lançamento de folhas Letraset contendo passagens de Lorem Ipsum e, mais recentemente, com software de editoração eletrônica como Aldus PageMaker, incluindo versões de Lorem Ipsum.";
$arroz_feijao = "arroz_feijao.jpg";

$titulotutorial3 = "Aplicando conceito de Herança de HTML";
$textotutorial3 = "O que é Lorem Ipsum?</br>
Lorem Ipsum é simplesmente um texto fictício da indústria tipográfica e de impressão. Lorem Ipsum tem sido o texto fictício padrão da indústria desde os anos 1500, quando um impressor desconhecido pegou uma cozinha de tipos e embaralhou-a para fazer um livro de espécimes de tipos. Ele sobreviveu não apenas cinco séculos, mas também o salto para a composição eletrônica, permanecendo essencialmente inalterado. Foi popularizado na década de 1960 com o lançamento de folhas Letraset contendo passagens de Lorem Ipsum e, mais recentemente, com software de editoração eletrônica como Aldus PageMaker, incluindo versões de Lorem Ipsum.";
$coxa_sobre_coxa = "coxa_sobre_coxa.jpg";


?>
<!doctype html>
<html ling="pt-br">
 
<head>
    <title><?=$title;?></title>
	<meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="estilo.css"/>
    <link rel="stylesheet" type="text/css" href="button.css"/>
       
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    

</head>
<body>
    

    <header>

    <nav id="menu-h">
            <ul>
                <li><a href="#"> Home</a></li>
                <li><a href="#"> Blog</a></li>
                <li><a href="#"> Conheça a Dona Dirce</a></li>
                <li><a href="#"> Contato</a></li>
            </lu>

        </nav>

    </header>
    
    
    <div id="img_entrada">
    <img src="backround1.jpg" height ="400" width="1400"  title = "Dona Dirce"  label="DONA DIRCE" alt= "Restaurante Dona Dirce"  />
    
    </div>

    
    <div class="w3-container">
  <h2>Sabor Caseiro e Qualidade</h2>
  <p>A melhor opção em Marmitex da região!</p>
</div>

<div class="w3-row-padding">
  <div class="w3-container w3-third">
    <img src="img1.jpg" style="width:88%;cursor:pointer" 
    onclick="onClick(this)" class="w3-hover-opacity">
  </div>
  <div class="w3-container w3-third">
    <img src="img2.jpg" style="width:88%;cursor:pointer" 
    onclick="onClick(this)" class="w3-hover-opacity">
  </div>
  <div class="w3-container w3-third">
    <img src="img3.jpg" style="width:88%;cursor:pointer" 
    onclick="onClick(this)" class="w3-hover-opacity">
  </div>
</div>

<div id="modal01" class="w3-modal" onclick="this.style.display='none'">
  <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
  <div class="w3-modal-content w3-animate-zoom">
    <img id="img01" style="width:100%">
  </div>
</div>

<script>
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
}
</script>

<!-- MEU CODIGO NÃO APAGUE -->
     <div >
        <article class="maisn_cta_content">
            <div class="main_cta_content_spacer">
                <header>
    <h2><center>Escolha uma das Opções abaixo!</center></h2>
    <p><center>Clique em Saiba mais para saber os Valores!</center></p>
            </div>
        </article>
    </div>
    <main>
     
        <section>
            <header>
                <h1> </h1>
                <p> </p>
            </header>
        
        
        <div class="main_cta">
        <article class="maisn_cta_content"><center>
            <img src=<?=$frango;?> width="250px" title = "aula php" alt= "aula php para unicessumar">
            <h2><?=$titulotutorial1;?></h2></br>
            <p><?=substr($textotutorial1, 0, 200);?></p>
            <a href="https://photos.google.com/search/_tra_/photo/AF1QipOegNNEjcoJ5x6Rpij_3u2WJtUfPrFf8L76QPM1" target="_blank">
            <img src="saibamais.png" alt="frango" style="width:99px;height:42px;">
            </a>
            <!--<button onclick="document.location='menu_fango.jpg'" >Saiba mais</button>-->
        
        </article>
        </div>

        <div class="main_cta">
        <article class="maisn_cta_content"><center>
            <img src=<?=$linguica;?> width="250px" title = "aula php" alt= "aula php para unicessumar">
            <h2><?=$titulolinguica;?></h2></br>
            <p><?=substr($textolinguica, 0, 200);?></p>
            <a href="https://photos.google.com/search/_tra_/photo/AF1QipNUFXSbSieZfU3iHU_00qAWpI_szzHeK12DccVT" target="_blank">
            <img src="saibamais.png" alt="linguiça" style="width:99px;height:42px;">
            </a>
        
        
        </article>
        </div>

        <div class="main_cta">
        <article class="maisn_cta_content"><center>
            <img src=<?=$empanado;?> width="250px" title = "aula php" alt= "aula php para unicessumar">
            <h2><?=$tituloempanado;?></h2></br>
            <p><?=substr($textoempanado, 0, 200);?></p>
            <a href="https://photos.google.com/search/_tra_/photo/AF1QipOYOF1Qnrku3KUq4Vc0HFdfZlG-H9TVubK8fIhP" target="_blank">
            <img src="saibamais.png" alt="Empanado" style="width:99px;height:42px;">
            </a>
        
        
        </article>
        </div>

        <div class="main_cta">
        <article class="maisn_cta_content"><center>
            <img src=<?=$arroz_feijao;?> width="250px" title = "aula php" alt= "aula php para unicessumar">
            <h2><?=$tituloarroz_feijao;?></h2></br>
            <p><?=substr($textoarroz_feijao, 0, 200);?></p>
            <a href="https://photos.google.com/search/_tra_/photo/AF1QipOWnIz0UqIxl-K6PBJBhFY8NNffvGSpPaDzICvk" target="_blank">
            <img src="saibamais.png" alt="Arroz e Feijão" style="width:99px;height:42px;">
            </a>
        
        
        </article>
        </div>

        <div class="main_cta">
        <article class="maisn_cta_content"><center>
            <img src=<?=$coxa_sobre_coxa;?> width="250px" title = "aula php" alt= "aula php para unicessumar">
            <h2><?=$titulotutorial1;?></h2></br>
            <p><?=substr($textotutorial1, 0, 200);?></p>
            <a href="https://photos.google.com/search/_tra_/photo/AF1QipMEutZ1Aa0qjMehsdhANAm12htpu-A8wusEhjU8" target="_blank">
            <img src="saibamais.png" alt="Coxa e sobre coxa" style="width:99px;height:42px;">
            </a>
        
        
        </article>
        </div>

        

        </section>
        
       
    </main>
        
    <footer class="w3-container w3-teal">
    <nav ><center>
            <section>
                <br>
      <p>José Carlos Batista ID Unicessumar 1818374-5</p>
      
            <ul>
                             
                <li><a href="#"> Conheça a Dona Dirce</a></li>
                <li><a href="#"> Contato</a></li>
            </lu>
            </section>

</center></nav>

    </footer>

</body>
