<?php require_once "cnt.php"; ?>
<div class="content-other">
	<div class="page-header">
		<img src="../img/page_header.png">
		<div>Личный кабинет</div>
	</div>
	<div class="page-content" id="loading">
		<?php
			if($_SESSION['login'] !== true): 
		?>
		<h1 class="warning">Доступ запрещен</h1><br>
		<h2 class="ta_c">Вам необходимо авторизоваться.</h2>
		<?php else: ?>
		<div class="clearfix">
			<div class="account-align">
				<div class="account-view">
					<div class="account-header">
						Внешний вид
					</div>
					<style>
						<?php 
							$filepath_skin = $_SERVER['DOCUMENT_ROOT']."/skins/".$_SESSION['user'].".png";
							if(file_exists($filepath_skin)) {
								echo "#skin-viewer-2 * { background-image: url('http://164.132.201.152:7777/mcspace.me/skins/".$_SESSION['user'].".png?".date('YmdHis')."')} ";
							} else {
								echo "#skin-viewer-2 * { background-image: url('http://164.132.201.152:7777/mcspace.me/skins/Default.png')} ";
							}
							$filepath_cloak = $_SERVER['DOCUMENT_ROOT']."/cloaks/".$_SESSION['user'].".png";
							if(file_exists($filepath_cloak)) {
								echo "#skin-viewer-2 .cape{ background-image: url('http://164.132.201.152:7777/mcspace.me/cloaks/".$_SESSION['user'].".png?".date('YmdHis')."')} ";
							} else {
								echo "#skin-viewer-2 .cape{ background-image: url('http://164.132.201.152:7777/mcspace.me/cloaks/')} ";
							}
						?>
					</style>
					<? 
							if(file_exists($filepath_skin)) {
								echo "<a href='https://mcspace.me/skins/";
								echo $_SESSION['user'];
								echo ".png' style='cursor:pointer' target='_blank'>";
							}
							?>
					
						<div id="skin-viewer-2" class="mc-skin-viewer-11x legacy legacy-cape spin">
							<div class="player">
								<div class="head" >
									<div class="top"></div>
									<div class="left"></div>
									<div class="front"></div>
									<div class="right"></div>
									<div class="back"></div>
									<div class="bottom"></div>
									<div class="accessory">
										<div class="top"></div>
										<div class="left"></div>
										<div class="front"></div>
										<div class="right"></div>
										<div class="back"></div>
										<div class="bottom"></div>
									</div>
								</div>
								<div class="body">
									<div class="top"></div>
									<div class="left"></div>
									<div class="front"></div>
									<div class="right"></div>
									<div class="back"></div>
									<div class="bottom"></div>
									<div class="accessory">
										<div class="top"></div>
										<div class="left"></div>
										<div class="front"></div>
										<div class="right"></div>
										<div class="back"></div>
										<div class="bottom"></div>
									</div>
								</div>
								<div class="left-arm">
									<div class="top"></div>
									<div class="left"></div>
									<div class="front"></div>
									<div class="right"></div>
									<div class="back"></div>
									<div class="bottom"></div>
									<div class="accessory">
										<div class="top"></div>
										<div class="left"></div>
										<div class="front"></div>
										<div class="right"></div>
										<div class="back"></div>
										<div class="bottom"></div>
									</div>
								</div>
								<div class="right-arm">
									<div class="top"></div>
									<div class="left"></div>
									<div class="front"></div>
									<div class="right"></div>
									<div class="back"></div>
									<div class="bottom"></div>
									<div class="accessory">
										<div class="top"></div>
										<div class="left"></div>
										<div class="front"></div>
										<div class="right"></div>
										<div class="back"></div>
										<div class="bottom"></div>
									</div>
								</div>
								<div class="left-leg">
									<div class="top"></div>
									<div class="left"></div>
									<div class="front"></div>
									<div class="right"></div>
									<div class="back"></div>
									<div class="bottom"></div>
									<div class="accessory">
										<div class="top"></div>
										<div class="left"></div>
										<div class="front"></div>
										<div class="right"></div>
										<div class="back"></div>
										<div class="bottom"></div>
									</div>
								</div>
								<div class="right-leg">
									<div class="top"></div>
									<div class="left"></div>
									<div class="front"></div>
									<div class="right"></div>
									<div class="back"></div>
									<div class="bottom"></div>
									<div class="accessory">
										<div class="top"></div>
										<div class="left"></div>
										<div class="front"></div>
										<div class="right"></div>
										<div class="back"></div>
										<div class="bottom"></div>
									</div>
								</div>
								<div class="cape">
									<div class="top"></div>
									<div class="left"></div>
									<div class="front"></div>
									<div class="right"></div>
									<div class="back"></div>
									<div class="bottom"></div>
								</div>
							</div>
						</div>
						<? 
							if(file_exists($filepath_skin)) {
								echo "</a>";
							}
							?>
					
					<div class="skin-items">
						<form name="upload_skin" action='<?=$php?>check_skin_cloak.php' method="post" enctype="multipart/form-data">
							<div><span><input type="file" name="userfile" accept="image/png" onchange="document.getElementById('load_file_skin').click();"><input id="load_file_skin" type="submit" name="upload_skin" value="Загрузить" style="display: none"></span></div>
							<?php 
								$filepath_skin = $_SERVER['DOCUMENT_ROOT']."/skins/".$_SESSION['user'].".png";
								if(file_exists($filepath_skin)) {
									echo "<div><span><input type='submit' name='delete_skin' value='Удалить'></span></div>";
									//echo "<div><span><input type='submit' name='download_skin' value='Скачать'><span>Скачать скин</span></span></div>";
								} else {
									echo "<div><input type='submit' name='delete_skin' value='Удалить' disabled></div>";
									//echo "<div><input type='submit' name='download_skin' value='Скачать' disabled></div>";
								}
							?>
						</form>
						<? if($cloaksCheck != 111) { ?>  <!-- if($cloaksCheck == 1) -->
						<form name="upload_cloak" action='<?=$php?>check_skin_cloak.php' method="post" enctype="multipart/form-data">
							<div><span><input type="file" name="userfile" accept="image/png" onchange="document.getElementById('load_file_cloak').click();"><input id="load_file_cloak" type="submit" name="upload_cloak" value="Загрузить" style="display: none"></span></div>
							<?php 
								$filepath_cloak = $_SERVER['DOCUMENT_ROOT']."/cloaks/".$_SESSION['user'].".png";
								if(file_exists($filepath_cloak)) {
									echo "<div><span><input type='submit' name='delete_cloak' value='Удалить'></span></div>";
									//echo "<div><span><input type='submit' name='download_cloak' value='Скачать'><span>Скачать плащ</span></span></div>";
								} else {
									echo "<div><input type='submit' name='delete_cloak' value='Удалить' disabled></div>";
									//echo "<div><input type='submit' name='download_cloak' value='Скачать' disabled></div>";
								}
							?>
						</form>
					<? } ?>
					</div>
				</div>
				<div class="account-unban">
					<div class="account-header">
						Платный разбан
					</div>
					<script type="text/javascript">
						function ServerSelected(server){
							var SS = server.value;
							var S1Class = document.getElementById("S1").classList;
							if (SS == 'SkyTech') {
								S1Class.remove('d_n');
								S1Class.add('d_b');
							} else {
								S1Class.add('d_n');
								S1Class.remove('d_b');
							}
						}

						function copyToClipboard_ref() {
						 var copyText = document.getElementById("ref");
						 copyText.select();
						  document.execCommand("copy");
						  alert("Ваша реферальная ссылка скопирована: " + copyText.value);
						}
					</script>
					<form action='../buy_perm.php' method='POST'>
						<div class="d_g">
							<select name="server" id="id_server" class="unban-select" onChange="ServerSelected(this)">
								<option value='' selected>Выберите сервер</option>
								<option value='SkyTech'>SkyTech</option>
								<option value='MMORPG'>MMORPG</option>
							</select>
							<?
							echo "<table id='S1' class='fs13 cp_table d_n'><tr><th>Забанил</th><th>Причина</th><th>Дата бана</th><th>Дата разбана</th><th>Статус</th></tr>";
							$arrayNULL = array();
							$banl = "SELECT * FROM bans";
							$stm = $pdo_2->query($banl);
							$result = $stm->fetchAll();
							if ($result !== $arrayNULL){
								$sql = "SELECT * FROM bans WHERE name='".$_SESSION['user']."'";
								$result = $pdo_2->query($sql);
								$rows = $result->fetchAll();
								if($rows !== $arrayNULL){
									foreach($rows as $data) {
										$timeEpoch = $data['time'];
										$timeConvert = $timeEpoch / 1000;
										$timeResult = date('d.m.Y H:i', $timeConvert);
										$dtime = $data['expires'];
										$dtimeC = $dtime / 1000;
										$dtimeD = date('d.m.Y H:i', $dtimeC);
										echo "<tr><td>".$data['banner']."</td>";
										echo "<td>".$data['reason']."</td>";
										echo "<td>".$timeResult."</td>";
										if ($data['expires']==0) {
											echo "<td>Навсегда</td>";
										} else echo "<td>".$dtimeD."</td>";
										echo "<td><a class='c_p' onclick='location.href=\"#buy_unban\"'><img src='../img/forward.png' alt='Купить разбан'></a></td></tr>";
										echo "<div id='buy_unban' class='iw-modal'><div class='iw-modal-wrapper'><div class='iw-CSS-modal-inner'><div class='iw-modal-header'><h3 class='ta_c'>Покупка разбана</h3><a href='#close' title='Закрыть' class='iw-close'>×</a></div><div class='ta_c iw-modal-text'><h3 class='bar'>Вы уверены, что хотите купить разбан?</h3><button class='ma_15_auto btn_file_load' name='unban' type='submit'>Купить разбан за 25 <i class='fa fa-rub' aria-hidden='true'></i></button></div></div></div></div>";
										//echo "<td><button class='ma_15_auto' name='unban' type='submit'>Купить разбан за 25 <i class='fa fa-rub' aria-hidden='true'></i></button></td></tr>";
									}
								} else echo "<tr><td colspan='5'>Ваш аккаунт на данном сервере не забанен</td></tr>";
							} 
							echo "</table>";
							?>
						</div>
					</form>
				</div>
			</div>
			<div class="account-align">
				<div class="main-info">
					<div class="account-header">
						Основная информация
					</div>
					<div class="main-info-list">
						<div>
							<div>Игровой ник</div>
							<div><?echo $_SESSION['user']?></div>
						</div>
						<div>
							<div>Дата регистрации</div>
							<div><?=$register?></div>
						</div>
						<div>
							<div>Регистрация</div>
							<div><?=$reg_type?></div>
						</div>	
						<div>
							<div>Баланс</div>
							<div><?=$rub?><i class='fa fa-rub' aria-hidden='true'></i></div>
						</div>
						<div>
							<div>Кредиты</div>
							<div><?=$credit?> CR</div>
							<a href="<?=$credits?>"><div class="account-btn">Купить/Перевести</div></a>
						</div>

						<? if (false) { echo "
						<div>
							<div>Общее время в игре</div>
							<div>20 часов</div>
						</div>
						<div>
							<div>Время в игре за месяц</div>
							<div>10 часов</div>
						</div>
						<div>
							<div>Клан MMORPG</div>
							<div>Нет</div>
						</div>
						";
						 }
							if(empty($tele_id)) $url_change = $changepass;
							else if ($check_id == "teleMCS") $url_change = 'https://t.me/MCSpace_bot';
							else if ($check_id == "vkMCS") $url_change = 'https://vk.com/im?sel=-184116470';
						  ?>
						 <div>
							<div>Защита аккаунта</div>
							<a href="<?=$url_change?>"><div class="account-btn">Сменить пароль</div></a>
						</div>
					</div>
				</div>
				<div class="account-header">
					Ваши привилегии
				</div>
				<div class="main-info-list">
					<div>
						<div>SkyTech:</div>
						<div><? echo $userP_ST_account; echo $timer_group_ST_text; ?></div>
					</div>
					<div>
						<div>MMORPG:</div>
						<div><? echo $userP_MMORPG_account; echo $timer_group_MMORPG_text; ?></div>
					</div>
				</div>
				<div class="account-header">
					Реферальная система
				</div>
					<div class="ref-info">За приглашенного друга, вы получаете<br> 15% от его любого пополнения баланса</div>
					<input type="text" value="https://mcspace.me/page/reg&ref=<?=$code_invite_code?>" id="ref">
					<a class="account-btn" onclick="copyToClipboard_ref()">Скопировать</a>
			</div>
		</div>
		<?php endif; ?>
	</div>
</div>	  