<?php
	require_once 'cnt.php';
	
	$secret = "f7795c36b0b63cb6dd092d8e527036bd";
	$username = htmlspecialchars($_POST['username']);
	if(!preg_match("/^[a-zA-Z0-9_]+$/", $username)) die("Bad login");
	
	if($_POST['signature'] != sha1($username.$_POST['timestamp'].$secret)) die("hash mismatch");
	$sql = $pdo->query("SELECT * FROM users WHERE login='$username'");
	$select = $sql->fetch(PDO::FETCH_ASSOC);
	if($select['login'] == $username) {
		$pdo->query("UPDATE users SET votes=votes+1 WHERE login='$username'");
		
		$much = $pdo->query("SELECT * FROM vote_table WHERE uuid=UUID() AND `from`='topcraft' AND date_text LIKE '%.".date("m.Y")."%'");
		$how_much = $much->fetchAll();
		
		if(!$how_much || $how_much = 0) $summa = $vote3;
		else if($how_much >= 1 && $how_much <= 10) $summa = 1;
		else if($how_much >= 11 && $how_much <= 24) $summa = 2;
		else if($how_much >= 25) $summa = 3;
		else $summa = 1;
		
		$check = $pdo->query("SELECT * FROM vote_table WHERE uuid=UUID() AND `from`='topcraft' AND date_text='".date("d.m.Y")."'");
		if(!$check->fetchAll()) {
			$pdo->query("INSERT INTO `vote_table` (`uuid`, `timestamp`, `date_text`, `from`) VALUES (UUID(), '".time()."', '".date("d.m.Y")."', 'topcraft')");
			$pdo->query("UPDATE users SET credit=credit+$summa WHERE login='$username'");
			die("Success voting with credit ($how_much | $summa)");
		}
		else die("Success voting without credit ($how_much | $summa)");
	}
	else die("user not found");
?>