<!DOCTYPE html>
<html lang="en-US">
<head>

	<title></title>
	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
</head>
<body>
	<h3 class="title">Hai</h3>
	<div id="david"></div>
	<script type="text/javascript">
		var xmlhttp = new XMLHttpRequest();
		var url = "external.json";

		xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
		    var myArr = JSON.parse(xmlhttp.responseText);
		    myFunction(myArr);
		    }
		};

		xmlhttp.open("GET", url, true);
		xmlhttp.send();

		function myFunction(arr) {
	    var out = "";
	    var i;
	    for(i = 0; i < arr.length; i++) {
	        out += '<a href="' + arr[i].url + '">' + arr[i].display + '</a><br>';
	    }
	    document.getElementById("id01").innerHTML = out;
}
	</script>
</body>
</html>


<!-- <!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>

	$(function() {

	$('#clickme').click(function() {

		$.getJSON('external.json', function(data) {

			var items = [];

			$.each(data, function(key, val) {

				items.push('<li id="' + key + '">' + val + '</li>');
			});

			$('<ul/>', {
				'class': 'interest-list',
				html: items.join('')
			}).appendTo('body'); 


			});
		});

	});


</script>
	<script type="script"></script>
</head>
<body>
	<h1 id="title">19. Using jQuery to retrieve JSON</h1>
	
	<a href="#" id="clickme">Get JSON Data</a>
</body>
</html> -->
