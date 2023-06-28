<?php

function transpositionEncrypt($plaintext, $key) {
    $ciphertext = "";
    $plaintext = str_replace(" ", "", $plaintext); // remove spaces from the plaintext
    $colLength = strlen($key);
    $rowLength = ceil(strlen($plaintext) / $colLength);
    $matrix = array();
    $row = 0;
    $col = 0;

    // create the matrix
    for ($i = 0; $i < strlen($plaintext); $i++) {
        $matrix[$row][$col] = $plaintext[$i];
        $col++;
        if ($col == $colLength) {
            $row++;
            $col = 0;
        }
    }

    // sort the matrix based on the key
    $keys = str_split($key);
    $sortedKeys = $keys;
    sort($sortedKeys);
    $sortedMatrix = array();
    for ($i = 0; $i < $rowLength; $i++) {
        $row = array();
        for ($j = 0; $j < $colLength; $j++) {
            $colIndex = array_search($sortedKeys[$j], $keys);
            $row[$colIndex] = $matrix[$i][$j];
        }
        $sortedMatrix[] = $row;
    }

    // read out the ciphertext from the sorted matrix
    for ($j = 0; $j < $colLength; $j++) {
        for ($i = 0; $i < $rowLength; $i++) {
            $ciphertext .= $sortedMatrix[$i][$j];
        }
    }

    return $ciphertext;
}

function transpositionDecrypt($ciphertext, $key) {
    $plaintext = "";
    $colLength = strlen($key);
    $rowLength = ceil(strlen($ciphertext) / $colLength);
    $matrix = array();
    $row = 0;
    $col = 0;

    // create the matrix
    for ($i = 0; $i < $rowLength; $i++) {
        for ($j = 0; $j < $colLength; $j++) {
            $matrix[$i][$j] = "-";
        }
    }

    // fill in the matrix with the ciphertext
    $index = 0;
    $keys = str_split($key);
    $sortedKeys = $keys;
    sort($sortedKeys);
    for ($j = 0; $j < $colLength; $j++) {
        $colIndex = array_search($sortedKeys[$j], $keys);
        for ($i = 0; $i < $rowLength; $i++) {
            if ($index < strlen($ciphertext)) {
                $matrix[$i][$colIndex] = $ciphertext[$index];
                $index++;
            }
        }
    }

    // read out the plaintext from the matrix
    for ($i = 0; $i < $rowLength; $i++) {
        for ($j = 0; $j < $colLength; $j++) {
            if ($matrix[$i][$j] != "-") {
                $plaintext .= $matrix[$i][$j];
            }
        }
    }

    return $plaintext;
}

// example usage
$plaintext = "Hello WORLDMODAYA";
$key = "ZEBRAS";
$ciphertext = transpositionEncrypt($plaintext, $key);
echo "Ciphertext: " . $ciphertext . "\n";
$decryptedText = transpositionDecrypt($ciphertext, $key);
echo "Decrypted text: " . $decryptedText . "\n";

?>