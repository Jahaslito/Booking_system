const edit_modal = document.getElementById('edit_modal');
//const edit_modal_driver = document.getElementById('edit_modal_driver');
const add_modal = document.getElementById('add_modal');
const profile_modal = document.getElementById('profile_modal');

function editModal(counter) {
	let index= counter-1;
	let price= document.getElementsByClassName("route_price")[index].innerHTML;
	let source= document.getElementsByClassName("route_source")[index].innerHTML;
	let destination= document.getElementsByClassName("route_destination")[index].innerHTML;
	let route_id= document.getElementsByClassName("route_id")[index].innerHTML;
	document.getElementById("edit_source").value= source;
	document.getElementById("edit_price").value= price;
	document.getElementById("edit_destination").value= destination;
	document.getElementById("route_id").value= route_id;
	edit_modal.classList.remove('hidden');
	edit_modal.classList.add('flex');
}
//For Trips
function tripEditModal(counter) 
{
	let index=counter-1;
	let trip_id=document.getElementsByClassName("trip_id")[index].innerHTML;
	let route_id=document.getElementsByClassName("route_id")[index].innerHTML;
	let departure= document.getElementsByClassName("trip_departure")[index].innerHTML;
	let arrival= document.getElementsByClassName("trip_arrival")[index].innerHTML;
	let capacity= document.getElementsByClassName("trip_capacity")[index].innerHTML;
	let driver_id= document.getElementsByClassName("driver_id")[index].innerHTML;
	let bus_id= document.getElementsByClassName("bus_id")[index].innerHTML;
	let date= document.getElementsByClassName("trip_date")[index].innerHTML;
	console.log("Trip Id: "+trip_id);
	document.getElementById("edit_trip_id").value=trip_id;
	console.log("assigned"+document.getElementById("edit_trip_id").value);
	document.getElementById("route_id").value=route_id;
	document.getElementById("edit_departure").value=departure;
	document.getElementById("edit_arrival").value=arrival;
	document.getElementById("edit_available").value=capacity;
	document.getElementById("driver_id").value=driver_id;
	document.getElementById("bus_id").value=bus_id;
	document.getElementById("edit_date").value=date;
	
	let routeOptionId="route"+route_id;
	let driverOptionId="driver"+driver_id;
	let busOptionId="bus"+bus_id;
	document.getElementById(routeOptionId).selected="selected";
	document.getElementById(driverOptionId).selected="selected";
	document.getElementById(busOptionId).selected="selected";

	edit_modal.classList.remove('hidden');
	edit_modal.classList.add('flex');
}
// For Buses
function busEditModal(counter) {
	let index= counter-1;
	let plate= document.getElementsByClassName("bus_plate")[index].innerHTML;
	let capacity= document.getElementsByClassName("bus_capacity")[index].innerHTML;
	let model= document.getElementsByClassName("bus_model")[index].innerHTML;
	let route_id= document.getElementsByClassName("route_id")[index].innerHTML;
	let bus_id= document.getElementsByClassName("bus_id")[index].innerHTML;
	document.getElementById("edit_plate").value= plate;
	document.getElementById("edit_capacity").value= capacity;
	document.getElementById("edit_model").value= model;
	document.getElementById("route_id").value= route_id;
	document.getElementById("bus_id").value= bus_id;
	let routeOptionId="route"+route_id;
	console.log("Bus Id: "+bus_id);
	console.log("Counter: "+counter);
	console.log(document.getElementById(routeOptionId).value);
	document.getElementById(routeOptionId).selected="selected";

	edit_modal.classList.remove('hidden');
	edit_modal.classList.add('flex');
}

function editDriverModal(counterdriver) {
	let index2=counterdriver-1;
	let name= document.getElementsByClassName("driver_name")[index2].innerHTML;
	let phone_number= document.getElementsByClassName("driver_phone_number")[index2].innerHTML;
	let licence= document.getElementsByClassName("driver_licence")[index2].innerHTML;
	let user_id= document.getElementsByClassName("user_id")[index2].innerHTML;
	document.getElementById("edit_name").value= name;
	document.getElementById("edit_phone_number").value= phone_number;
	document.getElementById("edit_licence").value= licence;
	document.getElementById("user_id").value= user_id;
	console.log("Driver Id: " +user_id);
	console.log("Counter: " +counterdriver);
	edit_modal.classList.remove('hidden');
	edit_modal.classList.add('flex');
}



function closeEditModal(){
	edit_modal.classList.remove('flex');
	edit_modal.classList.add('hidden');
}



function addModal() {
	add_modal.classList.remove('hidden');
	add_modal.classList.add('flex');
}

function closeAddModal(){
	add_modal.classList.remove('flex');
	add_modal.classList.add('hidden');
}

function profModal() {
	profile_modal.classList.remove('hidden');
	profile_modal.classList.add('flex');
}

function closeProfModal(){
	profile_modal.classList.remove('flex');
	profile_modal.classList.add('hidden');
}
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
//Bus deletion
function deleteBus(counter) {
	let index= counter-1;
	let busId= document.getElementsByClassName("bus_id")[index].innerHTML;
	console.log(busId);
	let plate= document.getElementsByClassName("bus_plate")[index].innerHTML;
	if (confirm("Do you want to proceed with deleting the bus with plate number "+plate)) {
		$.ajax(
			{
				url: '/delete_buses',
				method: 'post',
				data:{bus_id: busId},
				success: function (result) {
					alert("Bus deleted Successfully");
					window.location.href="/adminviews/buses";
				},
				error: function (result) {
					console.log(result);   
				}
			}
		)
	}
}


//Route Deletion
function deleteRoute(counter) {
	let index= counter-1;
	let routeId= document.getElementsByClassName("route_id")[index].innerHTML;
	console.log(routeId);
	if (confirm("Do you want to proceed with deleting the Route?")) {
		$.ajax(
			{
				url: '/delete_routes',
				method: 'post',
				data:{route_id: routeId},
				success: function (result) {
					alert("Route deleted Successfully");
					window.location.href="/adminviews/routes";
				},
				error: function (result) {
					alert("Make sure to remove all the buses assigned to this route before you delete the route")
				}
			}
		)
	}
}
//Trip Deletion
function deleteTrip(counter) 
{
	let index= counter-1;
	let tripId= document.getElementsByClassName("trip_id")[index].innerHTML;
	console.log(tripId);
	if (confirm("Do you want to proceed with deleting the Trip?"))
	{
		$.ajax(
			{
				url:'/delete_trips',
				method: 'post',
				data:{trip_id:tripId},
				success: function (result) {
					alert("Trip Deleted Successfully");
					window.location.href="/adminviews/trips";
				},
				error: function (result) {
					console.log(result);
				}
			}
		)
	}
}

//Driver Deletion
function deleteDriver(counterdriver) {
	let index2= counterdriver-1;
	let userId= document.getElementsByClassName("user_id")[index2].innerHTML;
	console.log(userId);
	if (confirm("Do you want to proceed with deleting the Driver?")) {
		$.ajax(
			{
				url: '/delete_drivers',
				method: 'post',
				data:{user_id: userId},
				success: function (result) {
					alert("Driver deleted Successfully");
					window.location.href="/adminviews/drivers";
				},
				error: function (result) {
					alert("Make sure to remove all the trips assigned to this driver before you delete the driver");
					console.log(result);
				}
			}
		)
	}
}


