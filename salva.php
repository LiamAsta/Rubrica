<?php
session_start();
require_once 'db.php';

$numero = $_SESSION['numero'] ?? null;
$nome = $_SESSION['nome'] ?? null;
$cognome = $_SESSION['cognome'] ?? null;

if (empty($numero) || empty($nome) || empty($cognome)) {
    die("Errore: tutti i campi sono obbligatori.");
}

$ins = "INSERT INTO contatti (numero, nome, cognome) VALUES (?, ?, ?)";
if ($stmt = $connessione->prepare($ins)) {
    $stmt->bind_param("sss", $numero, $nome, $cognome);
    $stmt->execute();
    $stmt->close();
    echo " Contatto salvato.";
} else {
    echo " Errore: " . $connessione->error;
}

?>