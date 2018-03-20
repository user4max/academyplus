<?php

if ($argc > 1)
{
	$str = trim($argv[1]);
	$str = preg_replace('/\s+/', ' ', $str);
	echo $str . "\n";
}
return (0);

?>
