<?php
session_start();

if (!isset($_SESSION['user'])) {
    die("Nincs engedélyed az üzenet küldéséhez.");
}

if (isset($_POST['submit']) && isset($_POST['message'])) {
    $user = $_SESSION['user'];
    $message = $_POST['message'];

    // Adatbázis kapcsolat beállítása
    $servername = "localhost";
    $username = "";
    $password = "";
    $dbname = "";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Sikertelen kapcsolódás az adatbázishoz: " . $conn->connect_error);
    }

    // Új üzenet hozzáadása az adatbázishoz
   
    $sql = "INSERT INTO chat (user, message) VALUES ('$user', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "Üzenet sikeresen elküldve!";
    } else {
        echo "Hiba az üzenet küldése közben: " . $conn->error;
    }

    

    // Adatbázis kapcsolat lezárása
    $conn->close();

}else{
	header("Location: chat.php");
	exit();
}
?>
