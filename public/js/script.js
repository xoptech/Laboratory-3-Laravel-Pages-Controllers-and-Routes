// NAV start
const themeToggle = document.getElementById('theme-toggle');
const icon = themeToggle.querySelector('.material-symbols-outlined');

const currentTheme = localStorage.getItem('theme') || 'light';
document.documentElement.setAttribute('theme', currentTheme);
icon.textContent = currentTheme === 'dark' ? 'dark_mode' : 'light_mode';

themeToggle.addEventListener('click', () => {
	const currentTheme = document.documentElement.getAttribute('theme');
	const newTheme = currentTheme === 'dark' ? 'light' : 'dark';

	document.documentElement.setAttribute('theme', newTheme);
	localStorage.setItem('theme', newTheme);
	icon.textContent = newTheme === 'dark' ? 'dark_mode' : 'light_mode';
});

function setActiveNav() {
	const current = window.location.pathname.split('/').pop() || 'index.html';
	document.querySelectorAll('nav a').forEach(link => {
		if (link.getAttribute('href') === current) {
			link.classList.add('active');
		}
	});
}

setActiveNav();
// NAV end

document.getElementById('current-year').textContent = new Date().getFullYear();