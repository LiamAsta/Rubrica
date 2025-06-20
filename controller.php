<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    session_start();

    $numero = $_POST['numero'] ?? null;
    $nome = $_POST['nome'] ?? null;
    $cognome = $_POST['cognome'] ?? null;

    if (isset($_POST['Chiama'])) {
        $_SESSION['numero'] = $numero;
        header('Location: chiama.php');
        exit;
    } elseif (isset($_POST['Salva'])) {
        $_SESSION['numero'] = $numero;
        $_SESSION['nome'] = $nome;
        $_SESSION['cognome'] = $cognome;

        header('Location: salva.php');
        exit;
    } 
    


}elseif ($_SERVER['REQUEST_METHOD'] === 'GET') {
    session_start();
    $numero = $_GET['ricerca'] ?? null;

    if ($numero !== null) {
        $_SESSION['ricerca'] = $numero;  
        header('Location: ricerca.php');
        exit;
    } else {
        echo "Numero non fornito.";
    }
}
?>
