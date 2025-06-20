<?php require_once 'db.php' ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>


<body>
    <div id="HomeHead">
        <h1> Benvenuto !</h1>
        <h3>
            <ul>
                <li> <a href="elenco_contatti.php">Rubrica</a></li>
            </ul>
        </h3>
    </div>

    <div id="divricerca">
        <form id="formricerca" method="GET" action="controller.php">
        <label for="ricerca"></label>
        <input name="ricerca" id="ricerca" type="text" placeholder="Ricerca contatto per numero"> <br> 

        <input type="submit" value="Ricerca" name="Ricerca">
        </form>
        <hr>

    </div>

    <div id="divform">
        <form  id="form"   method="POST" action="controller.php">
            <label for="numero"> Numero </label>
            <input name="numero" id="numero" type="text" required> <br>

            <label for="nome"> Nome </label>
            <input name="nome" id="nome" type="text" required> <br>

            <label for="cognome"> Cognome </label>
            <input name="cognome" id="cognome" type="text" required> <br>

            <input type="submit" value="Chiama" name="Chiama"> <br>
            <input type="submit" value="Salva" name="Salva">  <br>
            
        </form>
    </div>

    <script>

    </script>

</body>

</html>