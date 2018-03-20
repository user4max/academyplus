<?php

$tab = implode(' ', $argv);
$tab = explode(' ', $tab);

array_shift($tab);
sort($tab);

foreach ($tab as $elem)
{
	echo $elem."\n";
}
?>
