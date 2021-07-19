<?php
// program to output highest occurring character in a string
$ASCII_SIZE = 256;

function getMaxChar($str)
{
    global $ASCII_SIZE;

    // Create array to keep the count
    // of individual characters and
    // initialize the array as 0 and the number to fill as ascii size qnd the value to fill as null4
    $count = array_fill(0, $ASCII_SIZE, NULL);

    // Construct character count array
    // from the input string.
    $len = strlen($str);
    $max = 0; // Initialize max count

    // iterating through the string
    for ($i = 0; $i < ($len); $i++)
    {
      	//convert all character to its ASCII equivalent with the ord() function and iterate it
        $count[ord($str[$i])]++;
        if ($max < $count[ord($str[$i])])
        {
            $max = $count[ord($str[$i])];
            $result = $str[$i];
        }
    }

    return $result;
}
if (isset($_GET['sub'])){
  $str = $_GET['string'];
           getMaxChar($str);
}
?>
<html>
  <head>
    <title>Max Character</title>
  </head>
  <body>
    <form method="get" action="task_10.php">
      <label>Text-></label>
      <input type="text" name="string" value="<?php echo $str; ?>">
      <button type="submit" name="sub">
        Submit
      </button>
      <p>
        maximum character=> <?php  echo getMaxChar($str); ?>
      </p>
    </form>
  </body>
</html>