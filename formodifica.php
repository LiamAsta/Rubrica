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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifica dato</title>
</head>


<body>
    <h3>Modifica il tuo Contatto</h3>

    <form action="modifica.php" method="POST">

        <label for="numeroNuovo">  </label>
        <input type="text" name="numeroNuovo" id="numeroNuovo" required placeholder="Numero Nuovo"> <br>
        
        <label for="nomeNuovo">  </label>
        <input type="text" name="nomeNuovo" id="nomeNuovo" required placeholder="Nome Nuovo">  <br>

        <label for="cognomeNuovo">  </label>
        <input type="text" name="cognomeNuovo" id="cognomeNuovo" required placeholder="Cognome Nuovo">  <br>

        <<button type="submit" name="modifica">Modifica</button>


    </form>
</body>
</html>