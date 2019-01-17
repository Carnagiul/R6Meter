<?php

Class Player
{
	public static $table = "player";
	public $name;
	public $team_id;
	public $player_id;

	public static function getPlayerLikeName($name)
	{
		global $sql;

		$query = "SELECT * FROM `" . self::$table . "`  WHERE `name` LIKE '%?%'";
		$data = NULL;
		$data[] = $name;
		$ret = $sql->CustomSelect($query, $data);
		if (defined("DEBUG_ON") && DEBUG_ON == TRUE)
		{
			var_dump("--- Class Player ---");
			var_dump("--- function getPlayerLikeName ---");
			var_dump("--- query $query ---");
			var_dump("--- return ---");
			var_dump("--- " . print_r($ret, true) . " ---");
		}
		if (isset($ret["count"]) && $ret["count"] > 0)
			return ($ret["datas"]);
		return (array());
	}

	public static function getPlayerName($name)
	{
		global $sql;

		$query = "SELECT * FROM `" . self::$table . "`  WHERE `name` = ?";
		$data = NULL;
		$data[] = $name;
		$ret = $sql->CustomSelect($query, $data);
		if (defined("DEBUG_ON") && DEBUG_ON == TRUE)
		{
			var_dump("--- Class Player ---");
			var_dump("--- function getPlayerLikeName ---");
			var_dump("--- query $query ---");
			var_dump("--- return ---");
			var_dump("--- " . print_r($ret, true) . " ---");
		}
		if (isset($ret["count"]) && $ret["count"] > 0)
			return ($ret["datas"]);
		return (array());
	}
}

?>
