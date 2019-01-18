<?php

Class Vote
{
	public static $table = "vote";

	public function Exist($player_id, $user_ip)
	{
		global $sql;

		$query = "SELECT * FROM `" . self::$table . "` WHERE `ip` = '?' AND `player_id` = '?'";
		$mysql = $sql->CustomSelect($query, array($player_id, $user_ip));
		if (isset($mysql["datas"]) && isset($mysql["datas"][0]))
			return (TRUE);
		return (FALSE);
	}

	public function _Exist($player_id, $user_ip)
	{
		global $sql;

		$query = "SELECT * FROM `" . self::$table . "` WHERE `ip` = '?' AND `player_id` = '?'";
		$mysql = $sql->CustomSelect($query, array($player_id, $user_ip));
		if (isset($mysql["datas"]) && isset($mysql["datas"][0]))
			return (TRUE);
		return (FALSE);
	}

	public function __construct($player_id, $user_ip)
	{
		if ((($player = new Player($player_id)) != NULL) && $user_ip != NULL && self::_Exist($player_id, $user_ip))
		{
			//Insertion en base d'un vote
		}
	}
}

?>