<?php require_once "cnt.php"; ?>
<div class="box">
<?php if(isset($_GET['inf'])) {$inf = $_GET['inf'];} else {$inf = 'home';}
	switch($inf){
		case 'home':?>
		<h2 class="text_box">База данных MMORPG</h1>
		<a class="cp_bback c_p" onclick="location.href='/'">
			<div class="gr_back">
				<img src="<?=$path_to_images?>back.png" alt="Назад">
				<span class="ma5_0">Назад</span>
			</div>
		</a>
		<div class="gr_info_32">
			<img class="ma o_025" src="<?=$path_to_images?>info.png">
			<p>Здесь Вы можете найти любую интересную информацию по всем предметам и существам, что есть на нашем сервере, а также узнать, что с кого падает и так далее.</p>
		</div>
		<div class="ta_c">
			<a class="c_p" onclick="location.href='?inf=items'">
				<img class="w153_5" src="<?=$path_to_images?>mmorpg_items.png" alt="Предметы">
			</a>
			<a class="c_p" onclick="location.href='?inf=mobs'">
				<img class="w153_5" src="<?=$path_to_images?>mmorpg_mobs.png" alt="Существа">
			</a>
		</div>
<?php 	break;
		case 'items': ?>
		<h2 class="text_box">Предметы</h1>
		<a class="cp_bback c_p" onclick="location.href='/info/info_mmorpg?inf=home'">
			<div class="gr_back">
				<img src="<?=$path_to_images?>back.png" alt="Назад">
				<span class="ma5_0">Назад</span>
			</div>
		</a>
		<div class="gr_info_32">
			<img class="ma o_025" src="<?=$path_to_images?>info.png">
			<p>На данной странице Вы можете найти любой интересующий Вас предмет и узнать все, что у нас есть по нему.</p>
		</div>
		<table class='m0_auto cp_table_inf'>
			<tr>
				<th>&nbsp;</th>
				<th class='ta_c'>ID</th>
				<th class='ta_c'>Иконка</th>
				<th>Название</th>
				<th>Описание</th>
			</tr>
			<? $sql = "SELECT * FROM `mmorpg_items` ORDER BY `mmorpg_items`.`id` ASC";
				$result = $pdo->query($sql);
				$rows = $result->fetchAll();
				foreach($rows as $data) {

					switch ($data['quality']) {
					case "BUYABLE":
						$item = "Покупаемый";
						$color = "ff00aa";
						break;
					case "COMMON":
						$item = "Обычный";
						$color = "808080";
						break;
					case "EPIC":
						$item = "Эпический";
						$color = "8b00ff";
						break;
					case "LEGENDARY":
						$item = "Легендарный";
						$color = "ffd700";
						break;
					case "MYTHIC":
						$item = "Мифический";
						$color = "30d5c8";
						break;
					case "RARE":
						$item = "Редкий";
						$color = "0000ff";
						break;
					case "WELL":
						$item = "Необычный";
						$color = "008000";
						break;
				}
					$strRPG = mb_strtolower($data['item']);
					echo "<tr class='c_p' onclick='location.href=\"?inf=info_items&id=". $data['id'] ."\"'>
					<td class='ta_c'><img class='wh_32' src='../img/info.png' alt='Информация'></td>
					<td class='ta_c'>". $data['id'] . "</td>
					<td class='ta_c'><img class='wh_32' src='../informations/items_mmorpg/".$strRPG.".png?".date('YmdHis')."'></td>
					<td><font color='".$color."'>".$data['name']."</font></td>
					<td>". $data['lore'] . "</td></tr>";
				} ?>
		</table>
<?php 	break;
		case 'mobs': ?>
		<h2 class="text_box">Существа</h1>
		<a class="cp_bback c_p" onclick="location.href='/info/info_mmorpg?inf=home'">
			<div class="gr_back">
				<img src="<?=$path_to_images?>back.png" alt="Назад">
				<span class="ma5_0">Назад</span>
			</div>
		</a>
		<div class="gr_info_32">
			<img class="ma o_025" src="<?=$path_to_images?>info.png">
			<p>На данной странице расположен список всех существ на сервере MMORPG.</p>
		</div>
		<table class='m0_auto cp_table_inf'>
			<tr>
				<th>&nbsp;</th>
				<th class='ta_c'>Имя</th>
				<th class='ta_c'>Уровень</th>
				<th class='ta_c'>Агресивность</th>
			</tr>
			<? $sql = "SELECT * FROM `mmorpg_mobs` ";
				$result = $pdo->query($sql);
				$rows = $result->fetchAll();
				foreach($rows as $data) {
					switch ($data['agressive']) {
						case 0:
							$agressive = "Нейтральные";
							break;
						case 1:
							$agressive = "Враждебные";
							break;
					}

					switch ($data['type']) {
						case "mob":
							$mob = "Обычный";
							$color = "808080";
							break;
						case "miniboss":
							$mob = "Мини-босс";
							$color = "8b0000";
							break;
						case "boss":
							$mob = "Босс";
							$color = "ff0000";
							break;
						case "raidboss":
							$mob = "Рейдовый босс";
							$color = "ffd700";
							break;
					}
					echo "<tr class='c_p' onclick='location.href=\"?inf=info_mobs&id=". $data['id'] ."\"'>
					<td class='ta_c'><img class='wh_32' src='../img/info.png' alt='Информация'></td>
					<td><font color='".$color."'>". $data['name'] . "</font></td>
					<td class='ta_c'>". $data['level'] . "</td>
					<td class='ta_c'>". $agressive . "</td></tr>";

				} ?>
		</table>
<?php 	break;
		case 'info_mobs': ?>
		<?php 
			$id = $_GET['id'];
			$sql = "SELECT * FROM `mmorpg_mobs` WHERE id=$id";
			$result = $pdo->query($sql);
			$rows = $result->fetchAll();
			foreach($rows as $data) {
		?>
		<h2 class="text_box">Информация о существе</h1>
		<a class="cp_bback c_p" onclick="location.href='/info/info_mmorpg?inf=mobs'">
			<div class="gr_back">
				<img src="<?=$path_to_images?>back.png" alt="Назад">
				<span class="ma5_0">Назад</span>
			</div>
		</a>
		<div>
			<div class="gr_info_32">
				<img class="ma o_025" src="<?=$path_to_images?>info.png">
				<p>Характеристика о существе «<?=$data['name']?>»</p>
			</div>
		</div>
		<table class='m0_auto cp_table_inf'>
			<tr>
				<th class="w250">Название характеристики</th>
				<th class="w150">Значения</th>
			</tr>
			<? 	switch ($data['type']) {
					case "mob":
						$mob = "Обычный";
						$color = "808080";
						break;
					case "miniboss":
						$mob = "Мини-босс";
						$color = "8b0000";
						break;
					case "boss":
						$mob = "Босс";
						$color = "ff0000";
						break;
					case "raidboss":
						$mob = "Рейдовый босс";
						$color = "ffd700";
						break;
				}
				echo "<tr><td>Тип</td><td><font color='".$color."'>".$mob."</font></td></tr>
					<tr><td>Здоровье</td><td>".$data['health']."</td></tr>
					<tr><td>Физический урон</td><td>".$data['damage']."</td></tr>
					<tr><td>Магический урон</td><td>".$data['mag_damage']."</td></tr>
					<tr><td>Броня</td><td>".$data['armor']."</td></tr>
					<tr><td>Магическая броня</td><td>".$data['mag_armor']."</td></tr>
					<tr><td>Сопротивление</td><td>".$data['resistance']."</td></tr>
					<tr><td>Время воскрешения</td><td>".$data['respawn']."</td></tr>
					<tr><td>Опыта за убийство</td><td>".$data['xp']."</td></tr>";
				} ?>
		</table>
		<br>
		<h2 class="text_box">Таблица дропа</h2>
		<br>

			<table class='m0_auto cp_table_inf'>
				<tr>
					<th class="w250">ID</th>
					<th class="w150">Название</th>
					<th class="w150">Кол-во</th>
					<th class="w150">Шанс</th>
				</tr>
			<?
			if($mod_group_MMORPG >= 11) {
					echo "<tr><td>1</td><td><font color='red'>Меч</font></td><td>1-1</td><td>0.1%</td></tr>
					<tr><td>2</td><td><font color='yellow'>Лук</font></td><td>1-1</td><td>0.5%</td></tr>";
			}
			?>

			 
		</table>

<?php 	break;
		case 'info_items': ?>
		<?php 
			$id = $_GET['id'];
			$sql = "SELECT * FROM `mmorpg_items` WHERE id=$id";
			$result = $pdo->query($sql);
			$rows = $result->fetchAll();
			foreach($rows as $data) {
		?>
		<h2 class="text_box">Информация о предмете</h1>
		<a class="cp_bback c_p" onclick="location.href='/info/info_mmorpg?inf=items'">
			<div class="gr_back">
				<img src="<?=$path_to_images?>back.png" alt="Назад">
				<span class="ma5_0">Назад</span>
			</div>
		</a>
		<div>
			<div class="gr_info_32">
				<img class="ma o_025" src="<?=$path_to_images?>info.png">
				<p>Характеристика о предмете «<?=$data['name']?>»</p>
			</div>
		</div>
		<table class='m0_auto cp_table_inf'>
			<tr>
				<th class="w250">Название характеристики</th>
				<th class="w150">Значения</th>
			</tr>
			<? 	switch ($data['quality']) {
					case "BUYABLE":
						$item = "Покупаемый";
						$color = "ff00aa";
						break;
					case "COMMON":
						$item = "Обычный";
						$color = "808080";
						break;
					case "EPIC":
						$item = "Эпический";
						$color = "8b00ff";
						break;
					case "LEGENDARY":
						$item = "Легендарный";
						$color = "ffd700";
						break;
					case "MYTHIC":
						$item = "Мифический";
						$color = "30d5c8";
						break;
					case "RARE":
						$item = "Редкий";
						$color = "0000ff";
						break;
					case "WELL":
						$item = "Необычный";
						$color = "008000";
						break;
				}
												echo "<tr><td>Качество</td><td><font color='".$color."'>".$item."</font></td></tr>";
				if($data['lore'] !== "")		echo "<tr><td>Описание</td><td>".$data['lore']."</td></tr>";
				if($data['damage'] !== "")		echo "<tr><td>Урон</td><td>".$data['damage']."</td></tr>";
				if($data['mag_damage'] !== "")	echo "<tr><td>Маг. Урон</td><td>".$data['mag_damage']."</td></tr>";
				if($data['crit'] !== "")		echo "<tr><td>Шанс крит. удара</td><td>".$data['crit']."</td></tr>";
				if($data['vampirism'] !== "")	echo "<tr><td>Вампиризм</td><td>".$data['vampirism']."</td></tr>";
				if($data['armor'] !== "")		echo "<tr><td>Броня</td><td>".$data['armor']."</td></tr>";
				if($data['mag_armor'] !== "")	echo "<tr><td>Маг. Броня</td><td>".$data['mag_armor']."</td></tr>";
				if($data['resistance'] !== "")	echo "<tr><td>Сопротивление</td><td>".$data['resistance']."</td></tr>";
				if($data['health'] !== "")		echo "<tr><td>Здоровье</td><td>".$data['health']."</td></tr>";
				if($data['regeneration'] !== "")echo "<tr><td>Регенерация</td><td>".$data['regeneration']."</td></tr>";
				if($data['subType'] == 1)		echo "<tr><td>Динамические характеристики</td><td>Да</td></tr>";
				if($data['r_lvl'] !== "")		echo "<tr><td>Минимальный уровень</td><td>".$data['r_lvl']."</td></tr>";
				if($data['r_power'] !== "")		echo "<tr><td>Необходимая сила</td><td>".$data['r_power']."</td></tr>";
				if($data['r_agility'] !== "")	echo "<tr><td>Необходимая ловкость</td><td>".$data['r_agility']."</td></tr>";
				if($data['r_wisdom'] !== "")	echo "<tr><td>Необходимая мудрость</td><td>".$data['r_wisdom']."</td></tr>";
				if($data['tied'] == 1)			echo "<tr><td>Привязано к персонажу</td><td>Да</td></tr>";
				} ?>
		</table>
		<br>
		<h2 class="text_box">Таблица дропа</h2>

		<h4 class="text_box">С кого падают</h4>
		<br>

			<table class='m0_auto cp_table_inf'>
				<tr>
					<th class="w250">ID</th>
					<th class="w150">Имя</th>
					<th class="w150">Уровень существа</th>
					<th class="w150">Кол-во</th>
					<th class="w150">Шанс</th>
				</tr>
			<?
			if($mod_group_MMORPG >= 11) {
					echo "<tr><td>1</td><td><font color='red'>Зомби</font></td><td>12</td><td>1-1</td><td>0.1%</td></tr>
					<tr><td>2</td><td><font color='yellow'>Скелет</font></td><td>13</td><td>1-1</td><td>0.5%</td></tr>";
			}
			?>

			 
		</table>
<?php 	break; } ?>
</div>