<?php require_once "cnt.php"; ?>
<div class="content-other">
	<div class="page-header">
		<img src="../img/page_header.png">
		<div>Правила проекта</div>
	</div>
	<div class="page-content">
	<section class="ac-container">
		<div>
			<input id="ac-1" name="accordion-1" type="checkbox" checked />
			<label for="ac-1">Основные правила</label>
			<article class="ac-1">
				<p><b>*</b> Правила – свод положений и рекомендаций, регулирующий деятельность пользователей в игре и на форуме. Каждый зарегистрированный пользователь обязан соблюдать правила, вне зависимости от должности, статуса и прочих заслуг. </p>
				<p><b>*</b> Флуд – часто повторяющиеся (2 и более сообщений подряд) либо не имеющие смысловой нагрузки сообщения (несвязные сообщения; сочетания символов, не имеющих смысловой нагрузки).</p>
				<p><b>*</b> Капс – отправка в чат сообщений, целиком или частично состоящих из слов, написанных заглавными буквами.</p>
				<p><b>*</b> Бан по форуму – полное ограничения доступа пользователя к ресурсам проекта (сайта, форума, игры).</p>
				<p><b>*</b> Бан – ограничение доступа пользователя к серверу.</p>
				<p><b>*</b> Кик – вынужденный выход пользователя с сервера.</p>
				<p><b>*</b> Мут – ограничение доступа пользователя к игровому чату.</p>
				<p><b>*</b> Предупреждение – предупреждение пользователя о нарушении какого-либо пункта правил.</p>
				<p><b>*</b> Рецидив – повторное нарушение пользователем какого-либо пункта правил.</p>
				<p><b>*</b>	Администрация - личный состав проекта: </p>
				<p style="text-indent: 20px"> Модерация сервера - модераторский состав сервера (Стажёры, Помощники, Модераторы и Старшие модераторы); </p>
				<p style="text-indent: 20px"> Администрация сервера - администраторский состав сервера (Главный модератор, Геймдизайнер, Технический администратор); </p>
				<p style="text-indent: 20px"> Администрация проекта - администраторский состав проекта (Администраторы, Владелецы проекта); </p>
				<p><b>*</b> Наказание баном, в случае надобности, может быть заменено наказанием мутом (с таким же временем), и наоборот.</p>
				<p><b>*</b> В случае надобности модерация имеет право выдать наказание на срок, превышающий срок, указанный в правилах.</p>
				<p><b>*</b> За систематические нарушения правил вы можете получить бан навсегда.</p>
			</article>
		</div>
		<div>
			<input id="ac-2" name="accordion-1" type="checkbox"/>
			<label for="ac-2"><b>1</b> Общие положения</label>
			<article class="ac-2">
				<? $sql = "SELECT * FROM `rules` ORDER BY `rules`.`id` ASC";
				$result = $pdo->query($sql);
				$rows = $result->fetchAll();
				foreach($rows as $data) {
					if($data['par1'] == 1) {
				?>
					<div class="m">
						<p><b><? echo $data['par1'] . "." . $data['par2']; ?></b> <? echo $data['text']; ?></p>
						<? if(!empty($data['penalty1'])) { ?>
						<div class="message error">
							<span>Наказание:</span> <? echo $data['penalty1']; ?>
						</div>
					<? } if(!empty($data['penalty2'])) { ?>
						<div class="message error">
							<span>При рецидиве:</span> <? echo $data['penalty2']; ?>
						</div>
					<? } if(!empty($data['penalty3'])) { ?>
						<div class="message error">
							<span>При -:</span> <? echo $data['penalty3']; ?>
						</div>
					<? } ?>
					</div>
					<? } } ?>
			</article>
		</div>
		<div>
			<input id="ac-3" name="accordion-1" type="checkbox"/>
			<label for="ac-3"><b>2</b> Постройки</label>
			<article class="ac-3">
				<? $sql = "SELECT * FROM `rules` ORDER BY `rules`.`id` ASC";
				$result = $pdo->query($sql);
				$rows = $result->fetchAll();
				foreach($rows as $data) {
					if($data['par1'] == 2) {
				?>
					<div class="m">
						<p><b><? echo $data['par1'] . "." . $data['par2']; ?></b> <? echo $data['text']; ?></p>
						<? if(!empty($data['penalty1'])) { ?>
						<div class="message error">
							<span>Наказание:</span> <? echo $data['penalty1']; ?>
						</div>
					<? } if(!empty($data['penalty2'])) { ?>
						<div class="message error">
							<span>При рецидиве:</span> <? echo $data['penalty2']; ?>
						</div>
					<? } if(!empty($data['penalty3'])) { ?>
						<div class="message error">
							<span>При -:</span> <? echo $data['penalty3']; ?>
						</div>
					<? } ?>
					</div>
					<? } } ?>
			</article>
		</div>
		<div>
			<input id="ac-4" name="accordion-1" type="checkbox"/>
			<label for="ac-4"><b>3</b> Игровой мир</label>
			<article class="ac-4">
				<? $sql = "SELECT * FROM `rules` ORDER BY `rules`.`id` ASC";
				$result = $pdo->query($sql);
				$rows = $result->fetchAll();
				foreach($rows as $data) {
					if($data['par1'] == 3) {
				?>
					<div class="m">
						<p><b><? echo $data['par1'] . "." . $data['par2']; ?></b> <? echo $data['text']; ?></p>
						<? if(!empty($data['penalty1'])) { ?>
						<div class="message error">
							<span>Наказание:</span> <? echo $data['penalty1']; ?>
						</div>
					<? } if(!empty($data['penalty2'])) { ?>
						<div class="message error">
							<span>При рецидиве:</span> <? echo $data['penalty2']; ?>
						</div>
					<? } if(!empty($data['penalty3'])) { ?>
						<div class="message error">
							<span>При -:</span> <? echo $data['penalty3']; ?>
						</div>
					<? } ?>
					</div>
					<? } } ?>
			</article>
		</div>
		<div>
			<input id="ac-5" name="accordion-1" type="checkbox"/>
			<label for="ac-5"><b>4</b> Игровой чат</label>
			<article class="ac-5">
				<? $sql = "SELECT * FROM `rules` ORDER BY `rules`.`id` ASC";
				$result = $pdo->query($sql);
				$rows = $result->fetchAll();
				foreach($rows as $data) {
					if($data['par1'] == 4) {
				?>
					<div class="m">
						<p><b><? echo $data['par1'] . "." . $data['par2']; ?></b> <? echo $data['text']; ?></p>
						<? if(!empty($data['penalty1'])) { ?>
						<div class="message error">
							<span>Наказание:</span> <? echo $data['penalty1']; ?>
						</div>
					<? } if(!empty($data['penalty2'])) { ?>
						<div class="message error">
							<span>При рецидиве:</span> <? echo $data['penalty2']; ?>
						</div>
					<? } if(!empty($data['penalty3'])) { ?>
						<div class="message error">
							<span>При -:</span> <? echo $data['penalty3']; ?>
						</div>
					<? } ?>
					</div>
					<? } } ?>
			</article>
		</div>
		<div>
			<input id="ac-6" name="accordion-1" type="checkbox"/>
			<label for="ac-6"><b>5</b> Дополнительные правила для модераторов</label>
			<article class="ac-6">
				<? $sql = "SELECT * FROM `rules` ORDER BY `rules`.`id` ASC";
				$result = $pdo->query($sql);
				$rows = $result->fetchAll();
				foreach($rows as $data) {
					if($data['par1'] == 5) {
				?>
					<div class="m">
						<p><b><? echo $data['par1'] . "." . $data['par2']; ?></b> <? echo $data['text']; ?></p>
						<? if(!empty($data['penalty1'])) { ?>
						<div class="message error">
							<span>Наказание:</span> <? echo $data['penalty1']; ?>
						</div>
					<? } if(!empty($data['penalty2'])) { ?>
						<div class="message error">
							<span>При рецидиве:</span> <? echo $data['penalty2']; ?>
						</div>
					<? } if(!empty($data['penalty3'])) { ?>
						<div class="message error">
							<span>При -:</span> <? echo $data['penalty3']; ?>
						</div>
					<? } ?>
					</div>
					<? } } ?>
			</article>
		</div>
	</section>
</div>
</div>     