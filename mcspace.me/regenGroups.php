<?
$query = false;
$nick = $_SESSION['user'];
$null = array();
$sql = "SELECT * FROM groupsST WHERE login='".$nick."'";
$result = $pdo->query($sql);
$rows = $result->fetchAll();
if($rows == $null && $_SESSION['login']) {
	$pdo->query("INSERT INTO groupsST (login, groupp, groupp_month, group_timer, set_group) VALUES ('$nick', 1, 1, 0, 0)");
}

// MMORPG

$sql1 = "SELECT * FROM groupsMMORPG WHERE login='".$nick."'";
$result1 = $pdo->query($sql1);
$rows1 = $result1->fetchAll();
if($rows1 == $null && $_SESSION['login']) {
	$pdo->query("INSERT INTO groupsMMORPG (login, groupp, groupp_month, group_timer, set_group) VALUES ('$nick', 1, 1, 0, 0)");
}
?>