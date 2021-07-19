<?php
// checking for palindrome
function Palindrome($string){
   //reversing the text using string reverse
  if (strrev($string) == $string){
        return 1;
    }
    else{
        return 0;
    }
}

//accepting data from user
if(isset($_GET['sub'])){
$original = $_GET['string'];
if(Palindrome($original)){
    echo "Palindrome";
}
else {
echo "Not a Palindrome";
}
}
?>

<html>
  <head>
    <title>Palindrome</title>
  </head>
  <body>
    <form method="get" action="task_9.php">
      <label>String-></label>
      <input type="text" name="string">
      <button type="submit" name="sub">
        Check
      </button>
    </form>
  </body>
</html>