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
<?php
require_once "cnt.php";
?>
	<?php if($_SESSION['login'] !== true): ?>
	<div class="box" style="margin-top:770px;">
		<h2 class="bar text_box">Авторизация</h2>
		<form action="<?=$php?>auth.php" class="d_g" method="post">
			<input type="text" class="input" name="login" id="login_name" placeholder="Введите ваш ник">
			<input type="password" class="input" name="pass" id="login_password" placeholder="Введите ваш пароль">
			<input type="submit" value="Войти" class="btn_go">
		</form>
		<div class="d_g gr_2x_122">
			<a onclick="location.href='<?=$ur?>'" class="c_p ta_l">Регистрация</a>
			<a onclick="location.href='<?=$repairpass?>'" class="c_p ta_r">Я забыл пароль</a>
		</div>
	</div>
	<?php else: ?>
	<div class="box">
		<div class="d_ib wh_64 mb10">
			<?php 
				$filepath = $_SERVER['DOCUMENT_ROOT']."/skins/".$_SESSION['user'].".png";
				if(file_exists($filepath)) {
					echo "<div class='mc-face-viewer-8x' style='background-image:url(http://164.132.201.152:7777/mcspace.me/skins/".$_SESSION['user'].".png?".date('YmdHis').")'></div>";
				} else {
					echo "<div class='mc-face-viewer-8x' style='background-image:url(http://164.132.201.152:7777/mcspace.me/skins/Default.png)'></div>";
				}
			?>
		</div>
		<h3 class="text_box skin_t">
			<script type="text/javascript">
                var h=(new Date()).getHours();
                if (h > 3 && h < 12) document.writeln("С добрым утром, ");
                if (h > 11 && h < 19) document.writeln("Добрый день, ");
                if (h > 18 && h < 23) document.writeln("Добрый вечер, ");
                if (h > 22 || h < 4 ) document.writeln("Славная ночь, ");
            </script><?=$_SESSION['user']?>
        </h3>
		<div>
			<div class="d_g gr_2x_122">
				<p class="input f_l"><span class="balance_result"><?=$rub?></span> <i class='fa fa-rub' aria-hidden='true'></i></p>
				<p class="input f_r"><span class="balance_result"><?=$credit?></span> CR</p>
			</div>
			<ul>
				<li class="lct_n"><div class="d_g gr_2x_24_210"><img class="wh_24" src="<?=$path_to_images?>user.png" alt="Личный кабинет"><a onclick="location.href='<?=$akk?>'" class="c_p pl10">Личный кабинет</a></div></li>
				<hr>
				<li class="lct_n"><div class="d_g gr_2x_24_210"><img class="wh_24" src="<?=$path_to_images?>banlist.png" alt="Банлист"><a onclick="location.href='<?=$banlist?>'" class="c_p pl10">Банлист</a></div></li>
				<hr>
				<?php if($mod_group_ST >= 10 || $mod_group_ST == 7 || $mod_group_ST == 5 || $mod_group_ST == 8) {?>
				<li class="lct_n"><div class="d_g gr_2x_24_210"><img class="wh_24" src="<?=$path_to_images?>console.png" alt="Консоль"><a onclick="location.href='https://mcspace.me/panel/index.php'" class="c_p pl10">Панель управления</a></div></li><hr>
				<?php }else{echo '';} ?>
				<li class="lct_n"><div class="d_g gr_2x_24_210"><img class="wh_24" src="<?=$path_to_images?>update.png" alt="Сменить пароль"><a onclick="location.href='<?=$changepass?>'" class="c_p pl10">Сменить пароль</a></div></li>
				<hr>
				<?php if($mod_group_ST >= 10) {?>
				<li class="lct_n"><div class="d_g gr_2x_24_210"><img class="wh_24" src="<?=$path_to_images?>console.png" alt="Консоль"><a onclick="location.href='https://panel.senko.space/'" class="c_p pl10">Консоль</a></div></li><hr>
				<?php }else{echo '';} ?>
				<li class="lct_n"><div class="d_g gr_2x_24_210"><img class="wh_24" src="<?=$path_to_images?>logout.png" alt="Выход"><a onclick="location.href='<?=$php?>exit.php'" class="c_p pl10">Выход</a></div></li>
			</ul>
        </div>
	</div>
	<?php endif; ?>
	<div class="votes">
		<a class="votes_information c_p" onclick="location.href='https://mcspace.me/page/votes'">
            <img src="<?=$path_to_images?>cr.png" title="Голосование" alt="Кредит">
            <br>
            <span class="votes_span">Голосование</span>
        </a>
	</div>
	<div class="box">
		<h2 class="text_box">Мониторинг</h2>
		<div class="mongr">
			<?php require_once "monAJAX/template/Def/monitoring.php"; ?>
		</div>
	</div>
	<div class="discord">
		<a class="discord_information c_p" href='https://discordapp.com/invite/UwAAtDu' target="_blank">
            <img src="<?=$path_to_images?>discord.png" title="Наш канал" alt="Дискорд">
            <br>
			<span class="discord_span">Наш канал</span>
        </a>
	</div>
	<div class="vk">
		<a class="vk_information c_p" href='https://vk.com/mcspace_me' target="_blank">
            <img src="<?=$path_to_images?>vk.png" title="Наша группа" alt="Вконтакте">
            <br>
            <span class="vk_span">Наша группа</span>
        </a>
	</div>
	<script type="text/javascript">
		binfo.onclick = function() { 
			binfo.classList.remove("binfo_show");
		}
	</script>
	<!--<script type="text/javascript">
	   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
	   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
	   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

	   ym(56644831, "init", {
			clickmap:true,
			trackLinks:true,
			accurateTrackBounce:true,
			webvisor:true
	   });
	</script>-->
	<!--<noscript><div><img src="https://mc.yandex.ru/watch/56644831" style="position:absolute; left:-9999px;" alt=""></div></noscript>-->