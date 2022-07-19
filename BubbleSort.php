<?php
            //сортировка пузырьком
     function bubbleSort($arr) : void
     {
         // сортировка массива
         for ($y = 0; $y < count($arr) - 1; $y++) {
             for ($i = 0; $i < count($arr) - 1; $i++) {
                 if ($arr[$i] > $arr[$i + 1]) {
                     $temp = $arr[$i];
                     $arr[$i] = $arr[$i + 1];
                     $arr[$i + 1] = $temp;
                 }
             }
         }

         //инициализация массива
         echo '<pre>';
         print_r($arr); // входной массив
         echo '<pre>';
     }

        $arr = [109, 45, 79, 90, 3, 12, 4, 10, 23];
         // вывод массива
         echo '<pre>';
         print_r(bubbleSort($arr));









