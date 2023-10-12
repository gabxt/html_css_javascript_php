<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>


    
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/chat.css" rel="stylesheet">
    <title>Chath Felület</title>
 </head>
 <body>
    <dic class="chat-container">
        <div class="chat">
            <div class="chat messages" id="chat-messages">
                <!-- itt jelennek meg a chat üzenetek -->
            </div>
            <input type="text" id="message" placeholder="írd be az üzeneted...">
            <button onclick="sendMessage()">Küldés</button>
        </div>
    </dic>
    <script src=./js/chat.js></script>
 </body>
 </html>


 <?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>



