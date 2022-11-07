<?php
require_once "cnt.php";
require_once "rcon.php";
require_once "PHPMailerAutoload.php";
require_once "SendMailSmtpClass.php";
/*$sql = "SELECT * FROM `wins_votes`";
  //$sql1 = "DELETE `wins_votes`";
  //$pdo->query($sql1);
  $stm = $pdo->query($sql);
  $arr = $stm->fetchAll();

    $sql1 = "UPDATE `users` SET rub=rub+$st WHERE login='".$arr[0][1]."'";
    $sql2 = "UPDATE `users` SET rub=rub+$nd WHERE login='".$arr[1][1]."'";
    $sql3 = "UPDATE `users` SET rub=rub+$rd WHERE login='".$arr[2][1]."'";
    var_dump($sql1);
    var_dump($sql2);
    var_dump($sql3);
/*
$result = $pdo->query("SELECT * FROM users WHERE code_invite='fovo2uvc1pigmpdq3sof'");
        $rows = $result->fetchAll();
        $null = array();
        if($rows == $null) echo 'null'; else echo 'yes';

/*use Thedudeguy\Rcon;

$rcon = new Rcon($host_MMORPG, $port_MMORPG, $password_MMORPG, $timeout_MMORPG);

if ($rcon->connect())
{
  $rcon->sendCommand("say Hello World!");
  echo "NO error HAHAHAHAH";
} else {
  echo "error";   
var_dump($rcon);
}*/
/*
$activationAcc = "5g22753";
$player = "CmoIK";
//$email = 'ruslan.mamasanov@mail.ru';
//$email = 'mamasanov2014@yandex.ru';
$email = 'ivan-vasilev-2001@bk.ru';
//$email = 'vano54084@gmail.com';

$mailSMTP = new SendMailSmtpClass($userMail, $passMail, $hostMail, 'mcspace.me', 465);
              $headers = "MIME-Version: 1.0\r\n";
              $headers .= "Content-type: text/html; charset=utf-8\r\n";
              $headers .= "From: MCSpace.me <support@mcspace.me>\r\n";

              $body = "Здравствуйте, ".$player."! <br><br>"; 
                   
              $body .= "Если вы считаете, что данное сообщение отправлено вам ошибочно, <br>"; 
              $body .= "просто проигнорируйте его. <br><br>"; 
                      
              $body .= "Мы отправили это письмо, потому что вы или кто-то другой указал этот адрес на https://mcspace.me/ <br><br>"; 
                      
              $body .= "Ваш код, что бы подтвердить почту: <br>"; 
              $body .= $activationAcc;

              $result = $mailSMTP->send($email, "MCSpace.me | Подтверждение", $body, $headers);
              echo $result;

/*$sql = "SELECT * FROM `mmorpg_mobs` ";
					$result = $pdo->query($sql);
					$rows = $result->fetchAll();
					foreach($rows as $data) {
						$loots = $data['loots'];
						//echo $loots . "<br/>";



						


					} 

$loots_test = '- 42 1 2 40 - 40 1 2 40 - 44 1 4 34';
echo $loots_test . "<br/>";
/*$text1 = preg_replace("/^(.*?)(-)(.*?)$/", '\\3', $loots_test);
echo $text1 . "<br/>";
$text2 = preg_replace("/^(.*?)(-)(.*?)$/", '\\3', $text1);
echo $text2;*/

