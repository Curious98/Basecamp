<?php
class test{
	public function replace($string) {
      $str = str_replace(' ','%20',$string);
		echo $str;
	}
}
if(isset($_GET['sub'])){
  $string = $_GET['string'];

$test = new test();
$test->replace($string);
}
?>

<html>
  <head>
    <title>Replacement</title>
  </head>
  <body>
    <form method="get" action="task_5.php">
      <label>Text-></label>
      <input type="text" name="string">
      <button type="submit" name="sub">
        Submit
      </button>
    </form>
  </body>
</html>