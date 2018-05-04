<?php

session_start();

if (isset($_GET["submit"]) && $_GET["submit"] == "OK")
{
		$_SESSION["login"] = $_GET["login"];
		$_SESSION["passwd"] = $_GET["passwd"];
}

?>
<html>
<body>
<form>
Login : <input name="login" value="<?php echo $_SESSION["login"] ?>" />
<br />
Password : <input name="passwd" value="<?php echo $_SESSION["passwd"] ?>" />
<input type="submit" name="submit" value="OK">
</form>
</body>
</html>
