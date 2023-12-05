<?php
session_start();
if (isset($_POST["logout"])) unset($_SESSION["active_login"]);
if (!isset($_SESSION["active_login"])) header("Location: login.php");
$user = $_SESSION["active_login"];

if (isset($_POST['Invia'])) {
  $nome = $_SESSION['nome'];
  $cognome = $_SESSION['cognome'];
  $ticket = $_SESSION['ticket'];
  $to = $_SESSION['email'];
  $telefono = $_SESSION['telefono'];
  $prezzo = $_SESSION['prezzo'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Prenotazione</title>
</head>

<body>
  <?php
  // $n = $_POST['fname'];
  // $c = $_POST['lname'];
  // $s = $_POST['sesso'];
  // $ticket = $_POST['ticket'];
  // $prezzo = $_POST['prezzo'];
  //   $nPersone = $_POST['nPersone'];
  // $to = $_POST['email'];
  $from = "daniele.boggian@iticopernico.it";
  //   $date = $_POST['date'];
  //   $ora = $_POST['time'];
  // $telefono = $_POST['telefono'];
  $subject = "Ordine Ticket";
  $message = <<<HTML
    Salve, la sua prenotazione presso il Mediolanum Forum è stata confermata con successo.
    Di seguito i suoi dati inseriti al momento della prenotazione: 
    Nome: $nome
    Cognome: $cognome
    Posto in tribuna: $ticket
    Costo: $prezzo
    Telefono: $telefono
  HTML;

// Always set content-type when sending HTML email
// $headers = "MIME-Version: 1.0" . "\r\n";
// $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
// $headers .= 'From: <enquiry@example.com>' . "\r\n";
// $headers .= 'Cc: myboss@example.com' . "\r\n";


  // $headers = "MIME-Version: 1.0" . "\r\n";
  // $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

  // $headers .= "From: " . $from . "\r\n";
  // $headers .= "Reply-To: " . $to . "\r\n";

  if (mail($to, $subject, $message)) {
    echo <<<JS
    <script>
        setTimeout(() => {
          window.location = "loginEffettuato.php";
        }, 1000);
        alert("Prenotazione effettuata con successo");
    </script>
    JS;
  } else {
    echo "Errore. Nessuna prenotazione inviata.";
  }
  ?>
</body>

</html>