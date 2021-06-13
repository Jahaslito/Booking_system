const edit_modal = document.getElementById('edit_modal');
const add_modal = document.getElementById('add_modal');

function editModal() {
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
