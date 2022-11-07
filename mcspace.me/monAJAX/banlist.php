<?php require_once "cnt.php"; ?>
<div class="bg-other">
	<div class="bg-other-header">
		<div class="container-other">
			<header id="main">
				<div class="logo-other">
					<img src="../img/logo.png">
				</div>
				<nav class="mcs-navigation-other">
					<ul class="mcs-main-menu">
						<li><a onclick="location.href='/'">главная</a></li>
						<li><a onclick="location.href='#process'">форум</a></li>
						<li><a onclick="location.href='<?=$rules?>'">правила</a></li>
						<li><a onclick="location.href='<?=$servers?>'">сервера</a>
							<ul class="mcs-help-menu">
								<li><a onclick="location.href='<?=$servers?>'">Список серверов</a></li>
								<li><a onclick="location.href='#'">MMO RPG (1.12.2)</a></li>
								<li><a onclick="location.href='<?=$skytech?>'">SkyTech (1.7.10)</a></li>
							</ul>
						</li>
						<li><a onclick="location.href='#process'">помощь</a>
							<ul class="mcs-help-menu">
								<li><a onclick="location.href='<?=$download?>'">начать игру</a></li>
								<li><a onclick="location.href='#process'">регистрация</a></li>
								<li><a onclick="location.href='<?=$help?>'">справка</a></li>
								<li><a onclick="location.href='<?=$banlist?>'">банлист</a></li>
								<li><a onclick="location.href='<?=$pr_team?>'">команда проекта</a></li>
								<li><a onclick="location.href='#process'">задать вопрос</a></li>
								<li><a onclick="location.href='#process'">оставить жалобу</a></li>
								<li><a onclick="location.href='#process'">обратная связь</a></li>
							</ul>
						</li>
						<li>
							<a href="/index.php?do=exshop">донат</a>
						</li>
					</ul>
				</nav>
				<div class="buttons-other">
					<div class="sign-in" id="hider">
					</div>
				</div>
				<div class="vote">
					<div class="vote-credit">
						CR+
					</div>
					<div class="vote-text">
						голосуй
					</div>
				</div>
				<div class="download-other">
					<div class="download-text">
						начать
					</div>
				</div>
			</header>
			<div class="auth user auth_hidden" id="auth">
				<form action="<?=$php?>auth.php" method="post">
					<div class="sign-in-text">вход</div>
					<div class="mcs-login login">
						<input name="login" id="login_name" type="text" onblur="javascript:if(this.value==''){this.value='логин'};" onfocus="if(this.value=='логин') {this.value='';}" value="логин">
					</div>
					<div class="mcs-login password">
						<input name="pass" id="login_password" type="password" onblur="javascript:if(this.value==''){this.value='пароль'};" onfocus="if(this.value=='пароль') {this.value='';}" value="пароль">
					</div>
					<input type="hidden" value="submit">
					<button onclick="submit();" type="submit"></button>
					<a class="forgot" onclick="location.href='<?=$repairpass?>'">забыли пароль?</a>
					<a class="register" onclick="location.href='<?=$ur?>'">регистрация</a>
				</form>
			</div>
		</div>
	</div>
	<div class="content-other" style="font-family: Roboto">
		<div class="box">
			<h2 class="text_box bar">Банлист</h2>
			<table class='cp_table'>
				<tr>
					<th>№</th>
					<th>Имя нарушителя</th>
					<th>Имя наказателя</th>
					<th>Причина бана</th>
					<th>Дата бана</th>
					<th>Дата разбана</th>
				</tr>
				<?php
				$arrayNULL = array();
				$banl = "SELECT * FROM Ban";
				$stm = $pdo_3->query($banl);
				var_dump($stm);
				$result = $stm->fetchAll();
				var_dump($result);

				if ($result !== $arrayNULL){
					$sql = "SELECT * FROM Ban";
					$result = $pdo_3->query($sql);
					$rows = $result->fetchAll();
					var_dump($rows);
					$i = 1;
					foreach($rows as $data) {
						$timeEpoch = $data['time'];
		            	$timeConvert = $timeEpoch / 1000;
		           		$timeResult = date('d.m.Y H:i', $timeConvert);
		           		$dtime = $data['expires'];
		            	$dtimeC = $dtime / 1000;
		           		$dtimeD = date('d.m.Y H:i', $dtimeC);
						echo "<tr><td>".$i."</td>";
						echo "<td>".$data['name']."</td>";
						echo "<td>".$data['banner']."</td>";
						echo "<td>".$data['reason']."</td>";
						echo "<td>".$timeResult."</td>";
						if ($data['expires']==0) {
							echo "<td>Никогда</td></tr>";
		           		} else echo "<td>".$dtimeD."</td></tr>";
		           		$i++;
					}
				} else {
					echo "<td colspan='6'>На данный момент ни один игрок не заблокирован.<br/>Как же это прекрасно, когда никто не нарушает правила и играют честно.</td>";
				}
			?>
			</table>
		</div>
	</div>
	<footer>
		<div class="container-other-footer">
		<div class="other-footer-left">
			<a href="" target="_blank" class="metrica">
				<img src="../img/metrica1.gif">
			</a>
			<a href="" target="_blank">
				<img src="../img/metrica2.png">
			</a>
			<a href="https://senko.space/" target="_blank" class="powered">
				powered by senko`s space
			</a>
		</div>
		<div class="footer-center">
			<div class="footer-center-top">
				<div class="footer-center-left">
					<div class="footer-width200 footer-font24">
						<a href="" style="color: #FFFAFA !important;">
							Главная
						</a>
					</div>
					<div class="footer-width200">
						<a href="" style="color: #FFFAFA !important;">
							Форум
						</a>
					</div>
					<div class="footer-width200">
						<a href="" style="color: #FFFAFA !important;">
							Правила
						</a>
					</div>
					<div class="footer-width200">
						<a href="" style="color: #FFFAFA !important;">
							Команда проекта
						</a>
					</div>
					<div class="footer-width200">
						<a href="" style="color: #FFFAFA !important;">
							Задать вопрос
						</a>
					</div>
					<div class="footer-width200">
					<a href="" style="color: #FFFAFA !important;">
							Регистрация
						</a>
					</div>
				</div>
				<div class="footer-center-right">
					<div class="footer-font24 footer-width300">
						Обратная связь:
					</div>
					<div class="footer-width300">
						<a href="mailto:support@mcspace.me" target="_blank" style="color: #FFFAFA !important;">
							support@mcspace.me
						</a>	
					</div>
					<div class="footer-width300">
						<a href="https://vk.com/fresh.lemon" target="_blank" style="color: #FFFAFA !important;">
							vk.com/fresh.lemon
						</a>	
					</div>
					<div class="footer-width300">
						<div class="footer-ds-text">
							FReshLemon#9953
						</div>
						<img src="../img/ico_ds.png" width="30">
					</div>
					<div class="footer-font24 footer-width300">
						Мы в социальных сетях:
					</div>
					<div class="footer-width300">
						<a href="" class="footer-social">
							<img src="../img/ico_yt.png">
						</a>
						<a href="" class="footer-social">
							<img src="../img/ico_vk.png">
						</a>
						<a href="" class="footer-social">
							<img src="../img/ico_ds.png">
						</a>
					</div>
				</div>
			</div>
			<div class="footer-center-middle">
				Мы предоставляем ознакомительный бесплатный вариант игры Minecraft купить лицензионную версию игры можно <a href="" style="color: #21D0FE !important;">здесь</a>
			</div>
			<div  class="footer-center-bottom">
				Copyright ©2019 - 2020 <a href="https://mcspace.me" style="color: #FFFAFA !important;">MCSPACE.ME</a>
			</div>
		</div>
		<div class="other-footer-right">
			<div class="footer-right-pay">
				<a href="" target="_blank">
					<img src="../img/pay1.gif">
				</a>
				<a href="" target="_blank">
					<img src="../img/pay2.jpg">
				</a>
			</div>
			<div class="footer-right-pay">
				<a href="" target="_blank">
					<img src="../img/pay3.png">
				</a>
				<a href="" target="_blank">
					<img src="../img/pay4.png">
				</a>
			</div>
			<a href="https://vk.com/fresh.lemon" target="_blank" class="powered">
				designed by freshlemon
			</a>
		</div>
		</div>
	</footer>
</div>      