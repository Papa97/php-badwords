<?php
$testo = "Questo e un testo";

$testoModificato = str_replace($_GET["parola"], "***", $testo);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primo esercizio PHP</title>
</head>

<body>
    <main>
        <p>
            <?php echo $testo; ?>
        </p>
        <p>
            questo testo e' lungo: <?php echo strlen($testo); ?> caratteri
        </p>
        <p>
            questo e' il testo modificato: <?php echo $testoModificato; ?>
        </p>
        <p>
            il testo modificato ha: <?php echo strlen($testoModificato); ?> caratteri
        </p>
    </main>
</body>

</html>