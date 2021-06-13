const iframe = document.getElementById("dash-frame");
const overlay = iframe.contentWindow.document.getElementById('overlay');
const profBtn = document.getElementById('profile-btn');

if(iframe){
	console.log("True");
}

if(profBtn){
	profBtn.addEventListener('click', () => {
	overlay.classList.remove('hidden');
	overlay.classList.add('flex');
});
}

