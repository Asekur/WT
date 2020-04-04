<?php
$totalSum=0;
if (isset($_POST['submit']) && isset($_POST['number'])){
    $number=$_POST['number'];
    for ($i = 0; $i < strlen ( $number ); $i++) {
        if (ord ( $number[$i] ) >= 48 && ord ( $number[$i] ) <= 57) {
            $totalSum += (int)$number[$i];
        }
    }
}
echo $totalSum;
?>