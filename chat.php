<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: loginchat.php"); // Átirányítás bejelentkezésre, ha nincs bejelentkezve
    exit;
}

// Chat üzenetek lekérdezése az adatbázisból
$servername = "localhost";
    $username = "";
    $password = "";
    $dbname = "";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Sikertelen kapcsolódás az adatbázishoz: " . $conn->connect_error);
}

$sql = "SELECT * FROM chat ORDER BY created_at DESC";
//$sql1 = "SELECT * FROM chat ORDER BY created_at DESC";
$result = $conn->query($sql);


// Chat üzenetek megjelenítése
?>

<!DOCTYPE html>
<html>
<head>
    <title>Chat</title>
</head>
<body>
    <h2>Üdvözöljük, <?php echo $_SESSION['user']; ?>!</h2>

    <!-- Chat tartalma megjelenítése -->
    <div id="chat">
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $user = htmlspecialchars($row['user']);
                $message = htmlspecialchars($row['message']);
                echo "<p><strong>{$user}:</strong>{$message}</p>";
            }
        } else {
            echo "<p>Nincsenek üzenetek.</p>";
        }
        
        
        ?>
    </div>

    <!-- Új üzenet küldése űrlap -->
    <form method="post" action="send_message.php">
        Üzenet: <input type="text" name="message" required>
        <input type="submit" name="submit" value="Küldés">
    </form>
</body>
</html>
