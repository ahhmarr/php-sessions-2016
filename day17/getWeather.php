<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>get weather</title>
</head>
<body>
	<div>
		<form>
			<div>
				<label>city name</label>
				<input type="text" name="city" value="venice">
			</div>
			<div>
				<input type="button" value="fetch weather" onclick="fetchWeather()">
			</div>
		</form>
	</div>
	<div id="dynamic"></div>
	<div id="maps" style="height: 400px;width:700px"></div>
	<script type="text/javascript" src="../includes/map.js"></script>
	<script type="text/javascript">
		function fetchWeather()
		{
			
			var ajx=new XMLHttpRequest();
			var cityName=document.querySelector('input[name=city]').value;
			var url='http://api.openweathermap.org/data/2.5/weather?q='+cityName+'&appid=b74f29d201de1c25b206456c3a38f83e&units=metric'
			console.log(url);
			console.log(cityName);
			ajx.open('GET',url,true);
			ajx.send();
			ajx.onreadystatechange=function(){
				if(ajx.readyState==4 && ajx.status==200){
					var resp=ajx.responseText;
					var json=JSON.parse(resp);
					if(!json.main){
						var msg='undefined paramter';
						document.querySelector("#dynamic").innerHTML=msg;
						return;
					}
					document.querySelector("#maps").innerHTML='<img src="../includes/image/hourglass.svg" />';
					var currentTemprature=json.main.temp;
					var minTemprature=json.main.temp_min;
					var maxTemprature=json.main.temp_max;
					var msg='Current Temp '+currentTemprature+ ' min :'+minTemprature + 'max :'+maxTemprature;
					displayMap(json.coord.lat,json.coord.lon);
					document.querySelector("#dynamic").innerHTML=msg;
				}else{
					
				}
			};
		}
		function displayMap(lat,long)
		{
			console.log('called the google functions');
			var mapProp = {
		    center:new google.maps.LatLng(lat,long),
		    zoom:13
		  };
		  var map=new google.maps.Map(document.querySelector("#maps"),mapProp);
		}
	</script>
</body>
</html>