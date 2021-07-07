const edit_modal = document.getElementById('edit_modal');
const edit_modal_driver = document.getElementById('edit_modal_driver');
const add_modal = document.getElementById('add_modal');
const profile_modal = document.getElementById('profile_modal');

function editModal(counter) {
	let index= counter-1;
	// For Routes
	let price= document.getElementsByClassName("route_price")[index].innerHTML;
	let source= document.getElementsByClassName("route_source")[index].innerHTML;
	let destination= document.getElementsByClassName("route_destination")[index].innerHTML;
	let route_id= document.getElementsByClassName("route_id")[index].innerHTML;
	document.getElementById("edit_source").value= source;
	document.getElementById("edit_price").value= price;
	document.getElementById("edit_destination").value= destination;
	document.getElementById("route_id").value= route_id;
	// For Drivers
	// let index2=counterdriver-1;
	// let name= document.getElementsByClassName("driver_name")[index2].innerHTML;
	// let phone_number= document.getElementsByClassName("driver_phone_number")[index2].innerHTML;
	// let licence= document.getElementsByClassName("driver_licence")[index2].innerHTML;
	// let user_id= document.getElementsByClassName("user_id")[index2].innerHTML;
	// document.getElementById("edit_name").value= name;
	// document.getElementById("edit_phone_number").value= phone_number;
	// document.getElementById("edit_licence").value= licence;
	// document.getElementById("user_id").value= user_id;
	edit_modal.classList.remove('hidden');
	edit_modal.classList.add('flex');
}

function closeEditModal(){
	edit_modal.classList.remove('flex');
	edit_modal.classList.add('hidden');
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
	edit_modal_driver.classList.remove('hidden');
	edit_modal_driver.classList.add('flex');
}
function closeEditModalDriver() {
	edit_modal_driver.classList.remove('flex');
	edit_modal_driver.classList.add('hidden');

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
