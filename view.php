<?php
session_start();
$name=$_SESSION['Name'];
$Age=$_SESSION['Age'];
$Weight=$_SESSION['Weight'];

echo $name.'<br>';
echo $Age.'<br>';
echo $Weight.'<br>';

?>