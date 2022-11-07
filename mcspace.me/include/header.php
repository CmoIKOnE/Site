<?php
	if(isset($_GET["yes"]))
		echo "<div class='binfo_success binfo_show' id='binfo'><div class='binfo_header'>Успех<a href='#close' class='binfo_close'>×</a></div><div class='binfo_body'>Вы успешно зарегистированы!</div></div>";
	if(isset($_GET["yesEmail"]))
		echo "<div class='binfo_success binfo_show' id='binfo'><div class='binfo_header'>Успех<a href='#close' class='binfo_close'>×</a></div><div class='binfo_body'>Вы почти зарегистированы! Код отправлен на $email</div></div>";
	if(isset($_GET["codeerror"]))
		echo "<div class='binfo_error binfo_show' id='binfo'><div class='binfo_header'>Ошибка<a href='#close' class='binfo_close'>×</a></div><div class='binfo_body'>Введён пустой код.</div></div>";
	if(isset($_GET["codeerror1"]))
		echo "<div class='binfo_error binfo_show' id='binfo'><div class='binfo_header'>Ошибка<a href='#close' class='binfo_close'>×</a></div><div class='binfo_body'>Введён неверный код.</div></div>";
	if(isset($_GET["usererror"]))
		echo "<div class='binfo_error binfo_show' id='binfo'><div class='binfo_header'>Ошибка<a href='#close' class='binfo_close'>×</a></div><div class='binfo_body'>Введён неправильный логин и пароль.</div></div>";
	if(isset($_GET["loginpasserror"]))
		echo "<div class='binfo_error binfo_show' id='binfo'><div class='binfo_header'>Ошибка<a href='#close' class='binfo_close'>×</a></div><div class='binfo_body'>Введён пустой логин и пароль.</div></div>";
	if(isset($_GET["loginerror"]))
		echo "<div class='binfo_error binfo_show' id='binfo'><div class='binfo_header'>Ошибка<a href='#close' class='binfo_close'>×</a></div><div class='binfo_body'>Введён пустой логин.</div></div>";
	if(isset($_GET["pass11"]))
		echo "<div class='binfo_error binfo_show' id='binfo'><div class='binfo_header'>Ошибка<a href='#close' class='binfo_close'>×</a></div><div class='binfo_body'>Введённые вами пароли не совпадают.</div></div>";
	if(isset($_GET["passerror"]))
		echo "<div class='binfo_error binfo_show' id='binfo'><div class='binfo_header'>Ошибка<a href='#close' class='binfo_close'>×</a></div><div class='binfo_body'>Введён пустой пароль.</div></div>";
	if(isset($_GET["emailfakerepair"]))
		echo "<div class='binfo_error binfo_show' id='binfo'><div class='binfo_header'>Ошибка<a href='#close' class='binfo_close'>×</a></div><div class='binfo_body'>Электронная почта не существует.</div></div>";
	if(isset($_GET["robot"]))
		echo "<div class='binfo_error binfo_show' id='binfo'><div class='binfo_header'>Ошибка<a href='#close' class='binfo_close'>×</a></div><div class='binfo_body'>Вы не человек.</div></div>";
	if(isset($_GET["5min"]))
		echo "<div class='binfo_error binfo_show' id='binfo'><div class='binfo_header'>Ошибка<a href='#close' class='binfo_close'>×</a></div><div class='binfo_body'>Отправить письмо повторно можно не чаще 1 раза в 5 минут.</div></div>";
	if(isset($_GET["success"]))
		echo "<div class='binfo_success binfo_show' id='binfo'><div class='binfo_header'>Успех<a href='#close' class='binfo_close'>×</a></div><div class='binfo_body'>Оплата прошла успешно.</div></div>";
	if(isset($_GET["no"]))
		echo "<div class='binfo_error binfo_show' id='binfo'><div class='binfo_header'>Ошибка<a href='#close' class='binfo_close'>×</a></div><div class='binfo_body'>Ошибка сервера.</div></div>";
	if(isset($_GET["have"]))
		echo "<div class='binfo_warning binfo_show' id='binfo'><div class='binfo_header'>Предупреждение<a href='#close' class='binfo_close'>×</a></div><div class='binfo_body'>У вас имеется этот товар.</div></div>";	
	if(isset($_GET["emptypass"]))
		echo "<div class='binfo_error binfo_show' id='binfo'><div class='binfo_header'>Ошибка<a href='#close' class='binfo_close'>×</a></div><div class='binfo_body'>Введён пустой пароль.</div></div>";
	if(isset($_GET["errorEmail"]))
		echo "<div class='binfo_error binfo_show' id='binfo'><div class='binfo_header'>Ошибка<a href='#close' class='binfo_close'>×</a></div><div class='binfo_body'>Ошибка почты.</div></div>";	
	if(isset($_GET["passerror3"]))
		echo "<div class='binfo_error binfo_show' id='binfo'><div class='binfo_header'>Ошибка<a href='#close' class='binfo_close'>×</a></div><div class='binfo_body'>Ваш пароль должен быть длиной от 8 до 24.</div></div>";	
	if(isset($_GET["pass111"]))
		echo "<div class='binfo_error binfo_show' id='binfo'><div class='binfo_header'>Ошибка<a href='#close' class='binfo_close'>×</a></div><div class='binfo_body'>Введённые вами пароли не совпадают.</div></div>";	
	if(isset($_GET["passerror4"]))
		echo "<div class='binfo_error binfo_show' id='binfo'><div class='binfo_header'>Ошибка<a href='#close' class='binfo_close'>×</a></div><div class='binfo_body'>В пароле недопустимые символы.</div></div>";
	if(isset($_GET['notRub']))
		echo "<div class='binfo_error binfo_show' id='binfo'><div class='binfo_header'>Ошибка<a href='#close' class='binfo_close'>×</a></div><div class='binfo_body'>У вас недостаточно денежных средств.</div></div>";	
	if(isset($_GET['errorItem']))
		echo "<div class='binfo_error binfo_show' id='binfo'><div class='binfo_header'>Ошибка<a href='#close' class='binfo_close'>×</a></div><div class='binfo_body'>Оплата не прошла.</div></div>";
	if(isset($_GET['trsuccess']))
		echo "<div class='binfo_success binfo_show' id='binfo'><div class='binfo_header'>Успех<a href='#close' class='binfo_close'>×</a></div><div class='binfo_body'>Перевод успешно выполнен.</div></div>";
	if(isset($_GET['trno']))
		echo "<div class='binfo_error binfo_show' id='binfo'><div class='binfo_header'>Ошибка<a href='#close' class='binfo_close'>×</a></div><div class='binfo_body'>Перевод не прошёл.</div></div>";
	if(isset($_GET['servererror']))
		echo "<div class='binfo_error binfo_show' id='binfo'><div class='binfo_header'>Ошибка<a href='#close' class='binfo_close'>×</a></div><div class='binfo_body'>Не выбран нужный Вам сервер.</div></div>";	
	if(isset($_GET['notbanned']))
		echo "<div class='binfo_error binfo_show' id='binfo'><div class='binfo_header'>Ошибка<a href='#close' class='binfo_close'>×</a></div><div class='binfo_body'>Вы не в списке бана.</div></div>";		
	if(isset($_GET['unbanned']))
		echo "<div class='binfo_success binfo_show' id='binfo'><div class='binfo_header'>Успех<a href='#close' class='binfo_close'>×</a></div><div class='binfo_body'>Бан снят с вашего аккаунта выбранного сервера. Вы можете спокойно играть на сервере.</div></div>";
	if(isset($_GET['notime']))
		echo "<div class='binfo_warning binfo_show' id='binfo'><div class='binfo_header'>Предупреждение<a href='#close' class='binfo_close'>×</a></div><div class='binfo_body'>У вас имеется привилегия, которая она действует.</div></div>";
	if(isset($_GET["unitpaySuccess"]))
		echo "<div class='binfo_success binfo_show' id='binfo'><div class='binfo_header'>Успех<a href='#close' class='binfo_close'>×</a></div><div class='binfo_body'>Оплата прошла успешно.</div></div>";
	if(isset($_GET["unitpayFail"]))
		echo "<div class='binfo_error binfo_show' id='binfo'><div class='binfo_header'>Ошибка<a href='#close' class='binfo_close'>×</a></div><div class='binfo_body'>Оплата не прошла.</div></div>";
	/*СКИНЫ*/
	if(isset($_GET['notskinpng']))
		echo "<div class='binfo_warning binfo_show' id='binfo'><div class='binfo_header'>Предупреждение<a href='#close' class='binfo_close'>×</a></div><div class='binfo_body'>Скин должен быть формата .png</div></div>";
	if(isset($_GET['skinsuccess']))
		echo "<div class='binfo_success binfo_show' id='binfo'><div class='binfo_header'>Успех<a href='#close' class='binfo_close'>×</a></div><div class='binfo_body'>Ваш скин успешно изменён.</div></div>";		
	if(isset($_GET['defaultskin']))
		echo "<div class='binfo_success binfo_show' id='binfo'><div class='binfo_header'>Успех<a href='#close' class='binfo_close'>×</a></div><div class='binfo_body'>Теперь у вас стандартный скин.</div></div>";		
	if(isset($_GET['notuploadskin']))
		echo "<div class='binfo_error binfo_show' id='binfo'><div class='binfo_header'>Ошибка<a href='#close' class='binfo_close'>×</a></div><div class='binfo_body'>Загрузка скина не удалась. Попробуйте загрузить скин ещё раз.</div></div>";
	if(isset($_GET['sizeHDskin']))
		echo "<div class='binfo_warning binfo_show' id='binfo'><div class='binfo_header'>Предупреждение<a href='#close' class='binfo_close'>×</a></div><div class='binfo_body'>Максимальный размер HD скина должен быть 2048x1024, минимальный 64х32.</div></div>";	
	if(isset($_GET['maxsizeskin']))
		echo "<div class='binfo_warning binfo_show' id='binfo'><div class='binfo_header'>Предупреждение<a href='#close' class='binfo_close'>×</a></div><div class='binfo_body'>Размер скина не должен превышать 2Мб.</div></div>";			
	if(isset($_GET['sizeskin']))
		echo "<div class='binfo_warning binfo_show' id='binfo'><div class='binfo_header'>Предупреждение<a href='#close' class='binfo_close'>×</a></div><div class='binfo_body'>Размер скина не должен превышать 50Кб и размер до 64x64.</div></div>";
	if(isset($_GET['downloadskin']))
		echo "<div class='binfo_success binfo_show' id='binfo'><div class='binfo_header'>Успех<a href='#close' class='binfo_close'>×</a></div><div class='binfo_body'>Вы скачали свой скин.</div></div>";
	/*ПЛАЩИ*/
	if(isset($_GET['notcloakpng']))
		echo "<div class='binfo_warning binfo_show' id='binfo'><div class='binfo_header'>Предупреждение<a href='#close' class='binfo_close'>×</a></div><div class='binfo_body'>Плащ должен быть формата .png</div></div>";
	if(isset($_GET['cloaksuccess']))
		echo "<div class='binfo_success binfo_show' id='binfo'><div class='binfo_header'>Успех<a href='#close' class='binfo_close'>×</a></div><div class='binfo_body'>Ваш плащ успешно изменён.</div></div>";		
	if(isset($_GET['defaultcloak']))
		echo "<div class='binfo_success binfo_show' id='binfo'><div class='binfo_header'>Успех<a href='#close' class='binfo_close'>×</a></div><div class='binfo_body'>Теперь у вас стандартный плащ.</div></div>";		
	if(isset($_GET['notuploadcloak']))
		echo "<div class='binfo_error binfo_show' id='binfo'><div class='binfo_header'>Ошибка<a href='#close' class='binfo_close'>×</a></div><div class='binfo_body'>Загрузка плаща не удалась. Попробуйте загрузить плащ ещё раз.</div></div>";
	if(isset($_GET['sizeHDcloak']))
		echo "<div class='binfo_warning binfo_show' id='binfo'><div class='binfo_header'>Предупреждение<a href='#close' class='binfo_close'>×</a></div><div class='binfo_body'>Максимальный размер HD плаща должен быть 512x256, минимальный 64х32.</div></div>";	
	if(isset($_GET['maxsizecloak']))
		echo "<div class='binfo_warning binfo_show' id='binfo'><div class='binfo_header'>Предупреждение<a href='#close' class='binfo_close'>×</a></div><div class='binfo_body'>Размер плаща не должен превышать 2Мб.</div></div>";			
	if(isset($_GET['sizecloak']))
		echo "<div class='binfo_warning binfo_show' id='binfo'><div class='binfo_header'>Предупреждение<a href='#close' class='binfo_close'>×</a></div><div class='binfo_body'>Размер плаща не должен превышать 50Кб и размер до 64x32.</div></div>";
	if(isset($_GET['downloadcloak']))
		echo "<div class='binfo_success binfo_show' id='binfo'><div class='binfo_header'>Успех<a href='#close' class='binfo_close'>×</a></div><div class='binfo_body'>Вы скачали свой плащ.</div></div>";
