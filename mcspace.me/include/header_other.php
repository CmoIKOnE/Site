<div class='bg-other'>
	<div class="bg-other-header">
		<div class="container-other">
			<header id="main">
				<div class="logo-other">
					<a href='/'><img src="../img/logo.png"></a>
				</div>
				<nav class="mcs-navigation-other">
					<ul class="mcs-main-menu">
						<li><a href="/">главная</a></li>
						<li style="opacity: 0.25"><!--a href="<?=$forum?>"--><a href="#process">форум</a></li>
						<li><a href="<?=$rules?>">правила</a></li>
						<li><a href="<?=$servers?>">сервера</a>
							<ul class="mcs-help-menu">
								<li><a href="<?=$servers?>">Список серверов</a></li>
								<li><a href="<?=$mmorpg?>">MMO RPG (1.12.2)</a></li>
								<li><a href="<?=$skytech?>">SkyTech (1.7.10)</a></li>
							</ul>
						</li>
						<li><a href="#process">помощь</a>
							<ul class="mcs-help-menu">
								<li><a href="<?=$download?>">начать игру</a></li>
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
				<? if($_SESSION['login'] == false) { ?>
					<div class="buttons-other">
						<div class="sign-in" id="hider-auth">
						</div>
					</div>
				<? } else { ?>
					<div class="header-profile">
						<a href="<?=$account?>">
							<div class="profile-open">
								<img src="../img/ico_user.png">
								<div><?=$_SESSION['user']?></div>
							</div>
						</a>
						<div class="header-profile-balance" id="header-profile-balance">
							<div id="prof-rub"><?=$rub?><i class='fa fa-rub' aria-hidden='true'></i></div>
							<div id="prof-cr" style="display: none;"><?=$credit?> CR</div>
						</div>
						<a href="<?=$account?>">
							<div class="header-avatar">
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
						<a onclick="location.href='<?=$php?>exit.php'">
							<div class="header-logout">
								<img src="../img/ico_logout.png">
								<div>Выход</div>
							</div>
						</a>
					</div>
				<? } ?>
				<a a href='<?=$votes?>'>
					<div class="vote">
						<div class="vote-credit">
							CR+
						</div>
						<div class="vote-text">
							голосуй
						</div>
					</div>
				</a>
				<?php if($_SESSION['login'] !== true): ?>
					<a href="<?=$reg?>">
						<div class="download-other">
							<div class="download-text">
								Начать
				<?php else: ?>
					<a href="<?=$download?>">
						<div class="download-other">
							<div class="download-text">
								Скачать
				<?php endif; ?>
						</div>
					</div>
				</a>
			</header>
			<? if($_SESSION['login'] == false) { ?>
			<div class="auth user auth_hidden" id="auth">
				<form action="<?=$php?>auth.php" method="post">
					<div class="sign-in-text">Вход</div>
					<div class="mcs-login login">
						<input name="login" id="login_name" type="text" onblur="javascript:if(this.value==''){this.value='логин'};" onfocus="if(this.value=='логин') {this.value='';}" value="логин">
					</div>
					<div class="mcs-login password">
						<input name="pass" id="login_password" type="password" onblur="javascript:if(this.value==''){this.value='пароль'};" onfocus="if(this.value=='пароль') {this.value='';}" value="пароль">
					</div>
					<input type="hidden" value="submit">
					<button onclick="submit();" type="submit"></button>
					<a class="forgot" href='<?=$repairpass?>'>Забыли пароль?</a>
					<a class="register" href='<?=$reg?>'>регистрация</a>
				</form>
			</div>
		<? } ?>
		</div>
	</div>
</div>
<script type="text/javascript">
$(document).ready(function () {

	setInterval(function(){ 
    	 if ($('#prof-rub').css('display') == 'none') {
    	 	$('#prof-cr').css('display', 'none');
    	 	$('#prof-rub').css('display', 'block');
    	 } else if ($('#prof-cr').css('display') == 'none') {
    	 	$('#prof-rub').css('display', 'none');
    	 	$('#prof-cr').css('display', 'block');
    	 }
	}, 10000);

});
</script>