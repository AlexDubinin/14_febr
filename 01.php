<?php
/**
1. Cоздать массив из n чисел, каждый элемент которого равен квадрату своего номера.
 */

$n = 10;

for ($i = 0; $i < $n; $i++) {
    $arr[] = $i*$i;
}
echo '<pre>';
print_r($arr);
echo '</pre>';