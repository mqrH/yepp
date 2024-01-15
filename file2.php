<?php
$Email = 'xdxdxd@gmail.com';
$Password = '123123';

$delimeter = ', ';
$stringWithData = $Email . $delimeter . $Password;
$DataFromString = explode($delimeter, $stringWithData);
var_dump($DataFromString);
echo $stringWithData;

$FileToFill = fopen(filename:"text2.txt", mode:"a+",) or die("Couldn`t read the file");
fwrite($FileToFill, $stringWithData . PHP_EOL);
fclose($FileToFill);
