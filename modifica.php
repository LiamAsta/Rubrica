<?php
require_once 'db.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['modifica'])) {
    // Vecchi dati dalla sessione
    $numero_old = $_SESSION['numero'];
    $nome_old = $_SESSION['nome'];
    $cognome_old = $_SESSION['cognome'];

    // Nuovi dati dal form
    $numero_new = $_POST['numeroNuovo'] ?? null;
    $nome_new = $_POST['nomeNuovo'] ?? null;
    $cognome_new = $_POST['cognomeNuovo'] ?? null;

    
    $sql = 'UPDATE contatti 
            SET numero = ?, nome = ?, cognome = ? 
            WHERE numero = ? AND nome = ? AND cognome = ?';

    if ($statement = $connessione->prepare($sql)) {
        $statement->bind_param("ssssss", $numero_new, $nome_new, $cognome_new, $numero_old, $nome_old, $cognome_old);
        $statement->execute();

        if ($statement->affected_rows > 0) {
            echo "Contatto modificato correttamente.";
        } else {
            echo "Nessun contatto modificato. Verifica i dati.";
        }

        $statement->close();
    } else {
        echo 'Errore nella preparazione della query: ' . $connessione->error;
    }
} else {
    header('Location: home.php');
    exit();
}
