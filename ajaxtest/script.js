$(function() {

	$('#clickme').click(function() {

		$.getJSON('data19.json', function(data) {

			var items = [];

			$.each(data, function(key, val) {

				items.push('<li id="' + key + '">' + val + '</li>');
			});

			$('<ul/>', {
				'class': 'interest-list',
				html: items.join('')
			}).appendTo('body'); 


			);
		});

	});



});