<?php

// Funzione genera password 
function generatePassword($lunghezza, $ripetizione, $includeLetters, $includeNumbers, $includeSymbols)
{
    // Variabile in cui inseriamo i caratteri
    $caratteri = '';

    // Se l'utente seleziona lettere, numeri o simboli
    if ($includeLetters) {
        $caratteri .= 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    }
    if ($includeNumbers) {
        $caratteri .= '0123456789';
    }
    if ($includeSymbols) {
        $caratteri .= '!@#%&*+-=?[]{}';
    }

    if ($caratteri === '') {
        $caratteri = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    }

    $password = '';

    // Se l'utente seleziona la ripetizione
    if ($ripetizione) {
        for ($i = 0; $i < $lunghezza; $i++) {
            // Genera un numero casuale compreso tra 0 e l'ultimo indice possibile
            $password .= $caratteri[random_int(0, strlen($caratteri) - 1)];
        }
    } else {
        // In caso di errori
        if ($lunghezza > strlen($caratteri)) {
            return 'Errore: troppi caratteri richiesti senza ripetizione.';
        } else {
            // Prendo i caratteri disponibili, li mescolo e prendo solo i primi che mi servono per creare la password
            $password = substr(str_shuffle($caratteri), 0, $lunghezza);
        }
    }

    return $password;
}
