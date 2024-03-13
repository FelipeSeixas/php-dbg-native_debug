<?php
$prices = array(5.95, 3.00, 12.50);
$totalPrice = 0;
$tax_rate = 1.08; // tax of 8%

foreach ($prices as $price) {
   
    $totalPrice = $price * $tax_rate;

}

?>