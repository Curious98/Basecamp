<?php
//Program to Print Prime numbers from an array
$array= array( 10, 11, 13, 12 , 18, 21, 22, 23, 26, 28, 27, 29);
foreach($array as $prime){
//foreach() function her will list the array values into prima variable
//check for remainder in the array using the basic prime numbers as divisor
if($prime%2==0){
  if($prime%3==0){
    if($prime%5==0){
      if($prime%7==0){
        break;
         }
      }
   }
 }
   else{
echo $prime. " ,";
}
}
?>