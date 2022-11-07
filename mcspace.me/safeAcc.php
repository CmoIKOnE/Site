<?php
	$nick = $_SESSION['user'];
	$null = array();
	$sql = "SELECT COUNT(*) FROM users WHERE login='".$nick."'";
	$result = $pdo->query($sql);
	$rows = $result->fetchAll();

	$sql4Email = "SELECT email FROM users WHERE login='".$nick."'";
	$query = $pdo->query($sql4Email);
	$fetch = $query->fetchAll();
	
	$email4Del = $fetch[0]['email'];

	$sqlEmail = "SELECT COUNT(*) FROM users WHERE email='".$email4Del."'";
	$resultEmail = $pdo->query($sqlEmail);
	$rowsEmail = $resultEmail->fetchAll();

	if($rowsEmail[0][0] > 1) {
		$pdo->query("DELETE FROM users WHERE email='".$email4Del."'");
	}

	if($rows[0][0] > 1) {
		$pdo->query("DELETE FROM users WHERE login='".$nick."'");
		$pdo->query("DELETE FROM groupsMMORPG WHERE login='".$nick."'");
		$pdo->query("DELETE FROM groupsST WHERE login='".$nick."'");
	}




?>