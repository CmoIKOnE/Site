<?php require_once "cnt.php"; ?>
<div class="content-other">
	<div class="page-header">
		<img src="../img/page_header.png">
		<div>Справка</div>
	</div>
	<div class="page-content">
		<div class="tabs bar">
			<input type="radio" id="MMORPG" name="help" checked>
			<ul>
				<li title="MMORPG"><label for="credit1" role="button"><span>MMORPG</span></label></li>
			</ul>
			<div class="bar slider"><div class="indicator"></div></div>
			<div class="content">
				<section>
					<ul class="help-clicked">
						<li id="items-clicked"><label>Предметы</label></li>
						<li id="mobs-clicked"><label>Существа</label></li>
					</ul>
					<div class="bar slider2"><div class="indicator"></div></div>

					<div class="help-content">
						<div class="all-help-content">
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>
</div>
<script language="JavaScript">

	//Прогрузки "Подробнее" для предметов
	function item_click(elem){
		var this_id = parseInt(elem.id.replace(/\D+/g,""));
		if ($('#item_show_more' + this_id).html() == "") {
			$.ajax({
		        type: "POST",
		        url:'../help_show.php',
		        data: { func : 'show_item_more',
		        		id   : this_id},
		        success: function(req)
		        {
		        	$('#item_show_more' + this_id).html(req);
		        }
		    });
		} else {
			$('#item_show_more' + this_id).html("");
		}
	}

	function item_mob_click(elem){
		var array = elem.id.split('_');
		var this_id = array[1];
		var mob_id = array[0];
		if ($('#' + mob_id + 'item_mob' + this_id).html() == "") {
			$.ajax({
		        type: "POST",
		        url:'../help_show.php',
		        data: { func   : 'show_item_mob_more',
		        		id     : this_id,
		        		mob_id : mob_id},
		        success: function(req)
		        {
		            $('#' + mob_id + 'item_mob' + this_id).html(req);
		        }
		    });
		} else {
			$('#' + mob_id + 'item_mob' + this_id).html("");
		}
	}

	//Прогрузки "Подробнее" для предметов
	function mob_click(elem){
		var this_id = parseInt(elem.id.replace(/\D+/g,""));
		if ($('#mob_show_more' + this_id).html() == "") {
			$.ajax({
		        type: "POST",
		        url:'../help_show.php',
		        data: { func : 'show_mob_more',
		        		id   : this_id},
		        success: function(req)
		        {
		        	$('#mob_show_more' + this_id).html(req);
		        }
		    });
		} else {
			$('#mob_show_more' + this_id).html("");
		}
	}

	function mob_item_click(elem){
		var array = elem.id.split('_');
		var this_id = array[1];
		var item_id = array[0];
		if ($('#' + item_id + 'mob_item' + this_id).html() == "") {
			$.ajax({
		        type: "POST",
		        url:'../help_show.php',
		        data: { func    : 'show_mob_item_more',
		        		id      : this_id,
		        		item_id : item_id},
		        success: function(req)
		        {
		            $('#' + item_id + 'mob_item' + this_id).html(req);
		        }
		    });
		} else {
			$('#' + item_id + 'mob_item' + this_id).html("");
		}
	}

	$(document).ready(function () {

		$('#items-clicked').click(function(){
			if ($("#MMORPG").prop("checked")) {
				help_show('show_page', 'mmo', 'items');
			}
			change_type_select($('#items-clicked'));
			$('.slider2').css({"-webkit-transform": "translateX(50%)", "transform": "translateX(50%)"});
		});

		$('#mobs-clicked').click(function(){
			if ($("#MMORPG").prop("checked")) {
				help_show('show_page', 'mmo', 'mobs');
			}
			change_type_select($('#mobs-clicked'));
			$('.slider2').css({"-webkit-transform": "translateX(250%)", "transform": "translateX(250%)"});
		});

		function help_show(func, serv, type){
			$.ajax({
			        type: "POST",
			        url:'../help_show.php',
			        data: { func : func,
			        		srv  : serv,
			                type : type	},
			        success: function(req)
			        {
			            $('.all-help-content').html(req);
			        }
			    });
		}

		function change_type_select(to_this){
			if ($("#items-clicked").hasClass("donate-selected-type")) {
				$("#items-clicked").removeClass("donate-selected-type");
			}
			if ($("#mobs-clicked").hasClass("donate-selected-type")) {
				$("#mobs-clicked").removeClass("donate-selected-type");
			}
			to_this.addClass("donate-selected-type");
		}

		//Имитация клика по привилегиям при загрузке
		$('#items-clicked').click();
	});
</script>