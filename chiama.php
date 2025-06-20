<?php require_once 'home.php' ?>
<?php
session_start();
$numero = $_SESSION['numero'] ?? 'Numero non disponibile';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chiamata</title>
</head>

<body>
    <h1>Chiamata partita al numero </h1>
    <h3>
        <?php echo $numero . '...'; ?>
    </h3>
    <p> tuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuu chiamata fatta </p>
</body>

</html>