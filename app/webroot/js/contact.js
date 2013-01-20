$(document).ready(function() {

	$('#contact_form form').on('submit', function(e) {

		$.post('php_functions/functions.php', $(this).serialize(), function(feedback) {

			alert(feedback);

		});

		e.preventDefault();

	});
	
});