?>
<?php require_once "cnt.php";
$json = file_get_contents("monAJAX/ajax.json");
$jsonDe = json_decode($json,true);
?>
<header id="main">
	<nav class="mcs-navigation">
		<ul class="mcs-main-menu">
			<li><a href="https://mcspace.me">главная</a></li>
			<li style="opacity: 0.25"><!--a href="<?=$forum?>"--><a href="#process">форум</a></li>
			<li><a href="<?=$rules?>">правила</a></li>
			<li><a href="<?=$servers?>">сервера</a>
				<ul class="mcs-help-menu">
					<li><a href="<?=$servers?>">Список серверов</a></li>
					<li><a href="<?=$mmorpg?>">MMORPG (1.12.2)</a></li>
					<li><a href="<?=$skytech?>">SkyTech (1.7.10)</a></li>
				</ul>
			</li>
			<li>
				<a href="#process">помощь</a>
				<ul class="mcs-help-menu">
					<li><a href="<=$download?>">начать игру</a></li>
					<li><a href="<?=$reg?>">регистрация</a></li>
					<li><a href="<?=$help?>">справка</a></li>
					<li><a href="<?=$banlist?>">банлист</a></li>
					<li><a href="<?=$pr_team?>">команда проекта</a></li>
					<li><a href="https://vk.com/im?sel=-184116470" target="_blank">задать вопрос</a></li>
					<li><a href="https://vk.com/im?sel=-184116470" target="_blank">оставить жалобу</a></li>
					<li><a href="https://vk.com/im?sel=-184116470" target="_blank">обратная связь</a></li>
				</ul>
			</li>
			<li>
				<a href="<?=$donate?>">донат</a>
			</li>
		</ul>
	</nav>
	<div class="buttons">
		<div class="download">
			<?php if($_SESSION['login'] !== true): ?>
				<a class="c_p" href="<?=$reg?>">начать</a>
			<?php else: ?>
				<a class="c_p" href="<?=$download?>">cкачать</a>
			<?php endif; ?>
		</div>
	</div>
	<a href="https://mcspace.me/page/votes" class="go-vote">
		<div>
			CR+
		</div>
		<div>
			голосуй
		</div>
	</a>
	<a class="logo" href="https://mcspace.me"></a>
	<div id="process" class="iw-modal">
		<div class="iw-modal-wrapper">
			<div class="iw-CSS-modal-inner">
				<div class="iw-modal-header">
					<h3 class="ta_c">На данный момент страница в разработке</h3>
					<a href="#close" title="Закрыть" class="iw-close">×</a>
				</div>
				<div class="iw-modal-text">    
					<h3 class="bar">Приносим извенения за предоставленные неудобства.</h3>
				</div>
			</div>
		</div>	
	</div>
