<?php

function ft_is_sort($tab)
{
	$str1 = $tab;
	sort($str1);
	if ($str1 == $tab)
		return (1);
	else
		return (0);
}

?>
