<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
	<title></title>
</head>
<body>
	<table border='1' id="display"></table>
</body>
</html>

<script type="text/javascript">





		$.getJSON("http://api.songkick.com/api/3.0/artists/5112228/calendar.json?apikey=5OnUMhFOovUJseOG",
		function(data){
			console.log(data);

				$.each(data.results, function(key, val) {
  				var tr=$('<tr></tr>');
 			   $.each(val, function(k, v){
  	    	  $('<td>'+v+'</td>').appendTo(tr);
  		  });
    tr.appendTo('#display');
})});

</script>
