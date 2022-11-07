
function isLoginFree(login){
	var resultF = ["1", "2"];
	$.ajax({
        type: "POST",            
        url: "https://mcspace.me/check.php",            
		async: false,
        data: {
            'login': login,
			'func':  'isLoginFree'
        },
        dataType: "json",
		success: function(data){        
			resultF[0] = data.result;
			resultF[1] = data.msg;
		},
		fail: function(data){ }
    });
	return resultF;
}

function isEmailFree(email){
	var resultF = ["1", "2"];
	$.ajax({
        type: "POST",            
        url: "https://mcspace.me/check.php",            
		async: false,
        data: {
            'email': email,
			'func1':  'isEmailFree'
        },
        dataType: "json",
	    success: function(data){        
			resultF[0] = data.result;
			resultF[1] = data.msg;
		},
		fail: function(data){ }
    });
	return resultF;
}

$(document).ready(function() {
	$('#check').click(function(){
	// получение данных из полей
        var login = $('#login').val();
		var formid = $('#formid').val();
        var email = $('#email').val();
        var pass = $('#pass').val();
        var pass1 = $('#pass1').val();
        
		var lenWord = login.length;
		var emailWord = email.length;
		var passWord = pass.length;
		var re = /^[\w-\.]+@[\w-]+.[a-z]{2,5}$/i;
		var valid = re.test(email);
		var output = "";
		var ok = 0;
		
		
		var sex = document.getElementById("sex").options.selectedIndex;
		var msex = document.getElementById("sex").options[sex].value;
		
		var loginIS = isLoginFree(login);
		var emailIS = isEmailFree(email);
		
		if(msex == "male"){
			document.getElementById("seximg").src='../img/ico_good.png';
			document.getElementById('sexerrmsg').innerHTML = ' ';
			ok = ok + 1; //1 or 0
			//document.getElementById("sex").readOnly = true;
		} else if(msex == "female") {
			document.getElementById("seximg").src='../img/ico_good.png';
			document.getElementById('sexerrmsg').innerHTML = ' ';
			ok = ok + 1; //2 or 0
			//document.getElementById("sex").readOnly = true;
		} else {
			document.getElementById("seximg").src='../img/ico_bad.png';
			document.getElementById('sexerrmsg').innerHTML = 'Не выбран пол';
		}
	
		if (lenWord > 3 && lenWord < 25) {
			document.getElementById("loginimg").src='../img/ico_good.png';
			document.getElementById('loginerrmsg').innerHTML = ' ';
			ok = ok + 1; //3
			if(/^[a-zA-Z0-9_]+$/.test(login) == false) {
				document.getElementById("loginimg").src='../img/ico_bad.png';
				document.getElementById('loginerrmsg').innerHTML = 'Никнейм может состоять только латинские буквы и цифры';
			} else if(loginIS[0] == "free"){
				document.getElementById("loginimg").src='../img/ico_good.png';
				document.getElementById('loginerrmsg').innerHTML = loginIS[1];
				ok = ok + 1; //4
				//document.getElementById("login").readOnly = true;
			}
			else {
				document.getElementById("loginimg").src='../img/ico_bad.png';
				document.getElementById('loginerrmsg').innerHTML = loginIS[1];
			}
		} else {
			document.getElementById("loginimg").src='../img/ico_bad.png';
			document.getElementById('loginerrmsg').innerHTML = 'Никнейм должен быть от 4 до 24 знаков';
		}
		
		if (valid){ 
			document.getElementById("emailimg").src='../img/ico_good.png';
			document.getElementById('emailerrmsg').innerHTML = 'Адрес эл. почты введён правильно';
			if (emailIS[0] == "free"){
				document.getElementById("emailimg").src='../img/ico_good.png';
				document.getElementById('emailerrmsg').innerHTML = emailIS[1];
				ok = ok + 1; //5
				//document.getElementById("email").readOnly = true;
			} else {
				document.getElementById("emailimg").src='../img/ico_bad.png';
				document.getElementById('emailerrmsg').innerHTML = emailIS[1];
			}
		} else {
			document.getElementById("emailimg").src='../img/ico_bad.png';
			document.getElementById('emailerrmsg').innerHTML = 'Адрес эл. почты введён неправильно';
		}
		
		if (passWord > 7 && passWord < 25) {
			document.getElementById("passimg").src='../img/ico_good.png';
			document.getElementById('passerrmsg').innerHTML = ' ';
			ok = ok + 1; //6
			if(/^[a-zA-Z0-9\!@#\/\$%\^&\*\(\)\[\]\{\}\-=_\+\.,'\"<>\?]+$/.test(pass) == false) {
				document.getElementById("passimg").src='../img/ico_bad.png';
				document.getElementById('passerrmsg').innerHTML = 'В пароле недопустимые символы';
			} else {
				document.getElementById("passimg").src='../img/ico_good.png';
				document.getElementById('passerrmsg').innerHTML = ' ';
				ok = ok + 1; //7
				if (pass == pass1) {
					document.getElementById("pass1img").src='../img/ico_good.png';
					document.getElementById('pass1errmsg').innerHTML = ' ';
					ok = ok + 1; //8
					//document.getElementById("pass").readOnly = true;
					//document.getElementById("pass1").readOnly = true;
				} else {
					document.getElementById("pass1img").src='../img/ico_bad.png';
					document.getElementById('pass1errmsg').innerHTML = 'Введённые вами пароли не совпадают';
				}
			}
		} else {
			document.getElementById("passimg").src='../img/ico_bad.png';
			document.getElementById('passerrmsg').innerHTML = 'Пароль должен быть от 6 до 48 знаков';
		}
		
		
		if(ok == 7)
		{
			document.getElementById('reg').innerHTML = '<button class="reg-button" id="btn" type="submit">Регистрация</button>';
		}
		
		$.ajax({
            type: "POST",            
            url: "https://mcspace.me/check_ajax.php",            
            data: {
                'login': login,
				'email': email,
			    'pass': pass,
                'pass1': pass1,
				'sex': sex,
				'formid': formid
            },
            dataType: "json",
            success: function(data){                
				
				$('#loginerrmsg').html(data.loginerrmsg);
				$('#emailerrmsg').html(data.emailerrmsg);
				$('#passerrmsg').html(data.passerrmsg);
				$('#pass1errmsg').html(data.pass1errmsg);
				$('#sexerrmsg').html(data.sexerrmsg);
				
				},
			fail: function(data){
            }
        });
        return false;
	});
});