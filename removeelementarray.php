<?php
echo "<br>" . "OUTPUT:" . "<br>";
$arr=array('a','b','c','d');
unset($arr[2]);
for($i=0;$i<count($arr);$i++)
{
echo"$arr[$i]" . "<br>";
}
?>