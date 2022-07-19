<?php


       require_once  __DIR__ . '/BubbleSort.php';
       require_once  __DIR__ . '/QuickSort.php';
/*
        $arr =[];
     // $arr_size = count ($arr);

        $sizes= array(100, 1000, 10000, 100000); // длинны массива
        $count = count($sizes);


         // for($k = 0; $k < count($sizes); $k++) {  // цикл с разными длинами
             // $arr = [1000];

              $n = 1000;

              for ($i = 0; $i < $n; $i++) {
                  $arr = (rand(1, 1000));
              //    array_rand(array_flip(array: $sizes), $n);
                 // rand( $arr);

              }

*/
/*
 */

           //  $arr = [1, 5, 79, 90, 3, 12, 4, 10, 23];
                //   $arr[];




        //    bubbleSort($arr);
        //     quickSort($arr);


               $sizes= [100, 1000, 10000, 100000];
              foreach ($sizes as $size) {
                  $from = microtime(true);
                  echo '<pre>';
                  echo sprintf("%d - %s \n", $size, microtime(true) - $from);
              }