</header>
<div>
	<?php if($_SESSION['login'] !== true): ?>
	<div class="user">
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
			<a class="forgot" href="<?=$repairpass?>">Забыли пароль?</a>
			<a class="register" href="<?=$reg?>">регистрация</a>
		</form>
	</div>
	<?php else: ?>
	<div class="user-logged-in">
		<a href="<?=$account?>" style="color: #00050B !important;">
			<div>
				<img src="../img/ico_user_black.png">
				<div>Личный кабинет</div>
			</div>
		</a>
		<a href="<?=$donate?>" style="color: #00050B !important;">
			<div>
				<img src="../img/ico_donate.png">
				<div>Донат</div>
			</div>
		</a>
		<a href="https://mcspace.me/page/credits#slider-wrap" style="color: #00050B !important;">
			<div>
				<img src="../img/ico_credit.png">
				<div>Распределение кредитов</div>
			</div>
		</a>
		<a href="<?=$account?>" style="color: #00050B !important;">
			<div>
				<img src="../img/ico_ref.png">
				<div>Реферальная система</div>
			</div>
		</a>
		<a href="<?=$changepass?>" style="color: #00050B !important;">
			<div>
				<img src="../img/ico_pass.png">
				<div>Смена пароля</div>
			</div>
		</a>
		<? if($mod_group_ST >= 10 || $mod_group_ST == 7 || $mod_group_ST == 5 || $mod_group_ST == 8 || $mod_group_MMO >= 10 || $mod_group_MMO == 7 || $mod_group_MMO == 5 || $mod_group_MMO == 8) { ?>
		<a href="<?=$account?>" style="color: #00050B !important;">
			<div>
				<img src="../img/ico_panel.png">
				<div>Панель управления</div>
			</div>
		</a>
		<? } ?>
		<? if($mod_group_ST >= 10 || $mod_group_MMO >= 10) { ?>
		<a href="<?=$account?>" style="color: #00050B !important;">
			<div>
				<img src="../img/ico_console.png">
				<div>Консоль</div>
			</div>
		</a>
		<? } ?>
		<div class="main-profile">
			<a href="<?=$account?>" style="color: #FFFAFA !important;">
				<div class="main-open"> <!-- Переход в профиль -->
					<img src="../img/ico_user.png">
					<div><?=$_SESSION['user']?></div>
				</div>
			</a>
			<a href="<?=$account?>" style="color: #FFFAFA !important;">
				<div class="main-avatar"> <!-- Переход в профиль -->
					<?php 
						$filepath = $_SERVER['DOCUMENT_ROOT']."/skins/".$_SESSION['user'].".png";
						if(file_exists($filepath)) {
							//echo "<img src='http://164.132.201.152:7777/mcspace.me/skins/".$_SESSION['user'].".png?".date('YmdHis')."'>";
							echo "<div class='mc-face-viewer-6x' style='background-image:url(http://164.132.201.152:7777/mcspace.me/skins/".$_SESSION['user'].".png?".date('YmdHis').")'></div>";
						} else {
							echo "<div class='mc-face-viewer-6x' style='background-image:url(http://164.132.201.152:7777/mcspace.me/skins/Default.png)'></div>";
							//echo "<img src='http://164.132.201.152:7777/mcspace.me/skins/Default.png'>";
						}
					?>
				</div>
			</a>
			<a href="<?=$php?>exit.php">
				<div class="main-logout"> <!-- Выход -->
					<img src="../img/ico_logout.png">
					<div>Выход</div>
				</div>
			</a>
		</div>
	</div>
	<?php endif; ?>
