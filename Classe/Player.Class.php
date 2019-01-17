<?php

Class Player
{
	public static $table = "players";
	public $name;
	public $team;
	public $img;
	public $structure;
	public $id;

	public static function getPlayerRand()
	{
		global $sql;

		$query = "SELECT * FROM `" . self::$table . "` ORDER BY RAND() LIMIT 1";
		$ret = $sql->CustomSelect($query, NULL);
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

	public static function getPlayerLikeTeam($team)
	{
		$query = "SELECT * FROM `" . self::$table . "`  WHERE `team` LIKE '%?%'";
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
	}

	public static function getPlayerTeam($team)
	{
		$query = "SELECT * FROM `" . self::$table . "`  WHERE `team` = '?'";
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
	}

	function __construct($id)
	{
		if (($user = $this->Exist($id)) != NULL)
		{
			$this->setName($user["name"]);
			$this->setTeam($user["team"]);
			$this->setImg($user["img"]);
			$this->setStructure($user["structure"]);
			$this->setId($user["id"]);
		}
	}

	public function Exist($id)
	{
		global $sql;

		$query = "SELECT * FROM `" . self::$table . "`  WHERE `id` = ?";
		$data = NULL;
		$data[] = $id;
		$ret = $sql->CustomSelect($query, $data);
		if (defined("DEBUG_ON") && DEBUG_ON == TRUE)
		{
			var_dump("--- Class Player ---");
			var_dump("--- function Exist ---");
			var_dump("--- query $query ---");
			var_dump("--- return ---");
			var_dump("--- " . print_r($ret, true) . " ---");
		}
		if (isset($ret["count"]) && $ret["count"] > 0)
			return ($ret["datas"]);
		return (NULL);
	}

	public function getid()
	{
		return ($this->id);
	}

	public function setId($id)
	{
		$this->id = $id;
	}

	public function getName()
	{
		return ($this->name);
	}

	public function setName($value)
	{
		$this->name = utf8_encode($value);
	}

	public function getTeam()
	{
		return ($this->team);
	}

	public function setTeam($value)
	{
		$this->team = $value;
	}

	public function getImg()
	{
		return ($this->img);
	}

	public function setImg($value)
	{
		$this->img = $value;
	}

	public function getStructure()
	{
		return ($this->structure);
	}

	public function setStructure($value)
	{
		$this->structure = $value;
	}
}

?>
