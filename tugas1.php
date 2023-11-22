<?php

function generator($n) {
    $result = array();

    for ($angka = 1; $angka <= $n; $angka++) {
        if ($angka % 3 == 0 && $angka % 5 == 0) {
            $result[] = "HelloWorld";
        } elseif ($angka % 3 == 0) {
            $result[] = "Hello";
        } elseif ($angka % 5 == 0) {
            $result[] = "World";
        } else {
            $result[] = $angka;
        }
    }

    return $result;
}

// Contoh pemanggilan fungsi dengan n=15
$output = generator(40);

// Encode as JSON
$json_output = json_encode($output, JSON_PRETTY_PRINT);

// Output the JSON
echo $json_output;

?>
