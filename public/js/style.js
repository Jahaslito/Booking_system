const resetButton = document.getElementById('Reset');
const backButton = document.getElementById('Back');
const container = document.getElementById('card-body');

resetButton.addEventListener('click', () => {
    container.classList.add("right-panel-active");
});

backButton.addEventListener('click', () => {
    container.classList.remove("right-panel-active");
});
