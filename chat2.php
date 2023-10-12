<!DOCTYPE html>
<html>

<head>
    <title>Valós idejű Chat</title>
</head>

<body>
    <form method="post" action="chat2.php">
        Felhasználó:
        <select name="user_name">
            <option value="User1">User1</option>
            <option value="User2">User2</option>
        </select><br>
        Üzenet: <input type="text" name="message">
        <input type="submit" name="submit" value="Küldés">
    </form>

    <?php
    // Adatbázis kapcsolat beállítása
    $servername = "localhost";
    $username = "gabxway";
    $password = "Hall2000-";
    $dbname = "gabxway";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Sikertelen kapcsolódás az adatbázishoz: " . $conn->connect_error);
    }

    if ($conn->connect_error) {
        die("Sikertelen kapcsolódás az adatbázishoz: " . $conn->connect_error);
    }

    // Új üzenet hozzáadása az adatbázishoz
    if (isset($_POST['submit'])) {
        $user = $_POST['user_name'];
        $message = $_POST['message'];

        $sql = "INSERT INTO users (user_name, message) VALUES ('$user', '$message')";

        if ($conn->query($sql) === TRUE) {
            echo "Üzenet sikeresen elküldve!";
        } else {
            echo "Hiba az üzenet küldése közben: " . $conn->error;
        }
    }

    // Az eddigi üzenetek kiolvasása és megjelenítése
    $sql = "SELECT * FROM users ORDER BY data DESC";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<ul>";
        while ($row = $result->fetch_assoc()) {
            echo "<li><strong>" . htmlspecialchars($row['user_name']) . ":</strong> " . htmlspecialchars($row['message']) . "</li>";
        }
        echo "</ul>";
    } else {
        echo "Nincsenek üzenetek.";
    }

    // Adatbázis kapcsolat lezárása
    $conn->close();
    ?>
</body>

</html>