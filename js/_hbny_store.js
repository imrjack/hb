function initializeMap( location ) {

	if( location == 'roppongi' ){
	  	var longitude = 139.7301065; 
	  	var latitude = 35.6661554; 
		var elemantID = 'storemap_roppongi';
		var iconImage = '../img/common/ico_castaner.png';
		var titleStr = 'ROPPONGI STORE';
	}else if( location == 'yurakucho' ){
	  	var longitude = 139.7630174; 
	  	var latitude = 35.6736527; 
		var elemantID = 'storemap_yurakucho';
		var iconImage = '../img/store/ico_castaner.png';
		var titleStr = 'YURAKUCHO STORE';
	}else if( location == 'newyork' ){
	  	var longitude = -73.994388; 
	  	var latitude = 40.745593; 
		var elemantID = 'storemap_newyork';
		var iconImage = './img/common/ico_hb.png';
		var titleStr = 'Highbridge New York Inc.(USA)';
	}else if( location == 'tokyo' ){
	  	var longitude = 139.707832; 
	  	var latitude = 35.664670; 
		var elemantID = 'storemap_tokyo';
		var iconImage = './img/common/ico_hb.png';
		var titleStr = 'HAKATA STORE';
	} 

	var latlng=new google.maps.LatLng(latitude, longitude);
	var myOptions = {
		zoom: 14,
		center: latlng,
		mapTypeId: google.maps.MapTypeId.ROADMAP,
		scrollwheel:true
	};

	var map=new google.maps.Map(document.getElementById(elemantID), myOptions);

	var marker = new google.maps.Marker({
		position: latlng,
		map: map,
		title: titleStr
		//icon: iconImage
	});


}
