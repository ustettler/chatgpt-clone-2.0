<?php
// PHP-Code zur Kommunikation mit der GPT-3.5-Engine

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Benutzereingabe aus dem POST-Daten abrufen
    $userInput = $_POST['user_input'];

    // API-Zugangsdaten
    $api_key = 'YOUR_CHATGPT_API_SCHLÜSSEL';
    $endpoint = 'https://api.openai.com/v1/completions';

    // Daten für die API-Anfrage vorbereiten
    $data = array(
        'prompt' => $userInput,
        'model' => 'text-davinci-003', // Modellname für GPT-3.5
        'max_tokens' => 150 // Maximale Anzahl von Tokens für die Antwort
    );

    // API-Anfrage senden
    $curl = curl_init($endpoint);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($curl, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        'Authorization: Bearer ' . $api_key
    ));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($curl);
    curl_close($curl);

    // Antwort an das Frontend zurückgeben
    echo $response;
}
?>

