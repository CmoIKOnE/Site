<?php 
require_once "cnt.php";

$_SESSION['login'] = false;

session_write_close();
header('Location: '.$index);

?>
