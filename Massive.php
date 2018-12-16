<?php





echo 'Privet, eto programma sortirovki massivov';
echo PHP_EOL;
echo 'vvedite elementi massiva cherez zapyatuju:';
echo PHP_EOL;

$str = trim(fgets(STDIN));
$array = explode(',', $str);

// выполняет алгоритм пузырьковой сортировки массивов
function bubble_sort(&$arr)
{
    $size = count($arr);
    for ($i = 0; $i < $size; $i++) {
        for ($j = 0; $j < $size - 1 - $i; $j++) {
            if ($arr[$j + 1] < $arr[$j]) {
                swap($arr, $j, $j + 1);
            }
        }
    }
    return $arr;
}

function swap(&$arr, $a, $b)
{
    $tmp = $arr[$a];
    $arr[$a] = $arr[$b];
    $arr[$b] = $tmp;
}

bubble_sort($array);

echo implode(' ', $array);
//[5, 16, 2, -5, 0];
//size = 5;
//1) i = 0; size - 1 - i = 4;
//    1.1)j = 0; arr[j + 1] = 16; arr[j] = 5;
//    1.2)j = 1; arr[j + 1] = 2; arr[j] = 16;
//    [5,2,16,-5,0];
//    1.3)j=2; arr[j+1]=-5; arr[j] = 16;
//    [5,2,-5,16,0];
//    1.4)j=3; arr[j+1]=0; arr[j] = 16;
//    [5,2,-5,0,16];
//2)i=1; sie -1-i=3;
//    2.1)j=0; arr[j] = 5; arr[j+1]=2;
//    [2,5,-5,0,16];
//    2.2)j=1; arr[j] = 5; arr[j+1]=-5
//    [2,-5,5,0,16];
//    2.3)j=2; arr[j] = 5; arr[j+1]=0;
//    [2,-5,0,5,16];
//3)i=2; size -1-i=2;
//    3.1)j=0; arr[j]=2; arr[j+1]=-5;
//    [-5,2,0,5,16];
//    3.2)j=1; arr[j]=2; arr[j+1]=0;
//    [-5,0,2,5,16];
//4)i=3; size -1-i=1;
//    4.1)j=0; arr[j]=-5; arr[j+1]=0;
//
//[5,16,2,-5,0] => []
    
