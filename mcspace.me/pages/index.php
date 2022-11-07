<? require_once "cnt.php"; ?>
<div class="content-other">
	<div class="page-header">
		<img src="../img/page_header.png">
		<? if(isset($_GET['yes'])) { ?>
			<div>Регистрация</div>
		<? } else { ?>
			<div>Авторизация</div>
		<? } ?>
	</div>
	<div class="page-content" style="overflow: hidden;">
			 <? if($_SESSION['login'] !== true){
			if(!isset($_GET['yes'])) { 
				if(isset($_GET['loginpasserror'])) echo "<center><h2 class='ta_c'>Введён пустой логин и пароль.</h2></center>";
				elseif(isset($_GET['loginerror'])) echo "<center><h2 class='ta_c'>Введён пустой логин.</h2></center>";
				elseif(isset($_GET['passerror'])) echo "<center><h2 class='ta_c'>Введён пустой пароль.</h2></center>";
				elseif(isset($_GET['usererror'])) echo "<center><h2 class='ta_c'>Введён неправильный логин и пароль.</h2></center>";
				else echo "<center><h2 class='ta_c'>Вы зашли, как гость. Вам необходимо авторизоваться.</h2></center>";
			} elseif(isset($_GET['yes']))  echo "<center><h2 class='ta_c'>Вы зарегистированы. <a href='https://mcspace.me'>На главную.</a></h2></center>"; 
			 } else { ?>
				<? if(isset($_GET['yes'])) {
					echo "<center><h2 class='ta_c'>Вы зарегистированы.</h2></center>";
				 } else { 
					echo "<center><h2 class='ta_c'>Вы авторизованы.</h2></center>";
				 } ?>
					<form class="reg_form" action="/" method="post">
						<center><button class="account-btn" name="submit" type="submit" style="float: none;">На главную страницу</button></center>
					</form>
			<? } ?>	
	</div>
</div>