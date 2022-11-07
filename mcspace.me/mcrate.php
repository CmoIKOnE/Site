<?php
    require_once 'cnt.php';

    $secret = $secretMCRATE;
    $nick = $_POST['nick'];
    $hash = $_POST['hash'];
    if($nick && $hash) {
        if(strcmp(md5(md5($nick.$secret."mcrate")), $hash) == 0) {
            
            if(!preg_match("/^[a-zA-Z0-9_]+$/", $nick)) die("bad login");
            $sql = $pdo->query("SELECT * FROM users WHERE login='$nick'");
			$select = $sql->fetch(PDO::FETCH_ASSOC);
            if($select['login'] == $nick) {
                $queryVote = $pdo->query("UPDATE users SET votes=votes+1 WHERE login='$nick'");
                $much = $pdo->query("SELECT * FROM vote_table WHERE uuid=UUID() AND `from`='mcrate' AND date_text LIKE '%.".date("m.Y")."%'");
                $how_much = $much->fetchAll();
                
                if(!$how_much || $how_much = 0) $summa = $vote1;
                else if($how_much >= 1 && $how_much <= 10) $summa = 1;
                else if($how_much >= 11 && $how_much <= 24) $summa = 2;
                else if($how_much >= 25) $summa = 3;
                else $summa = 1;
                
                $check = $pdo->query("SELECT * FROM vote_table WHERE uuid=UUID() AND `from`='mcrate' AND date_text='".date("d.m.Y")."'");
                if(!$check->fetchAll()) {
                    $pdo->query("INSERT INTO `vote_table` (`id`, `uuid`, `timestamp`, `date_text`, `from`) VALUES (NULL, UUID(), '".time()."', '".date("d.m.Y")."', 'mcrate')");
                    $pdo->query("UPDATE users SET credit=credit+$summa WHERE login='$nick'");
                    die("Success voting with credit ($how_much | $summa)");
                }
                else die("Success voting without credit ($how_much | $summa)");
            }
            else die("user not found");
        }
    }
?>









