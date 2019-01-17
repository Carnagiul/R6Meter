<?php

Class User
{
	public static $table = "users";
	public $ip;

	public static function getUserByIpLike($ip)
	{
		global $sql;

		$query = "SELECT * FROM `" . self::$table . "`  WHERE `ip` LIKE '%?%'";
		$data = NULL;
		$data[] = $ip;
		$ret = $sql->CustomSelect($query, $data);
		if (defined("DEBUG_ON") && DEBUG_ON == TRUE)
		{
			var_dump("--- Class Users ---");
			var_dump("--- function getUserByIpLike ---");
			var_dump("--- query $query ---");
			var_dump("--- return ---");
			var_dump("--- " . print_r($ret, true) . " ---");
		}
		if (isset($ret["count"]) && $ret["count"] > 0)
			return ($ret["datas"]);
		return (array());
	}

	public static function getUserByIp($ip)
	{
		global $sql;

		$query = "SELECT * FROM `" . self::$table . "`  WHERE `ip` = ?";
		$data = NULL;
		$data[] = $ip;
		$ret = $sql->CustomSelect($query, $data);
		if (defined("DEBUG_ON") && DEBUG_ON == TRUE)
		{
			var_dump("--- Class Users ---");
			var_dump("--- function getUserByIp ---");
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