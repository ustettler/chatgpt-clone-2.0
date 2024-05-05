// JavaScript-Code zur Handhabung von Benutzerinteraktionen und Kommunikation mit dem Backend

function sendMessage() {
    var userInput = document.getElementById('user-input').value;
    if (userInput.trim() === '') return; // Leerzeichen prüfen

    // Nachricht des Benutzers zur Chat-Box hinzufügen
    addToChatBox('You', userInput);

    // AJAX-Anfrage senden, um die Antwort von der GPT-3.5-Engine zu erhalten
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'backend.php');
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onload = function() {
        if (xhr.status === 200) {
            var response = xhr.responseText;
            // Antwort der GPT-3.5-Engine zur Chat-Box hinzufügen
            addToChatBox('ChatGPT 3.5', response);
        } else {
            console.error('Fehler beim Empfangen der Antwort.');
        }
    };
    xhr.send('user_input=' + encodeURIComponent(userInput));
}

function addToChatBox(sender, message) {
    var chatBox = document.getElementById('chat-box');
    var messageElement = document.createElement('div');
    messageElement.innerHTML = '<strong>' + sender + ':</strong> ' + message;
    chatBox.appendChild(messageElement);

    // Scrollen zum unteren Ende der Chat-Box
    chatBox.scrollTop = chatBox.scrollHeight;
}
