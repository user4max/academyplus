<?php

if ($argc == 4)
{
	$n1 = intval(trim($argv[1]));
	$op = trim($argv[2]);
	$n2 = intval(trim($argv[1]));
	if ($op == "+")
		$rez = $argv[1] + $argv[3];
	else if ($op == "-")
		$rez = $argv[1] - $argv[3];
	else if ($op == "*")
		$rez = $argv[1] * $argv[3];
	else if ($op == "/")
		$rez = $argv[1] / $argv[3];
	else if ($op == "%")
		$rez = $argv[1] % $argv[3];
	echo $rez;
}
else
	echo "Incorrect Parameters";
?>
