import {showFallback, getData, showCountry} from './_GlobeJS';

const widget = document.querySelector('.widget-globe');
/* INITIALISATION */
if(widget){
	if (!window.WebGLRenderingContext) {
		showFallback();
	}
	else {
		getData();

		let links = widget.querySelectorAll('.change-country');
		links.forEach(l => {
		
			
			l.onclick = function(e,elm){
				e.preventDefault()
				showCountry(l.dataset.location);
	}
		});


	}
}

