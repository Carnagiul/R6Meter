<?php

include_once("Config/index.php");

$page = "home";
if (isset($_GET["page"]))
	$page = $_GET["page"];
if (!(file_exists("Page/" . $page . ".php")))
	$page = "home";
include_once("header.php");
include_once("Page/" . $page . ".php");
include_once("footer.php");


?>
