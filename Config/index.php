<?php
	session_start();
	require_once("Classe/Player.Class.php");
	require_once("Classe/Sql.Class.php");
	require_once("Classe/User.Class.php");
	$bdd["host"] = "";
	$bdd["name"] = "";
	$bdd["username"] = "";
	$bdd["userpass"] = "";

	if (isset($_GET["debug"]))
	{
		if ($_GET["debug"] == "activate")
		{
			error_reporting(E_ALL);
			ini_set('display_errors', TRUE);
			ini_set('display_startup_errors', TRUE);
			define("DEBUG_ON", TRUE);
		}
	}
//	$sql = new Sql();
//	$sql->connect();

?>