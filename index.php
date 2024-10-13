<?php
// Configurazione connessione al database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "first_test";  // Nome del tuo database

// Crea la connessione
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica la connessione
if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
}

// Preleva i dati dal form
$nome = $_POST['nome'];
$email = $_POST['email'];

// Prepara ed esegui la query SQL per inserire i dati
$sql = "INSERT INTO registrazioni (nome, email) VALUES ('$nome', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "Registrazione avvenuta con successo";
} else {
    echo "Errore: " . $sql . "<br>" . $conn->error;
}

// Chiude la connessione
$conn->close();
?>
