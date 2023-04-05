<?php
echo "<br>" . "OUTPUT:" . "<br>";
$fruits = array('a'=>'apple','b'=>'banana','c'=>'pea');
foreach ($fruits as $value)
echo $value."<br>";
echo "<br>";
foreach ($fruits as $key => $value)
echo "$key: $value<br>";
?>
