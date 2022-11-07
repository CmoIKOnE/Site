<?
require_once "cnt.php";
$function = $_POST['func'];
switch ($function) {
	case 'show_page':
	$server = $_POST['srv'];
	switch ($server) {
		case 'mmo':
			$type = $_POST['type'];
			switch ($type) {
				case 'items':
					{
						echo "<table class='mmo-item-table'>
							<tr>
								<th>ID</th>
								<th>Вид</th>
								<th>Название</th>
								<th>Описание</th>
								<th>Качество</th>
								<th style='visibility: hidden;'>Подробнее</th>
							</tr>";
						$sql = "SELECT * FROM `mmorpg_items` ORDER BY `mmorpg_items`.`id` ASC";
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
								echo "<tr>
									<td>". $data['id'] . "</td>
									<td><img class='wh_32' src='../informations/items_mmorpg/". $strRPG .".png?". date('YmdHis') ."'></td>
									<!--td style='color: #". $color ."'>". $data['name'] ."</td-->
									<td style='color: #". $color ."'>Название</td>
									<!--td>". $data['lore'] ."</td-->
									<td>Описание</td>
									<td style='color: #". $color ."'>". $item . "</td>
									<td id='item". $data['id'] . "' onclick='item_click(this)'>Подробнее</td>
								</tr>
								<tr id='item_show_more". $data['id'] ."'></tr>";
							}
						echo "</table>";
					}
					break;
				case 'mobs':
					{
						echo "<table class='mmo-mob-table'>
							<tr>
								<th>ID</th>
								<th>Существо</th>
								<th>Тип</th>
								<th>Уровень</th>
								<th>Агрессивность</th>
								<th style='visibility: hidden;'>Подробнее</th>
							</tr>";
						$sql = "SELECT * FROM `mmorpg_mobs` ";
						$result = $pdo->query($sql);
						$rows = $result->fetchAll();
						foreach($rows as $data) {

								switch ($data['agressive']) {
									case 0:
										$agressive = "Нейтральный";
										break;
									case 1:
										$agressive = "Враждебный";
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
								echo "<tr>
										<td>". $data['id'] . "</td>
										<!--td style='color: #".$color."'>".$data['name']."</td-->
										<td style='color: #". $color ."'>Существо</td>
										<td style='color: #". $color ."'>". $mob . "</td>
										<td>". $data['level'] . "</td>
										<td>". $agressive . "</td>
										<td id='mob". $data['id'] . "' onclick='mob_click(this)'>Подробнее</td>
									</tr>
									<tr id='mob_show_more". $data['id'] ."'></tr>";
							}
						echo "</table>";
					}
					break;
				default:
					echo "Ошибка выбора типа справки на сервере MMORPG, обратитесь в тех. поддержку";
					break;
			}
			break;
		default:
			echo "Ошибка выбора сервера, обратитесь в тех. поддержку";
			break;
	}
	break;
	case 'show_item_more':
		{
			$id = $_POST['id'];
			$sql = "SELECT * FROM `mmorpg_items` WHERE `mmorpg_items`.`id` = ". $id;
			$result = $pdo->query($sql);
			$rows = $result->fetchAll();
			echo "<td colspan='3'>
					<table class='mmo-item-table2'>
						<tr>
							<th>Характеристика</th>
							<th>Значение</th>
						</tr>
						<tr>
							<td>Броня</td>
							<td>4</td>
						</tr>
						<tr>
							<td>Сопротивление</td>
							<td>1</td>
						</tr>
					</table>
				</td>
				<td colspan='3'>
					<table class='mmo-item-table3'>
						<tr>
							<th>Существо</th>
							<th>Ур. существа</th>
							<th>Мин. дроп</th>
							<th>Макс. дроп</th>
							<th>Шанс</th>
							<th style='visibility: hidden'>Подробнее</th>
						</tr>";
						//Тут в id должно быть (   id_моба + '_' + id_предмета   ) Тут id_моба стоит временно как 0 и 1. Кнопка "Подробнее" есть только у существ, которые обычные мобы
						echo "<tr>
							<td>Зомбя</td>
							<td>2</td>
							<td>1</td>
							<td>2</td>
							<td>10%</td>
							<td id='". 0 ."_". $rows[0]['id'] ."' onclick='item_mob_click(this)'>Подробнее</td>
						</tr>
						<tr style='border-top: none' id='". 0 ."item_mob". $rows[0]['id'] ."'></tr>

						<tr>
							<td>Скелетроныч</td>
							<td>3</td>
							<td>2</td>
							<td>5</td>
							<td>25%</td>
							<td id='". 1 ."_". $rows[0]['id'] ."' onclick='item_mob_click(this)'>Подробнее</td>
						</tr>
						<tr style='border-top: none' id='". 1 ."item_mob". $rows[0]['id'] ."'></tr>

						<tr>
							<td>Босс Скелетроныч</td>
							<td>5</td>
							<td>24</td>
							<td>56</td>
							<td>50%</td>
							<td></td>
						</tr>
					</table>
				</td>";
		}
		break;
	case 'show_item_mob_more':
		{
			$item_id = $_POST['id'];
			$mob_id = $_POST['mob_id'];
			echo "<td colspan='6'>
					<table class='mmo-item-table4'>
						<tr>
							<td>Обычный</td>
							<td>1</td>
							<td>2</td>
							<td>10%</td>
						</tr>
						<tr>
							<td>Усиленный х2</td>
							<td>1</td>
							<td>2</td>
							<td>15%</td>
						</tr>
						<tr>
							<td>Усиленный х3</td>
							<td>1</td>
							<td>2</td>
							<td>20%</td>
						</tr>
						<tr>
							<td>Усиленный х4</td>
							<td>1</td>
							<td>2</td>
							<td>30%</td>
						</tr>
					</table>
				</td>";
		}
		break;
	case 'show_mob_more':
		{
			$id = $_POST['id'];
			$sql = "SELECT * FROM `mmorpg_mobs` WHERE `mmorpg_mobs`.`id` = ". $id;
			$result = $pdo->query($sql);
			$rows = $result->fetchAll();
			echo "<td colspan='2'>
					<table class='mmo-mob-table2'>
						<tr>
							<th>Характеристика</th>
							<th>Значение</th>
						</tr>
						<tr>
							<td>Броня</td>
							<td>4</td>
						</tr>
						<tr>
							<td>Сопротивление</td>
							<td>1</td>
						</tr>
					</table>
				</td>
				<td colspan='4'>
					<table class='mmo-mob-table3'>
						<tr>
							<th>Вид</th>
							<th>Предмет</th>
							<th>Мин. дроп</th>
							<th>Макс. дроп</th>
							<th>Шанс</th>
							<th style='visibility: hidden'>Подробнее</th>
						</tr>";
						//Тут в id должно быть (   id_предмета + '_' + id_моба  ) Тут id_предмета стоит временно как 0, 1 и 2. Кнопка "Подробнее" есть только у существ, которые обычные мобы
						echo "<tr>
							<td><img class='wh_32' src='../informations/items_mmorpg/emerald.png?". date('YmdHis') ."'></td>
							<td>Заточка</td>
							<td>1</td>
							<td>2</td>
							<td>10%</td>
							<td id='". 0 ."_". $rows[0]['id'] ."' onclick='mob_item_click(this)'>Подробнее</td>
						</tr>
						<tr style='border-top: none' id='". 0 ."mob_item". $rows[0]['id'] ."'></tr>

						<tr>
							<td><img class='wh_32' src='../informations/items_mmorpg/emerald.png?". date('YmdHis') ."'></td>
							<td>Меч</td>
							<td>2</td>
							<td>5</td>
							<td>25%</td>
							<td id='". 1 ."_". $rows[0]['id'] ."' onclick='mob_item_click(this)'>Подробнее</td>
						</tr>
						<tr style='border-top: none' id='". 1 ."mob_item". $rows[0]['id'] ."'></tr>

						<tr>
							<td><img class='wh_32' src='../informations/items_mmorpg/emerald.png?". date('YmdHis') ."'></td>
							<td>Лук</td>
							<td>24</td>
							<td>56</td>
							<td>50%</td>
							<td id='". 2 ."_". $rows[0]['id'] ."' onclick='mob_item_click(this)'>Подробнее</td>
						</tr>
						<tr style='border-top: none' id='". 2 ."mob_item". $rows[0]['id'] ."'></tr>
						</tr>
					</table>
				</td>";
		}
		break;
	case 'show_mob_item_more':
		{
			$mob_id = $_POST['id'];
			$item_id = $_POST['item_id'];
			echo "<td colspan='6'>
					<table class='mmo-mob-table4'>
						<tr>
							<td>Обычный</td>
							<td>1</td>
							<td>2</td>
							<td>10%</td>
						</tr>
						<tr>
							<td>Усиленный х2</td>
							<td>1</td>
							<td>2</td>
							<td>15%</td>
						</tr>
						<tr>
							<td>Усиленный х3</td>
							<td>1</td>
							<td>2</td>
							<td>20%</td>
						</tr>
						<tr>
							<td>Усиленный х4</td>
							<td>1</td>
							<td>2</td>
							<td>30%</td>
						</tr>
					</table>
				</td>";
		}
		break;
	default:
		echo "Ошибка выбора функции, обратитесь в тех. поддержку";
		break;
}
?>