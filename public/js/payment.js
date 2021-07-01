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

/*
The magic of integrating mpesa starts here !
Let's go with Jquery since it saves us from writing long texts
*/

//Adding the csrf tkoen in ajax request 
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

/*
Sending the phone number and invoking the stkpush method when 
the pay button is pressed
*/
$(document).ready(function () {
	$("#payButton").click(function (event) {
		event.preventDefault();
		console.log("pay button is clicked!");
		let phoneNumber= $("#contact").val();
		console.log("Phone Number: "+ phoneNumber);
		$.ajax(
			{
				url: '/payment',
				method: 'post',
				data:{phoneNumber: phoneNumber},
				success: function (result) {
					console.log("result:\n");
					console.log(result);
				},
				error: function (result) {
					console.log(result);   
				}
			}
		)
	}); 

});

