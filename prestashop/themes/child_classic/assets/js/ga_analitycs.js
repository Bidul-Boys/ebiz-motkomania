const banner = document.querySelector("#GA_banner");


if(banner) {
	banner.addEventListener('click', function() {
    		gtag('event', 'banner_click', {
        		'event_category': 'banner',
        		'event_label': 'banner'    
    	});
	});
}