</div>
<div class="proj-monitorings">
	<div class="proj-monitoring">
		<a href="https://topcraft.ru/servers/10372/" target="_blank">
			<img src="https://topcraft.ru/media/projects/10372/tops.png">
			<div class="proj-num">
				80
			</div>
			<div class="proj-up">
				⇧
			</div>
		</a>
	</div>
	<!-- ⇧ ⇩ -->
	<div class="proj-monitoring">
		<a href="https://mctop.su/servers/6037/" target="_blank">
			<img src="https://mctop.su/media/projects/6037/tops.png">
			<div class="proj-num">
				60
			</div>
			<div class="proj-up">
				⇧
			</div>
		</a>
	</div>
	<div class="proj-monitoring">
		<a href="http://mcrate.su/rate/8772" target="_blank">
			<img src="http://mcrate.su/bmini.png">
			<div class="proj-num">
				51
			</div>
			<div class="proj-down">
				⇩
			</div>
		</a>
	</div>
</div>
<div class="serv-monitorings">
	<div class="serv-monitorings-title">
		мониторинг
	</div>
	<div class="server-count">
		<div class="server-container">
			<div class="server-left">
				<span class=ServName>общий онлайн</span>
			</div>
			<div class="server-right">
				<? echo $jsonDe["online"]."/".$jsonDe["slots"]; ?>
			</div>
		</div>
		<div class="server-show">
			<img src="../img/online_bg.png" style=" position: absolute; margin-top: 5px;">
			<? $mon_percent = ($jsonDe["online"]/$jsonDe["slots"])*100;
				echo "<img src='../img/online_count.png' style=' clip-path: polygon(0 0, ". $mon_percent ."% 0%, ". $mon_percent ."% 100%, 0% 100%);'>" ?>
		</div>
		<div class="server-container">
			<div class="server-left">
				суточный рекорд
			</div>
			<div class="server-right">
				<?php echo $jsonDe["recordday"]; ?>
			</div>
		</div>
		<div class="server-container">
			<div class="server-left">
				абсолютный рекорд
			</div>
			<div class="server-right">
				<?php echo $jsonDe["record"]; ?>
			</div>
		</div>
	</div>
	<a class="show-all" href="<?=$servers?>">
			Показать полностью
	</a>
</div>
<div class="banner">
	<div class="banner-text">
		самый
	</div>
	<div id=flip>
		<div><div>МАГИЧЕСКИЙ</div></div>
		<div><div>КОСМИЧЕСКИЙ</div></div>
		<div><div>КУБИЧЕСКИЙ</div></div>
		</div>
		<div class="banner-text">
		minecraft проект
	</div>
</div>
<script type="text/javascript">
	$('#binfo').onclick = function() { 
		binfo.classList.remove("binfo_show");
	}
</script>