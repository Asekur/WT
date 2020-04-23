<?php
const CHAR_0 = 48;
const CHAR_9 = 57;

$totalSum=0;
if (isset($_POST['submit']) && isset($_POST['number'])) {
    $number = $_POST['number'];
    for ($i = 0; $i < strlen ($number); $i++) {
        if (ord ( $number[$i] ) >= CHAR_0 && ord ( $number[$i] ) <= CHAR_9) {
            $totalSum += (int)$number[$i];
        }
    }
}
echo $totalSum;
?>