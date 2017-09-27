<!DOCTYPE html>
<html>
<head>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
	<title></title>
</head>
<body onload="loadjson()">

</body>
</html>

<script type="text/javascript">
	
	function loadjson(){
		$.getJSON("http://api.songkick.com/api/3.0/artists/5112228/calendar.json?apikey=5OnUMhFOovUJseOG",
		function(data){
			console.log(data);
		});

	}

</script>