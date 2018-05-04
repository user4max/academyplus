<?php

if ($_POST['login'] && $_POST['oldpw'] && $_POST['newpw'] && $_POST['submit'] && $_POST['submit'] === "OK")
{
	if (!file_exists("../private/passwd"))
	{
		echo "ERROR\n";
		return 0;
	}


	$data_user['login'] = $_POST['login'];
	$data_oldpw['oldpw'] = hash('whirlpool', $_POST['oldpw']);
	$data_user['passwd'] = hash('whirlpool', $_POST['newpw']);
	$data[] = $data_user;

	if (file_exists("../private/passwd"))
	{
		$get_data = unserialize(file_get_contents("../private/passwd"));

		foreach($get_data as $user)
		{
			if (($_POST['login'] === $user['login']) && ($data_oldpw['oldpw'] === $user['passwd']))
			{
				file_put_contents("../private/passwd", serialize($data));
				echo "OK\n";
				return 0;
			}
			else
			{
				echo "ERROR\n";
				return 0;
			}
		}
	}


}
else
	echo "ERROR\n";

?>
