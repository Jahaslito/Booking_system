const overlay = document.getElementById('overlay');
const closeBtn = document.getElementById('close-profile-modal');

if(closeBtn){
	closeBtn.addEventListener('click', () => {
	overlay.classList.remove('flex');
	overlay.classList.add('hidden');
});
}


function app() {
  return {
    chartData: [112, 10, 225, 134, 101, 80, 50],
    labels: ['Mon', 'Tue', 'Wed', 'Thur', 'Fri', 'Sat', 'Sun'],

    tooltipContent: '',
    tooltipOpen: false,
    tooltipX: 0,
    tooltipY: 0,
    showTooltip(e) {
      console.log(e);
      this.tooltipContent = e.target.textContent
      this.tooltipX = e.target.offsetLeft - e.target.clientWidth;
      this.tooltipY = e.target.clientHeight + e.target.clientWidth;
    },
    hideTooltip(e) {
      this.tooltipContent = '';
      this.tooltipOpen = false;
      this.tooltipX = 0;
      this.tooltipY = 0;
    }
  }
}
 