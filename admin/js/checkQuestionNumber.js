$(document).ready(function() {
	$('#q_number').on('change', function() {
		var q_num = $(this).val();
		$.ajax({
			url: 'validateQuestionNumber.php',
			method: 'POST',
			data: {q_num : q_num},
			success: function(response){
				$('#qNumber').html(response);
			}
		});
	});


	$('#email').keyup(function() {
		var email_exist = $(this).val();
		$.ajax({
			url: '../emailValidation.php',
			method: 'POST',
			data: {email_exist : email_exist},
			success: function(response){
				$('#emailExist').html(response);
			}
		});
	});
});

