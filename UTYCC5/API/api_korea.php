
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content="yes" name="apple-mobile-web-app-capable" />
<meta http-��quiv="Content-Type" content="text/html; charset=euc-kr">
<meta content="minimum-scale=1.0, width=device-width, maximum-scale=0.6667, user-scalable=no" name="viewport" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script src="javascript/functions.js" type="text/javascript"></script>

<title>Hello, World!</title>
<meta content="Google Maps API ����" name="description" />

<script type="text/javascript" src="http://maps.google.com/maps/api/js?v=3&sensor=false"></script>
<script type="text/javascript">
  google.load("maps", "2.x");
  
  // Call this function when the page has been loaded
  function initialize() {
    var map = new google.maps.Map2(document.getElementById("map"));
    map.setCenter(new google.maps.LatLng(37.333832, 126.732782), 13);
  }
  google.setOnLoadCallback(initialize);
</script>
</head>
<body onunload="GUnload()">
<!-- Top Nav menu -->
<div id="topbar">
<div id="title">Hello, World!</div>
<div id="leftnav">
 <a href="index.html"><img alt="home" src="http://maps.google.com/mapfiles/ms/micons/blue.png" /></a>
</div>
</div>
<!-- �� ǥ�� -->
<div id="map" style="height:400px"></div>
<?php 
include("footer.html");
?>
</body>
</html>
