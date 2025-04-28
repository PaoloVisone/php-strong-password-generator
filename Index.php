<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Strong Password Generator</h1>
    <h2>Genera una password sicura</h2>


    <!-- Funzione di stringhe random -->
    <?php
    function generateRandomString($length = 10)
    {
        // Set di caratteri
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#%&*+-=?[]{}';
        $charactersLength = strlen($characters);
        $randomString = '';

        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[random_int(0, $charactersLength - 1)];
        }

        return $randomString;
    }

    // Echo the random string.
    echo generateRandomString();
    ?>

    <!-- Form -->
    <form method="GET">

        <label for="lunghezza">Lunghezza della password:</label>
        <input type="number" name="lunghezza" id="lunghezza" min="1" required>

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

        <button type="submit">Genera password</button>

    </form>
</body>

</html>