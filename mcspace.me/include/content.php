<div class="news-tops">
  <div class="news">
		<div class="news-title">
			<a href="" style="color: #00050B !important;">
				новости
			</a>
		</div>
    <?php
      require_once "cnt.php";
      $url_api = [
          "v" => "5.103",
          "count" => "10",
          "oauth" => "1",
          "extended" => "1",
          "method" => "wall.get",
          "owner_id" => "-184116470",
          "access_token" => "36b9b21d36b9b21d36b9b21de136c8b69e336b936b9b21d69dd0b6deac47b6363317327" //2ff0241e79aedf678c97d21855dcadb68f5aedb4aeaf8b57a03a624e6f1da3d8a40f63e1bfd605ef3bae7
      ];
      $wall = json_decode(file_get_contents("https://api.vk.com/api.php?".http_build_query($url_api)));
      $vk_url = "https://vk.com/{$wall->response->groups[0]->screen_name}?w=wall-{$wall->response->groups[0]->id}";
       /*echo '
              <div class="box">';
      echo '<pre>';
      var_dump($wall);echo '<br>';
      //var_dump(http_build_query($url_api));echo '<br>';
      //var_dump($wall->response->groups[0]->screen_name);echo '<br>';
      //var_dump($wall->response->groups[0]->id);echo '<br>';
      //var_dump($vk_url);
      echo '</pre>';
       echo '
              </div>';*/
      if(empty($wall->response->count)) 
          echo '
              <div class="box">
                  <h5 class="text_box">Нет новостей</h5>
              </div>';

      $count_news = 0;
      foreach($wall->response->items as $news) {
          $allnews = [
              "id" => $news->id,
              "text" => substr(strstr(str_replace("\n", '<br>', mb_strimwidth($news->text,0,350,"...")), '<br>'), 8),
              "head" => explode("\n", $news->text)[0],
              "date" => date("d.m.Y",(int)$news->date),
              "like" => $news->likes->count,
              "views" => $news->views->count,
              "comments" => $news->comments->count,
              "reposts" => $news->reposts->count,
              "owner" => $news->created_by,
              "photo" => $news->attachments[0]->photo->sizes[6]->url,
              "vk_url" => $vk_url."_".$news->id
          ];

          if(empty($allnews[photo])) {
              $allnews[photo] = "img/article.png";
          }

          if(strcmp($allnews[text],null) && $count_news < 6) {
              echo '
              <div class="news-boxes">
                <div class="news-name">'.$allnews[head].'</div>
                <div class="news-img">
                  <img class="news-img" src="'.$allnews[photo].'" alt="img">
                  <img src="../img/frame.png" class="news-img-border">
                </div>
                <div class="news-content">'.$allnews[text].'</div>
                <div class="news-side">
                  <a href="'.$allnews[vk_url].'" target="_blank">
                    <div class="news-more">
                    </div>
                  </a>
                  <div class="news-date">
                    <img src="../img/date.png" class="news-date-img">
                    <div class="news-info">'.$allnews[date].'</div>
                  </div>
                  <div class="news-view">
                    <img src="../img/views.png" class="news-view-img">
                    <div class="news-info">'.$allnews[views].'</div>
                  </div>
                </div>
              </div>';
              $count_news++;
          }
      }
      ?>
  	<div class="news-down-more">
			<a href="https://vk.com/mcspace_me" target="_blank" style="color: #FFFAFA !important;">
				больше новостей
			</a>
		</div>
	</div>
	<div class="tops">
		<div class="mcs-vk">
			<div id="vk_groups">
			</div>
			<div class="mcs-vk-top">
				<div class="mcs-vk-logo">
					<a href="https://vk.com/mcspace_me" target="_blank">
						<img src="../img/logo_vk.png">
					</a>
				</div>
				<a href="https://vk.com/mcspace_me" target="_blank">
					<div class="mcs-vk-title">
						MCSpace
						<br>
						"Вечная загадка!"
					</div>
				</a>
				<a href="https://vk.com/im?sel=-184116470" target="_blank" class="mcs-vk-write">
					написать нам
				</a>
			</div>
			<div class="mcs-vk-bot">
				<a href="https://vk.com/mcspace_me" target="_blank" class="mcs-vk-sub">
					<div class="mcs-vk-button">
						<img src="../img/ico_vk.png" width="30">
						<div class="mcs-vk-subtext">
							подписаться
						</div>
					</div>
				</a>
			</div>
		</div>
		<div class="mcs-ds">
			<iframe src="https://discordapp.com/widget?id=596323247994306562&theme=dark" width="251" height="300" allowtransparency="true" frameborder="0"></iframe>
		</div>
		<div class="top-vote">
			<div class="vote-title">
				топ
				<br>
				голосующих
			</div>
      <?php
        $select10 = $pdo->query("SELECT * FROM users WHERE votes>0 ORDER BY votes DESC LIMIT 10");
        if($select10->fetchAll()) {
          $num = 1;
          $list = 1;
          echo "<table class='vote-table'><tr><th align=left>Место</th><th align=left class='tab-second'>Игровой ник</th><th align=right>Голоса</th></tr><tr>";
          $data10 = $pdo->prepare('SELECT * FROM users WHERE votes>:votes ORDER BY votes DESC LIMIT 10');
          $data10->execute(array('votes' => 0));
          while($row10 = $data10->fetch(PDO::FETCH_ASSOC)) {
            $loginRow10 = $row10['login'];
            $votesRow10 = $row10['votes'];
            echo "<td align=right>";
            if($num == 1) {?>
              <img class='wh_20' src="<?=$path_to_images?>gold-medal.png" title="Золотая медаль" alt="Золотая медаль">
            <?}
            else if($num == 2) {?>
              <img class='wh_20' src="<?=$path_to_images?>silver-medal.png" title="Серебрянная медаль" alt="Серебрянная медаль">
            <?}
            else if($num == 3) {?>
              <img class='wh_20' src="<?=$path_to_images?>bronze-medal.png" title="Бронзовая медаль" alt="Бронзовая медаль">
            <?}
            else echo "$num";
            echo "</td>";
            echo "<td class='va_m'>{$loginRow10}</td>
                <td align=right class='va_m'>{$votesRow10}</td></tr>";
            $list++;
            $num++;
          }
          echo "</table>";
        }
      ?>
		</div>
		<div class="top-ref">
			<div class="vote-title">
				топ
				<br>
				пригласивших
			</div>
			<!--table class="vote-table">
					<tr>
    			<th align=left>Место</th>
    			<th align=left class="tab-second">Игровой ник</th>
    			<th align=right>Заработано</th>
   			</tr>
   			<tr>
    			<td align=right>1</td>
    			<td align=left class="tab-second"></td>
    			<td align=right></td>
  			</tr>
  			<tr>
    			<td align=right>2</td>
    			<td align=left class="tab-second"></td>
    			<td align=right></td>
  			</tr>
  			<tr>
    			<td align=right>3</td>
    			<td align=left class="tab-second"></td>
    			<td align=right></td>
  			</tr>
  			<tr>
    			<td align=right>4</td>
    			<td align=left class="tab-second"></td>
    			<td align=right></td>
  			</tr>
  			<tr>
    			<td align=right>5</td>
    			<td align=left class="tab-second"></td>
    			<td align=right></td>
  			</tr>
  			<tr>
    			<td align=right>6</td>
    			<td align=left class="tab-second"></td>
    			<td align=right></td>
  			</tr>
  			<tr>
    			<td align=right>7</td>
    			<td align=left class="tab-second"></td>
    			<td align=right></td>
  			</tr>
  			<tr>
    			<td align=right>8</td>
    			<td align=left class="tab-second"></td>
    			<td align=right></td>
  			</tr>
  			<tr>
    			<td align=right>9</td>
    			<td align=left class="tab-second"></td>
    			<td align=right></td>
  			</tr>
  			<tr>
    			<td align=right>10</td>
    			<td align=left class="tab-second"></td>
    			<td align=right></td>
  			</tr>
		 </table-->
		</div>			
	</div>
</div>
<script type="text/javascript">
  VK.Widgets.Group("vk_groups", {width: 251, mode: 3, color1: 'FFFAFA', no_cover: 1}, 184116470);
</script>