<?php

	if ($argc > 1)
	{
		$array = array_values(array_filter(explode(' ', $argv[1])));
		
		$first = $array;

		unset($array[0]);
		foreach ($array as $elem)
		{
			echo $elem. " ";
		}
		echo $first[0];

	}
?>
