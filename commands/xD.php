<?php
	if (!isset($C_xd_t)) {
		$C_xd_t = 0;
		$C_xd_a = true;
	}

	$C_xd_n = time() - $C_xd_t;
	if (checkC("all", "xD") || checkC("all", "xd")) {
		echo "\n=> !xD (".$C_xd_n.")";
		if ($C_xd_a && $C_xd_n >= 5) {
			fwrite($sock, "PRIVMSG ".$channel." :pajaSWA\n");
			$C_xd_t = time();
			$C_xd_a = false;
		} elseif($C_xd_n >= 5) {
			fwrite($sock, "PRIVMSG ".$channel." :pajaSWA \n");
			$C_xd_a = true;
		}
	}
?>
