<?php

$action = "none";

if (defined("DEBUG_ON"))
	$action = $_GET["ajax"];
if (isset($_POST["ajax"]))
	$action = $_POST["ajax"];

switch ($action) {
	case 'rankPlayer':
		if (isset($_POST["id"]))
		{
			if (isset($_POST["value"]))
			{
				//verify if user has validate this season this player
				$result = true;
				if ($result == true)
				{
					echo (json_encode(array("return" => "error", "action" => "Vous avez deja note ce joueur.")));
				}
				else
				{
					//On note le joueur dans la DB + Sauvegarde de l'ip + id joueur pour ne pas avoir de double session
					echo (json_encode(array("return" => "successs", "action" => "Vous venez de note ce joueur.")));
				}
			}
			else
			{
				echo (json_encode(array("return" => "error", "action" => "Il manque la note du joueur.")));
			}
		}
		else
		{
			echo (json_encode(array("return" => "error", "action" => "Joueur Inconnu.")));
		}
		break;
	case 'newPlayer' :
		$ret = Player::getPlayerRand();
		$player = NULL;
		if (isset($ret["id"]))
			$player = new Player($ret["id"]);
		if (isset($player))
		{
			$return = "
				<div class=\"card\">
					<div class=\"box\">
						<div class=\"img\">
							<img src=\"" . $player->getImg() . "\">
						</div>
						<h2>" . $player->getName() . "<br><span>" . $player->getTeam() . "</span></h2>
						<p> some details </p>
						<div class=\"row button_list\">
							<button data-tag=\"X\" class=\"btn btn-danger btn-small btn-rounded rounded col-sm-6 col-md-4 col-md-3\">X</button>
							<button data-tag=\"S\" class=\"btn btn-warning btn-small btn-rounded rounded col-sm-6 col-md-4 col-md-3\">S</button>
							<button data-tag=\"A\" class=\"btn btn-success btn-small btn-rounded rounded col-sm-6 col-md-4 col-md-3\">A</button>
							<button data-tag=\"B\" class=\"btn btn-primary btn-small btn-rounded rounded col-sm-6 col-md-4 col-md-3\">B</button>
							<button data-tag=\"C\" class=\"btn btn-info btn-small btn-rounded rounded col-sm-6 col-md-4 col-md-3\">C</button>
							<button data-tag=\"F\" class=\"btn btn-secondary btn-small btn-rounded rounded col-sm-6 col-md-4 col-md-3\">F</button>
						</div>
						<player secret=\"" . $player->getId() . "\"></player>
					</div>
				</div>
				";
				echo $return;
		}
		else
		{
			echo "";
		}
		break ;
	default:
		# code...
		break;
}

?>