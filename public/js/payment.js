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
		let price= $("#price").val();
		console.log("Phone Number: "+ phoneNumber);
		$('#message').html('Check your phone');
		$.ajax(
			{
				url: '/payment',
				method: 'post',
				data:{
					  phoneNumber: phoneNumber,
					  price:price
					},
				success: function (result) {
					$('#message').html('');
					let ticketNumbers;
					for (let i = 0; i < result.length; i++) {
						ticketNumbers= result[i]+'\r\n';
					}
					alert("Trip is successfully booked. Your ticket number: \r\n"+ticketNumbers);
					document.location.href="/";
				},
				error: function (result) {
					alert("Sorry system is currently under maintenance.");
				}
			}
		)
	}); 

});

