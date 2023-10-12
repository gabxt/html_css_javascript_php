function sendMessage() {
    var message = document.getElementById("message").value;
    
    // ajax kérés a chat.php szriptnek
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "chat_con.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            var chatMessages = document.getElementById("chat-messages");
            var p = document.createElement("p");
            p = texContent = message;
            chatMessages.appendChild(p);
            document.getElementById("message").value = "";
        }
    };
    xhr.send("message=" + message);
}