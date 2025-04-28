<?php
session_start();
require_once 'function.php';

// Recupera dati inviati con il metodo GET
$lunghezza = isset($_GET['lunghezza']) ? (int)$_GET['lunghezza'] : 8;
$ripetizione = isset($_GET['ripetizione']) && $_GET['ripetizione'] === 'si';
$includeLetters = isset($_GET['lettere']);
$includeNumbers = isset($_GET['numeri']);
$includeSymbols = isset($_GET['simboli']);

// Genera la password
$password = generatePassword($lunghezza, $ripetizione, $includeLetters, $includeNumbers, $includeSymbols);

// Salva la password in sessione
$_SESSION['password'] = $password;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Password Generata</title>
</head>

<body>

    <h1>Password generata:</h1>

    <!-- Se c'è una password salvata in sessione -->
    <?php if (isset($_SESSION['password'])): ?>
        <h2>
            <!--  Impedisce che un utente possa iniettare codice HTML o JavaScript dannoso dentro la pagina. -->
            <?php echo htmlspecialchars($_SESSION['password']); ?>
        </h2>
        <!-- In caso d'errore -->
    <?php else: ?>
        <p>Errore nella generazione della password.</p>
    <?php endif; ?>

    <!-- Bottone per tornare a index.php -->
    <a href="index.php">Torna indietro</a>

</body>

</html>