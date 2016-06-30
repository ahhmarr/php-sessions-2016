<!-- http://api.openweathermap.org/data/2.5/weather?q=delhi,in&appid=b74f29d201de1c25b206456c3a38f83e&units=metric -->
<!-- http://maps.googleapis.com/maps/api/js?key=AIzaSyCh78qhRtWIEtKdUkWm1uOHZUzSVgbClaI -->
<!-- icon url -->
<!-- http://openweathermap.org/img/w/04n.png -->
<!DOCTYPE html>
<html>
<head>

</head>

<body>
<div id="googleMap" style="width:500px;height:380px;"></div>
<script src="../includes/map.js"></script>
<script>
function initialize() {
  var mapProp = {
    center:new google.maps.LatLng(25.45,81.85),
    zoom:13
  };
  var map=new google.maps.Map(document.querySelector("#googleMap"),mapProp);
}
initialize();
</script>
</body>
</html>