$('login').click(function() {
	var username = $('username').val;
	var password = $('password').val;

	$.ajax({
		url: 'loginValidation.php',
		method: 'post',
		data: {username: username, password: password},
		success: function(response){
			
		}
	});

});