$(document).ready(function(){
	$('.nav-icon3').click(function(){
		$(this).toggleClass('open');
	});
  $(".nav-icon3").click(function () {
    $("#primary-menu").slideToggle(500,"swing");
  });
});

// particlesJS in Home page

particlesJS.load('particles-js', 'http://localhost:8888/wp-content/themes/kaletheme/js/particles.json', function() {
console.log('callback - particles.js config loaded');
});


// Google Maps


var myCenter=new google.maps.LatLng(39.9525839,-75.1652215);
function initialize()
{
var mapProp = {
  center: myCenter,
  zoom:13,
  mapTypeId: google.maps.MapTypeId.ROADMAP,
  scrollwheel: false,
  draggable: false,
  styles: [
    {
      "featureType": "administrative",
      "elementType": "labels.text.fill",
      "stylers": [
        {
          "color": "#EF5350"
        }
      ]
    },
    {
      "featureType": "landscape",
      "elementType": "all",
      "stylers": [
        {
          "color": "#FFFFFF"
        }
      ]
    },
    {
      "featureType": "poi",
      "elementType": "all",
      "stylers": [
        {
          "visibility": "off"
        }
      ]
    },
    {
      "featureType": "road",
      "elementType": "all",
      "stylers": [
        {
          "saturation": -100
        },
        {
          "lightness": 45
        }
      ]
    },
    {
      "featureType": "road.highway",
      "elementType": "all",
      "stylers": [
        {
          "visibility": "simplified"
        }
      ]
    },
    {
      "featureType": "road.arterial",
      "elementType": "labels.icon",
      "stylers": [
        {
          "visibility": "off"
        }
      ]
    },
    {
      "featureType": "transit",
      "elementType": "all",
      "stylers": [
        {
          "visibility": "off"
        }
      ]
    },
    {
      "featureType": "water",
      "elementType": "all",
      "stylers": [
        {
          "color": "#2196F3"
        },
        {
          "visibility": "on"
        }
      ]
    }
  ]
};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
var marker = new google.maps.Marker({
position: myCenter,
title:'Click to zoom'
});

marker.setMap(map);
// Zoom to 9 when clicking on marker
google.maps.event.addListener(marker,'click',function() {
map.setZoom(4);
map.setCenter(marker.getPosition());
});
}
google.maps.event.addDomListener(window, 'load', initialize);
