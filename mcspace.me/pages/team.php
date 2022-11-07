<?php require_once "cnt.php"; ?>
<div class="content-other">
	<div class="page-header">
		<img src="../img/page_header.png">
		<div>Команда проекта</div>
	</div>
	<div class="page-content">
		<div class="account-header">Администрация</div>
		<div class='donate-type-it'>
			<div class='donate-it-rows'>
				<? 
					$sqlteam = "SELECT login, groupADM FROM admins ORDER BY groupADM DESC";
					$result = $pdo->query($sqlteam);
					$rows = $result->fetchAll();
					foreach($rows as $data) {
						if ($data['groupADM'] == 11) {
							$user_ST = 'Администратор';
						} elseif ($data['groupADM'] == 12) {
							$user_ST = 'Владелец';
						} 
						if ($data['groupADM'] >= 11 && $data['groupADM'] <=12) {
							$fileimage = $_SERVER['DOCUMENT_ROOT']. "/skins/". $data['login'] .".png";
							echo "<div class='donate-it-col'>
									<div class='donate-it-card team-card'>
										<div class='mc-face-viewer-8x' style='background-image:url(http://164.132.201.152:7777/mcspace.me/skins/"; 
												if(file_exists($fileimage)) {
													echo $data['login'];
												} else {
													echo "Default";
												}

													echo ".png)'></div>
										<div>". $data['login'] ."<div>". $user_ST ."</div></div>
									</div>
								</div>";
						}
					}
				?>
			</div>
		</div>
		<div class="account-header">MMORPG</div>
		<div class='donate-type-it'>
			<div class='donate-it-rows'>
				<? 
					$sqlteam = "SELECT login, mod_group FROM mod_group_MMO ORDER BY mod_group DESC";
					$result = $pdo->query($sqlteam);
					$rows = $result->fetchAll();
					foreach($rows as $data) {
						if ($data['mod_group'] == 1) {
							$user_ST = 'Стажёр';
						} elseif ($data['mod_group'] == 2) {
							$user_ST = 'Помощник';
						} elseif ($data['mod_group'] == 3) {
							$user_ST = 'Модератор';
						} elseif ($data['mod_group'] == 4) {
							$user_ST = 'Ст.Модератор';
						} elseif ($data['mod_group'] == 5) {
							$user_ST = 'Гл.Модератор';
						} elseif ($data['mod_group'] == 6) {
							$user_ST = 'Строитель';
						} elseif ($data['mod_group'] == 7) {
							$user_ST = 'Геймдизайнер';
						} elseif ($data['mod_group'] == 8) {
							$user_ST = 'Разработчик';
						} elseif ($data['mod_group'] == 9) {
							$user_ST = 'Куратор';
						} elseif ($data['mod_group'] == 10) {
							$user_ST = 'Тех.Админ';
						} elseif ($data['mod_group'] == 11) {
							$user_ST = 'Администратор';
						} else $user_ST = 'Владелец';
						if ($data['mod_group'] >= 1 && $data['mod_group'] <=10) {
							$fileimage = $_SERVER['DOCUMENT_ROOT'] ."/skins/". $data['login'] .".png";
							echo "<div class='donate-it-col'>
									<div class='donate-it-card team-card'>
										<div class='mc-face-viewer-8x' style='background-image:url(http://164.132.201.152:7777/mcspace.me/skins/"; 
												if(file_exists($fileimage)) {
													echo $data['login'];
												} else {
													echo "Default";
												}

													echo ".png)'></div>
										<div>". $data['login'] ."<div>". $user_ST ."</div></div>
									</div>
								</div>";
						}
					}
				?>
			</div>
		</div>
		<div class="account-header">SkyTech</div>
		<div class='donate-type-it'>
			<div class='donate-it-rows'>
					<? 
						$sqlteam = "SELECT login, mod_group FROM mod_group_ST ORDER BY mod_group DESC";
						$result = $pdo->query($sqlteam);
						$rows = $result->fetchAll();
						foreach($rows as $data) {
							if ($data['mod_group'] == 1) {
								$user_ST = 'Стажёр';
							} elseif ($data['mod_group'] == 2) {
								$user_ST = 'Помощник';
							} elseif ($data['mod_group'] == 3) {
								$user_ST = 'Модератор';
							} elseif ($data['mod_group'] == 4) {
								$user_ST = 'Ст.Модератор';
							} elseif ($data['mod_group'] == 5) {
								$user_ST = 'Гл.Модератор';
							} elseif ($data['mod_group'] == 6) {
								$user_ST = 'Строитель';
							} elseif ($data['mod_group'] == 7) {
								$user_ST = 'Геймдизайнер';
							} elseif ($data['mod_group'] == 8) {
								$user_ST = 'Разработчик';
							} elseif ($data['mod_group'] == 9) {
								$user_ST = 'Куратор';
							} elseif ($data['mod_group'] == 10) {
								$user_ST = 'Тех.Админ';
							} elseif ($data['mod_group'] == 11) {
								$user_ST = 'Администратор';
							} else $user_ST = 'Владелец';
							if ($data['mod_group'] >= 1 && $data['mod_group'] <=10) {
								$fileimage = $_SERVER['DOCUMENT_ROOT']."/skins/".$data['login'].".png";
								echo "<div class='donate-it-col'>
									<div class='donate-it-card team-card'>
										<div class='mc-face-viewer-8x' style='background-image:url(http://164.132.201.152:7777/mcspace.me/skins/"; 
												if(file_exists($fileimage)) {
													echo $data['login'];
												} else {
													echo "Default";
												}

													echo ".png)'></div>
										<div>". $data['login'] ."<div>". $user_ST ."</div></div>
									</div>
								</div>";
							}
						}
					?>
			</div>
		</div>
	</div>
</div>
