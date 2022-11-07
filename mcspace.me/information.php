<?php 
require_once "cnt.php";

header('Content-Type: text/html; charset=utf-8');

$dir = "informations/";
$info = $_GET['info'];
$file = $dir . $info . ".php";
if($_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'] == "mcspace.me/") $file = $dir . "information.php";
$file_ex = file_exists($file);
if(!$file_ex) $file = $dir . "_err_nopage.php";
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<?php require_once("include/head.html"); ?>
	<title>MCSpace "Вечная загадка!" | Сервера Minecraft с модами, начать игру!</title>
</head>
<body>
    <div id="wrapper">
		<div id="header">
			<?php require_once "include/start.html"; ?>
			<?php require_once "include/header.html"; ?>
		</div>
		<div id="container_info">
			<?php require_once "informations/info_mmorpg.php"; ?>
		</div>
    </div>
	<div id="footer">
		<?php require_once "include/footer.html"; ?>
	</div>
</body>
</html>