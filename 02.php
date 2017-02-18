<?php
/**
2. Найдите сумму и произведение элементов массива (массив 20 чисел)
 */

for ($i = 0; $i < 20; $i++) {
    $arr[] = rand(1,10);
}

echo '<pre>';
print_r($arr);
echo '</pre>';

$summa = 0;
$proisv = 1;
foreach ($arr as $val) {
    $summa += $val;
    $proisv *=$val;

}
echo "Сумма элементов массива: $summa <br>";
echo "Произведение элементов массива: $proisv <br>";
