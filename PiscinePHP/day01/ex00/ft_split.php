<?php
	function ft_split($str)
	{
		$str = preg_replace('/\s+/', ' ', $str);
		$tab = explode(" ", $str);
		sort($tab);
		return ($tab);
	}
?>
