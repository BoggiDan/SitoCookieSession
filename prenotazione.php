<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Prenotazione</title>
</head>

<body>
  <?php
  $n = $_POST['fname'];
  $c = $_POST['lname'];
  $s = $_POST['sesso'];
//   $nPersone = $_POST['nPersone'];
  $to = $_POST['email'];
  $from = "ristoranteoasi@gmail.com";
//   $date = $_POST['date'];
//   $ora = $_POST['time'];
  $telefono = $_POST['telefono'];
  $subject = "Prenotazione Ristorante Oasi";
  $message = <<<HTML
    Salve, la sua prenotazione presso il Ristorante Oasi è stata confermata con successo.
    Di seguito i suoi dati inseriti al momento della prenotazione: 
    Nome: $n
    Cognome: $c
    Email: $to
    Telefono: $telefono 
  HTML;

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