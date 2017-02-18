<?php
/**
3. Поменять местами наибольший и наименьший элементы массива. (массив 10 чисел)
 */

for ($i = 0; $i < 10; $i++) {
    $arr[] = rand(1,1000);
}

echo '<pre>';
print_r($arr);
echo '</pre><hr>';


$min = min($arr);
$max = max($arr);

echo "Наименьший элемент массива: $min <br>";
echo "Наибльший элемент массива: $max <br> <hr>";

$key_min = array_search($min, $arr);
echo "Ключ наименьшего элемента в массиве: $key_min<br>" ;
$key_max = array_search($max, $arr);
echo "Ключ наибольшего элемента в массиве: $key_max<br><hr>" ;

$arr[$key_min] = $max;
$arr[$key_max] = $min;

echo "Меняем местами максимальные и минимальные значения: <pre>";
print_r($arr);
echo '</pre><hr>';
