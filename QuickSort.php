<?php


     // быстрая сортировка
    function quickSort($arr)
    {
        //  возвращаеем количество элементов в массиве
        $count = count($arr);

        // Определяем, нужна ли сортировка массива
        if ($count <= 1) {
            return $arr;
        }

        $baseValue = $arr[0];

        $leftArr = $rightArr = array();

        for ($i = 1; $i < $count; $i++) {
            if ($baseValue > $arr[$i]) {
                $leftArr[] = $arr[$i];
            } else {
                $rightArr[] = $arr[$i];
            }
        }

        $leftArr = quickSort($leftArr);
        $rightArr = quickSort($rightArr);

        // Возвращаем объединенный и отсортированный массив,
        return array_merge($leftArr, array($baseValue), $rightArr);
    }

       $arr = [10,5,18,11,13,19,30,25,10];
         var_dump(quickSort($arr));



