<?php

while (1)
{
	echo "Enter a number: ";
	$number = fgets(STDIN);
	if (feof(STDIN))
		break ;
	$number = trim($number);
	if(preg_match("/^[0-9]*$/", $number) && !preg_match("/^ \t\n\r*&/", $number) && $number != null)
	{
		if ($number%2==0)
			echo "The number ".$number." is even\n";
		else
			echo "The number ".$number." is odd\n";
	}
	else
		echo "'".$number."' is not a number\n";
}
?>
