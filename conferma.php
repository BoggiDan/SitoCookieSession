<?php
session_start();
// var_dump($_SESSION);
if (isset($_POST["logout"])) unset($_SESSION["active_login"]);
if (!isset($_SESSION["active_login"])) header("Location: login.php");
$user = $_SESSION["active_login"];

if (isset($_POST['Invia'])) {
    $nome = $_POST['fname'];
    $cognome = $_POST['lname'];
    $ticket = $_POST['ticket'];
    $to = $_POST['email'];
    $telefono = $_POST['telefono'];
    // $prezzo = $_POST['prezzo'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CSS-->
    <link rel="stylesheet" href="style.css" />

    <!-- Per le icone (menu hamburger e X nel responsive)-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <title>Conferma</title>
</head>

<body>
    <nav class="navbar">
        <div class="max">
            <div class="home"><a href="index.php"> Olimpia Milano</a></div>
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

    <div id="immSfondoConferma">
        <div id="backgroundConferma">
            <p id="titlePrenotazione1">
                Riepilogo Dati
            </p>


            <?php

            switch ($ticket) {
                case 'PREMIUM A - FILA 1':
                    $prezzo = "€123.05";
                    break;

                case 'PREMIUM A - FILA 2':
                    $prezzo = "€107.00";
                    break;

                case 'PREMIUM B - FILA 1':
                    $prezzo = "€80.25";
                    break;

                case 'PREMIUM B - FILA 2':
                    $prezzo = "€63.13";
                    break;

                case 'CORPORATE':
                    $prezzo = "€96.30";
                    break;

                case 'EXECUTIVE':
                    $prezzo = "€85.60";
                    break;

                case 'BENCH SIDE CENTRALE':
                    $prezzo = "€57.78";
                    break;

                case 'BENCH SIDE':
                    $prezzo = "€50.29";
                    break;

                case 'VIP SEATS':
                    $prezzo = "€101.65";
                    break;

                case 'LODGE CENTRALE':
                    $prezzo = "€32.10";
                    break;

                case 'TRIBUNA CENTRALE':
                    $prezzo = "€26.75";
                    break;

                case 'LODGE':
                    $prezzo = "€20.33";
                    break;

                case 'PROMOTION':
                    $prezzo = "€15.10";
                    break;

                case 'STAGE CENTRALE':
                    $prezzo = "€13.10";
                    break;

                case 'LODGE LATERALE':
                    $prezzo = "€12.10";
                    break;

                case 'STAGE':
                    $prezzo = "€11.10";
                    break;

                case 'LODGE DIAGONALE':
                    $prezzo = "€11.10";
                    break;

                case 'STAGE LATERALE':
                    $prezzo = "€10.10";
                    break;

                case 'FAN ZONE':
                    $prezzo = "€11.10";
                    break;

                case 'TRIBUNA OLIMPIA':
                    $prezzo = "€9.10";
                    break;

                case 'CURVA AJP':
                    $prezzo = "€9.10";
                    break;

                case 'TRIBUNA GUEST':
                    $prezzo = "€15.10";
                    break;

                default:
                    break;
            }

            $_SESSION['nome'] = $nome;
            $_SESSION['cognome'] = $cognome;
            $_SESSION['ticket'] = $ticket;
            $_SESSION['email'] = $to;
            $_SESSION['telefono'] = $telefono;
            $_SESSION['prezzo'] = $prezzo;

            echo <<<HTML
        <div id="testoConferma">
        Benvenuto nella pagina del riepilogo dati. <br>
        In questa pagina dovrà procedere all'acquisto confermando i dati se giusti, altrimenti torni indietro e corregga! <br>
        <p id="datiIntestatario">
            Dati intestatario <br>
        </p>
            <div id="datiUtente">
            <p>Nome: $nome</p>
            <p>Cognome: $cognome </p> 
            <p>Posizione in tribuna: $ticket</p>
            <p>Costo: $prezzo </p> 
            <p>Email: $to </p> 
            <p>Telefono: $telefono </p> 
            </div>
        </div>

        HTML;

            // echo <<<HTML
            //     <p id="invii">
            //     <label>
            //         <input type="button" name="Rifai" value="Indietro" id="bottoneInvio" formaction="loginEffettuato.php">

            //     <label>
            //         <input type="submit" name="Invia" value="Invia" id="bottoneInvio" formaction="conferma.php" />
            //     </label>
            //     </p>
            // HTML;
            ?>


            <div id="bottoniConferma">
                <form action="loginEffettuato.php" method="post">
                    <label>
                        <input type="submit" name="Indietro" value="Indietro" id="bottoneInvio">
                    </label>
                </form>

                <form action="prenotazione.php" method="post">
                    <label>
                        <input type="submit" name="Invia" value="Invia" id="bottoneInvio">
                    </label>
                </form>
            </div>
        </div>

    </div>
    <!-- Ci deve essere in questa pagina tutto il riepilogo dell'ordine, 
    dando all'utente la possibilità di tornare indietro alla pagina precedente (loginEffettuato.php),
    oppure con un bottone invia dove ti rimanda alla home e ti invia la mail  -->

    <!-- <footer id="footer">
        Autore: Boggian Daniele <br />
        Classe: 5G <br />
        Copyright by Boggian Daniele <br />
    </footer> -->

    <!-- footer -->
    <div class="footer">
        <div class="social">
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-snapchat"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-facebook-f"></i></a>
        </div>

        <p class="copyright">Copyright by Boggian Daniele</p>
    </div>
</body>

</html>