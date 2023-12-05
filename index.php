<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!--CSS-->
  <link rel="stylesheet" href="style.css">

  <!-- Per le icone (menu hamburger e X nel responsive)-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

  <title>Sito con cookie e session</title>
</head>

<body>
  <?php
  echo <<<HTML
    <nav class="navbar">
        <div class="max">
          <div class="home"><a href="index.php"> Olimpia Milano </a></div>
          <ul class="menu">
  
            <li>
              <a href="doveSiamo.html"> Dove siamo <br /> </a>
            </li>

            <li>
              <a href="login.php"> Login <br /> </a>
            </li>
          </ul>
          <button id="pulsante2" class="fas fa-bars" onclick="pulsante()"></button>
        </div>
      </nav>
      <div id="pulsante1"></div>
    HTML;

  echo <<<HTML
    <div id="immSfondo">
      <!-- <img src="trattoria.jpg"> -->
    </div>

    HTML;

  echo <<<HTML
      <div id="titlePrenotazione1">
        UN PÒ DI STORIA
      </div>

      <div id="storia">
        Nel cuore pulsante della città della moda, tra strade animate e spirito
        competitivo, nasce la leggenda della Società Olimpia Milano. Fondata
        decenni fa da un gruppo appassionato di visionari, la squadra ha
        tracciato un percorso epico nell'universo della pallacanestro italiana
        ed europea. Le mura della loro casa, il celebre Mediolanum Forum,
        raccontano storie di vittorie gloriose e di sfide emozionanti,
        dipingendo un quadro straordinario di determinazione e successo. <br>
        I giocatori della squadra, con il cuore pulsante dietro il famoso logo
        dell'aquila, incarnano l'essenza di Milano: grinta, stile e passione. Le
        partite della Società Olimpia Milano non sono solo eventi sportivi, ma
        veri spettacoli di adrenalina e talento. Ogni canestro, ogni dribbling,
        è un'ode all'arte della pallacanestro, eseguita con maestria e grazia. <br>
        La folla, un'onda di tifosi appassionati, riempie il Mediolanum Forum
        con un coro di sostegno vibrante, creando un'atmosfera che va ben oltre
        il campo da gioco. I momenti epici vissuti durante le partite della
        Società Olimpia Milano non sono solo memorie sportive, ma capitoli
        indelebili nella storia della città. <br>
        Invitiamo tutti gli appassionati di
        sport, gli amanti dell'emozione e coloro che cercano un'esperienza unica
        a unirsi a noi al Mediolanum Forum, dove il presente si fonde con la
        storia e il futuro si scrive con ogni canestro segnato. La Società
        Olimpia Milano non è solo una squadra; è un'emozione che va vissuta, una
        passione da condividere e un viaggio che non potete permettervi di
        perdere. Siate parte della storia, venite a tifare per la nostra Società!
      </div>

    HTML;

  echo <<<HTML
      <div id = "tabella">
        <div class="immaginiTabella">
          <img src="imm1.jpg" width="100%">
        </div>
        <div class="immaginiTabella">
          <img src="imm2.jpg" width="100%">
        </div>
        <div class="immaginiTabella">
          <img src="img3.jpeg" width="100%">
        </div>

      </div>
    HTML;


  echo <<<HTML
      <footer id = "footer">
        Autore: Boggian Daniele <br />
        Classe: 5G <br />
        Copyright by Boggian Daniele <br />
      </footer>
    HTML;
  ?>


</body>

</html>