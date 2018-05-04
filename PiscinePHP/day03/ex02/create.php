<?php

if ($_POST['login'] && $_POST['passwd'] && $_POST['submit'] && $_POST['submit'] == "OK")
{
	$data_user['login'] = $_POST['login'];
	$data_user['passwd'] = hash('whirlpool', $_POST['passwd']);
	$data[] = $data_user;
	
	if (!file_exists("../private"))
		mkdir("../private");

	if (file_exists("../private/passwd"))
	{
		$get_data = unserialize(file_get_contents("../private/passwd"));

		foreach($get_data as $elem)
		{
			if ($_POST['login'] === $elem['login'])
			{
				echo "ERROR\n";
			}
			else if ($_POST['login'] != $elem['login'])
			{
				file_put_contents("../private/passwd", serialize($data));
				echo "OK\n";
				exit ;
			}
		}
	}
	if (!file_exists("../private/passwd"))
	{
		file_put_contents("../private/passwd", serialize($data));
		echo "OK\n";
		return 0;
	}
}
else
	echo "ERROR\n";

?>
