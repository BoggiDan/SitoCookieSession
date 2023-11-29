<?php
session_start();
if (isset($_POST["logout"])) unset($_SESSION["active_login"]); //se attivo il logout (bottone sotto) chiudi la sessione
if (!isset($_SESSION["active_login"])) header("Location: login.php"); // se non è stata attivata la sessione torna alla pagina precedente
$user = $_SESSION["active_login"]; //assegna a $user il nome memorizzato
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--CSS-->
    <link rel="stylesheet" href="style.css" />

    <!-- Per le icone (menu hamburger e X nel responsive)-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <title>Login effettuato con successo</title>
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

    <!-- Introduzione: descrizione di quello ceh dovrà fare l'utente -->
    <div id="#">
        <?php
        $prova = <<<HTML
                Benvenuto $user. <br>
                In questa sezione lei dovrà compilare il modulo sottostante per prenotare il posto desiderato
            HTML;
        echo $prova;
        ?>
    </div>

    <!-- Costi biglietti
    PREMIUM A - FILA 1 123.05
    PREMIUM A - FILA 2 107.00
    PREMIUM B - FILA 1 80.25
    PREMIUM B - FILA 2 63.13
    CORPORATE 96.30
    EXECUTIVE 85.60
    BENCH SIDE CENTRALE 57.78
    BENCH SIDE 50.29
    VIP SEATS 101.65
    LODGE CENTRALE 32.10 
    TRIBUNA CENTRALE 26.75
    LODGE 20.33
    PROMOTION 15.10
    STAGE CENTRALE 13.10
    LODGE LATERALE 12.10
    STAGE 11.10
    LODGE DIAGONALE 11.10
    STAGE LATERALE 10.10
    FAN ZONE 11.10
    TRIBUNA OLIMPIA 9.10
    CURVA AJP 9.10
    TRIBUNA GUEST 15.10 -->

    <div id="immSfondoLoginEffettuato">
        <img src="posti.jpg" alt="">
    </div>


    <!-- Compilazione del form  -->
    <form action="" method="POST" id="formLoginEffettuato">
        <fieldset id="fieldsetLoginEffettuato">
            <legend>Scegli il biglietto che preferisci</legend>
            <!-- <div id="#">
                <label for="name">Nome: </label>
                <input type="text" id="name" name="name" placeholder="Nome">
            </div>
            <div id="#">
                <label for="cognome">Cognome: </label>
                <input type="text" id="cognome" name="cognome" placeholder="Cognome">
            </div> -->
            <p>
                <label> Nome: </label>
                <input type="text" id="fname" name="fname" placeholder="Nome" />

                <label> Cognome: </label>
                <input type="text" id="lname" name="lname" placeholder="Cognome" />
                <br />
            </p>

            <p>
                <label> Sesso: </label> <br />
                <input type="radio" name="sesso" value="Maschio" required /> Maschio
                <br />
                <input type="radio" name="sesso" value="Femmina" required /> Femmina
                <br>
                <input type="radio" name="sesso" value="Altro" required /> Altro
                <br>
            </p>
            <p>
                <label> Email: </label>
                <input type="email" id="email" name="email" placeholder="es. nome@email.com" required />
            </p>

            <p>
                <label> Numero di telefono: </label>
                <input type="text" id="telefono" name="telefono" placeholder="Cellulare" required />
            </p>

            <table>
                <tr>
                    <th id="campo1">Campo</th>
                    <th id="campo2">Posto</th>
                    <th id="campo3">Prezzo €</th>
                </tr>

                <tr>
                    <td id="campo1"><input type="radio" id="premiumA" name="ticket" value="premiumA"></td>
                    <td id="campo2">PREMIUM A - FILA 1</td>
                    <td id="campo3">€123.05</td>
                </tr>

                <tr>
                    <td id="campo1"><input type="radio" id="premiumAA" name="ticket" value="premiumAA"></td>
                    <td id="campo2">PREMIUM A - FILA 2</td>
                    <td id="campo3">€107.00</td>
                </tr>

                <!-- Modello -->
                <tr>
                    <td id="campo1"></td>
                    <td id="campo2"></td>
                    <td id="campo3"></td>
                </tr>

            </table>

            <p id="invii">
          <label>
            <input type="reset" name="Rifai" value="Rifai" id="bottoneInvio"/>
          </label>
  
          <label>
            <input type="submit" name="Invia" value="Invia" id="bottoneInvio" formaction="prenotazione.php"/>
          </label>
        </p>

            <!-- <div id="#">
                <input type="radio" id="premiumA" name="ticket" value="premiumA">
                <label for="premiumA">PREMIUM A - FILA 1 €123.05</label>
            </div>
            <div id="#">
                <input type="radio" id="premiumAA" name="ticket" value="premiumAA">
                <label for="premiumAA">PREMIUM A - FILA 2 €107.00</label>
            </div>
            <div id="#">
                <input type="radio" id="premiumB" name="ticket" value="premiumB">
                <label for="premiumB">PREMIUM B - FILA 1 €80.25</label>
            </div>
            <div id="#">
                <input type="radio" id="premiumBB" name="ticket" value="premiumBB">
                <label for="premiumBB">PREMIUM B - FILA 2 €63.13</label>
            </div>
            <div id="#">
                <input type="radio" id="corporate" name="ticket" value="corporate">
                <label for="corporate">CORPORATE €96.30</label>
            </div>
            <div id="#">
                <input type="radio" id="executive" name="ticket" value="executive">
                <label for="executive">EXECUTIVE €85.60</label>
            </div>
            <div id="#">
                <input type="radio" id="benchSideCentrale" name="ticket" value="benchSideCentrale">
                <label for="benchSideCentrale">BENCH SIDE CENTRALE €57.78</label>
            </div>
            <div id="#">
                <input type="radio" id="benchSide" name="ticket" value="benchSide">
                <label for="benchSide">BENCH SIDE €50.29</label>
            </div>
            <div id="#">
                <input type="radio" id="vipSeats" name="ticket" value="vipSeats">
                <label for="vipSeats">VIP SEATS €101.65</label>
            </div>
            <div id="#">
                <input type="radio" id="lodgeCentrale" name="ticket" value="lodgeCentrale">
                <label for="lodgeCentrale">LODGE CENTRALE €32.10 </label>
            </div>
            <div id="#">
                <input type="radio" id="tribunaCentrale" name="ticket" value="tribunaCentrale">
                <label for="tribunaCentrale">TRIBUNA CENTRALE €26.75</label>
            </div>
            <div id="#">
                <input type="radio" id="lodge" name="ticket" value="lodge">
                <label for="lodge">LODGE €20.33</label>
            </div>
            <div id="#">
                <input type="radio" id="promotion" name="ticket" value="promotion">
                <label for="promotion">PROMOTION €15.10</label>
            </div>
            <div id="#">
                <input type="radio" id="stageCentrale" name="ticket" value="stageCentrale">
                <label for="stageCentrale">STAGE CENTRALE €13.10</label>
            </div>
            <div id="#">
                <input type="radio" id="lodgeLaterale" name="ticket" value="lodgeLaterale">
                <label for="lodgeLaterale">LODGE LATERALE €12.10</label>
            </div>
            <div id="#">
                <input type="radio" id="stage" name="ticket" value="stage">
                <label for="stage">STAGE €11.10</label>
            </div>
            <div id="#">
                <input type="radio" id="lodgeDiagonale" name="ticket" value="lodgeDiagonale">
                <label for="lodgeDiagonale">LODGE DIAGONALE €11.10</label>
            </div>
            <div id="#">
                <input type="radio" id="stageLaterale" name="ticket" value="stageLaterale">
                <label for="stageLaterale">STAGE LATERALE €10.10</label>
            </div>
            <div id="#">
                <input type="radio" id="fanZone" name="ticket" value="fanZone">
                <label for="fanZone">FAN ZONE €11.10</label>
            </div>
            <div id="#">
                <input type="radio" id="tribunaOlimpia" name="ticket" value="tribunaOlimpia">
                <label for="tribunaOlimpia">TRIBUNA OLIMPIA €9.10</label>
            </div>
            <div id="#">
                <input type="radio" id="curvaAjp" name="ticket" value="curvaAjp">
                <label for="curvaAjp">CURVA AJP €9.10</label>
            </div>
            <div id="#">
                <input type="radio" id="tribunaGuest" name="ticket" value="tribunaGuest">
                <label for="tribunaGuest">TRIBUNA GUEST €15.10</label>
            </div>-->
            <div id="UserInfo">
                <input type="submit" class="button" name="logout" value="Logout">
            </div>
        </fieldset>
    </form>

    <footer id="footer">
        Autore: Boggian Daniele <br />
        Classe: 5G <br />
        Copyright by Boggian Daniele <br />
    </footer>
</body>

</html>