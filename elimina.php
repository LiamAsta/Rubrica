<?php
require_once 'db.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['no'])) {
        header('Location: home.php');
        exit();
    }

    if (isset($_POST['si'])) {
        $numero = $_SESSION['numero'] ?? null;
        $nome = $_SESSION['nome'] ?? null;
        $cognome = $_SESSION['cognome'] ?? null;

        if ($numero && $nome && $cognome) {
            $qry = 'DELETE FROM contatti WHERE numero = ? AND nome = ? AND cognome = ?';
            $stmt = $connessione->prepare($qry);
            $stmt->bind_param("sss", $numero, $nome, $cognome);
            $stmt->execute();

            if ($stmt->affected_rows > 0) {
                echo "Contatto eliminato correttamente.";
            } else {
                echo "Nessun contatto trovato con quei dati.";
            }
            $stmt->close();
        } else {
            echo "Dati non validi.";
        }
    }
} else {
    echo 'errore nella richiesta';
    exit();
}
?>
