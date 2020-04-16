
// Отправка заявки 
$(document).ready(function() {
	
	$('#form_sort').submit(function() { // проверка на пустоту заполненных полей. Атрибут html5 — required не подходит (не поддерживается Safari)
		
		if (document.form.name.value == '' || document.form.phone.value == '' || document.form.email.value == '' || document.form.password.value == '' || document.form.repeat_password.value == '') {
			valid = false;
			return valid;
		}
		$.ajax({
			type: "POST",
			url: "mail/registration.php",
			data: $(this).serialize()
		}).done(function() {
			
		});
		return false;
	});
});
$(document).ready(function() {
	
	$('#form').submit(function() { // проверка на пустоту заполненных полей. Атрибут html5 — required не подходит (не поддерживается Safari)
		
		if (document.form.name.value == '' || document.form.phone.value == '' || document.form.email.value == '') {
			valid = false;
			return valid;
		}
		$.ajax({
			type: "POST",
			url: "mail/mail.php",
			data: $(this).serialize()
		}).done(function() {
			
		});
		return false;
	});
});

$(document).ready(function() {
	
	$('#form_post').submit(function() { // проверка на пустоту заполненных полей. Атрибут html5 — required не подходит (не поддерживается Safari)
		
		if (document.form.name.value == '' || document.form.phone.value == '' || document.form.email.value == '') {
			valid = false;
			return valid;
		}
		$.ajax({
			type: "POST",
			url: "mail/mail.php",
			data: $(this).serialize()
		}).done(function() {
			
		});
		return false;
	});
});
