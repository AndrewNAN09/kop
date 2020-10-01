$(document).ready(function() {
	$('form').submit(function(event) {
		var json;
		event.preventDefault();
		$.ajax({
			type: $(this).attr('method'),
			url: $(this).attr('action'),
			data: new FormData(this),
			contentType: false,
			cache: false,
			processData: false,
			success: function(result) {
				json = jQuery.parseJSON(result);
				if (json.status) {
					alert(json.status + ' - ' + json.message);
					window.location.href = '/' + json.url;
				} else {window.location.href = '/' + json.url;
				}
			},

		});
	});
});