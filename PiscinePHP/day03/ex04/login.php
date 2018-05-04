<?PHP
include ('auth.php');
session_start();

$login = $_GET['login'];
$passwd = $_GET['passwd'];

if ($_GET['login'] && $_GET['passwd'] && auth($login, $passwd))
{
	$_SESSION['loggued_on_user'] = $_GET['login'];
	echo "OK\n";
}
else
	echo "ERROR\n";
?>
