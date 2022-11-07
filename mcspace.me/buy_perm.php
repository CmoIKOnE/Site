<?php
require_once "cnt.php";
require_once "rcon.php";

$unban 	= safeGet($_POST, 'unban');
$server = safeGet($_POST, 'server');
//var_dump($_POST);

$priceUNBAN = 25;
use Thedudeguy\Rcon;

if($server == "SkyTech") {
	$host = $host_ST;
	$port = $port_ST;
	$password = $password_ST;
	$timeout = $timeout_ST;
} else if ($server == "cloak"){
	$rub = $rub - 50;
	if($rub >= 0){
		$sql = "UPDATE users SET cloak=1, rub=$rub WHERE login='".$_SESSION['user']."' LIMIT 1";
		$query = $pdo->query($sql);
		header('Location: '.$akk.'&success');
		exit();
	} else {
		header('Location: '.$akk.'&notRub');
		exit();
	}

}
 else {
	header('Location: '.$akk.'&servererror');
	exit();
}

if(isset($_POST['server']))	{
    $course = $_POST['server'];
    //echo $course;
}

$rcon = new Rcon($host, $port, $password, $timeout);
if($rcon->connect()) {
	if(isset($unban)) {
		$sql = "SELECT * FROM bans WHERE name='".$_SESSION['user']."' LIMIT 1";
		$query = $pdo_2->query($sql);
		$fetch = $query->fetch(PDO::FETCH_ASSOC);
		if($fetch !== false){
			if($rub < $priceUNBAN) { header('Location: '.$akk.'&notRub'); exit(); }
			else $minus_rub = $rub - $priceUNBAN;
			$sql = "UPDATE users SET rub=".$minus_rub." WHERE login='".$_SESSION['user']."' LIMIT 1";
			$result = $pdo->exec($sql);
			$resultReady = ($result == 1) ? true : false;
			if($resultReady === true) {
				$rcon->sendCommand("unban ".$_SESSION['user']."");
				header('Location: '.$akk.'&unbanned');
				exit();
			} else { header('Location: '.$akk.'&no'); exit(); }
		} else { header('Location: '.$akk.'&notbanned'); exit(); }
	} else { header('Location: '.$akk.'&no'); exit(); }
} else { header('Location: '.$akk.'&rcon'); exit(); }

?>