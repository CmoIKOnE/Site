<?php require_once "cnt.php"; ?>
<div class="content-other">
	<div class="page-header">
		<img src="../img/page_header.png">
		<div>Голосование</div>
	</div>
	<div class="page-content">
		<div class='donate-type-it'>
			<div class='donate-it-rows vote-rows'>
				<div class='donate-it-col'>
					<div class='donate-it-card vote-card'>
						<div><b>MCRate.su</b><br>+<?=$vote1?>CR</div>
						<div><a class="account-btn" href="http://mcrate.su/project/8772" target="_blank">Голосовать</a></div>
					</div>
				</div>
				<div class='donate-it-col'>
					<div class='donate-it-card vote-card'>
						<div><b>MCTop.su</b><br>+<?=$vote2?>CR</div>
						<div><a class="account-btn" href="https://mctop.su/servers/6037/" target="_blank">Голосовать</a></div>
					</div>
				</div>
				<div class='donate-it-col'>
					<div class='donate-it-card vote-card'>
						<div><b>TopCraft.ru</b><br>+<?=$vote3?>CR</div>
						<div><a class="account-btn" href="https://topcraft.ru/servers/10372/" target="_blank">Голосовать</a></div>
					</div>
				</div>
			</div>
		</div>
		<?php
			$position = 0;
			$myPos = 0;
			$data = $pdo->prepare('SELECT * FROM users WHERE votes>:votes ORDER BY votes DESC');
			$data->execute(array('votes' => 0));
		
			while($row = $data->fetch(PDO::FETCH_ASSOC)) {
				$myPos++;
				$loginRow = $row['login'];
				if($loginRow == $_SESSION['user']) $position = $myPos;
			}
			
			/*if($position) /*$mypos = "Вы еще ни разу не голосовали"; else echo "<div class='message success'>Вы занимаете <b>$position место</b> в рейтинге</div>";/*$mypos = "Вы занимаете <b>$position место</b> в рейтинге";*/
			
			/*echo "<div class='message success'>$mypos</div>";*/
			if($_SESSION['login'] == true){
				if ($position) {
					echo "<div class='vote-info'>Вы занимаете <b>$position место</b> в рейтинге</div>";
				} else {
					echo "<div class='vote-info'>Вы еще ни разу не голосовали!</div>";
				}
			}
			
			$select10 = $pdo->query("SELECT * FROM users WHERE votes>0 ORDER BY votes DESC LIMIT 10");
			if($select10->fetchAll()) {
				$num = 1;
				$list = 1;
				echo "<center>";
				echo "<table class='votes-table'><tr><th class='ta_c'><span>Место</span></th><th colspan='2' class='ta_c w250'>Никнейм</th><th><span class='ta_c'>Количество голосов</span></th><th class='ta_c'>Награда</th></tr><tr>";
				$data10 = $pdo->prepare('SELECT * FROM users WHERE votes>:votes ORDER BY votes DESC LIMIT 10');
				$data10->execute(array('votes' => 0));
		
				while($row10 = $data10->fetch(PDO::FETCH_ASSOC)) {
					$loginRow10 = $row10['login'];
					$votesRow10 = $row10['votes'];
					echo "<td class='ta_c'>";
					if($num == 1) {?>
						<img class='wh_32' src="<?=$path_to_images?>gold-medal.png">
					<?}
					else if($num == 2) {?>
						<img class='wh_32' src="<?=$path_to_images?>silver-medal.png">
					<?}
					else if($num == 3) {?>
						<img class='wh_32' src="<?=$path_to_images?>bronze-medal.png">
					<?}
					else echo "<b>$num</b>";
					echo "</td>";
					$fileimage = $_SERVER['DOCUMENT_ROOT']."/skins/".$loginRow10.".png";
								if(file_exists($fileimage)) {
					echo "<td class='wh_32'><div class='mc-face-viewer-4x' style='background-image:url(http://164.132.201.152:7777/mcspace.me/skins/{$loginRow10}.png)'></div>
							{$loginRow10}</td>
							<td class='ta_c'><span>{$votesRow10}</span></td><td class='ta_c'>"; 
						} else {
							echo "<td class='wh_32'><div class='mc-face-viewer-4x' style='background-image:url(http://164.132.201.152:7777/mcspace.me/skins/Default.png)'></div>
								{$loginRow10}</td>
							<td class='ta_c'><span>{$votesRow10}</span></td><td class='ta_c'>"; 
						}
					if($num == 1) echo "<span>".$st." <i class='fa fa-rub' aria-hidden='true'></i></span>";
					else if($num == 2) echo "<span>".$nd." <i class='fa fa-rub' aria-hidden='true'></i></span>";
					else if($num == 3) echo "<span>".$rd." <i class='fa fa-rub' aria-hidden='true'></i></span>";
					else echo "";

					echo "</td></tr>";
					$list++;
					$num++;
				}
				echo "</table>";
				echo "</center>";
			}
			else echo "<div align='center' class='top-empty'>В рейтинге сейчас никого нет, голосуйте и станьте первым!</div>";
		?>
	</div>
</div>      