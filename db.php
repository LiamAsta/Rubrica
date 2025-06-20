<?php

$connessione = new mysqli('127.0.0.1', 'root', '', 'rubrica');

if ($connessione === false) {
    die("Errore di connessione: " . $connessione->connect_error);
} ;



?>
