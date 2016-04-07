document.addEventListener('DOMContentLoaded', function(){
	searchJS = {};
	searchJS.inputs = document.querySelectorAll('[data-search-js-input]');
	if(searchJS.inputs){
		for(var i = 0; i < searchJS.inputs.length; i++){
			searchJS.inputs[i].addEventListener('keyup', function(){
				var elements = document.querySelectorAll('[data-search-js-container="' + this.getAttribute('data-search-js-input') + '"] > [data-search-js-value]');
				if(elements){
					for(var x = 0; x < elements.length; x++){
						elements[x].style.display = (this.value.length === 0 || elements[x].getAttribute('data-search-js-value').toLowerCase().indexOf(this.value.toLowerCase()) > -1) ? 'block' : 'none';
					}
				}
			});
		}
	}
});