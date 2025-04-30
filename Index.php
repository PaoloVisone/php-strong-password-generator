<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Strong Password Generator</title>
</head>

<body>

    <h1>Strong Password Generator</h1>
    <h2>Genera una password sicura</h2>

    <!-- Form -->
    <form method="GET" action="result.php">

        <label for="lunghezza">Lunghezza della password:
            <input type="number" name="lunghezza" id="lunghezza" min="1" max='50' required>
        </label>
        <fieldset>
            <legend>Vuoi consentire la ripetizione dei caratteri?</legend>
            <label for="ripetizione_si">
                <input type="radio" name="ripetizione" id="ripetizione_si" value="si" required> Sì
            </label>
            <label for="ripetizione_no">
                <input type="radio" name="ripetizione" id="ripetizione_no" value="no"> No
            </label>
        </fieldset>

        <fieldset>
            <legend>Quali caratteri vuoi includere?</legend>
            <label for="lettere">
                <input type="checkbox" name="lettere" id="lettere" value="1"> Lettere
            </label>
            <label for="numeri">
                <input type="checkbox" name="numeri" id="numeri" value="1"> Numeri
            </label>
            <label for="simboli">
                <input type="checkbox" name="simboli" id="simboli" value="1"> Simboli
            </label>
        </fieldset>

        <!-- Al click del bottone, il form manda i dati a password.php -->
        <button type="submit">Genera password</button>

    </form>
</body>

</html>