<?
require_once "cnt.php";
	$redF = $redFMMORPG;
	$lapisF = $lapisFMMORPG;
	$goldF = $goldFMMORPG;
	$diamondF = $diamondFMMORPG;
	$emeraldF = $emeraldFMMORPG;

	$redFdis = $redFMMORPGdis;
	$lapisFdis = $lapisFMMORPGdis;
	$goldFdis = $goldFMMORPGdis;
	$diamondFdis = $diamondFMMORPGdis;
	$emeraldFdis = $emeraldFMMORPGdis;


	$sql = "SELECT * FROM `servers` WHERE `visible` = TRUE";
	$query = $pdo->query($sql);
	$data = $query->fetchAll();

$server = $_POST['srv'];
$function = $_POST['func'];
switch ($server) {
	case 'mmo':
		switch ($function) {
			case 'pr':
				{
					echo "<div class='donate-type-pr'>
						<div>
						У нас работает доплата без наценок (при наличии какой-либо привилегии от [Redstone] до [Diamond] Вам доступна доплата недостающей части суммы от полной стоимости покупаемой Вами привилегии от [Lapis] до [Emerald])
						</div>
						<div>
							<div class='donate-type-header'>
								<div>Привилегия <span><span>[</span><span style='color: #FF5555'>Redstone</span><span>]</span></span></div>
								<div>Цена: ". $redF ."<i class='fa fa-rub' aria-hidden='true'></i> навсегда</div>
							</div>
							<div class='donate-type-content'>
								<div class='donate-type-content-header'>Основное</div>
								<ul class='donate-pr-main'>
									<li>Префикс <span><span>[</span><span style='color: #FF5555'>Redstone</span><span>]</span> " .$_SESSION['user']. ": Привет!</span></li>
									<li>Увеличение получаемого опыта на 10%</li>
									<li>В разработке</li>
									<li>В разработке</li>
									<li>В разработке</li>
									<li>В разработке</li>
								</ul>
							</div>
							<form action='". $php ."get_donate_player_MMORPG.php' method='post'>";
								if($group_MMORPG == 6) {
									echo "<button disabled class='account-btn donate-already-buy' type='submit'>Включено в Ваш Emerald</button>";
								}
								else if($group_MMORPG == 5) {
									echo "<button disabled class='account-btn donate-already-buy' type='submit'>Включено в Ваш Diamond</button>";
								}
								else if($group_MMORPG == 4) {
									echo "<button disabled class='account-btn donate-already-buy' type='submit'>Включено в Ваш Gold</button>";
								}
								else if($group_MMORPG == 3) {
									echo "<button disabled class='account-btn donate-already-buy' type='submit'>Включено в Ваш Lapis</button>";
								}
								else if($group_MMORPG == 1)	{
									echo "<button class='account-btn' name='redFMMORPG' type='submit'>Купить навсегда <br>"; if($discount > 0) echo $redFdis; else echo $redF; echo "<i class='fa fa-rub' aria-hidden='true'></i></button>";
								}	else if($group_MMORPG == 2)	{
									echo "<button disabled class='account-btn donate-already-buy' type='submit'>Приобретено</button>"; 
								}
							echo "</form>
						</div>";
						echo "<div>
							<div class='donate-type-header'>
								<div>Привилегия <span><span>[</span><span style='color: #5555FF'>Lapis</span><span>]</span></span></div>
								<div>Цена: ". $lapisF ."<i class='fa fa-rub' aria-hidden='true'></i> навсегда</div>
							</div>
							<div class='donate-type-content'>
								<div class='donate-type-content-header'>Основное</div>
								<ul class='donate-pr-main'>
									<li>Префикс <span><span>[</span><span style='color: #5555FF'>Lapis</span><span>]</span> ". $_SESSION['user'] .": Привет!</span></li>
									<li>Увеличение получаемого опыта на 25%</li>
									<li>В разработке</li>
									<li>В разработке</li>
									<li>В разработке</li>
									<li>В разработке</li>
									<div class='donate-type-content-header'>Команды</div>
									<ul class='donate-pr-main'>
										<li>В разработке</li>
									</ul>
								</ul>
							</div>
							<form action='". $php. "get_donate_player_MMORPG.php' method='post'>";
								if($group_MMORPG == 6) {
									echo "<button disabled class='account-btn donate-already-buy' type='submit'>Включено в Ваш Emerald</button>";
								}
								else if($group_MMORPG == 5){
									echo "<button disabled class='account-btn donate-already-buy' type='submit'>Включено в Ваш Diamond</button>";
								}
								else if($group_MMORPG == 4){
									echo "<button disabled class='account-btn donate-already-buy' type='submit'>Включено в Ваш Gold</button>";
								}
								else if($group_MMORPG == 2){	if($timer_group_db_MMORPG == 0){
									echo "<button class='account-btn' name='lapisFMMORPG' type='submit'>Купить навсегда <br>"; if($discount > 0) echo "Доплата с Redstone - ". $lapisRedMMORPG ."<i class='fa fa-rub' aria-hidden='true'></i></button>";
								}}
								else if($group_MMORPG == 1){
									echo "<button class='account-btn' name='lapisFMMORPG' type='submit'>Купить навсегда <br>"; if($discount > 0) echo $lapisFdis; else echo $lapisF; echo "<i class='fa fa-rub' aria-hidden='true'></i></button>";
								}	else if($group_MMORPG == 3){ 
									echo "<button disabled class='account-btn donate-already-buy' type='submit'>Приобретено</button>"; 
								}
							echo "</form>
						</div>";
						echo "<div>
							<div class='donate-type-header'>
								<div>Привилегия <span><span>[</span><span style='color: #FFFF55'>Gold</span><span>]</span></span></div>
								<div>Цена: ". $goldF ."<i class='fa fa-rub' aria-hidden='true'></i> навсегда</div>
							</div>
							<div class='donate-type-content'>
								<div class='donate-type-content-header'>Основное</div>
								<ul class='donate-pr-main'>
									<li>Префикс <span><span>[</span><span style='color: #FFFF55'>Gold</span><span>]</span> ". $_SESSION['user']. ": Привет!</span></li>
									<li>Увеличение получаемого опыта на 50%</li>
									<li>В разработке</li>
									<li>В разработке</li>
									<li>В разработке</li>
									<li>В разработке</li>
									<li>В разработке</li>
									<div class='donate-type-content-header'>Команды</div>
									<ul class='donate-pr-main'>
										<li>В разработке</li>
									</ul>
								</ul>
							</div>
							<form action='" .$php. "get_donate_player_MMORPG.php' method='post'>";
								if($group_MMORPG == 6) {
									echo "<button disabled class='account-btn donate-already-buy' type='submit'>Включено в Ваш Emerald</button>";
								}
								else if($group_MMORPG == 5){
										echo "<button disabled class='account-btn donate-already-buy' type='submit'>Включено в Ваш Diamond</button>";
								}
								else if($group_MMORPG == 3){	if($timer_group_db_MMORPG == 0){
									echo "<button class='account-btn' name='goldFMMORPG' type='submit'>Купить навсегда <br>"; if($discount > 0) echo "Доплата с Lapis - ". $goldLapisMMORPG ."<i class='fa fa-rub' aria-hidden='true'></i></button>";
								}}
								else if($group_MMORPG == 2){ if($timer_group_db_MMORPG == 0){
									echo "<button class='account-btn' name='goldFMMORPG' type='submit'>Купить навсегда <br>"; if($discount > 0) echo "Доплата с Redstone - ". $goldRedMMORPG ."<i class='fa fa-rub' aria-hidden='true'></i></button>";
								}}
								else if($group_MMORPG == 1){
									echo "<button class='account-btn' name='goldFMMORPG' type='submit'>Купить навсегда <br>"; if($discount > 0) echo $goldFdis; else echo $goldF; echo"<i class='fa fa-rub' aria-hidden='true'></i></button>";
								} else if($group_MMORPG == 4){
										echo "<button disabled class='account-btn donate-already-buy' type='submit'>Приобретено</button>"; 
								}
							echo "</form>
						</div>";
						echo "<div>
							<div class='donate-type-header'>
								<div>Привилегия <span><span>[</span><span style='color: #55FFFF'>Diamond</span><span>]</span></span></div>
								<div>Цена: ". $diamondF. "<i class='fa fa-rub' aria-hidden='true'></i> навсегда</div>
							</div>
							<div class='donate-type-content'>
								<div class='donate-type-content-header'>Основное</div>
								<ul class='donate-pr-main'>
									<li>Префикс <span><span>[</span><span style='color: #55FFFF'>Diamond</span><span>]</span> ". $_SESSION['user'] .": Привет!</span></li>
									<li>Увеличение получаемого опыта на 75%</li>
									<li>В разработке</li>
									<li>В разработке</li>
									<li>В разработке</li>
									<li>В разработке</li>
									<li>В разработке</li>
									<li>В разработке</li>
									<div class='donate-type-content-header'>Команды</div>
									<ul class='donate-pr-main'>
										<li>В разработке</li>
									</ul>
								</ul>
							</div>
							<form action='". $php. "get_donate_player_MMORPG.php' method='post'>";
								if($group_MMORPG == 6) {
									echo "<button disabled class='account-btn donate-already-buy' type='submit'>Включено в Ваш Emerald</button>";
								}
								else if($group_MMORPG == 4){ if($timer_group_db_MMORPG == 0){
									echo "<button class='account-btn' name='diamondFMMORPG' type='submit'>Купить навсегда <br>"; if($discount > 0)echo "Доплата с Gold - ". $diamondGoldMMORPG ."<i class='fa fa-rub' aria-hidden='true'></i></button>";
								}}	else if($group_MMORPG == 3){ if($timer_group_db_MMORPG == 0){
									echo "<button class='account-btn' name='diamondFMMORPG' type='submit'>Купить навсегда <br>"; if($discount > 0)echo "Доплата с Lapis - ". $diamondLapisMMORPG ."<i class='fa fa-rub' aria-hidden='true'></i></button>";
								}}	else if($group_MMORPG == 2){ if($timer_group_db_MMORPG == 0){
									echo "<button class='account-btn' name='diamondFMMORPG' type='submit'>Купить навсегда <br>"; if($discount > 0)echo "Доплата с Redstone - ". $diamondRedMMORPG ."<i class='fa fa-rub' aria-hidden='true'></i></button>";
								}}	else if($group_MMORPG == 1){
									echo "<button class='account-btn' name='diamondFMMORPG' type='submit'>Купить навсегда <br>"; if($discount > 0)echo $diamondFdis; else echo $diamondF; echo "<i class='fa fa-rub' aria-hidden='true'></i></button>";
								}	else if($group_MMORPG == 5){ 
										echo "<button disabled class='account-btn donate-already-buy' type='submit'>Приобретено</button>"; 
								}
							echo "</form>
						</div>";
						echo "<div>
							<div class='donate-type-header'>
								<div>Привилегия <span><span>[</span><span style='color: #55FF55'>Emerald</span><span>]</span></span></div>
								<div>Цена: ". $emeraldF ."<i class='fa fa-rub' aria-hidden='true'></i> навсегда</div>
							</div>
							<div class='donate-type-content'>
								<div class='donate-type-content-header'>Основное</div>
								<ul class='donate-pr-main'>
									<li>Префикс <span><span>[</span><span style='color: #55FF55'>Emerald</span><span>]</span> ". $_SESSION['user'] .": Привет!</span></li>
									<li>Увеличение получаемого опыта на 100%</li>
									<li>В разработке</li>
									<li>В разработке</li>
									<li>В разработке</li>
									<li>В разработке</li>
									<li>В разработке</li>
									<li>В разработке</li>
								</ul>
								<div class='donate-type-content-header'>Команды</div>
								<ul class='donate-pr-main'>
									<li>В разработке</li>
									<li>В разработке</li>
								</ul>
							</div>
							<form action='". $php ."get_donate_player_MMORPG.php' method='post'>";
								if($group_MMORPG == 5){ if($timer_group_db_MMORPG == 0){
									echo "<button class='account-btn' name='emeraldFMMORPG' type='submit'>Купить навсегда <br>"; if($discount > 0) echo "Доплата с Diamond - ". $emeraldDiamondMMORPG ."<i class='fa fa-rub' aria-hidden='true'></i></button>";
								}}	else if($group_MMORPG == 4){ if($timer_group_db_MMORPG == 0){ 
									echo "<button class='account-btn' name='emeraldFMMORPG' type='submit'>Купить навсегда <br>"; if($discount > 0) echo "Доплата с Gold - ". $emeraldGoldMMORPG ."<i class='fa fa-rub' aria-hidden='true'></i></button>";
								}}	else if($group_MMORPG == 3){ if($timer_group_db_MMORPG == 0){ 
									echo "<button class='account-btn' name='emeraldFMMORPG' type='submit'>Купить навсегда <br>"; if($discount > 0) echo "Доплата с Lapis - ". $emeraldLapisMMORPG ."<i class='fa fa-rub' aria-hidden='true'></i></button>";
								}}	else if($group_MMORPG == 2){ if($timer_group_db_MMORPG == 0){
									echo "<button class='account-btn' name='emeraldFMMORPG' type='submit'>Купить навсегда <br>"; if($discount > 0) echo "Доплата с Redstone - ". $emeraldRedMMORPG ."<i class='fa fa-rub' aria-hidden='true'></i></button>";
								}}	else if($group_MMORPG == 1){
									echo "<button class='account-btn' name='emeraldFMMORPG' type='submit'>Купить навсегда <br>"; if($discount > 0) echo $emeraldFdis; else echo $emeraldF; echo "<i class='fa fa-rub' aria-hidden='true'></i></button>";
								}	else if($group_MMORPG == 6){ 
										echo "<button disabled class='account-btn donate-already-buy' type='submit'>Приобретено</button>"; 
								}
							echo "</form>
						</div>";
						echo "<div>
							<div class='donate-type-header'>
								<div>В разработке</div>
								<div>Цена: ?<i class='fa fa-rub' aria-hidden='true'></i> навсегда</div>
							</div>
							<div class='donate-type-content'>
								<div class='donate-type-content-header'></div>
							</div>
							<form action='". $php ."get_donate_player_MMORPG.php' method='post'>
								<button disabled class='account-btn' name='secretMMORPG' type='submit'>Купить навсегда <br>?<i class='fa fa-rub' aria-hidden='true'></i></button>
							</form>
						</div>";
						echo "<div>
							<div class='donate-type-header'>
								<div>В разработке</div>
								<div>Цена: ?<i class='fa fa-rub' aria-hidden='true'></i> навсегда</div>
							</div>
							<div class='donate-type-content'>
								<div class='donate-type-content-header'></div>
							</div>
							<form action='". $php ."get_donate_player_MMORPG.php' method='post'>
								<button disabled class='account-btn' name='secretMMORPG' type='submit'>Купить навсегда <br>?<i class='fa fa-rub' aria-hidden='true'></i></button>
							</form>
						</div>";
						echo "<div>
							<div class='donate-type-header'>
								<div>В разработке</div>
								<div>Цена: ?<i class='fa fa-rub' aria-hidden='true'></i> навсегда</div>
							</div>
							<div class='donate-type-content'>
								<div class='donate-type-content-header'></div>
							</div>
							<form action='". $php ."get_donate_player_MMORPG.php' method='post'>
								<button disabled class='account-btn' name='secretMMORPG' type='submit'>Купить навсегда <br>?<i class='fa fa-rub' aria-hidden='true'></i></button>
							</form>
						</div>";
					echo "</div>";
				}
				break;
			case 'it':
				$sql = "SELECT * FROM shop_MMORPG";
				$result = $pdo->query($sql);
				$rows = $result->fetchAll();
				$counter = 0;
				echo "<div class='donate-type-it'>
						<div class='donate-it-rows'>";
				foreach($rows as $data) {
					echo "<div class='donate-it-col'>
							<form action='../get_items_player_MMORPG.php' method='post'>
								<div class='donate-it-card'>
									<div>
										<img src='/informations/items_mmorpg/". $data['icon'] .".png' alt='/informations/items_mmorpg/". $data['icon'] .".png'>
										<div>
											". $data['itemTitle'] ."
										</div>
									</div>
									<div>
										". $data['info'] ."
									</div>
									<div>
										Цена: ". $data['itemPrice'] ."<i class='fa fa-rub' aria-hidden='true'></i>
									</div>
									<div>
										<input type='hidden' name='idItem' value='". $data['itemNumber'] ."'>
										<input type='hidden' name='costItem' id='costItem". $counter ."' value='". $data['itemPrice'] ."'>
										<div>
											<a class='minus' id='minusMMOit". $counter ."' onclick='minus_click(this)'>-</a>
											<input type='number' name='amount' id='amountMMOit". $counter ."' min='1' max='100' value='1' class='i_items' oninput='input_f(this)' title='Кол-во предметов 1-100'>
											<a class='plus' id='plusMMOit". $counter ."' onclick='plus_click(this)'>+</a>
											<button name='itemBtn' class='account-btn' type='submit' id='buttonMMOit". $counter ."'>". $data['itemPrice'] ."<i class='fa fa-rub' aria-hidden='true'></i> Купить</button>
										</div>
									</div>
								</div>
							</form>
						</div>";
						$counter++;
				}
					echo "</div>
						</div>";
				break;
			case 'un':
				echo "<div>Разбан MMORPG в разработке</div>";
				break;
			default:
				echo "Ошибка выбора типа доната на сервере MMORPG";
				break;
		}
		break;
	case 'sky':
		switch ($function) {
			case 'pr':
				{
					echo "<div>Привилегии SkyTech в разработке</div>";
					/*echo "<div class='donate-type-pr'>
						<div>
						У нас работает доплата без наценок (при наличии какой-либо привилегии от [Redstone] до [Diamond] Вам доступна доплата недостающей части суммы от полной стоимости покупаемой Вами привилегии от [Lapis] до [Emerald])
						</div>
						<div>
							<div class='donate-type-header'>
								<div>Привилегия <span><span>[</span><span style='color: #FF5555'>Redstone</span><span>]</span></span></div>
								<div>Цена: ". $redF ."<i class='fa fa-rub' aria-hidden='true'></i> навсегда</div>
							</div>
							<div class='donate-type-content'>
								<div class='donate-type-content-header'>Основное</div>
								<ul class='donate-pr-main'>
									<li>Префикс <span><span>[</span><span style='color: #FF5555'>Redstone</span><span>]</span> " .$_SESSION['user']. ": Привет!</span></li>
									<li>Увеличение получаемого опыта на 10%</li>
									<li>В разработке</li>
									<li>В разработке</li>
									<li>В разработке</li>
									<li>В разработке</li>
								</ul>
							</div>
							<form action='". $php ."get_donate_player_MMORPG.php' method='post'>";
								if($group_MMORPG == 6) {
									echo "<button disabled class='account-btn donate-already-buy' type='submit'>Включено в Ваш Emerald</button>";
								}
								else if($group_MMORPG == 5) {
									echo "<button disabled class='account-btn donate-already-buy' type='submit'>Включено в Ваш Diamond</button>";
								}
								else if($group_MMORPG == 4) {
									echo "<button disabled class='account-btn donate-already-buy' type='submit'>Включено в Ваш Gold</button>";
								}
								else if($group_MMORPG == 3) {
									echo "<button disabled class='account-btn donate-already-buy' type='submit'>Включено в Ваш Lapis</button>";
								}
								else if($group_MMORPG == 1)	{
									echo "<button class='account-btn' name='redFMMORPG' type='submit'>Купить навсегда <br>"; if($discount > 0) echo $redFdis; else echo $redF; echo "<i class='fa fa-rub' aria-hidden='true'></i></button>";
								}	else if($group_MMORPG == 2)	{
									echo "<button disabled class='account-btn donate-already-buy' type='submit'>Приобретено</button>"; 
								}
							echo "</form>
						</div>";
						echo "<div>
							<div class='donate-type-header'>
								<div>Привилегия <span><span>[</span><span style='color: #5555FF'>Lapis</span><span>]</span></span></div>
								<div>Цена: ". $lapisF ."<i class='fa fa-rub' aria-hidden='true'></i> навсегда</div>
							</div>
							<div class='donate-type-content'>
								<div class='donate-type-content-header'>Основное</div>
								<ul class='donate-pr-main'>
									<li>Префикс <span><span>[</span><span style='color: #5555FF'>Lapis</span><span>]</span> ". $_SESSION['user'] .": Привет!</span></li>
									<li>Увеличение получаемого опыта на 25%</li>
									<li>В разработке</li>
									<li>В разработке</li>
									<li>В разработке</li>
									<li>В разработке</li>
									<div class='donate-type-content-header'>Команды</div>
									<ul class='donate-pr-main'>
										<li>В разработке</li>
									</ul>
								</ul>
							</div>
							<form action='". $php. "get_donate_player_MMORPG.php' method='post'>";
								if($group_MMORPG == 6) {
									echo "<button disabled class='account-btn donate-already-buy' type='submit'>Включено в Ваш Emerald</button>";
								}
								else if($group_MMORPG == 5){
									echo "<button disabled class='account-btn donate-already-buy' type='submit'>Включено в Ваш Diamond</button>";
								}
								else if($group_MMORPG == 4){
									echo "<button disabled class='account-btn donate-already-buy' type='submit'>Включено в Ваш Gold</button>";
								}
								else if($group_MMORPG == 2){	if($timer_group_db_MMORPG == 0){
									echo "<button class='account-btn' name='lapisFMMORPG' type='submit'>Купить навсегда <br>"; if($discount > 0) echo "Доплата с Redstone - ". $lapisRedMMORPG ."<i class='fa fa-rub' aria-hidden='true'></i></button>";
								}}
								else if($group_MMORPG == 1){
									echo "<button class='account-btn' name='lapisFMMORPG' type='submit'>Купить навсегда <br>"; if($discount > 0) echo $lapisFdis; else echo $lapisF; echo "<i class='fa fa-rub' aria-hidden='true'></i></button>";
								}	else if($group_MMORPG == 3){ 
									echo "<button disabled class='account-btn donate-already-buy' type='submit'>Приобретено</button>"; 
								}
							echo "</form>
						</div>";
						echo "<div>
							<div class='donate-type-header'>
								<div>Привилегия <span><span>[</span><span style='color: #FFFF55'>Gold</span><span>]</span></span></div>
								<div>Цена: ". $goldF ."<i class='fa fa-rub' aria-hidden='true'></i> навсегда</div>
							</div>
							<div class='donate-type-content'>
								<div class='donate-type-content-header'>Основное</div>
								<ul class='donate-pr-main'>
									<li>Префикс <span><span>[</span><span style='color: #FFFF55'>Gold</span><span>]</span> ". $_SESSION['user']. ": Привет!</span></li>
									<li>Увеличение получаемого опыта на 50%</li>
									<li>В разработке</li>
									<li>В разработке</li>
									<li>В разработке</li>
									<li>В разработке</li>
									<li>В разработке</li>
									<div class='donate-type-content-header'>Команды</div>
									<ul class='donate-pr-main'>
										<li>В разработке</li>
									</ul>
								</ul>
							</div>
							<form action='" .$php. "get_donate_player_MMORPG.php' method='post'>";
								if($group_MMORPG == 6) {
									echo "<button disabled class='account-btn donate-already-buy' type='submit'>Включено в Ваш Emerald</button>";
								}
								else if($group_MMORPG == 5){
										echo "<button disabled class='account-btn donate-already-buy' type='submit'>Включено в Ваш Diamond</button>";
								}
								else if($group_MMORPG == 3){	if($timer_group_db_MMORPG == 0){
									echo "<button class='account-btn' name='goldFMMORPG' type='submit'>Купить навсегда <br>"; if($discount > 0) echo "Доплата с Lapis - ". $goldLapisMMORPG ."<i class='fa fa-rub' aria-hidden='true'></i></button>";
								}}
								else if($group_MMORPG == 2){ if($timer_group_db_MMORPG == 0){
									echo "<button class='account-btn' name='goldFMMORPG' type='submit'>Купить навсегда <br>"; if($discount > 0) echo "Доплата с Redstone - ". $goldRedMMORPG ."<i class='fa fa-rub' aria-hidden='true'></i></button>";
								}}
								else if($group_MMORPG == 1){
									echo "<button class='account-btn' name='goldFMMORPG' type='submit'>Купить навсегда <br>"; if($discount > 0) echo $goldFdis; else echo $goldF; echo"<i class='fa fa-rub' aria-hidden='true'></i></button>";
								} else if($group_MMORPG == 4){
										echo "<button disabled class='account-btn donate-already-buy' type='submit'>Приобретено</button>"; 
								}
							echo "</form>
						</div>";
						echo "<div>
							<div class='donate-type-header'>
								<div>Привилегия <span><span>[</span><span style='color: #55FFFF'>Diamond</span><span>]</span></span></div>
								<div>Цена: ". $diamondF. "<i class='fa fa-rub' aria-hidden='true'></i> навсегда</div>
							</div>
							<div class='donate-type-content'>
								<div class='donate-type-content-header'>Основное</div>
								<ul class='donate-pr-main'>
									<li>Префикс <span><span>[</span><span style='color: #55FFFF'>Diamond</span><span>]</span> ". $_SESSION['user'] .": Привет!</span></li>
									<li>Увеличение получаемого опыта на 75%</li>
									<li>В разработке</li>
									<li>В разработке</li>
									<li>В разработке</li>
									<li>В разработке</li>
									<li>В разработке</li>
									<li>В разработке</li>
									<div class='donate-type-content-header'>Команды</div>
									<ul class='donate-pr-main'>
										<li>В разработке</li>
									</ul>
								</ul>
							</div>
							<form action='". $php. "get_donate_player_MMORPG.php' method='post'>";
								if($group_MMORPG == 6) {
									echo "<button disabled class='account-btn donate-already-buy' type='submit'>Включено в Ваш Emerald</button>";
								}
								else if($group_MMORPG == 4){ if($timer_group_db_MMORPG == 0){
									echo "<button class='account-btn' name='diamondFMMORPG' type='submit'>Купить навсегда <br>"; if($discount > 0)echo "Доплата с Gold - ". $diamondGoldMMORPG ."<i class='fa fa-rub' aria-hidden='true'></i></button>";
								}}	else if($group_MMORPG == 3){ if($timer_group_db_MMORPG == 0){
									echo "<button class='account-btn' name='diamondFMMORPG' type='submit'>Купить навсегда <br>"; if($discount > 0)echo "Доплата с Lapis - ". $diamondLapisMMORPG ."<i class='fa fa-rub' aria-hidden='true'></i></button>";
								}}	else if($group_MMORPG == 2){ if($timer_group_db_MMORPG == 0){
									echo "<button class='account-btn' name='diamondFMMORPG' type='submit'>Купить навсегда <br>"; if($discount > 0)echo "Доплата с Redstone - ". $diamondRedMMORPG ."<i class='fa fa-rub' aria-hidden='true'></i></button>";
								}}	else if($group_MMORPG == 1){
									echo "<button class='account-btn' name='diamondFMMORPG' type='submit'>Купить навсегда <br>"; if($discount > 0)echo $diamondFdis; else echo $diamondF; echo "<i class='fa fa-rub' aria-hidden='true'></i></button>";
								}	else if($group_MMORPG == 5){ 
										echo "<button disabled class='account-btn donate-already-buy' type='submit'>Приобретено</button>"; 
								}
							echo "</form>
						</div>";
						echo "<div>
							<div class='donate-type-header'>
								<div>Привилегия <span><span>[</span><span style='color: #55FF55'>Emerald</span><span>]</span></span></div>
								<div>Цена: ". $emeraldF ."<i class='fa fa-rub' aria-hidden='true'></i> навсегда</div>
							</div>
							<div class='donate-type-content'>
								<div class='donate-type-content-header'>Основное</div>
								<ul class='donate-pr-main'>
									<li>Префикс <span><span>[</span><span style='color: #55FF55'>Emerald</span><span>]</span> ". $_SESSION['user'] .": Привет!</span></li>
									<li>Увеличение получаемого опыта на 100%</li>
									<li>В разработке</li>
									<li>В разработке</li>
									<li>В разработке</li>
									<li>В разработке</li>
									<li>В разработке</li>
									<li>В разработке</li>
								</ul>
								<div class='donate-type-content-header'>Команды</div>
								<ul class='donate-pr-main'>
									<li>В разработке</li>
									<li>В разработке</li>
								</ul>
							</div>
							<form action='". $php ."get_donate_player_MMORPG.php' method='post'>";
								if($group_MMORPG == 5){ if($timer_group_db_MMORPG == 0){
									echo "<button class='account-btn' name='emeraldFMMORPG' type='submit'>Купить навсегда <br>"; if($discount > 0) echo "Доплата с Diamond - ". $emeraldDiamondMMORPG ."<i class='fa fa-rub' aria-hidden='true'></i></button>";
								}}	else if($group_MMORPG == 4){ if($timer_group_db_MMORPG == 0){ 
									echo "<button class='account-btn' name='emeraldFMMORPG' type='submit'>Купить навсегда <br>"; if($discount > 0) echo "Доплата с Gold - ". $emeraldGoldMMORPG ."<i class='fa fa-rub' aria-hidden='true'></i></button>";
								}}	else if($group_MMORPG == 3){ if($timer_group_db_MMORPG == 0){ 
									echo "<button class='account-btn' name='emeraldFMMORPG' type='submit'>Купить навсегда <br>"; if($discount > 0) echo "Доплата с Lapis - ". $emeraldLapisMMORPG ."<i class='fa fa-rub' aria-hidden='true'></i></button>";
								}}	else if($group_MMORPG == 2){ if($timer_group_db_MMORPG == 0){
									echo "<button class='account-btn' name='emeraldFMMORPG' type='submit'>Купить навсегда <br>"; if($discount > 0) echo "Доплата с Redstone - ". $emeraldRedMMORPG ."<i class='fa fa-rub' aria-hidden='true'></i></button>";
								}}	else if($group_MMORPG == 1){
									echo "<button class='account-btn' name='emeraldFMMORPG' type='submit'>Купить навсегда <br>"; if($discount > 0) echo $emeraldFdis; else echo $emeraldF; echo "<i class='fa fa-rub' aria-hidden='true'></i></button>";
								}	else if($group_MMORPG == 6){ 
										echo "<button disabled class='account-btn donate-already-buy' type='submit'>Приобретено</button>"; 
								}
							echo "</form>
						</div>";
						echo "<div>
							<div class='donate-type-header'>
								<div>В разработке</div>
								<div>Цена: ?<i class='fa fa-rub' aria-hidden='true'></i> навсегда</div>
							</div>
							<div class='donate-type-content'>
								<div class='donate-type-content-header'></div>
							</div>
							<form action='". $php ."get_donate_player_MMORPG.php' method='post'>
								<button disabled class='account-btn' name='secretMMORPG' type='submit'>Купить навсегда <br>?<i class='fa fa-rub' aria-hidden='true'></i></button>
							</form>
						</div>";
						echo "<div>
							<div class='donate-type-header'>
								<div>В разработке</div>
								<div>Цена: ?<i class='fa fa-rub' aria-hidden='true'></i> навсегда</div>
							</div>
							<div class='donate-type-content'>
								<div class='donate-type-content-header'></div>
							</div>
							<form action='". $php ."get_donate_player_MMORPG.php' method='post'>
								<button disabled class='account-btn' name='secretMMORPG' type='submit'>Купить навсегда <br>?<i class='fa fa-rub' aria-hidden='true'></i></button>
							</form>
						</div>";
						echo "<div>
							<div class='donate-type-header'>
								<div>В разработке</div>
								<div>Цена: ?<i class='fa fa-rub' aria-hidden='true'></i> навсегда</div>
							</div>
							<div class='donate-type-content'>
								<div class='donate-type-content-header'></div>
							</div>
							<form action='". $php ."get_donate_player_MMORPG.php' method='post'>
								<button disabled class='account-btn' name='secretMMORPG' type='submit'>Купить навсегда <br>?<i class='fa fa-rub' aria-hidden='true'></i></button>
							</form>
						</div>";
					echo "</div>";
				}
				/*
				<h1 class="text_box">Сервер SkyTech</h1>
		<a class="bback c_p" onclick="location.href='/page/shops#slider-wrap'">
			<div class="gr_back">
				<img src="<?=$path_to_images?>back.png" alt="Назад">
				<span class="ma5_0">Назад</span>
			</div>
		</a>
		<div class="d_g gr3_3">
			<a class="c_p" onclick="location.href='#red'"><img class="shop-img" src="<?=$path_to_images?>Red.png"></a>
			<a class="c_p" onclick="location.href='#lapis'"><img class="shop-img" src="<?=$path_to_images?>Lapis.png"></a>
			<a class="c_p" onclick="location.href='#gold'"><img class="shop-img" src="<?=$path_to_images?>Gold.png"></a>
		</div>
		<div class="d_g gr3_3">
			<a class="c_p" onclick="location.href='#diamond'"><img class="shop-img" src="<?=$path_to_images?>Diamond.png"></a>
			<a class="c_p" onclick="location.href='#emerald'"><img class="shop-img" src="<?=$path_to_images?>Emerald.png"></a>
			<a class="c_p" onclick="location.href='#mod'"><img class="shop-img" src="<?=$path_to_images?>$Mod$.png"></a>
		</div>
		<div id="red" class="iw-modal">
			<div class="iw-modal-wrapper">
				<div class="iw-CSS-modal-inner">
					<div class="iw-modal-header">
						<h3 class="ta_c">Подробная информация о привилегии Redstone</h3>
						<a href="#close" title="Закрыть" class="iw-close">×</a>
					</div>
					<div class="iw-modal-text">    
						<h3 class="bar">Основное</h3>
						<ul class="lct_n bar">
							<li>Префикс [<div class="red d_ib ffm">Redstone</div>];</li>
							<li>Возможность писать цветные сообщения в чат;</li>
							<li>Возможность утолить голод в любой момент;</li>
							<li>Возможность использования виртуального верстака;</li>
							<li>Возможность очистки своего инвентаря;</li>
							<li>Возможность установить публичный варп у себя на острове;</li>
							<li>Возможность заходить на заполненный сервер.</li>
						</ul>
						<h3 class="bar">Команды</h3>
						<ul class="lct_n bar">
							<li>/feed - поесть</li>
							<li>/craft - виртуальный верстак</li>
							<li>/clear - очистить инвентарь</li>
						</ul>
						<form class="ta_c" action="<?=$php?>get_donate_player.php" method="post">
						<? if($group_ST < 2){ if($timer_group_db_ST == 0){ ?>
							<button class="d_ib btn" name="red30" type="submit">Купить на месяц (<?=$red30?></i>)</button>
						<?} else echo "<button disabled class='d_ib btn' type='submit'>Купить на месяц ($red30  <i class="fa fa-rub" aria-hidden="true"></i> (Уже куплена на месяц))</button>";?>
						<?}	else echo "<button disabled class='d_ib btn' type='submit'>Купить на месяц ($red30  <i class="fa fa-rub" aria-hidden="true"></i> (Уже есть))</button>";?>
						<? if($group_ST == 1)	{?>
							<button class="d_ib btn" name="redF" type="submit">Купить навсегда (<?=$redF?> <i class="fa fa-rub" aria-hidden="true"></i>)</button>
						<?}	else echo "<button disabled class='d_ib btn' type='submit'>Купить навсегда ($redF  <i class="fa fa-rub" aria-hidden="true"></i> (Уже есть))</button>";?>
						</form>
					</div>
				</div>
			</div>	
		</div>
		<div id="lapis" class="iw-modal">
			<div class="iw-modal-wrapper">
				<div class="iw-CSS-modal-inner">
					<div class="iw-modal-header">
						<h3 class="ta_c">Подробная информация о привилегии Lapis</h3>
						<a href="#close" title="Закрыть" class="iw-close">×</a>
					</div>
					<div class="iw-modal-text">    
						<h3 class="bar">Основное</h3>
						<ul class="lct_n bar">
							<li>Префикс [<div class="lapis d_ib ffm">Lapis</div>];</li>
							<li>Возможность писать цветные сообщения в чат;</li>
							<li>Возможность утолить голод в любой момент;</li>
							<li>Возможность вылечить себя;</li>
							<li>Возможность использования виртуального верстака;</li>
							<li>Возможность очистки своего инвентаря;</li>
							<li>Возможность установить публичный варп у себя на острове;</li>
							<li>Возможность заходить на заполненный сервер.</li>
						</ul>
						<h3 class="bar">Команды</h3>
						<ul class="lct_n bar">
							<li>/feed - поесть</li>
							<li>/heal - вылечить себя</li>
							<li>/craft - виртуальный верстак</li>
							<li>/clear - очистить инвентарь</li>
						</ul>
						<form class="ta_c" action="<?=$php?>get_donate_player.php" method="post">
						<? if($group_ST < 3){ if($timer_group_db_ST == 0){ ?>
							<button class="d_ib btn" name="lapis30" type="submit">Купить на месяц (<?=$lapis30?> <i class="fa fa-rub" aria-hidden="true"></i>)</button>
						<?} else echo "<button disabled class='d_ib btn' type='submit'>Купить на месяц ($lapis30  <i class="fa fa-rub" aria-hidden="true"></i> (Уже куплена на месяц))</button>";?>
						<?}	else echo "<button disabled class='d_ib btn' type='submit'>Купить на месяц ($lapis30  <i class="fa fa-rub" aria-hidden="true"></i> (Уже есть))</button>";	?>
						<? if($group_ST == 2){	if($timer_group_db_ST == 0){ ?>
							<button class="d_ib btn" name="lapisF" type="submit">Купить навсегда (<? echo "$lapisF". <i class="fa fa-rub" aria-hidden="true"></i>." - $redF"; ?> <i class="fa fa-rub" aria-hidden="true"></i>)</button>
						<?} else echo "<button disabled class='d_ib btn' type='submit'>Купить навсегда ($lapisF  <i class="fa fa-rub" aria-hidden="true"></i> (Уже куплена на месяц))</button>";?> 
						<?}	else if($group_ST == 1){ ?>
							<button class="d_ib btn" name="lapisF" type="submit">Купить навсегда (<?=$lapisF?> <i class="fa fa-rub" aria-hidden="true"></i>)</button>
						<?}	else echo "<button disabled class='d_ib btn' type='submit'>Купить навсегда ($lapisF  <i class="fa fa-rub" aria-hidden="true"></i> (Уже есть))</button>";	?>
						</form>
					</div>
				</div>
			</div>	
		</div>
		<div id="gold" class="iw-modal">
			<div class="iw-modal-wrapper">
				<div class="iw-CSS-modal-inner">
					<div class="iw-modal-header">
						<h3 class="ta_c">Подробная информация о привилегии Gold</h3>
						<a href="#close" title="Закрыть" class="iw-close">×</a>
					</div>
					<div class="iw-modal-text">    
						<h3 class="bar">Основное</h3>
						<ul class="lct_n bar">
							<li>Префикс [<div class="gold d_ib ffm">Gold</div>];</li>
							<li>Возможность писать цветные сообщения в чат;</li>
							<li>Возможность утолить голод в любой момент;</li>
							<li>Возможность вылечить себя;</li>
							<li>Сохранение инвентаря после смерти;</li>
							<li>Возможность установки персонального времени;</li>
							<li>Возможность использования эндер сундука командой;</li>
							<li>Возможность использования виртуального верстака;</li>
							<li>Возможность очистки своего инвентаря;</li>
							<li>Возможность установить публичный варп у себя на острове;</li>
							<li>Возможность заходить на заполненный сервер.</li>
						</ul>
						<h3 class="bar">Команды</h3>
						<ul class="lct_n bar">
							<li>/feed - поесть</li>
							<li>/heal - вылечить себя</li>
							<li>/ptime - установить личное время</li>
							<li>/enderchest - Виртуальный эндер-сундук</li>
							<li>/craft - виртуальный верстак</li>
							<li>/clear - очистить инвентарь</li>
						</ul>
						<form class="ta_c" action="<?=$php?>get_donate_player.php" method="post">
						<? if($group_ST < 4){ if($timer_group_db_ST == 0){ ?>
							<button class="d_ib btn" name="gold30" type="submit">Купить на месяц (<?=$gold30?> <i class="fa fa-rub" aria-hidden="true"></i>)</button>
						<?} else echo "<button disabled class='d_ib btn' type='submit'>Купить на месяц ($gold30  <i class="fa fa-rub" aria-hidden="true"></i> (Уже куплена на месяц))</button>";?>
						<?}	else echo "<button disabled class='d_ib btn' type='submit'>Купить на месяц ($gold30  <i class="fa fa-rub" aria-hidden="true"></i> (Уже есть))</button>";	?>
						<? if($group_ST == 3){	if($timer_group_db_ST == 0){ ?>
							<button class="d_ib btn" name="goldF" type="submit">Купить навсегда (<? echo "$goldF". <i class="fa fa-rub" aria-hidden="true"></i>." - $lapisF"; ?> <i class="fa fa-rub" aria-hidden="true"></i>)</button>
						<?} else echo "<button disabled class='d_ib btn' type='submit'>Купить навсегда ($goldF  <i class="fa fa-rub" aria-hidden="true"></i> (Уже куплена на месяц))</button>";?>
						<?}	else if($group_ST == 2){ if($timer_group_db_ST == 0){ ?>
							<button class="d_ib btn" name="goldF" type="submit">Купить навсегда (<? echo "$goldF". <i class="fa fa-rub" aria-hidden="true"></i>." - $redF"; ?> <i class="fa fa-rub" aria-hidden="true"></i>)</button>
						<?} else echo "<button disabled class='d_ib btn' type='submit'>Купить навсегда ($goldF  <i class="fa fa-rub" aria-hidden="true"></i> (Уже куплена на месяц))</button>";?>
						<?}	else if($group_ST == 1){?>
							<button class="d_ib btn" name="goldF" type="submit">Купить навсегда (<?=$goldF?> <i class="fa fa-rub" aria-hidden="true"></i>)</button>
						<?} else echo "<button disabled class='d_ib btn' type='submit'>Купить навсегда ($goldF  <i class="fa fa-rub" aria-hidden="true"></i> (Уже есть))</button>"; ?>
						</form>
					</div>
				</div>
			</div>	
		</div>
		<div id="diamond" class="iw-modal">
			<div class="iw-modal-wrapper">
				<div class="iw-CSS-modal-inner">
					<div class="iw-modal-header">
						<h3 class="ta_c">Подробная информация о привилегии Diamond</h3>
						<a href="#close" title="Закрыть" class="iw-close">×</a>
					</div>
					<div class="iw-modal-text">    
						<h3 class="bar">Основное</h3>
						<ul class="lct_n bar">
							<li>Префикс [<div class="diamond d_ib ffm">Diamond</div>];</li>
							<li>Возможность писать цветные сообщения в чат;</li>
							<li>Возможность утолить голод в любой момент;</li>
							<li>Возможность вылечить себя;</li>
							<li>Сохранение инвентаря после смерти;</li>
							<li>Возможность установки персонального времени;</li>
							<li>Возможность использования эндер сундука командой;</li>
							<li>Возможность использования виртуального верстака;</li>
							<li>Возможность очистки своего инвентаря;</li>
							<li>Возможность установить публичный варп у себя на острове;</li>
							<li>Возможность заходить на заполненный сервер;</li>
							<li>Возможность летать;</li>
							<li>Бессмертие.</li>
						</ul>
						<h3 class="bar">Команды</h3>
						<ul class="lct_n bar">
							<li>/feed - поесть</li>
							<li>/heal - вылечить себя</li>
							<li>/ptime - установить личное время</li>
							<li>/enderchest - Виртуальный эндер-сундук</li>
							<li>/craft - виртуальный верстак</li>
							<li>/clear - очистить инвентарь</li>
							<li>/god - включить бессмертие</li>
							<li>/fly - включить полёт</li>
						</ul>
						<form class="ta_c" action="<?=$php?>get_donate_player.php" method="post">
						<? if($group_ST < 5){ if($timer_group_db_ST == 0){ ?>
							<button class="d_ib btn" name="diamond30" type="submit">Купить на месяц (<?=$diamond30?> <i class="fa fa-rub" aria-hidden="true"></i>)</button>
						<?} else echo "<button disabled class='d_ib btn' type='submit'>Купить на месяц ($diamond30  <i class="fa fa-rub" aria-hidden="true"></i> (Уже куплена на месяц))</button>";?>
						<?}	else echo "<button disabled class='d_ib btn' type='submit'>Купить на месяц ($diamond30  <i class="fa fa-rub" aria-hidden="true"></i> (Уже есть))</button>";	?>
						<? if($group_ST == 4){ if($timer_group_db_ST == 0){ ?>
							<button class="d_ib btn" name="diamondF" type="submit">Купить навсегда (<? echo "$diamondF". <i class="fa fa-rub" aria-hidden="true"></i>." - $goldF"; ?> <i class="fa fa-rub" aria-hidden="true"></i>)</button>
						<?} else echo "<button disabled class='d_ib btn' type='submit'>Купить навсегда ($diamondF  <i class="fa fa-rub" aria-hidden="true"></i> (Уже куплена на месяц))</button>";?>
						<?}	else if($group_ST == 3){ if($timer_group_db_ST == 0){ ?>
							<button class="d_ib btn" name="diamondF" type="submit">Купить навсегда (<? echo "$diamondF". <i class="fa fa-rub" aria-hidden="true"></i>." - $lapisF"; ?> <i class="fa fa-rub" aria-hidden="true"></i>)</button>
						<?} else echo "<button disabled class='d_ib btn' type='submit'>Купить навсегда ($diamondF  <i class="fa fa-rub" aria-hidden="true"></i> (Уже куплена на месяц))</button>";?>
						<?}	else if($group_ST == 2){ if($timer_group_db_ST == 0){ ?>
							<button class="d_ib btn" name="diamondF" type="submit">Купить навсегда (<? echo "$diamondF". <i class="fa fa-rub" aria-hidden="true"></i>." - $redF"; ?> <i class="fa fa-rub" aria-hidden="true"></i>)</button>
						<?} else echo "<button disabled class='d_ib btn' type='submit'>Купить навсегда ($diamondF  <i class="fa fa-rub" aria-hidden="true"></i> (Уже куплена на месяц))</button>";?>
						<?}	else if($group_ST == 1){ ?>
							<button class="d_ib btn" name="diamondF" type="submit">Купить навсегда (<?=$diamondF?> <i class="fa fa-rub" aria-hidden="true"></i>)</button>
						<?}	else echo "<button disabled class='d_ib btn' type='submit'>Купить навсегда ($diamondF  <i class="fa fa-rub" aria-hidden="true"></i> (Уже есть))</button>";	?>
						</form>
					</div>
				</div>
			</div>	
		</div>
		<div id="emerald" class="iw-modal">
			<div class="iw-modal-wrapper">
				<div class="iw-CSS-modal-inner">
					<div class="iw-modal-header">
						<h3 class="ta_c">Подробная информация о привилегии Emerald</h3>
						<a href="#close" title="Закрыть" class="iw-close">×</a>
					</div>
					<div class="iw-modal-text">    
						<h3 class="bar">Основное</h3>
						<ul class="lct_n bar">
							<li>Префикс [<div class="emerald d_ib ffm">Emerald</div>];</li>
							<li>Возможность писать цветные сообщения в чат;</li>
							<li>Возможность утолить голод в любой момент;</li>
							<li>Возможность вылечить себя;</li>
							<li>Сохранение инвентаря после смерти;</li>
							<li>Возможность установки персонального времени;</li>
							<li>Возможность использования эндер сундука командой;</li>
							<li>Возможность использования виртуального верстака;</li>
							<li>Возможность очистки своего инвентаря;</li>
							<li>Возможность установить публичный варп у себя на острове;</li>
							<li>Возможность заходить на заполненный сервер;</li>
							<li>Возможность летать;</li>
							<li>Возможность менять погоду;</li>
							<li>Режим невидимки;</li>
							<li>Бессмертие.</li>
						</ul>
						<h3 class="bar">Команды</h3>
						<ul class="lct_n bar">
							<li>/feed - поесть</li>
							<li>/heal - вылечить себя</li>
							<li>/ptime - установить личное время</li>
							<li>/enderchest - Виртуальный эндер-сундук</li>
							<li>/craft - виртуальный верстак</li>
							<li>/clear - очистить инвентарь</li>
							<li>/god - включить бессмертие</li>
							<li>/fly - включить полёт</li>
							<li>/weather - сменить погоду</li>
							<li>/vanish - вкл/выкл невидимку</li>
						</ul>
						<form class="ta_c" action="<?=$php?>get_donate_player.php" method="post">
						<? if($group_ST < 6){ if($timer_group_db_ST == 0){ ?>
							<button class="d_ib btn" name="emerald30" type="submit">Купить на месяц (<?=$emerald30?> <i class="fa fa-rub" aria-hidden="true"></i>)</button>
						<?} else echo "<button disabled class='d_ib btn' type='submit'>Купить на месяц ($emerald30  <i class="fa fa-rub" aria-hidden="true"></i> (Уже куплена на месяц))</button>";?>
						<?}	else echo "<button disabled class='d_ib btn' type='submit'>Купить на месяц ($emerald30  <i class="fa fa-rub" aria-hidden="true"></i> (Уже есть))</button>";	?>
						<? if($group_ST == 5){ if($timer_group_db_ST == 0){ ?> 
							<button class="d_ib btn" name="emeraldF" type="submit">Купить навсегда (<? echo "$emeraldF". <i class="fa fa-rub" aria-hidden="true"></i>." - $diamondF"; ?> <i class="fa fa-rub" aria-hidden="true"></i>)</button>
						<?} else echo "<button disabled class='d_ib btn' type='submit'>Купить навсегда ($emeraldF  <i class="fa fa-rub" aria-hidden="true"></i> (Уже куплена на месяц))</button>";?>
						<?}	else if($group_ST == 4){ if($timer_group_db_ST == 0){ ?> 
							<button class="d_ib btn" name="emeraldF" type="submit">Купить навсегда (<? echo "$emeraldF". <i class="fa fa-rub" aria-hidden="true"></i>." - $goldF"; ?> <i class="fa fa-rub" aria-hidden="true"></i>)</button>
						<?} else echo "<button disabled class='d_ib btn' type='submit'>Купить навсегда ($emeraldF  <i class="fa fa-rub" aria-hidden="true"></i> (Уже куплена на месяц))</button>";?>
						<?}	else if($group_ST == 3){ if($timer_group_db_ST == 0){ ?> 
							<button class="d_ib btn" name="emeraldF" type="submit">Купить навсегда (<? echo "$emeraldF". <i class="fa fa-rub" aria-hidden="true"></i>." - $lapisF"; ?> <i class="fa fa-rub" aria-hidden="true"></i>)</button>
						<?} else echo "<button disabled class='d_ib btn' type='submit'>Купить навсегда ($emeraldF  <i class="fa fa-rub" aria-hidden="true"></i> (Уже куплена на месяц))</button>";?>
						<?}	else if($group_ST == 2){ if($timer_group_db_ST == 0){ ?> 
							<button class="d_ib btn" name="emeraldF" type="submit">Купить навсегда (<? echo "$emeraldF". <i class="fa fa-rub" aria-hidden="true"></i>." - $redF"; ?> <i class="fa fa-rub" aria-hidden="true"></i>)</button>
						<?} else echo "<button disabled class='d_ib btn' type='submit'>Купить навсегда ($emeraldF  <i class="fa fa-rub" aria-hidden="true"></i> (Уже куплена на месяц))</button>";?>
						<?}	else if($group_ST == 1){ ?>
							<button class="d_ib btn" name="emeraldF" type="submit">Купить навсегда (<?=$emeraldF?> <i class="fa fa-rub" aria-hidden="true"></i>)</button>
						<?}	else echo "<button disabled class='d_ib btn' type='submit'>Купить навсегда ($emeraldF  <i class="fa fa-rub" aria-hidden="true"></i> (Уже есть))</button>";?>
						</form>
					</div>
				</div>
			</div>	
		</div>
		<div id="mod" class="iw-modal">
			<div class="iw-modal-wrapper">
				<div class="iw-CSS-modal-inner">
					<div class="iw-modal-header">
						<h3 class="ta_c">Подробная информация о привилегии DonMod</h3>
						<a href="#close" title="Закрыть" class="iw-close">×</a>
					</div>
					<div class="iw-modal-text">    
						<h3 class="bar">Основное</h3>
						<ul class="lct_n bar">
							<li>Префикс [<div class="dsym d_ib ffm">$</div><div class="gold d_ib ffm">Mod</div><div class="dsym d_ib ffm">$</div>];</li>
							<li>Возможность писать цветные сообщения в чат;</li>
							<li>Возможность утолить голод в любой момент;</li>
							<li>Возможность вылечить себя;</li>
							<li>Сохранение инвентаря после смерти;</li>
							<li>Возможность установки персонального времени;</li>
							<li>Возможность использования эндер сундука командой;</li>
							<li>Возможность использования виртуального верстака;</li>
							<li>Возможность очистки своего инвентаря;</li>
							<li>Возможность установить публичный варп у себя на острове;</li>
							<li>Возможность заходить на заполненный сервер;</li>
							<li>Возможность летать;</li>
							<li>Возможность менять погоду;</li>
							<li>Режим невидимки;</li>
							<li>Телепорты без подтверждения;</li>
							<li>Бессмертие.</li>
						</ul>
						<h3 class="bar">Команды</h3>
						<ul class="lct_n bar">
							<li>/feed - поесть</li>
							<li>/heal - вылечить себя</li>
							<li>/ptime - установить личное время</li>
							<li>/enderchest - Виртуальный эндер-сундук</li>
							<li>/craft - виртуальный верстак</li>
							<li>/clear - очистить инвентарь</li>
							<li>/god - включить бессмертие</li>
							<li>/fly - включить полёт</li>
							<li>/weather - сменить погоду</li>
							<li>/vanish - вкл/выкл невидимку</li>
						</ul>
						<form class="ta_c" action="<?=$php?>get_donate_player.php" method="post">
						<? if($group_ST < 7){ if($timer_group_db_ST == 0){ ?>
							<button class="d_ib btn" name="mod30" type="submit">Купить на месяц (<?=$mod30?> <i class="fa fa-rub" aria-hidden="true"></i>)</button>
						<?} else echo "<button disabled class='d_ib btn' type='submit'>Купить на месяц ($mod30  <i class="fa fa-rub" aria-hidden="true"></i> (Уже куплена на месяц))</button>";?>
						<?}	else echo "<button disabled class='d_ib btn' type='submit'>Купить на месяц ($mod30  <i class="fa fa-rub" aria-hidden="true"></i> (Уже есть))</button>";	?>
						<? if($group_ST == 6){	if($timer_group_db_ST == 0){ ?> 
							<button class="d_ib btn" name="modF" type="submit">Купить навсегда (<? echo "$modF". <i class="fa fa-rub" aria-hidden="true"></i>." - $emeraldF"; ?> <i class="fa fa-rub" aria-hidden="true"></i>)</button>
						<?} else echo "<button disabled class='d_ib btn' type='submit'>Купить навсегда ($modF  <i class="fa fa-rub" aria-hidden="true"></i> (Уже куплена на месяц))</button>";?>
						<?}	else if($group_ST == 5){ if($timer_group_db_ST == 0){ ?> 
							<button class="d_ib btn" name="modF" type="submit">Купить навсегда (<? echo "$modF". <i class="fa fa-rub" aria-hidden="true"></i>." - $diamondF"; ?> <i class="fa fa-rub" aria-hidden="true"></i>)</button>
						<?} else echo "<button disabled class='d_ib btn' type='submit'>Купить навсегда ($modF  <i class="fa fa-rub" aria-hidden="true"></i> (Уже куплена на месяц))</button>";?>
						<?}	else if($group_ST == 4){ if($timer_group_db_ST == 0){ ?> 
							<button class="d_ib btn" name="modF" type="submit">Купить навсегда (<? echo "$modF". <i class="fa fa-rub" aria-hidden="true"></i>." - $goldF"; ?> <i class="fa fa-rub" aria-hidden="true"></i>)</button>
						<?} else echo "<button disabled class='d_ib btn' type='submit'>Купить навсегда ($modF  <i class="fa fa-rub" aria-hidden="true"></i> (Уже куплена на месяц))</button>";?>
						<?}	else if($group_ST == 3){ if($timer_group_db_ST == 0){ ?> 
							<button class="d_ib btn" name="modF" type="submit">Купить навсегда (<? echo "$modF". <i class="fa fa-rub" aria-hidden="true"></i>." - $lapisF"; ?> <i class="fa fa-rub" aria-hidden="true"></i>)</button>
						<?} else echo "<button disabled class='d_ib btn' type='submit'>Купить навсегда ($modF  <i class="fa fa-rub" aria-hidden="true"></i> (Уже куплена на месяц))</button>";?>
						<?}	else if($group_ST == 2){ if($timer_group_db_ST == 0){ ?> 
							<button class="d_ib btn" name="modF" type="submit">Купить навсегда (<? echo "$modF". <i class="fa fa-rub" aria-hidden="true"></i>." - $redF"; ?> <i class="fa fa-rub" aria-hidden="true"></i>)</button>
						<?} else echo "<button disabled class='d_ib btn' type='submit'>Купить навсегда ($modF  <i class="fa fa-rub" aria-hidden="true"></i> (Уже куплена на месяц))</button>";?>
						<?}	else if($group_ST == 1){ ?> 
							<button class="d_ib btn" name="modF" type="submit">Купить навсегда (<?=$modF?> <i class="fa fa-rub" aria-hidden="true"></i>)</button>
						<?}	else echo "<button disabled class='d_ib btn' type='submit'>Купить навсегда ($modF  <i class="fa fa-rub" aria-hidden="true"></i> (Уже есть))</button>";?>
						</form>
					</div>
				</div>
			</div>	
		</div>*/
				break;
			
			default:
				echo "Ошибка выбора типа доната на сервере SkyTech";
				break;
		}
	default:
		echo "Ошибка выбора сервера";
		break;
}
?>