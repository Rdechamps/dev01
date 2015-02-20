<div class="footer"></div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="static/js/jquery.mobile.custom.min.js"></script>
<script src="static/js/click_events.js"></script>
<script src="static/js/slick.js"></script>
<script src="static/js/clientsSlick.js"></script>
<script src="static/js/sendMail.js"></script>
<script>
$(document).ready(function(e) {
    $("a#more-catalCAD, a#more-SMO").bind("click", function(e){
		e.preventDefault();
		var c = $(this).attr("id");
		$(".toggle-container .receiver").load("views/<?php echo $_SESSION['lang']; ?>/"+c+".php .more-container", true);		
		$(".toggle-container").css("left","0");
		if($(window).width()>1024)
		{
			$("html, body").css("overflow-y","hidden");
		}
		else
		{
			$("html, body").css("overflow","hidden");
		}
	});
});
</script> 
<script>
	$(document).ready(function(e) {
        $(".toggle-menu").bind("tap", function(e){
			e.preventDefault();
			$(".menu-list").toggleClass("toggle-mobile-menu");
		});
    });
</script>
<script>

$('.base, .front, .spot1, .spot2').delay(8000).queue(function(){
    $(this).addClass('animation-reverse');
});

    
      $('.spot3').delay(9000).queue(function(){
                       setTimeout(function() {
      $('.spot3').addClass('stay');
}, 1000);
  $(this).addClass('animation-spot3');
 
        });
  


    
      $('.pliage').delay(13000).queue(function(){
  $(this).addClass('stay');
});

</script>
<script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyAuST7sgo_FGlZKOrNFQ7jb9PKe-W4BfAE&sensor=false&extension=.js'></script> 
 
<script> 
    google.maps.event.addDomListener(window, 'load', init);
    var map;
    function init() {
        var mapOptions = {
            center: new google.maps.LatLng(25.506346,20.463336),
            zoom: 2,
            zoomControl: true,
            zoomControlOptions: {
                style: google.maps.ZoomControlStyle.DEFAULT,
            },
            disableDoubleClickZoom: true,
            mapTypeControl: false,
            scaleControl: true,
            scrollwheel: true,
            panControl: true,
            streetViewControl: true,
            draggable : true,
            overviewMapControl: true,
            overviewMapControlOptions: {
                opened: false,
            },
            mapTypeId: google.maps.MapTypeId.HYBRID,
            styles: [{"stylers": [{ "visibility": "off" }]},{"featureType": "water","stylers": [{ "visibility": "on" },{ "color": "#2f343b" }]},{"featureType": "landscape","stylers": [{ "visibility": "on" },{ "color": "#703030" }]},{"featureType": "administrative","elementType": "geometry.stroke","stylers": [{ "visibility": "on" },{ "color": "#2f343b" },{ "weight": 1 }]}],
        }
        var mapElement = document.getElementById('map');
        var map = new google.maps.Map(mapElement, mapOptions);
        var locations = [
['CatalCAD', 'CatalCAD - FRANCE', '+33 (0)4 66 21 80 08', 'sales@catalcad.com', 'http://www.catalcad.com/', 45.1822296, 5.7464083, 'https://mapbuildr.com/assets/img/markers/default.png'],['HAHN Software & System-Beratung', 'CatalCAD Retailer - GERMANY', '+49 (0)7663 94 25 12', 'info@hssb-company.de', 'www.hssb-company.de', 48.1050899, 7.7763597000001, 'https://mapbuildr.com/assets/img/markers/default.png'],['Overcam srl', 'CatalCAD Retailer - ITALY', '+39 011 3972703', 'info@overcam.it', 'www.overcam.it', 45.3198169, 7.7194403, 'https://mapbuildr.com/assets/img/markers/default.png'],['S.I. Engineering', 'CatalCAD Retailer - ITALY', '+39 011 3972703', 'info@overcam.it', 'www.overcam.it', 44.6672685, 7.8339449, 'https://mapbuildr.com/assets/img/markers/default.png'],['ARTEMIS Co, Ltd', 'CatalCAD Retailer - JAPAN', '+81 042 370 8151', 'azuma@ma1.annie.ne.jp', 'www.artemis-net.jp', 35.6358964, 139.5114761, 'https://mapbuildr.com/assets/img/markers/default.png'],['CatalCAD Inc.', 'CatalCAD Retailer - UNITED STATES', '+33 (0)4 66 21 80 08', 'info@catalcad.com', 'www.catalcad.com', 41.95451, -87.6717273, 'https://mapbuildr.com/assets/img/markers/default.png']
        ];
        for (i = 0; i < locations.length; i++) {
			if (locations[i][1] =='undefined'){ description ='';} else { description = locations[i][1];}
			if (locations[i][2] =='undefined'){ telephone ='';} else { telephone = locations[i][2];}
			if (locations[i][3] =='undefined'){ email ='';} else { email = locations[i][3];}
           if (locations[i][4] =='undefined'){ web ='';} else { web = locations[i][4];}
           if (locations[i][7] =='undefined'){ markericon ='';} else { markericon = locations[i][7];}
            marker = new google.maps.Marker({
                icon: markericon,
                position: new google.maps.LatLng(locations[i][5], locations[i][6]),
                map: map,
                title: locations[i][0],
                desc: description,
                tel: telephone,
                email: email,
                web: web
            });
if (web.substring(0, 7) != "http://") {
link = "http://" + web;
} else {
link = web;
}
            bindInfoWindow(marker, map, locations[i][0], description, telephone, email, web, link);
     }
 function bindInfoWindow(marker, map, title, desc, telephone, email, web, link) {
      var infoWindowVisible = (function () {
              var currentlyVisible = false;
              return function (visible) {
                  if (visible !== undefined) {
                      currentlyVisible = visible;
                  }
                  return currentlyVisible;
               };
           }());
           iw = new google.maps.InfoWindow();
           google.maps.event.addListener(marker, 'click', function() {
               if (infoWindowVisible()) {
                   iw.close();
                   infoWindowVisible(false);
               } else {
                   var html= "<div style='color:#000;background-color:#fff;padding:5px;width:150px;'><h4>"+title+"</h4><p>"+desc+"<p><p>"+telephone+"<p><a href='mailto:"+email+"' >"+email+"<a><a href='"+link+"'' >"+web+"<a></div>";
                   iw = new google.maps.InfoWindow({content:html});
                   iw.open(map,marker);
                   infoWindowVisible(true);
               }
        });
        google.maps.event.addListener(iw, 'closeclick', function () {
            infoWindowVisible(false);
        });
 }
}
</script>
<script>

	$(".close-toggle").bind("click", function(e){
		e.preventDefault();
		$('.toggle-container').css('left','100%;');
		$('html, body').css('overflow-y','auto');
	});

</script>
<script src="static/js/lightbox.js"></script>


</body>
</html>