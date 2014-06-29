// JavaScript Document
		
		
			function initialize(){
       			//24° 59.137', 121° 34.698'
       			//臺北市文山區指南路二段64號,國立政治大學華文測驗與教育評鑑研究中心
       			var mapOptions = {
          			center: new google.maps.LatLng(24.985616, 121.578283),
          			zoom: 16,
          			mapTypeId: google.maps.MapTypeId.ROADMAP
      				};
        		var map = new google.maps.Map(document.getElementById("map_canvas"),mapOptions);
        		var boya = new google.maps.LatLng(24.985616, 121.578283);
        		//var boya_up = new google.maps.LatLng(24.986381,121.575224);
			    var marker = new google.maps.Marker({
			      position: boya,
			      map: map,
			      title: "國立政治大學華文測驗與教育評鑑研究中心"
			    });
			    var message = "臺北市文山區指南路二段64號-井塘樓教育學院四樓,國立政治大學華文測驗與教育評鑑研究中心";
			   	var infowindow = new google.maps.InfoWindow();
			    	infowindow.setContent(message);
			    	infowindow.setPosition(boya);
					
			    	
			    google.maps.event.addListener(marker, 'click', function() {
			    	infowindow.open(map);
			    	map.setCenter(marker.getPosition());
				    map.setZoom(18);
				    

				  });
			}
			google.maps.event.addDomListener(window, 'load', initialize);