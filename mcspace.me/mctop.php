<?php
require_once "cnt.php";
	$secret_key = 'af8640f812299759dd687c0794e8df72';
	
	$nickname = $_GET['nickname'];

	$token = $_GET['token'];

	if(isset($nickname) || isset($token))	
	{
		if(!preg_match("/^[a-zA-Z0-9_]+$/", $nickname)) die("bad login");
		$sql = $pdo->query("SELECT * FROM users WHERE login='$nickname'");
		$select = $sql->fetch(PDO::FETCH_ASSOC);
        if($select['login'] == $nickname) {
			
			$much = $pdo->query("SELECT * FROM vote_table WHERE uuid=UUID() AND `from`='mctop' AND date_text LIKE '%.".date("m.Y")."%'");
            $how_much = $much->fetchAll();
                
            if(!$how_much || $how_much = 0) $summa = $vote2;
            else if($how_much >= 1 && $how_much <= 10) $summa = 1;
            else if($how_much >= 11 && $how_much <= 24) $summa = 2;
            else if($how_much >= 25) $summa = 3;
            else $summa = 1;

			if($token == md5($nickname.$secret_key))
			{
				$check = $pdo->query("SELECT * FROM vote_table WHERE uuid=UUID() AND `from`='mctop' AND date_text='".date("d.m.Y")."'");
                if(!$check->fetchAll()) {
                    $pdo->query("INSERT INTO `vote_table` (`id`, `uuid`, `timestamp`, `date_text`, `from`) VALUES (NULL, UUID(), '".time()."', '".date("d.m.Y")."', 'mctop')");
                    $pdo->query("UPDATE users SET credit=credit+$summa, votes=votes+1 WHERE login='$nickname'");
                    die("Success voting with credit ($how_much | $summa)");
                } else die("Success voting without credit ($how_much | $summa)");		
			} else die("invalid token");
			
		} else die("user not found");

    } else die("no, fake");

?>