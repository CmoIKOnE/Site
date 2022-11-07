<?php require_once "cnt.php"; ?>
<div class="content-other">
	<div class="page-header">
		<img src="../img/page_header.png">
		<div>Банлист</div>
	</div>
	<div class="page-content">
		<!--select id="select-server" class="banlist-select">
			<option disabled selected>Выберите сервер</option>
			<option value="mmo">MMORPG 1.12.2</option>
		</select-->
		<table class="ban-table">
			<tr>
				<th>№</th>
				<th>Ник</th>
				<th>Причина</th>
				<th>Забанил</th>
				<th>Дата бана (МСК)</th>
				<th>Дата разбана (МСК)</th>
			</tr>
			<?php
			//1.7.10
			$arrayNULL = array();
			$banl = "SELECT * FROM bans";
			$stm = $pdo_3->query($banl);
			$result = $stm->fetchAll();

			if ($result !== $arrayNULL){
				$sql = "SELECT * FROM bans";
				$result = $pdo_3->query($sql);
				$rows = $result->fetchAll();
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
					echo "<td>".$data['reason']."</td>";
					echo "<td>".$data['banner']."</td>";
					echo "<td>".$timeResult."</td>";
					if ($data['expires']==0) {
						echo "<td>Никогда</td></tr>";
	           		} else echo "<td>".$dtimeD."</td></tr>";
	           		$i++;
				}
			} else {
				echo "<td colspan='6'>На данный момент ни один игрок не заблокирован.<br/>Как же это прекрасно, когда никто не нарушает правила и все играют честно.</td>";
			}

			/*1.12+ MaxBans
			if ($result !== $arrayNULL){
				$sql = "SELECT * FROM Ban WHERE revoked_at IS NULL";
				$result = $pdo_3->query($sql);
				$rows = $result->fetchAll();
				var_dump($rows);
				echo "<br><br><br>";
				echo $rows[0]['source_id'];

				$sql2 = "SELECT * FROM Users ";
				$result2 = $pdo_3->query($sql2);
				$rows2 = $result2->fetchAll();
				var_dump($rows2);
				echo "<br><br><br>";

				$sql3 = "SELECT * FROM Users_Ban ";
				$result3 = $pdo_3->query($sql3);
				$rows3 = $result3->fetchAll();
				var_dump($rows3);
				echo "<br><br><br>";

				$i = 1;
				foreach($rows as $data) {
					
					foreach ($rows3 as $search3) {
						if ($data['id'] == $search3['ban_id']) { $data['banned_name_id'] = $search3['user_id']; }
					}
					foreach ($rows2 as $search2) {
						if ($data['source_id'] == $search2['id']) { $data['banner_name'] = $search2['name']; }
						if ($data['banned_name_id'] == $search2['id']) { $data['banned_name'] = $search2['name']; }
					}
					$timeEpoch = $data['time'];
	            	$timeConvert = $timeEpoch / 1000;
	           		$timeResult = date('d.m.Y H:i', $timeConvert);
	           		$dtime = $data['expires'];
	            	$dtimeC = $dtime / 1000;
	           		$dtimeD = date('d.m.Y H:i', $dtimeC);
					echo "<tr><td>".$i."</td>";
					echo "<td>".$data['banned_name']."</td>";
					echo "<td>".$data['banner_name']."</td>";
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
			*/
		?>
		</table>
	</div>
</div>
<script type="text/javascript">
	/*banselect = document.getElementsByClassName('banlist-select')[0]
banselect.onchange = function () {
	alert(select.value)*/
}
</script>