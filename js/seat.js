clickEve();

function clickEve(){
	var flag = 0;	
	var seatArr = [];
	var trigger = document.querySelectorAll('.icon-chair');
	var ticketQuantity = document.querySelector('.ticket-quantity');
	var amt = document.querySelector('.seat-price');
	var seat = document.querySelector('.seat-number');

	for(i=0 ; i<trigger.length ; i++) {
		trigger[i].addEventListener('click',triggerEvent);
	}

	function triggerEvent() {
		var self = this;
		var price = 250;
		var parent = self.parentElement;
		
		if(parent.classList.contains('reserved')){
			alert('This Seat is already Reserved!');
		} else {
			self.parentElement.classList.toggle('selected');
			var seatNum = parent.children[0].textContent;
			if(parent.classList.contains('selected')) {
				flag++;
				amt.value = flag*price;
				ticketQuantity.value = flag;
				seatArr.push(seatNum);
				seatArr.toString();
				seat.value = seatArr;
			} else {
				flag--;
				amt.value = flag*price;
				ticketQuantity.value = flag;
				seat.textContent = seat.textContent;
				var x = seatArr.indexOf(seatNum);
				seatArr.splice(x , 1);
				seatArr.toString();
				seat.value = seatArr;
			}
		}
	}
}