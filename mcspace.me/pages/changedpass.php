<?php require_once "cnt.php"; ?>
<div class="content-other">
	<div class="page-header">
		<img src="../img/page_header.png">
		<div>Восстановление пароля</div>
	</div>
	<div class="page-content">
		<? $yespass = safeGet($_GET, 'yespass');
			if ( $yespass == 'true' ){
				echo '<span class="reg-info">Ваш пароль изменен</span>';
		?>
		<form class="reg_form" action="<?=$index?>" method="post">
			<button class="reg-button" name="submit" type="submit">На главную страницу</button>
		</form>
		<?}
			else { 
				echo '<span class="reg-info">Ошибка при смене пароля.</span><br>';?>
			<div class="d_g w235 m0_auto"><a href="#" OnClick="history.back();" class='reg-button'>Вернуться назад</a></div>
			<?}?>
	</div>
</div>     