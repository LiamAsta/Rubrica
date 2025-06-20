<?php
require_once 'db.php';
session_start(); 

$numero = $_SESSION['ricerca'] ?? null;

if ($numero) {
    $search = "SELECT nome, cognome FROM contatti WHERE numero = ?";
    
    if ($statement = $connessione->prepare($search)) {
        $statement->bind_param("s", $numero); 
        $statement->execute();
        $statement->bind_result($nome, $cognome);

        if ($statement->fetch()) {
            echo "Il numero appartiene a: $nome $cognome";
        } else {
            echo "Nessun contatto trovato.";
        }

        $statement->close();
    } else {
        echo "Errore nella query: " . $connessione->error;
    }
} else {
    echo "Numero non disponibile nella sessione.";
}
?>
