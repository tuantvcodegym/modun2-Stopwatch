<?php
include ("stopwatch.php");
$arr = [];
for ($i = 0; $i < 10000; $i++) {
    $arr[$i] = $i * rand(1, 100000);
}

function selectionSortAscending($arr)
{
    // Lặp để sắp xếp
    for ($i = 0; $i < count($arr) - 1; $i++)
    {
        // Tìm vị trí phần tử nhỏ nhất
        $min = $i;
        for ($j = $i + 1; $j < count($arr); $j++){
            if ($arr[$j] < $arr[$min]){
                $min = $j;
            }
        }
        // Sau khi có vị trí nhỏ nhất thì doi cho với vị trí thứ $i
        $temp = $arr[$i];
        $arr[$i] = $arr[$min];
        $arr[$min] = $temp;
    }

    return $arr;
}


$watch = new StopWatch();
echo "Thoi gian bat dau: " . $watch->getStartTime() . "<br>";

selectionSortAscending($arr);

$watch->stopTime();
echo "Thoi gian ket thuc: " . $watch->getEndTime() . "<br>";
echo "Thoi gian thuc thi: " . $watch->getElapsedTime();
?>