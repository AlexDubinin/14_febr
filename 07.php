<?php
/**

7. Создайте массив ста случайных чисел от 1 до 10 и найдите в этом массиве число,
 * которое повторяется наибольшее количество раз.
 */

for ($i = 0; $i < 10; $i++) {
    $arr[] = rand(1,5);

}

echo '<pre>';
print_r($arr);
echo '</pre><hr>';

$m = array_count_values($arr);
echo '<pre>';
print_r($m);
echo '</pre><hr>';

$max = max($m);

$key_max = array_search($max, $m);
echo $key_max;
echo "Больше всего, в массиве повторяется элемент $key_max. Он повторяется $max раз(а).<br><hr>" ;
