$(document).ready(function() {
	$('#email_input').keyup(function() {
		var email_exist = $(this).val();
		$.ajax({
			url: 'emailValidation.php',
			method: 'POST',
			data: {email_exist : email_exist},
			success: function(response){
				$('#emailHtml').html(response);
				return false;
			}
		});
		// $.post('emailValidation.php', {email: registerForm.email.value},
		// function(result) {
		// 	$('#emailHtml').html(result).show();
		// });
	});
	$('#confirm').keyup(function() {
		if($(this).val() !== $('#password1').val()){
			$('#confirmPass').html('Passwords do not match');
			return false;
		}else{
			$('#confirmPass').html('');
		}
	});
	
	$('input').focusin(function() {
		$(this).css('background-color', 'CEF4EB');
	});


	$('input').blur(function() {
		$(this).css('background-color', '#fff');
	});

	$("#register2").click(function() {	
		var firstname = $('#firstname').val();
		var lastname = $('#lastname').val();
		var email_register = $('#email_input').val();
		var password1 = $('#password1').val();
		var confirm = $('#confirm').val();
		var	file = $('#file').val();

		if((firstname == "") || (lastname == "") || (email_register == "") 
								|| (password1 == "") || (confirm == "")){
			alert("You need to fill out all fields!");
			return false;
		}		

		if(password1 !== confirm){
			alert('Passwords do not match!');
			return false;
		}
		if(file == null || file == ""){
			alert('Please upload a profile picture.');
			return false;
		}


	});

});
