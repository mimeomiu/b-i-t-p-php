<?php
$num01 = 123;
$num02 = 1.23;

echo gettype($num01)."\n";
echo gettype($num02)."\n";
var_dump($num02)."\n";
?>

<?php
$string_a = "Hello, World";

echo $string_a."\n";
echo gettype($string_a)."\n";
?>

<?php
$a = 10;
$b = 1;
$bool01 = ($a > $b);

echo $bool01."\n";
echo gettype($bool01)."\n";
?>

<?php
$a = 10;
$b = 1;
$bool01 = ($a < $b);

echo $bool01."\n";
echo gettype($bool01)."\n";


