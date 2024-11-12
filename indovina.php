<?php
session_start();

$numeroCasuale = rand(1, 20);
$numeroUtente = isset($_GET['numero']) ? (int)$_GET['numero'] : 0;

if (!isset($_SESSION['tentativi'])) {
    $_SESSION['tentativi'] = 0;
}
if (!isset($_SESSION['indovinati'])) {
    $_SESSION['indovinati'] = 0;
}

$_SESSION['tentativi']++;

if ($numeroUtente == $numeroCasuale) {
    $_SESSION['indovinati']++;
}

echo "<h1>Risultato del gioco</h1>";
echo "<p>Numero casuale generato: $numeroCasuale</p>";
echo "<p>Numero scelto dall'utente: $numeroUtente</p>";

if ($numeroUtente == $numeroCasuale) {
    echo "<p>Hai indovinato!</p>";
} else {
    echo "<p>Non hai indovinato. Riprova!</p>";
}

echo "<p>Hai giocato {$_SESSION['tentativi']} volte.</p>";
echo "<p>Hai indovinato {$_SESSION['indovinati']} volte.</p>";

echo "<a href='scelta.html'>Effettua un nuovo tentativo</a>";
?>