/*$text1 = preg_replace("/^(.*?)(-)(.*?)(-)(.*?)(-)(.*?)$/", '\\3', $loots_test);
echo $text1 . "<br/>";
//$text2 = preg_replace("/^(.*?)(-)(.*?)$/", '\\3', $text1);
//echo $text2;

*/
/*$id = '264';
$name = 'Кинжал верховного мага';
$item = 'STONE_SWORD';
$quality = 'EPIC';
$lore = 'Через него сочится энергия крови';
$tied = 'false';
$damage = '34-38';
$mag_damage = '';
$crit = '12';
$vampirism = '20';
$armor = '';
$mag_armor = '';
$resistance = '';
$regeneration = '';
$health = '';
$subType = '';
$r_lvl = '29';
$r_power = '10';
$r_agility = '';
$r_wisdom = '3';
$lvlItem = '';
$pdo->query("INSERT INTO mmorpg_items (id, item, name, quality, lore, damage, mag_damage, crit, vampirism, armor, mag_armor, resistance, health, regeneration, tied, subType, r_lvl, r_power, r_agility, r_wisdom, lvlItem) VALUES ('$id', '$item', '$name', '$quality', '$lore', '$damage', '$mag_damage', '$crit', '$vampirism', '$armor', '$mag_armor', '$resistance', '$health', '$regeneration', '$tied', '$subType', '$r_lvl', '$r_power', '$r_agility', '$r_wisdom', '$lvlItem')");
$id = '265';
$name = 'Свиток телепортации в кровавую обитель';
$item = 'PAPER';
$quality = 'RARE';
$lore = '';
$tied = '';
$damage = '';
$mag_damage = '';
$crit = '';
$vampirism = '';
$armor = '';
$mag_armor = '';
$resistance = '';
$regeneration = '';
$health = '';
$subType = '';
$r_lvl = '27';
$r_power = '';
$r_agility = '';
$r_wisdom = '';
$lvlItem = '';
$pdo->query("INSERT INTO mmorpg_items (id, item, name, quality, lore, damage, mag_damage, crit, vampirism, armor, mag_armor, resistance, health, regeneration, tied, subType, r_lvl, r_power, r_agility, r_wisdom, lvlItem) VALUES ('$id', '$item', '$name', '$quality', '$lore', '$damage', '$mag_damage', '$crit', '$vampirism', '$armor', '$mag_armor', '$resistance', '$health', '$regeneration', '$tied', '$subType', '$r_lvl', '$r_power', '$r_agility', '$r_wisdom', '$lvlItem')");
*/







/*
$id = "";
  $name = "";
  $type = "";
  $health = "";
  $damage = "";
  $armor = "";
  $resistance = "";
  $level = "";
  $xp = "";
  $respawn = "";
  $agressive = "";
  $loots = "";

  
$id = "48";
  mob: "wither_s";
  $name = "Лода";
  $type = "boss";
  $health = "11016-13464";
  $damage = "70";
  $armor = "0";
  $resistance = "0";
  $level = "30";
  $xp = "15100";
  $respawn = "3600";
  $agressive = "false";
  $loots = "
  - 2 1 24 100
  - 248 1 12 100
  - 146 1 32 100
  - 148 1 32 100
  - 229 1 12 100
  - 233 1 12 100
  - 257 1 4 100
  - 9 1 8 100
  - 10 1 3 80
  - 251 1 1 15
  - 252 1 1 15
  - 253 1 1 15
  - 254 1 1 15
  - 236 1 1 5
  - 237 1 1 5
  - 238 1 1 5
  - 239 1 1 5
  - 256 1 1 7.500
  - 245 1 1 5
  - 264 1 1 2.500";
  
$pdo->query("INSERT INTO `mmorpg_mobs`(`id`, `name`, `type`, `health`, `damage`, `mag_damage`, `armor`, `mag_armor`, `resistance`, `level`, `xp`, `respawn`, `agressive`, `loots`) VALUES ('$id', '$name', '$type', '$health', '$damage', '$magdamage', '$armor', '$mag_armor', '$resistance', '$level', '$xp', '$respawn', '$agressive', '$loots')");

  *//*
$banl = "SELECT * FROM Ban";
$stm = $pdo_3->query($banl);
$result = $stm->fetchAll();
var_dump($result);
echo "<br><br><br>";
echo dechex(bindec($result[1]['revoker_id']));*/
?>
