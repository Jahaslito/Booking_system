const overlay = document.getElementById('overlay');
const closeBtn = document.getElementById('close-profile-modal');

if(closeBtn){
	closeBtn.addEventListener('click', () => {
	overlay.classList.remove('flex');
	overlay.classList.add('hidden');
});
}