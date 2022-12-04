<?php
function add($num1,$num2)
{
	$result= $num1+$num2;
	return $result;
}
$add1=add(12,2);
echo add(12,2).'<br>';

$add2=add(15,18);
echo add(15,18).'<br>';
echo $add1*$add2;
?>