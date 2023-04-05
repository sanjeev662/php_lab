<?php
echo "<br>" . "OUTPUT:" . "<br>";
$arr=array('a','b','c','d');
$arr[2]='z';
for($i=0;$i<count($arr);$i++)
{
echo"$arr[$i]"."<br>";
}
?>