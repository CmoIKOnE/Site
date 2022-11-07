<?php require_once "cnt.php"; ?>
<div class="content-other">
	<div class="page-header">
		<img src="../img/page_header.png">
		<div>Скачать лаунчер</div>
	</div>  
	<div class="page-content" style="overflow: hidden;">
		<?php if($_SESSION['login'] !== true): ?>
		<h1 class="warning">Доступ запрещен</h1><br/>
		<h2 class="ta_c">Вам необходимо авторизоваться.</h2>
		<?php else: ?>
		<div >
			<img class="m0_40 c_p" src="/img/exe.png" onclick="location.href='/MCSpace.exe'" class="c_p"></img>
			<img class="m0_40 c_p" src="/img/java.png" onclick="location.href='/MCSpace.jar'" class="c_p"></img>
		</div>
		<div class="download-info">
			<div >.EXE (Windows) </div><div> .JAR (Любые ОС)</div>
		</div>
		<?php endif; ?>				
	</div>
</div>      