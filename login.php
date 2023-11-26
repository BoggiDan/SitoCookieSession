<?php
session_start();
if (isset($_SESSION["active_login"])) header("Location: loginEffettuato.php"); // sessione già convalidata
if (isset($_POST["submit"])) { //premuto invio
    $user = $_POST["username"];
    $psw = $_POST["password"];
    if ($user == "daniele" && $psw == "boggian") { //coincidono user e pwd
        $_SESSION["active_login"] = $user; // memorizzo e attivo la sessione utente
        header("Location: loginEffettuato.php"); //invio alla pagina di elaborazione
    } else $error = "Username o password errati!";
}
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
    <title>Login</title>
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

    <div id="immSfondoLogin">
        <div id="login">
            <?php if (isset($error)) echo "<p style=\"color: #F00;\">" . $error . "</p>" ?>
            <p class="titlePrenotazione">
                LOGIN
            </p>
            <form action="" method="POST" id="accesso">
                <fieldset>
                    <!-- <legend>Login</legend> -->
                    <p>Username: <input type="text" name="username"></p>
                    <p>Password: <input type="password" name="password"></p>
                    <input type="submit" class="button" name="submit" value="Accedi">
                </fieldset>
            </form>
        </div>
    </div>

    <!-- <?php if (isset($error)) echo "<p style=\"color: #F00;\">" . $error . "</p>" ?>
    <form action="" method="POST">
        <p>Username: <input type="text" name="username"></p>
        <p>Password: <input type="password" name="password"></p>
        <input type="submit" class="button" name="submit" value="Accedi">
    </form> -->




    <footer id="footer">
        Autore: Boggian Daniele <br />
        Classe: 5G <br />
        Copyright by Boggian Daniele <br />
    </footer>
</body>

</html>