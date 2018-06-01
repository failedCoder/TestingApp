
function countdownTimer(minutes,element){

	let seconds = minutes*60;
	const timer = setInterval(function(){ 
		seconds--;
		min = Math.floor(seconds/60);
		sec = seconds%60;
		
		element.textContent = min + ':' + sec;

		if(seconds <= 0){
			let form = document.querySelector('#form');
			form.submit();
			clearInterval(timer);
		}
	}, 1000);
	
	}

let body = document.querySelector('body');

body.onload = function () {
	let minutes = document.querySelector('#duration');
	minutes = minutes.value;
	let element  = document.querySelector('#time');
	countdownTimer(minutes, element);
	
};	




