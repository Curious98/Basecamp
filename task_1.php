<?php
// Function to calculate sum
function EvenOddSum($arr, $a)
{
  $array = array();
    $even = 0;
    $odd = 0;
    for ($i = 0; $i < $a; $i++)
    {

        // Loop to find even, odd sum
        if ($i % 2 == 0)
            $even += $arr[$i];
        else
            $odd += $arr[$i];
    }
array_push($array,$odd,$even);
  print_r($array);
}

$arr = array( 1, 2, 3, 4,25,43, 5, 6 );
$n = sizeof($arr);

EvenOddSum($arr, $n);
 ?>