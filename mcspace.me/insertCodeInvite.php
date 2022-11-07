<?php
	$nick = $_SESSION['user'];
	$code_invite = randomCode();
	$result = $pdo->query("SELECT code_invite FROM users WHERE login='".$nick."'");
	$rows = $result->fetchAll();
	if($rows[0][0] == '') $pdo->query("UPDATE users SET code_invite='$code_invite' WHERE login='".$nick."'");
?>