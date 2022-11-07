<?php require_once "cnt.php"; ?>
<div class="content-other">
	<div class="page-header">
		<img src="../img/page_header.png">
		<div>Обмен кредитов</div>
	</div>
	<div class="page-content">
		<? if($_SESSION['login'] !== true): ?>
		<h1 class="warning">Доступ запрещен</h1><br>
		<h2 class="ta_c">Вам необходимо авторизоваться.</h2>
		<?php else: ?>
		<div class="tabs bar">
			<input type="radio" id="credit1" name="cr" checked>
			<input type="radio" id="credit2" name="cr">
			<ul>
				<li title="Перевод ₽ ➔ CR"><label for="credit1" role="button"><span>Перевод <i class='fa fa-rub' aria-hidden='true'></i> ➔ CR</span></label></li>
				<li title="Перевод CR ➔ Сервер"><label for="credit2" role="button"><span>Перевод CR ➔ Сервер</span></label></li>
			</ul>
			<div class="bar slider"><div class="indicator"></div></div>
			<div class="content">
				<section>
					<form action='/sent_credit.php' method='post'>
						<center class="cr_dg_1">
							<div class="mcs-login login">
								<input type='number' name='amount' id='amount' min='1' value='1'>
							</div>
							<span>рублей</span>
							<!--span id='result' class="ma"></span-->
							<button name='CRBtn' type='submit' class='reg-button'>Обменять 1:25</button>
							<span>на CR</span>
							<div class="mcs-login reg-pass">
								<input type='number' name='amountcr' id='amountcr' min='25' value='25' step="25">
							</div>
						</center>
					</form>
				</section>
				<!-- ## POST-зарос ##-->
				<!-- ## name=credit - кредиты ##-->
				<!-- ## name=server - серверы ##-->
				<section>
					<form action='/sent_credit_to_server.php' method='post'>
						<div class="cr_dg_1">
							<div class="mcs-login login">
								<input type='number' name='amount' value='1' min='0'>
							</div>
							<span>CR</span>
							<button name='CRBtn' type='submit' class='reg-button'>Перевести</button>
							<span>на сервер</span>
							<div class="mcs-login reg-pass">
								<select name='server'>
									<option disabled selected>Выберите сервер</option>
									<option>SkyTech 1.7.10</option>
								</select>
							</div>
						</div>
					</form>
				</section>
			</div>
		</div>
		<?php endif; ?>
	</div>

	<script type="text/javascript">
		var input = document.getElementById('amount');
		var inputcr = document.getElementById('amountcr');
		var convert = 25;

		input.oninput = function() {
    		inputcr.value = input.value * convert;
  		};

  		inputcr.onblur = function() {
  			inputcr.value = Math.round(inputcr.value / convert) * convert;
    		input.value = Math.round(inputcr.value / convert);
  		};

		    /*function price(){
		    	var price = "10";
		    	var amount = $('#amount').val();
		    	var message = "";
		    	if(amount<=0){
					message="0 CR";
				}else{
					summa = price * amount;
					message = summa + " CR";
				};
		    	$('#result').html(message);
		    }
		    function buyItem(){
		    	$('#amount').bind("keyup change click", function(){
		    		price();
		    	});
		    }
			$(document).ready(function(){
			    $(".minus_45").click(function(){
			        var $input = $(this).parent().find('input');
	                var count = parseInt($input.val()) - 1;
			        count = count < 1 ? 1 : count;
			        $input.val(count);
	                $input.change();
			    });
			    $(".plus_45").click(function(){
			        var $input = $(this).parent().find('input');
			        var count = parseInt($input.val()) + 1;
	                $input.val(count);
	                $input.change();
			    });
			});*/
	</script>
		
	<script type="text/javascript">
		window.onload=function(){
			if (typeof buyItem !== "undefined") { 
				buyItem();
			}
			price();
		}

	</script>
</div>    