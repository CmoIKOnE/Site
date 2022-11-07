<?php require_once "../cnt.php"; ?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<link media="screen" type="text/css" rel="stylesheet" href="/css/style.css?<?php echo date('YmdHis');?>" />
	<title>Панель управления проекта MCSpace</title>
</head>
<body>
	<div class="cp_box">
		<div class="box ta_c">
			<h1 class="text_box">Панель управления проекта MCSpace</h1>
		</div>
	</div>
	<div class="cp_box">
		<div class="box ta_c">
			<?php if($_SESSION['login'] == true): ?>
				<?php if($mod_group_ST == 8 || $mod_group_ST >= 10 || $mod_group_ST == 5 || $mod_group_ST == 7) { ?>
					<?php if(isset($_GET['act'])) {$act = $_GET['act'];} else {$act = 'home';}
						switch($act){
							case 'home':?>
							<h2 class="text_box">Список серверов</h1>
							<a class="cp_bback c_p" onclick="location.href='/'">
								<div class="gr_back">
									<img src="<?=$path_to_images?>back.png" alt="Назад">
									<span class="ma5_0">Назад</span>
								</div>
							</a>
							<a class="c_p" onclick="location.href='?act=skytech'">
								<img class="w153_5" src="<?=$path_to_images?>servers_st.png" alt="SkyTech">
							</a>
							<a class="c_p" onclick="location.href='?act=technomagic'">
								<img class="w153_5" src="<?=$path_to_images?>servers_tm.png" alt="TechnoMagic">
							</a>
					<?php 	break;
							case 'skytech': ?>
							<h2 class="text_box">Выбранный сервер SkyTech</h1>
							<a class="cp_bback c_p" onclick="location.href='/panel/index.php?act=home'">
								<div class="gr_back">
									<img src="<?=$path_to_images?>back.png" alt="Назад">
									<span class="ma5_0">Назад</span>
								</div>
							</a>
							<div>
							<?php if($mod_group_ST >= 10 || $mod_group_ST == 8) { ?>
								<a class="c_p" onclick="location.href='?act=skytech_donate'">
									<img class="w153_5" src="<?=$path_to_images?>skytech_donate.png">
								</a>
							<? } ?>
							<?php if($mod_group_ST >= 10 || $mod_group_ST == 8) { ?>
								<a class="c_p" onclick="location.href='?act=skytech_shop'">
									<img class="w153_5" src="<?=$path_to_images?>skytech_shop.png">
								</a>
							<? } ?>
							<?php if($mod_group_ST == 8 || $mod_group_ST == 5 || $mod_group_ST == 7 || $mod_group_ST >=10) { ?>
								<a class="c_p" onclick="location.href='?act=skytech_team'">
									<img class="w153_5" src="<?=$path_to_images?>skytech_team.png">
								</a>
							<? } ?>
							</div>
					<?php 	break;
							case 'skytech_donate': ?>
							<h2 class="text_box">Выбранный сервер SkyTech</h1>
							<a class="cp_bback c_p" onclick="location.href='/panel/index.php?act=skytech'">
								<div class="gr_back">
									<img src="<?=$path_to_images?>back.png" alt="Назад">
									<span class="ma5_0">Назад</span>
								</div>
							</a>
							<div class="tabs bar">
								<input type="radio" id="tab1" name="tab-control" checked>
								<input type="radio" id="tab2" name="tab-control">
								<input type="radio" id="tab3" name="tab-control">
								<input type="radio" id="tab4" name="tab-control">
								<input type="radio" id="tab5" name="tab-control">
								<input type="radio" id="tab6" name="tab-control">
								<ul>
									<li title="Redstone"><label for="tab1" role="button"><span>Redstone</span></label></li>
									<li title="Lapis"><label for="tab2" role="button"><span>Lapis</span></label></li>
									<li title="Gold"><label for="tab3" role="button"><span>Gold</span></label></li>
									<li title="Diamond"><label for="tab4" role="button"><span>Diamond</span></label></li>
									<li title="Emerald"><label for="tab5" role="button"><span>Emerald</span></label></li>
									<li title="$Mod$"><label for="tab6" role="button"><span>$Mod$</span></label></li>
								</ul>
								<div class="slider"><div class="indicator"></div></div>
								<div class="content">
									<section>
										<form action='panelST.php' method='post'>
											<img class="shop-img" src="<?=$path_to_images?>Red.png">
											<br>
											<div class="gr_input jc_c">
												<span>Цена на месяц</span>
												<span>Цена навсегда</span>
												<span></span>
												<input class="cp_input" type="text" name="redM" value="<?=$red30?>">
												<input class="cp_input" type="text" name="redF" value="<?=$redF?>">
											</div>
											<button class="btn ma_auto c_p" name="submit" type="submit">Изменить</button>
										</form>
									</section>
									<section>
										<form action='panelST.php' method='post'>
											<img class="shop-img" src="<?=$path_to_images?>Lapis.png">
											<br>
											<div class="gr_input jc_c">
												<span>Цена на месяц</span>
												<span>Цена навсегда</span>
												<span></span>
												<input class="cp_input" type="text" name="lapisM" value="<?=$lapis30?>">
												<input class="cp_input" type="text" name="lapisF" value="<?=$lapisF?>">
											</div>
											<button class="btn ma_auto c_p" name="submit" type="submit">Изменить</button>
										</form>
									</section>
									<section>
										<form action='panelST.php' method='post'>
											<img class="shop-img" src="<?=$path_to_images?>Gold.png">
											<br>
											<div class="gr_input jc_c">
												<span>Цена на месяц</span>
												<span>Цена навсегда</span>
												<span></span>
												<input class="cp_input" type="text" name="goldM" value="<?=$gold30?>">
												<input class="cp_input" type="text" name="goldF" value="<?=$goldF?>">
											</div>
											<button class="btn ma_auto c_p" name="submit" type="submit">Изменить</button>
										</form>
									</section>
									<section>
										<form action='panelST.php' method='post'>
											<img class="shop-img" src="<?=$path_to_images?>Diamond.png">
											<br>
											<div class="gr_input jc_c">
												<span>Цена на месяц</span>
												<span>Цена навсегда</span>
												<span></span>
												<input class="cp_input" type="text" name="diamondM" value="<?=$diamond30?>">
												<input class="cp_input" type="text" name="diamondF" value="<?=$diamondF?>">
											</div>
											<button class="btn ma_auto c_p" name="submit" type="submit">Изменить</button>
										</form>
									</section>
									<section>
										<form action='panelST.php' method='post'>
											<img class="shop-img" src="<?=$path_to_images?>Emerald.png">
											<br>
											<div class="gr_input jc_c">
												<span>Цена на месяц</span>
												<span>Цена навсегда</span>
												<span></span>
												<input class="cp_input" type="text" name="emeraldM" value="<?=$emerald30?>">
												<input class="cp_input" type="text" name="emeraldF" value="<?=$emeraldF?>">
											</div>
											<button class="btn ma_auto c_p" name="submit" type="submit">Изменить</button>
										</form>
									</section>
									<section>
										<form action='panelST.php' method='post'>
											<img class="shop-img" src="<?=$path_to_images?>$Mod$.png">
											<br>
											<div class="gr_input jc_c">
												<span>Цена на месяц</span>
												<span>Цена навсегда</span>
												<span></span>
												<input class="cp_input" type="text" name="donModM" value="<?=$mod30?>">
												<input class="cp_input" type="text" name="donModF" value="<?=$modF?>">
											</div>
											<button class="btn ma_auto c_p" name="submit" type="submit">Изменить</button>
										</form>
									</section>
								</div>
							</div>
					<?php 	break;
						case 'skytech_shop': ?>
							<h2 class="text_box">Выбранный сервер SkyTech</h1>
							<a class="cp_bback c_p" onclick="location.href='/panel/index.php?act=skytech'">
								<div class="gr_back">
									<img src="<?=$path_to_images?>back.png" alt="Назад">
									<span class="ma5_0">Назад</span>
								</div>
							</a>
							<div class="tabs">
								<div class="message error">
									<h3>ВНИМАНИЕ!!!</h3><br>
									<b>1. Когда Вы добавляете товар, номер товара вставляется автоматически.</b><br>
									<b>2. Когда Вы изменяете товар, Вы можете изменить все значения полей товара, кроме <u>№ товара</u>. То есть Вы сначала вводите название товара, а потом по порядку можете менять.</b>
								</div>
								<div class="box_cp">
									<div class="oy_s">
										<h3 class="text_box bar">Список товаров</h3>
										<table class="cp_table">
											<tr>
												<th>№</th>
												<th class="w50">Иконка</th>
												<th class="w300">Название товара</th>
												<th class="w80">ID предмета</th>
												<th class="w125">Мод</th>
												<th class="w50">Цена</th>
											</tr>
											<? $sql = "SELECT * FROM shop_ST";
											$result = $pdo->query($sql);
											$rows = $result->fetchAll();
											foreach($rows as $data) {
												if(isset($data['itemTitle']))
													$itemTitleR = translitEN_RU($data['itemTitle']);
												else 
													$itemTitleR = '';
												echo "<tr><td>". $data['itemNumber'] . 
												"</td><td><img src='". $data['icon'] . 
												"'></td><td>". $itemTitleR .  
												"</td><td>". $data['id_item'] . 
												"</td><td>". $data['itemMod'] . 
												"</td><td>". $data['itemPrice'] . 
												"</td></tr>";
											} ?>
										</table>
									</div>
									<div class="d_g" style="margin:10px 128px;grid-template-columns: 235px 10px 235px"><a class="btn_py_d" style="padding:9px 9px 13px 9px" onclick="location.href='#mod_add_ST'">Добавить мод</a><br><a class="btn_py_d" style="padding:9px 9px 13px 9px" onclick="location.href='#mod_del_ST'">Удалить мод</a></div>
									<div class="d_g" style="margin:auto 6px;grid-template-columns: 235px 10px 235px 10px 235px"><a class="btn_py_d" style="padding:9px 9px 13px 9px" onclick="location.href='#shop_add_ST'">Добавить товар</a><br><a class="btn_py_d" style="padding:9px 9px 13px 9px" onclick="location.href='#shop_upd_ST'">Изменить товар</a><br><a class="btn_py_d" style="padding:9px 9px 13px 9px" onclick="location.href='#shop_del_ST'">Удалить товар</a></div>
								</div>
								<div id="mod_add_ST" class="iw-modal">
									<div class="iw-modal-wrapper">
										<div class="iw-CSS-modal-inner">
											<div class="iw-modal-header">
												<h3 class="ta_c">Добавление мода</h3>
												<a href="#close" title="Закрыть" class="iw-close">×</a>
											</div>
											<div class="iw-modal-text">    
												<form action='panel_mod_add_ST.php' method='post'>
													<fieldset class="b_br">
														<legend class="p0_5">Название мода</legend>
														<input class="cp_input w150" type="text" name="modTitle" value="">
													</fieldset>
													<button class="btn ma_auto c_p" type="submit">Добавить</button>
												</form>
											</div>
										</div>
									</div>	
								</div>
								<div id="mod_del_ST" class="iw-modal">
									<div class="iw-modal-wrapper">
										<div class="iw-CSS-modal-inner">
											<div class="iw-modal-header">
												<h3 class="ta_c">Удаление мода</h3>
												<a href="#close" title="Закрыть" class="iw-close">×</a>
											</div>
											<div class="iw-modal-text">    
												<form action='panel_mod_del_ST.php' method='post'>
													<fieldset class="b_br">
														<legend class="p0_5">Название мода</legend>
														<input class="cp_input w150" type="text" name="modTitle" value="">
													</fieldset>
													<button class="btn ma_auto c_p" type="submit">Удалить</button>
												</form>
											</div>
										</div>
									</div>	
								</div>
								<div id="shop_add_ST" class="iw-modal">
									<div class="iw-modal-wrapper">
										<div class="iw-CSS-modal-inner">
											<div class="iw-modal-header">
												<h3 class="ta_c">Добавление товара</h3>
												<a href="#close" title="Закрыть" class="iw-close">×</a>
											</div>
											<div class="iw-modal-text">    
												<form action='panel_shop_add_ST.php' method='post'>
													<div class="grinput">
														<fieldset class="b_br">
															<legend class="p0_5">Название товара</legend>
															<input class="cp_input w150" type="text" name="itemTitle" value="">
														</fieldset>
														<br>
														<fieldset class="b_br">
															<legend class="p0_5">ID предмета</legend>
															<input class="cp_input w150" type="text" name="id_item" value="">
														</fieldset>
													</div>
													<br>
													<div class="grinput">
														<fieldset class="b_br">
															<legend class="p0_5">Выбор мода</legend>
															<select name='itemMod' class="cp_input w150">
																<option disabled selected>Выберите мод</option>
																<?
																	$sqlmod = "SELECT modTitle FROM modlist";
																	$resultmod = $pdo->query($sqlmod);
																	$rowsmod = $resultmod->fetchAll();
																	foreach($rowsmod as $datamod) {
																		echo "<option>".$datamod['modTitle']."</option>";
																	} 
																?>
															</select>
														</fieldset>
														<br>
														<fieldset class="b_br">
															<legend class="p0_5">Цена товара</legend>
															<input class="cp_input w150" type="text" name="itemPrice" value="">
														</fieldset>
													</div>
													<br>
													<fieldset class="b_br">
														<legend class="p0_5">Иконка</legend>
														<!--<input class="cp_input w150" type="text" name="icon" value="<?$icon?>">-->
														<select name='icon' class="cp_input w150">
															<?php
																$dir = '../img_items/';
															    $cols = 14;
															    $files = scandir($dir);
															    $k = 0;
															    $count = count($files);
															    $summa = $count - 2;
															    echo "<option disabled selected>Выберите иконку (Всего - $summa)</option>";
															    for ($i = 0; $i < count($files); $i++) {
															    	if (($files[$i] != ".") && ($files[$i] != "..")) {
															      		if ($k % $cols == 0) echo "<tr>";
														      			$path = $dir.$files[$i];
														    			$path_parts = pathinfo($files[$i]);
														      			echo "<option value='$path'>";
														      			if(isset($path_parts['filename']))
																			$iconTitleRU = translitEN_RU($path_parts['filename']);
																		else 
																			$iconTitleRU = '';
														      			echo "$iconTitleRU";
														  			    echo "</option>";
														      			/* Закрываем строку, если необходимое количество было выведено, либо данная итерация последняя */
														      			if ((($k + 1) % $cols == 0) || (($i + 1) == count($files))) echo "</tr>";
														     			$k++; // Увеличиваем вспомогательный счётчик
															    	}
															  	}
																echo "</select>";
															?>
													</fieldset>
													<br>													
													<button class="btn ma_auto c_p" type="submit">Добавить</button>
												</form>
											</div>
										</div>
									</div>	
								</div>
								<div id="shop_upd_ST" class="iw-modal">
									<div class="iw-modal-wrapper">
										<div class="iw-CSS-modal-inner">
											<div class="iw-modal-header">
												<h3 class="ta_c">Изменение товара</h3>
												<a href="#close" title="Закрыть" class="iw-close">×</a>
											</div>
											<div class="iw-modal-text">    
												<form action='panel_shop_upd_ST.php' method='post'>
													<div class="grinput">
														<div class="d_n">
															<fieldset class="b_br">
																<legend class="p0_5">Номер товара</legend>
																<input class="cp_input w150" type="text" name="itemNumber" value="">
															</fieldset>
														</div>
														<fieldset class="b_br">
															<legend class="p0_5">Название товара</legend>
															<select id="item_title" name='itemTitle' class='cp_input w150' onChange="fl()">
																<option disabled selected value=''>Выберите товар из списка</option>
																<? $sql = "SELECT * FROM shop_ST ";
																	$result = $pdo->query($sql);
																	$rows = $result->fetchAll();
																	foreach($rows as $data) {
																		if(isset($data['itemTitle']))
																			$itemTitleR = translitEN_RU($data['itemTitle']);
																		else 
																			$itemTitleR = '';
																		echo "<option value='".$itemTitleR."'>".$itemTitleR."</option>";
																	} 
																?>
															</select>
														</fieldset>
														<br>
														<fieldset class="b_br">
															<legend class="p0_5">ID предмета</legend>
															<input id="id_item" class="cp_input w150" type="text" name="id_item" value="<?=$data['id_item']?>">
														</fieldset>	
													</div>
													<br>
													<div class="grinput">
														<fieldset class="b_br">
															<legend class="p0_5">Иконка</legend>
															<select name='icon' class="cp_input w150">
																<?php
																	$dir = '../img_items/';
																    $cols = 14;
																    $files = scandir($dir);
																    $k = 0;
																    $count = count($files);
																    $summa = $count - 2;
																    echo "<option disabled selected>Выберите иконку (Всего - $summa)</option>";
																    for ($i = 0; $i < count($files); $i++) {
																    	if (($files[$i] != ".") && ($files[$i] != "..")) {
																      		if ($k % $cols == 0) echo "<tr>";
															      			$path = $dir.$files[$i];
															    			$path_parts = pathinfo($files[$i]);
															      			echo "<option value='$path'><img src='$path'>";
															      			if(isset($path_parts['filename']))
																				$iconTitleRU = translitEN_RU($path_parts['filename']);
																			else 
																				$iconTitleRU = '';
															      			echo "$iconTitleRU";
															  			    echo "</option>";
															      			/* Закрываем строку, если необходимое количество было выведено, либо данная итерация последняя */
															      			if ((($k + 1) % $cols == 0) || (($i + 1) == count($files))) echo "</tr>";
															     			$k++; // Увеличиваем вспомогательный счётчик
																    	}
																  	}
																?>
															</select>
														</fieldset>
														<br>
														<fieldset class="b_br">
															<legend class="p0_5">Выбор мода</legend>
															<select name='itemMod' class="cp_input w150">
																<option disabled selected>Выберите мод</option>
																<?
																	$sqlmod = "SELECT modTitle FROM modlist";
																	$resultmod = $pdo->query($sqlmod);
																	$rowsmod = $resultmod->fetchAll();

																	foreach($rowsmod as $datamod) {
																		echo "<option>".$datamod['modTitle']."</option>";
																	} 
																?>
															</select>
														</fieldset>
													</div>
													<br>
													<fieldset class="b_br">
														<legend class="p0_5">Цена товара</legend>
														<input class="cp_input w150" type="text" name="itemPrice" value="<?=$data['itemPrice']?>">
													</fieldset>
													<br>
													<button class="btn ma_auto c_p" type="submit">Изменить</button>
												</form>
											</div>
										</div>
									</div>	
								</div>
								<div id="shop_del_ST" class="iw-modal">
									<div class="iw-modal-wrapper">
										<div class="iw-CSS-modal-inner">
											<div class="iw-modal-header">
												<h3 class="ta_c">Удаление товара</h3>
												<a href="#close" title="Закрыть" class="iw-close">×</a>
											</div>
											<div class="iw-modal-text">    
												<form action='panel_shop_del_ST.php' method='post'>
													<fieldset class="b_br">
														<legend class="p0_5">Название товара</legend>
														<input class="cp_input w150" type="text" name="itemTitle" value="">
													</fieldset>
													<button class="btn ma_auto c_p" type="submit">Удалить</button>
												</form>
											</div>
										</div>
									</div>	
								</div>
							</div>
					<?php 	break;
						case 'skytech_team': ?>
							<h2 class="text_box">Выбранный сервер SkyTech</h1>
							<a class="cp_bback c_p" onclick="location.href='/panel/index.php?act=skytech'">
								<div class="gr_back">
									<img src="<?=$path_to_images?>back.png" alt="Назад">
									<span class="ma5_0">Назад</span>
								</div>
							</a>
							<div class="tabs">
								<div class="box_cp">
									<div class="oy_s">
										<h3 class="text_box bar">Состав сервера Skytech'a</h3>
										<table class="cp_table">
											<tr>
												<th>№</th>
												<th class="w350">Никнейм</th>
												<th class="w125">Должность</th>
												
											</tr>
											<tr>
												<td class="ta_c" colspan="3"><a class="c_p" onclick="location.href='#team_add_ST'">Добавить/редактировать пользователя в состав</a></td>
											</tr>
											<? 
												$sqlteam = "SELECT login, mod_group FROM mod_group_ST";
												$result = $pdo->query($sqlteam);
												$rows = $result->fetchAll();
												$i=1;
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
													} else $user_ST = 'Владелец';
													if ($mod_group_ST == 5) {
														if($data['mod_group'] >= 1 && $data['mod_group'] <= 4) {
															echo "<tr><td>". $i++ . 
															"</td><td>". $data['login'] . 
															"</td><td>". $user_ST . 
															"</td></tr>";
														}
													}
													if ($mod_group_ST == 7) {
														if($data['mod_group'] == 6) {
															echo "<tr><td>". $i++ . 
															"</td><td>". $data['login'] . 
															"</td><td>". $user_ST . 
															"</td></tr>";
														}
													} 
													if ($mod_group_ST == 10) {
														if($data['mod_group'] >= 1 && $data['mod_group'] <= 9) {
															echo "<tr><td>". $i++ . 
															"</td><td>". $data['login'] . 
															"</td><td>". $user_ST . 
															"</td></tr>";
														}
													}
													if ($mod_group_ST == 8 || $mod_group_ST == 11) {
														if($data['mod_group'] >= 1 && $data['mod_group'] <= 10) {
															echo "<tr><td>". $i++ . 
															"</td><td>". $data['login'] . 
															"</td><td>". $user_ST . 
															"</td></tr>";
														}
													}
												}
												//if(!$data['mod_group'] == 6) echo "<tr><td class='ta_c' colspan='3'>На данный момент нет строителей</td></tr>";
											?>
											<tr>
												<td class="ta_c" colspan="3">
													<a class="c_p" onclick="location.href='#team_del_ST'"><img src="<?=$path_to_images?>delete_user.png" alt="Удалить пользователя из состава"></a>	
												</td>
											</tr>
										</table>		
									</div>
								</div>
								<div id="team_add_ST" class="iw-modal">
									<div class="iw-modal-wrapper">
										<div class="iw-CSS-modal-inner">
											<div class="iw-modal-header">
												<h3 class="ta_c">Добавление/редактирование пользователя в состав</h3>
												<a href="#close" title="Закрыть" class="iw-close">×</a>
											</div>
											<div class="iw-modal-text">    
												<form action='panel_team_upd_ST.php' method='post'>
													<fieldset class="b_br">
														<legend class="p0_5">Никнейм</legend>
														<select name='login' class="cp_input w150">
															<option disabled selected>Выберите никнейм игрока</option>
															<?
																$sql = "SELECT login, mod_group FROM mod_group_ST";
																$result = $pdo->query($sql);
																$rows = $result->fetchAll();

																foreach($rows as $data) {
																	$mgST = $data['mod_group'];
																	if ($mod_group_ST == 5) {
																		if($mgST <= 4){
																			echo "<option>".$data['login']."</option>";
																		}
																	}elseif ($mod_group_ST == 7) {
																		if($mgST <= 3){
																			echo "<option>".$data['login']."</option>";
																		}
																	}elseif ($mod_group_ST == 10) {
																		if($mgST <= 9){
																			echo "<option>".$data['login']."</option>";
																		}
																	}else{
																		echo "<option>".$data['login']."</option>";
																	}
																} 
															?>
														</select>
													</fieldset>
													
													<fieldset class="b_br">
														<legend class="p0_5">Должность</legend>
														<select name='mod_group_ST' class='cp_input w150'>
															<option disabled selected>Выберите должность</option>
															<?
																if ($mod_group_ST == 7) {
																	echo "<option>Строитель</option></select>";
																}elseif ($mod_group_ST == 5) {
																	echo "<option>Стажёр</option><option>Помощник</option><option>Модератор</option><option>Ст. Модератор</option></select>";
																}elseif ($mod_group_ST == 10) {
																	echo "<option>Стажёр</option><option>Помощник</option><option>Модератор</option><option>Ст. Модератор</option><option>Гл. Модератор</option><option>Строитель</option><option>Геймдизайнер</option><option>Куратор</option>";
																}else{
																	echo "<option>Стажёр</option><option>Помощник</option><option>Модератор</option><option>Ст. Модератор</option><option>Гл. Модератор</option><option>Строитель</option><option>Геймдизайнер</option><option>Разработчик</option><option>Куратор</option><option>Тех. Админ</option>";
																}
															?>
														</select>
													</fieldset>
													<button class="btn ma_auto c_p" type="submit">Добавить</button>
												</form>
											</div>
										</div>
									</div>	
								</div>
								<div id="team_del_ST" class="iw-modal">
									<div class="iw-modal-wrapper">
										<div class="iw-CSS-modal-inner">
											<div class="iw-modal-header">
												<h3 class="ta_c">Удаление пользователя в составе</h3>
												<a href="#close" title="Закрыть" class="iw-close">×</a>
											</div>
											<div class="iw-modal-text">    
												<form action='panel_team_del_ST.php' method='post'>
													<fieldset class="b_br">
														<legend class="p0_5">Никнейм</legend>
														<select name='login' class="cp_input w150">
															<option disabled selected>Выберите никнейм игрока</option>
															<?
																$sql = "SELECT login, mod_group FROM mod_group_ST";
																$result = $pdo->query($sql);
																$rows = $result->fetchAll();

																foreach($rows as $data) {
																	//$mgST = $data['mod_group'];
																	if ($mod_group_ST == 5) {
																		if($data['mod_group'] >= 1 && $data['mod_group'] <= 4) {
																			echo "<option>".$data['login']."</option>";
																		}
																	}
																	if ($mod_group_ST == 7) {
																		if($data['mod_group'] == 6) {
																			echo "<option>".$data['login']."</option>";
																		}
																	}
																	if ($mod_group_ST == 10) {
																		if($data['mod_group'] >= 1 && $data['mod_group'] <= 9) {
																			echo "<option>".$data['login']."</option>";
																		}
																	}
																	if ($mod_group_ST == 8 || $mod_group_ST == 11) {
																		if($data['mod_group'] >= 1 && $data['mod_group'] <= 10) {
																			echo "<option>".$data['login']."</option>";
																		}
																	}

																	//if ($mgST >=1)	echo "<option>".$data['login']."</option>";
																} 
															?>
														</select>
													</fieldset>
													<button class="btn ma_auto c_p" type="submit">Удалить</button>
												</form>
											</div>
										</div>
									</div>	
								</div>
							</div>
						<?php echo "</div>"; ?>
					<?php 	break;
						case 'technomagic': ?>
							<h2 class="text_box">Выбранный сервер TechnoMagic</h1>
							<div class="tabs">
								<input type="radio" id="tab1" name="tab-control" checked>
								<input type="radio" id="tab2" name="tab-control">
								<input type="radio" id="tab3" name="tab-control">
								<input type="radio" id="tab4" name="tab-control">
								<input type="radio" id="tab5" name="tab-control">
								<input type="radio" id="tab6" name="tab-control">
								<ul>
									<li title="Redstone"><label for="tab1" role="button"><br><span>Redstone</span></label></li>
									<li title="Lapis"><label for="tab2" role="button"><br><span>Lapis</span></label></li>
									<li title="Gold"><label for="tab3" role="button"><br><span>Gold</span></label></li>
									<li title="Diamond"><label for="tab4" role="button"><br><span>Diamond</span></label></li>
									<li title="Emerald"><label for="tab5" role="button"><br><span>Emerald</span></label></li>
									<li title="$Mod$"><label for="tab6" role="button"><br><span>$Mod$</span></label></li>
								</ul>
								<div class="slider"><div class="indicator"></div></div>
								<div class="content">
										<!--<section><form action='panelST.php' method='post'><img class="shop-img" src="<=$path_to_images?>Red.png"><br><input class="cp_input" type="text" name="redM" value="<=$red30?>"><input class="cp_input" type="text" name="redF" value="<=$redF?>"><input class="cp_input" type="text" name="redDis" value="<=$redDis?>"><button class="btn ma_auto c_p" name="submit" type="submit">Изменить</button></form><br></section>
										<section><form action='panelST.php' method='post'><img class="shop-img" src="<=$path_to_images?>Lapis.png"><br><input class="cp_input" type="text" name="lapisM" value="<=$lapis30?>"><input class="cp_input" type="text" name="lapisF" value="<=$lapisF?>"><input class="cp_input" type="text" name="lapisDis" value="<=$lapisDis?>"><button class="btn ma_auto c_p" name="submit" type="submit">Изменить</button></form><br></section>
										<section><form action='panelST.php' method='post'><img class="shop-img" src="<=$path_to_images?>Gold.png"><br><input class="cp_input" type="text" name="goldM" value="<=$gold30?>"><input class="cp_input" type="text" name="goldF" value="<=$goldF?>"><input class="cp_input" type="text" name="goldDis" value="<=$goldFDis?>"><button class="btn ma_auto c_p" name="submit" type="submit">Изменить</button></form><br></section>
										<section><form action='panelST.php' method='post'><img class="shop-img" src="<=$path_to_images?>Diamond.png"><br><input class="cp_input" type="text" name="diamondM" value="<=$diamond30?>"><input class="cp_input" type="text" name="diamondF" value="<=$diamondF?>"><input class="cp_input" type="text" name="diamondDis" value="<=$diamondDis?>"><button class="btn ma_auto c_p" name="submit" type="submit">Изменить</button></form><br></section>
										<section><form action='panelST.php' method='post'><img class="shop-img" src="<=$path_to_images?>Emerald.png"><br><input class="cp_input" type="text" name="emeraldM" value="<=$emerald30?>"><input class="cp_input" type="text" name="emeraldF" value="<=$emeraldF?>"><input class="cp_input" type="text" name="emeraldDis" value="<=$emeraldDis?>"><button class="btn ma_auto c_p" name="submit" type="submit">Изменить</button></form><br></section>
										<section><form action='panelST.php' method='post'><img class="shop-img" src="<=$path_to_images?>$Mod$.png"><br><input class="cp_input" type="text" name="donModM" value="<=$mod30?>"><input class="cp_input" type="text" name="donModF" value="<=$modF?>"><input class="cp_input" type="text" name="modDis" value="<=$modDis?>"><button class="btn ma_auto c_p" name="submit" type="submit">Изменить</button></form><br></section>-->
								</div>
							</div>
						<? echo "</div>"; ?>
					<?php 	break; } ?>
				<?php } else { ?>
					<h1 class="warning">Доступ запрещён!</h1>
				<?php } ?>
			<?php else: ?>
			<h1 class="warning">Доступ запрещён!</h1>	
			<?php endif; ?>
		</div> 
	</div>
</body>
</html>