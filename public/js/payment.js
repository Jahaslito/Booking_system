const trip_modal = document.getElementById('trip_modal');
const payment_modal = document.getElementById('payment_modal');

function tripModal() {
	trip_modal.classList.remove('hidden');
	trip_modal.classList.add('flex');
}

function closeTripModal(){
	trip_modal.classList.remove('flex');
	trip_modal.classList.add('hidden');
}

function paymentModal() {
	payment_modal.classList.remove('hidden');
	payment_modal.classList.add('flex');
}

function closePaymentModal(){
	payment_modal.classList.remove('flex');
	payment_modal.classList.add('hidden');
}

