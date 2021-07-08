const profile_modal = document.getElementById('profile_modal');

function profModal() {
	profile_modal.classList.remove('hidden');
	profile_modal.classList.add('flex');
}

function closeProfModal(){
	profile_modal.classList.remove('flex');
	profile_modal.classList.add('hidden');
}
