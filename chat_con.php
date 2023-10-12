<?php
$servername = "localhost";
$username = "";
$password = "";
$dbname = "";

// Kapcsolódás az adatbázishoz
$conn = new mysqli($servername, $username, $password, $dbname);

// Ellenőrzés a kapcsolat sikerességére
if ($conn->connect_error) {
    die("Sikertelen kapcsolódás az adatbázishoz: " . $conn->connect_error);
}

// Üzenet küldése az adatbázisba
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $message = $_POST["message"];
    $sql = "INSERT INTO chat (message) VALUES ('$message')";

    if ($conn->query($sql) === TRUE) {
        echo "Üzenet sikeresen elküldve!";
    } else {
        echo "Hiba az üzenet küldése közben: " . $conn->error;
    }
}

// Adatbázis lezárása
$conn->close();
?>
