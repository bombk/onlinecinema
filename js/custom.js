loadEvents();

function loadEvents(){
	
	openClose('.navbar-right', 'active-login','login-opener');
	scrollEffect('#nav','active-scroll','body');
}


function openClose(target,activeClass,toggler) {
	var body = document.querySelector('body');
	var target = document.querySelector(target);
	target.addEventListener('click', function(event) {
		if(event.target.classList.contains(toggler)) {
			body.classList.toggle(activeClass);
			event.preventDefault();
		}
	});
}

function scrollEffect(target,activeClass,destination) {
	var target = document.querySelector(target);
	var destination = document.querySelector(destination);
	var tValue = target.offsetHeight;
	window.addEventListener('scroll',scrollFunc);
	function scrollFunc() {
		if(document.documentElement.scrollTop > tValue) {
			destination.classList.add(activeClass);
		} else {
			destination.classList.remove(activeClass);
		}
	}
}