<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChatGPT 3.5 App</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="chat-container">
        <h1>ChatGPT-3</h1>
    <input type="text" id="user-input" placeholder="Dein Prompt...">
        <button onclick="sendMessage()">Anfrage senden</button>
        <div class="chat-box" id="chat-box">
            <!-- Hier werden die Chat-Nachrichten angezeigt -->
        </div>
        <br/>
    </div>
    <script src="scripts.js"></script>
</body>
</html>
