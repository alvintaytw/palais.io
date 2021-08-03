// JavaScript Document
 function initialize() {
   var mapCanvas = document.getElementById('map-canvas');
     var myLatlng = new google.maps.LatLng(1.306698, 103.829617);
   var mapOptions = {
	center: myLatlng ,
	zoom: 15,
    disableDefaultUI: true,
	mapTypeId: google.maps.MapTypeId.ROADMAP
   }
   var map = new google.maps.Map(mapCanvas, mapOptions);
   
    var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      title: 'PALAIS RENAISSANCE'
  });
 }
 google.maps.event.addDomListener(window, 'load', initialize);