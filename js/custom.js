jQuery(document).ready(function() {
var test_canvas = document.createElement("canvas");
	var canvascheck=(test_canvas.getContext)? true : false;
	if(canvascheck==false){
		document.execCommand("Stop");
		window.location = "http://html5gallery.com.br/no-html5";
	}
	 
	 $( "a.openmenu" ).click(function() {$('ul#topnavmobile').slideToggle( "slow" );});
	 
});	


/*$(document).ready(function () {
		 //Carregar Mapa
	var mapOptions = {
          center: new google.maps.LatLng(-25.555187, -49.33381),
          zoom: 16,
          panControl: false,
       zoomControl: false,
       mapTypeControl: false,
       scaleControl: false,
       scrollwheel: false,
       streetViewControl: true,
       mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    var map = new google.maps.Map(document.getElementById("mapa"), mapOptions);
    
	var image = 'img/ponteiro.png';
	var myLatLng = new google.maps.LatLng(-25.555187, -49.33381);
	var marker = new google.maps.Marker({
	    position: myLatLng,
	    map: map,
	    icon: image
	});

	var infowindow = new google.maps.InfoWindow();
	
	infowindow.open(map, marker);
	
	google.maps.event.addListener(marker, 'click', function() {
		infowindow.open(map, marker);
	});
});*/
