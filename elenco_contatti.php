<?php require_once 'db.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rubrica</title>
</head>


<body>
    <h1> Rubrica </h1>


    <?php
    //genero tabella dinamicamente
    $sql = "SELECT * FROM contatti";

    if ($result = $connessione->query($sql)) {
        if ($result->num_rows > 0) {
            echo ' <table>
            <tr>
                <th>Numero</th>
                <th>Nome </th>
                <th>Cognome </th>
            </tr>';
        }

       while ($row = $result->fetch_array()) {
    echo '
        <tr>
            <td>' . $row['numero'] . '</td>
            <td>' . $row['nome'] . '</td>
            <td>' . $row['cognome'] . '</td>

            <td>
                <form action="sicuro.php" method="POST" style="display:inline;">
                    <input type="hidden" name="numero" value="' . $row['numero'] . '">
                    <input type="hidden" name="nome" value="' . $row['nome'] . '">
                    <input type="hidden" name="cognome" value="' . $row['cognome'] . '">
                    <button type="submit">Elimina</button>
                </form>
            </td>

            <td>
                <form action="formodifica.php" method="POST" style="display:inline;">
                    <input type="hidden" name="numero" value="' . $row['numero'] . '">
                    <input type="hidden" name="nome" value="' . $row['nome'] . '">
                    <input type="hidden" name="cognome" value="' . $row['cognome'] . '">
                    <button type="submit">Modifica</button>
                </form>
            </td>
        </tr>';
}

        echo '</table>';
    } ?>


</html>