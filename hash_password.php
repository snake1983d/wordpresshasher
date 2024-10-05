<?php
// Definisci la costante ABSPATH (modifica il percorso in base alla tua installazione)
if ( !defined('ABSPATH') ) {
    define('ABSPATH', dirname(__FILE__));
}

// Include il file pluggable.php di WordPress per usare wp_hash_password()
require_once ABSPATH . '/wp-includes/pluggable.php';
// Definisci WPINC se non è già definita
if ( !defined('WPINC') ) {
    define('WPINC', '/wp-includes');
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['password'])) {
    $password = $_POST['password'];

    // Hash della password usando la funzione di WordPress
    $hashed_password = wp_hash_password($password);

    echo "L'hash della tua password è: " . $hashed_password;
} else {
    echo "Errore: Inserisci una password valida.";
}
?>
