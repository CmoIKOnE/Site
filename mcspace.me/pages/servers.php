<? require_once "cnt.php";
$json = file_get_contents("monAJAX/ajax.json");
$jsonDe = json_decode($json,true);
if (isset($_GET['srv'])) {
	$srv_to_show = $_GET['srv'];
} else {
	$srv_to_show = 'none';
}
?>
<div class="content-other">
	
	<? switch ($srv_to_show) {
		case 'none': {
			?>

	<div class="page-header">
		<img src="../img/page_header.png">
		<div>Список серверов</div>
	</div> 
	<div class="page-content" style="overflow: hidden;">
		<div class="servers-left">
			<a class="bserver c_p" onclick="location.href='<?=$mmorpg?>'">
				<span class="bserver_img">
					<img src="<?=$path_to_images?>mmorpg.jpg">
				</span>
				<span class="bserver_title mmo-title">MMORPG</span>
				<span class="bserver_desc">
					Сервер <strong>MMORPG</strong> идеально подойдет игрокам которые хотят приключений. На сервере установлен самописный плагин на RPG, именно он не даст вам заскучать. Прокачка персонажей, сражения против полчищ мобов и сильных боссов, массовые баталии, контроль территорий и незабываемый сюжет!
					<br><br><b>Хочется чего-то экстравагантного? Добро пожаловать на MMORPG!</b>
				</span>
			</a>
			<a class="bserver c_p" onclick="location.href='<?=$skytech?>'">
				<span class="bserver_img">
					<img src="<?=$path_to_images?>skytech.jpg">
				</span>
				<span class="bserver_title sky-title">SkyTech</span>
				<span class="bserver_desc">
					Сервер <strong>SkyTech</strong> с PvP режимом для тех, кто любит напичканные лишними модами сервера. Стройте фермы, заводы, сложнейшие автокрафты, экспериментируйте с различными способами получения энергии, станьте магнатами материи!
					<br><br><b>Сложные крафты и схемы твой конек? SkyTech ждет!</b>
				</span>
			</a>
		</div>
		<div class="servers-right">
			<div>
				Мониторинг
			</div>
			<div class="server-counts">
				<div class="servers-block">
					<div class="server-container">
						<div class="server-left">
							<span class=ServName>MMORPG</span>
						</div>
						<div class="server-right">
							<? echo $jsonDe["online"]."/".$jsonDe["slots"]; ?>
						</div>
					</div>
					<div class="server-show">
						<img src="../img/online_bg.png" style=" position: absolute; margin-top: 3px;">
						<? $mon_percent = ($jsonDe["online"]/$jsonDe["slots"])*100;
							echo "<img src='../img/online_count.png' style=' clip-path: polygon(0 0, ". $mon_percent ."% 0%, ". $mon_percent ."% 100%, 0% 100%);'>" ?>
					</div>
				</div>
				<div class="servers-block">
					<div class="server-container">
						<div class="server-left">
							<span class=ServName>SkyTech</span>
						</div>
						<div class="server-right">
							<? echo "0"."/"."0"; ?>
						</div>
					</div>
					<div class="server-show">
						<img src="../img/online_bg.png" style=" position: absolute; margin-top: 3px;">
						<? $mon_percent = ($jsonDe["online"]/$jsonDe["slots"])*100;
							echo "<img src='../img/online_count.png' style=' clip-path: polygon(0 0, ". "0" ."% 0%, ". "0" ."% 100%, 0% 100%);'>" ?>
					</div>
				</div>
				<div class="servers-block">
					<div class="server-container">
						<div class="server-left">
							<span class=ServName>Общий онлайн</span>
						</div>
						<div class="server-right">
							<? echo $jsonDe["online"]."/".$jsonDe["slots"]; ?>
						</div>
					</div>
					<div class="server-show">
						<img src="../img/online_bg.png" style=" position: absolute; margin-top: 3px;">
						<? $mon_percent = ($jsonDe["online"]/$jsonDe["slots"])*100;
							echo "<img src='../img/online_count.png' style=' clip-path: polygon(0 0, ". $mon_percent ."% 0%, ". $mon_percent ."% 100%, 0% 100%);'>" ?>
					</div>
					<div class="server-container">
						<div class="server-left">
							Суточный рекорд
						</div>
						<div class="server-right">
							<?php echo $jsonDe["recordday"]; ?>
						</div>
					</div>
					<div class="server-container">
						<div class="server-left">
							Абсолютный рекорд
						</div>
						<div class="server-right">
							<?php echo $jsonDe["record"]; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


			<? }
			break;
		case 'mmorpg': {
			?>

	<div class="page-header">
		<img src="../img/page_header.png">
		<div>Сервер<br>MMORPG 1.12.2</div>
	</div>
	<div class="page-content" style="overflow: hidden;">
		<div class="label">
			Сервер <strong>MMORPG</strong> идеально подойдет игрокам которые хотят приключений. На сервере установлен самописный плагин на RPG, именно он не даст вам заскучать. Прокачка персонажей, сражения против полчищ мобов и сильных боссов, массовые баталии, контроль территорий и незабываемый сюжет!
			<br><br><b>Хочется чего-то экстравагантного? Добро пожаловать на MMORPG!</b>
		</div>
	</div>

			<? }
			break;
		case 'skytech': {
			?>
	

	<div class="page-header">
		<img src="../img/page_header.png">
		<div>Сервер<br>SkyTech 1.7.10</div>
	</div>
	<div class="page-content" style="overflow: hidden;">
		<div class="label">
			Технический сервер с PvP режимом для тех, кто любит напичканные лишними модами сервера. Стройте фермы, заводы, сложнейшие автокрафты, экспериментируйте с различными способами получения энергии, станьте магнатами материи!
			<br>
			<br>
			<b>Сложные крафты и схемы твой конек? SkyTech ждет!</b>
		</div>

		<div class="server-desc-left">
			<div class="account-header">
				Серверные моды
			</div>
			<div class="main-info-list">
				<div class="servers-size-3">
					<div>AFSU</div>
					<div>AppliedEnergestics 2<br>
						<span class="addon">Аддон</span>AE2 Stuff<br>
						<span class="addon">Аддон</span>ExtraCells 2
					</div>
				</div>
				<div>
					<div>BigReactors</div>
					<div>CustomNPC</div>
				</div>
				<div>
					<div>EnderIO</div>
					<div>Ex Astris</div>
				</div>
				<div>
					<div>Ex Compressum</div>
					<div>Ex Nihilo</div>
				</div>
				<div class="servers-size-4">
					<div>Extra Utilities</div>
					<div>IndustrialCraft 2<br>
						<span class="addon">Аддон</span>AdvancedSolarPanel<br>
						<span class="addon">Аддон</span>GraviSuite<br>
						<span class="addon">Аддон</span>IC2Nuclear Control
					</div>
				</div>
				<div>
					<div>IronChest</div>
					<div>
						<span class="tooltip c_p"><img class="info" src="<?=$path_to_images?>info.png"><span class="tooltiptext">Самописный мод</span>MasterMod</span>
					</div>
				</div>
				<div>
					<div>MineFactoryReloaded</div>
					<div>MineTweaker 3</div>
				</div>
				<div class="servers-size-2">
					<div>ModTweaker 2</div>
					<div>OpenComputers<br>
						<span class="addon">Аддон</span>Computronics
					</div>
				</div>
				<div>
					<div>PowerConverters</div>
					<div>SimplyJetpacks</div>
				</div>
				<div class="servers-size-3">
					<div>Tinker's Construct</div>
					<div>ThermalExpason<br>
						<span class="addon">Аддон</span>ThermalDynamics<br>
						<span class="addon">Аддон</span>ThermalFoundation
					</div>
				</div>
			</div>
		</div>
		<div class="server-desc-right">
			<div class="account-header">
				Клиентские моды
			</div>
			<div class="main-info-list">
				<div>
					<div><span class="tooltip c_p"><img class="info" src="<?=$path_to_images?>info.png"><span class="tooltiptext">Опциональная модификация</span>Macros Keybinds</span></div>
					<div><span class="tooltip c_p"><img class="info" src="<?=$path_to_images?>info.png"><span class="tooltiptext">Опциональная модификация</span>NotEnoughItems</span></div>
				</div>
				<div>
					<div><span class="tooltip c_p"><img class="info" src="<?=$path_to_images?>info.png"><span class="tooltiptext">Опциональная модификация</span>WorldEdit CUI</span></div>
					<div><span>TabbyChat</span></div>
				</div>
				<div>
					<div><span class="tooltip c_p"><img class="info" src="<?=$path_to_images?>info.png"><span class="tooltiptext">Опциональная модификация</span>Waila</span></div>
					<div><span>JourneyMap</span></div>
				</div>
				<div>
					<div><span class="tooltip c_p"><img class="info" src="<?=$path_to_images?>info.png"><span class="tooltiptext">Опциональная модификация</span>Dynamic Lights</span></div>
					<div></div>
				</div>
			</div>
		</div>
	</div>

			<? }
			break;
			default: { ?>
	<div class="page-header">
		<img src="../img/page_header.png">
		<div>Список серверов</div>
	</div> 
	<div class="page-content" style="overflow: hidden;">
		<center>
			<h2 class="ta_c">Ошибка запроса</h2>
		</center>
		<form class="reg_form" action="<?=$servers?>" method="post">
			<center>
				<button class="account-btn" name="submit" type="submit" style="float: none;">К списку серверов</button>
			</center>
		</form>
	</div>
			<? }
			break;
	} ?>
	
</div>