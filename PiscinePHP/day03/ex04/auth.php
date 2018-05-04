<?PHP
function auth($login, $passwd)
{	
		$get_data = unserialize(file_get_contents("../private/passwd"));
		foreach($get_data as $user)
		{
			if ($user['login'] == $login && $user['passwd'] == hash('whirlpool', $passwd))
			{
				return TRUE;

			}
			else
				return FALSE;
		}
}
?>
