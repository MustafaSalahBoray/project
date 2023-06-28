 <?php 

function caesarCipher($string, $shift) {
  $result = "";  // initialize an empty string to hold the encrypted/decrypted message

  // loop through each character in the string
  for ($i = 0; $i < strlen($string); $i++) {
    $char = strtoupper($string[$i]);  // convert the character to uppercase

    // apply the shift to the character's ASCII code, wrapping around if necessary
    if ($char >= 'A' && $char <= 'Z') {
      $char = chr((ord($char) - 65 + $shift) % 26 + 65);
    }

    $result .= $char;  // add the encrypted/decrypted character to the result string
  }

  return $result;
}

// example usage
$message = "HELLO WORLD";
$shift = 3;
$encrypted = caesarCipher($message, $shift);
echo "Encrypted message: " . $encrypted . "<br>";
$decrypted = caesarCipher($encrypted, -$shift);
echo "Decrypted message: " . $decrypted . "</br>";


?>