<div class="content-other">
	<div class="page-header">
		<img src="../img/page_header.png">
		<div>Донат <br>(В разработке)</div>
	</div> 
	<div class="page-content">
		<? if($_SESSION['login'] !== true): ?>
		<h1 class="warning">Доступ запрещен</h1><br>
		<h2 class="ta_c">Вам необходимо авторизоваться.</h2>
		<? else: ?>
		<div class="tabs bar">
			<input type="radio" id="MMORPG" name="srv" checked>
			<input type="radio" id="SkyTech" name="srv">
			<ul class="donate-servers">
				<li title="MMORPG"><label for="MMORPG" role="button"><span>MMORPG</span></label></li>
				<li title="SkyTech"><label for="SkyTech" role="button"><span>SkyTech</span></label></li>
			</ul>
			<div class="bar slider"><div class="indicator"></div></div>
			<ul class="donate-clicked">
				<li id="pr-clicked"><label>Привилегии</label></li>
				<li id="ca-clicked"><label>Кейсы</label></li>
				<li id="cr-clicked"><label>Кредиты</label></li>
				<li id="it-clicked"><label>Предметы</label></li>
				<li id="un-clicked"><label>Разбан</label></li>
			</ul>
			<div class="bar slider2"><div class="indicator"></div></div>

			<div class="donate-content">
				<div class="all-donate-content">
				</div>
			</div>
		</div>
	<? endif; ?>
	</div>
</div>
<script language="JavaScript">

	function minus_click(elem) {
		switch (elem.id.replace(/[0-9]/g, '')){
			case 'minusMMOit':
				var this_id = parseInt(elem.id.replace(/\D+/g,""));
				let this_input = $('#amountMMOit' + this_id);
				if (this_input.val() > 1)
				this_input.val(parseInt(this_input.val())-1);
				final_price(this_id, this_input);
				break;
			default:
				alert("Ошибка!");
		}
	}

	function plus_click(elem) {
		switch (elem.id.replace(/[0-9]/g, '')){
			case 'plusMMOit':
				var this_id = parseInt(elem.id.replace(/\D+/g,""));
				let this_input = $('#amountMMOit' + this_id);
				if (this_input.val() < 100)
				this_input.val(parseInt(this_input.val())+1);
				final_price(this_id, this_input);
				break;
			default:
				alert("Ошибка!");
		}
	}

	function input_f(elem) {
		switch (elem.id.replace(/[0-9]/g, '')){
			case 'amountMMOit':
				var this_id = parseInt(elem.id.replace(/\D+/g,""));
				let this_input = $('#amountMMOit' + this_id);
				if (this_input.val() > 100 || this_input.val() < 1) {
					this_input.val(1);
				}
				final_price(this_id, this_input);
				break;
			default:
				alert("Ошибка!");
		}
	}

	function final_price(this_id, this_input) {
		var costMMOit = $('#costItem' + this_id).val();
		$('#buttonMMOit' + this_id).html(this_input.val() * costMMOit + "<i class='fa fa-rub' aria-hidden='true'></i> Купить");
	}

	$(document).ready(function () {

		var selected_type = "pr";

		//Измениние в селекте сервера

		$('#MMORPG').change(function() {
			if ($(this).prop("checked")) {
				click_to_type()
			}
		});

		$('#SkyTech').change(function() {
			if ($(this).prop("checked")) {
				click_to_type();
			}
		});

		function click_to_type(){
				switch(selected_type) {
				case 'pr':
					$('#pr-clicked').click();
					break;
				case 'ca':
					$('#ca-clicked').click();
					break;
				case 'cr':
					$('#cr-clicked').click();
					break;
				case 'it':
					$('#it-clicked').click();
					break;
				case 'un':
					$('#un-clicked').click();
					break;
				default:
					alert("Ошибка!");
			}
		}

		//Изменение в селекте типа доната

		$('#pr-clicked').click(function(){
			if ($("#MMORPG").prop("checked")) {
				donate_show('mmo', 'pr');
			}
			else if ($("#SkyTech").prop("checked")) {
				donate_show('sky', 'pr');
			}
			selected_type = "pr";
			change_type_select($('#pr-clicked'));
			$('.slider2').css({"-webkit-transform": "translateX(-10%)", "transform": "translateX(-10%)"});
		});

		$('#ca-clicked').click(function(){
			if ($("#MMORPG").prop("checked")) {
				$('.all-donate-content').html('<div>Для MMORPG нет ни онного кейса</div>');
			}
			else if ($("#SkyTech").prop("checked")) {
				$('.all-donate-content').html('<div>Для SkyTech нет ни онного кейса</div>');
			}
			selected_type = "ca";
			change_type_select($('#ca-clicked'));
			$('.slider2').css({"-webkit-transform": "translateX(70%)", "transform": "translateX(70%)"});
		});

		$('#cr-clicked').click(function(){
			window.open('http://mcspace.me/page/credits');
		});

		$('#it-clicked').click(function(){
			if ($("#MMORPG").prop("checked")) {
				donate_show('mmo', 'it');
			}
			else if ($("#SkyTech").prop("checked")) {
				$('.all-donate-content').html('<div>Предметы SkyTech в разработке</div>');
			}
			selected_type = "it";
			change_type_select($('#it-clicked'));
			$('.slider2').css({"-webkit-transform": "translateX(230%)", "transform": "translateX(230%)"});
		});

		$('#un-clicked').click(function(){
			if ($("#MMORPG").prop("checked")) {
				donate_show('mmo', 'un');
			}
			else if ($("#SkyTech").prop("checked")) {
				$('.all-donate-content').html('<div>Разбан SkyTech в разработке</div>');
			}
			selected_type = "un";
			change_type_select($('#un-clicked'));
			$('.slider2').css({"-webkit-transform": "translateX(310%)", "transform": "translateX(310%)"});
		});

		function donate_show(serv, type){
			$.ajax({
			        type: "POST",
			        url:'../donate_show.php',
			        data: { srv  : serv,
			                func : type	},
			        success: function(req)
			        {
			            $('.all-donate-content').html(req);
			        }
			    });
		}

		function change_type_select(to_this){
			if ($("#pr-clicked").hasClass("donate-selected-type")) {
				$("#pr-clicked").removeClass("donate-selected-type");
			}
			if ($("#ca-clicked").hasClass("donate-selected-type")) {
				$("#ca-clicked").removeClass("donate-selected-type");
			}
			if ($("#cr-clicked").hasClass("donate-selected-type")) {
				$("#cr-clicked").removeClass("donate-selected-type");
			}
			if ($("#it-clicked").hasClass("donate-selected-type")) {
				$("#it-clicked").removeClass("donate-selected-type");
			}
			if ($("#un-clicked").hasClass("donate-selected-type")) {
				$("#un-clicked").removeClass("donate-selected-type");
			}
			to_this.addClass("donate-selected-type");
		}

		//Имитация клика по привилегиям при загрузке
		$('#pr-clicked').click();
	});
</script>