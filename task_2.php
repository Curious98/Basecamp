<?php
// PHP code to check whether a number is prime or Not
// function to check if a number is prime or not
function primeCheck($num){
  //1 is not a prime number
    if ($num == 1)
    return 0;
//we iterate from two as it is the only prime even number
  //we check for square root of our input to speed up checking of big values
    for ($a=2;$a<=sqrt($num);$a++){
      //check for remainder if user input is divided by the iteration
      //if there is no remainder;
    if ($num % $a == 0)
       return 0;
    }
  // return 1 if there is remainder
    return 1;
}
//check if the submit button is clicked
if(isset($_GET['sub'])){
  //accept data from user
  $num = $_GET['num'];
  //assign the function to a variable
$var = primeCheck($num);
  //check if the function returns 1.
if ($var == 1)
    echo "True";
else
   echo "False";
}
?>
<html>
  <head>
    <title>Prime Checker</title>
  <body>
    <form action="task_2.php" method="get">
    <label>Number-></label>
    <input type="text" name="num">
    <button type="submit" name="sub" >
      Check
    </button>
    </form>
    </body>
  </head>
</html>