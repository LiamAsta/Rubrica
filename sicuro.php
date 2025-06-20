<?php
require_once 'db.php';
session_start();


$_SESSION['numero'] = $_POST['numero'];
$_SESSION['nome'] = $_POST['nome'];
$_SESSION['cognome'] = $_POST['cognome'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Conferma eliminazione</title>
</head>
<body>
    <h3>Sei sicuro di voler eliminare il contatto <?= htmlspecialchars($_POST['nome']) . ' ' . htmlspecialchars($_POST['cognome']) ?>?</h3>

    <form action="elimina.php" method="POST">
        <button type="submit" name="si" value="1">Sì</button>
        <button type="submit" name="no" value="1">No</button>
    </form>
</body>
</html>
